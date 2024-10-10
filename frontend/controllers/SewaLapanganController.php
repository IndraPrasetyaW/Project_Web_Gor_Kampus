<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SewaLapangan;
use frontend\models\sewa_lapanganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\bootstrap5\Html;
use kartik\mpdf;
use kartik\mpdf\Pdf;

/**
 * SewaLapanganController implements the CRUD actions for SewaLapangan model.
 */
class SewaLapanganController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['post'],
                    'bulkdelete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all SewaLapangan models.
     * @return mixed
     */
    public function actionIndex()
    {
        // Cek apakah pengguna sudah login
        if (Yii::$app->user->isGuest) {
            // Jika belum login, redirect ke halaman login
            return $this->redirect(['site/login']);
        }

        // Jika sudah login, lakukan pencarian dan render halaman
        $searchModel = new sewa_lapanganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single SewaLapangan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> 'SewaLapangan #'.$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($id),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-secondary float-left','data-bs-dismiss'=>'modal']).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];
        }else{
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new SewaLapangan model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new SewaLapangan();

        // Tarif per jam untuk penyewaan
        $tarifPerJam = 50000;

        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=>'Create new SewaLapangan',
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-secondary float-left','data-bs-dismiss'=>'modal']).
                        Html::button('Save',['class'=>'btn btn-primary','type'=>'submit'])
                ];
            }else if($model->load($request->post())){
                // Hitung total pembayaran berdasarkan durasi
                $model->total_pembayaran = $model->durasi * $tarifPerJam;

                if($model->save()){
                    return [
                        'forceReload'=>'#crud-datatable-pjax',
                        'title'=> 'Create new SewaLapangan',
                        'content'=>'<span class="text-success">Create SewaLapangan success</span>',
                        'footer'=> Html::button('Close',['class'=>'btn btn-secondary float-left','data-bs-dismiss'=>'modal']).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
                    ];
                }
            }else{
                return [
                    'title'=>'Create new SewaLapangan',
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-secondary float-left','data-bs-dismiss'=>'modal']).
                        Html::button('Save',['class'=>'btn btn-primary','type'=>'submit'])
                ];
            }
        }else{
            if ($model->load($request->post())) {
                // Hitung total pembayaran
                $model->total_pembayaran = $model->durasi * $tarifPerJam;

                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SewaLapangan model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($id);

        // Tarif per jam untuk penyewaan
        $tarifPerJam = 50000;

        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> 'Update SewaLapangan #'.$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-secondary float-left','data-bs-dismiss'=>'modal']).
                        Html::button('Save',['class'=>'btn btn-primary','type'=>'submit'])
                ];
            }else if($model->load($request->post())){
                // Hitung total pembayaran berdasarkan durasi
                $model->total_pembayaran = $model->durasi * $tarifPerJam;

                if($model->save()){
                    return [
                        'forceReload'=>'#crud-datatable-pjax',
                        'title'=> 'SewaLapangan #'.$id,
                        'content'=>$this->renderAjax('view', [
                            'model' => $model,
                        ]),
                        'footer'=> Html::button('Close',['class'=>'btn btn-secondary float-left','data-bs-dismiss'=>'modal']).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                    ];
                }
            }else{
                return [
                    'title'=> 'Update SewaLapangan #'.$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-secondary float-left','data-bs-dismiss'=>'modal']).
                        Html::button('Save',['class'=>'btn btn-primary','type'=>'submit'])
                ];
            }
        }else{
            if ($model->load($request->post())) {
                // Hitung total pembayaran
                $model->total_pembayaran = $model->durasi * $tarifPerJam;

                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Delete an existing SewaLapangan model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $request = Yii::$app->request;
        $this->findModel($id)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

     /**
     * Delete multiple existing SewaLapangan model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionBulkdelete()
    {
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }

    }

    /**
     * Finds the SewaLapangan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SewaLapangan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionPrint($id)
    {
        $model = $this->findModel($id);

        // Render view untuk PDF
        $pdf = new mPDF(); // Pastikan mPDF sudah terpasang

        // Set up file PDF
        $pdf->SetHeader('Laporan Penyewa');
        $pdf->SetFooter('{PAGENO}');

        // Mengatur konten yang akan dicetak
        $content = $this->renderPartial('print', [
            'model' => $model,
        ]);

        // Tulis konten ke PDF
        $pdf->WriteHTML($content);
        $pdf->Output('Penyewa_' . $model->id . '.pdf', 'D'); // 'D' untuk download

        exit; // Pastikan untuk menghentikan eksekusi setelah output PDF
    }

    protected function findModel($id)
    {
        if (($model = SewaLapangan::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

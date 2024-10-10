<?php

use yii\bootstrap5\BootstrapAsset;
use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use denkorolkov\ajaxcrud\CrudAsset;
use denkorolkov\ajaxcrud\BulkButtonWidget;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\sewa_lapanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

BootstrapAsset::register($this);

$this->title = 'Sewa Lapangan';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="sewa-lapangan-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                ['content'=>
                    Html::a('<i class="fas fa-plus"></i>', ['create'],
                    ['role'=>'modal-remote','title'=>'Mau Sewa Lapangan?','class'=>'btn btn-secondary']).
                    Html::a('<i class="fas fa-redo"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-secondary', 'title'=>'Reset Grid']).
                    '{toggleData}'.
                    '{export}'
                ],
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'heading' => '<i class="fas fa-list-alt"></i> '.'Sewa Lapangan',
                'before'=>'<em>'.'Daftar Penyewa Gor Badminton Kampus.'.'</em>',
                'after'=>BulkButtonWidget::widget([
                            'buttonText'=>'<span class="fas fa-arrow-right"></span>&nbsp;&nbsp;'.'With selected'.'&nbsp;&nbsp;',
                            'buttons'=>Html::a('<i class="fas fa-trash"></i>&nbsp;'.'Delete All',
                                ["bulkdelete"] ,
                                [
                                    "class"=>"btn btn-danger btn-xs",
                                    'role'=>'modal-remote-bulk',
                                    'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                                    'data-request-method'=>'post',
                                    'data-confirm-title'=>'Apakah Anda Yakin?',
                                    'data-confirm-message'=>'Apakah Anda Yakin Untuk Menghapus ini?'                                ]),
                        ]),
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "title" => '<h4 class="modal-title">Modal title</h4>',
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
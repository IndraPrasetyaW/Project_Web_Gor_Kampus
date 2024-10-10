<?php

use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SewaLapangan */
?>
<div class="sewa-lapangan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'panel'=>[
        'heading'=>'View # ' . $model->id,
        'type'=>DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'id',
            'nama',
            'tanggal_sewa',
            'jam_sewa',
            'durasi',
            'total_pembayaran',
            [
                'attribute' => 'total_pembayaran',
                'value' => 'Rp ' . number_format($model->total_pembayaran, 0, ',', '.'),
            ],
        ],
    ]) ?>

</div>

<?php
use yii\helpers\Url;
use yii\bootstrap5\Html;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'nama',
        'filter' => false,
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'tanggal_sewa',
        'filter' => false,
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'jam_sewa',
        'filter' => false,
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'durasi',
        'filter' => false,
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'total_pembayaran',
        'label' => 'Total Pembayaran',
        'value' => function($model) {
            return 'Rp ' . number_format($model->total_pembayaran, 0, ',', '.');
        },
        'format' => 'raw',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign' => 'middle',
        'urlCreator' => function($action, $model, $key, $index) {
            return Url::to([$action, 'id' => $key]);
        },
        'viewOptions' => ['role' => 'modal-remote', 'title' => 'View', 'data-toggle' => 'tooltip'],
        'updateOptions' => ['role' => 'modal-remote', 'title' => 'Update', 'data-toggle' => 'tooltip'],
        'deleteOptions' => [
            'role' => 'modal-remote', 'title' => 'Delete',
            'data-confirm' => false, 'data-method' => false, // for override yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-confirm-title' => 'Apakah Anda yakin?',
            'data-confirm-message' => 'Anda yakin untuk menghapus ini?'
        ],
        // Menambahkan tombol print di dalam ActionColumn
        'buttons' => [
            'print' => function ($url, $model, $key) {
                return Html::a('<span class="glyphicon glyphicon-print"></span>',
                    ['sewa-lapangan/print', 'id' => $model->id],
                    [
                        'title' => 'Print',
                        'data-pjax' => '0',
                        'class' => 'btn btn-primary btn-xs', // Ganti dengan class yang sesuai
                    ]);
            },
        ],
    ],
];

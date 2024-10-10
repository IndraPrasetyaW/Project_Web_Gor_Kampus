<?php

use yii\helpers\Html;

/* @var $model frontend\models\SewaLapangan */
?>
<h1>Detail Penyewa</h1>
<p>
    <strong>Nama:</strong> <?= Html::encode($model->nama) ?><br>
    <strong>Tanggal Sewa:</strong> <?= Html::encode($model->tanggal_sewa) ?><br>
    <strong>Jam Sewa:</strong> <?= Html::encode($model->jam_sewa) ?><br>
    <strong>Durasi:</strong> <?= Html::encode($model->durasi) ?> jam<br>
</p>

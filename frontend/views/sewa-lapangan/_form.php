<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\SewaLapangan */
/* @var $form yii\bootstrap5\ActiveForm */
?>

<div class="sewa-lapangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_sewa')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Pilih tanggal sewa...'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd', // Ubah format ke format yang sesuai dengan MySQL
        ]
    ]); ?>

    <?= $form->field($model, 'jam_sewa')->widget(TimePicker::classname(), [
        'pluginOptions' => [
            'showSeconds' => true,
            'showMeridian' => false,
            'minuteStep' => 1,
            'secondStep' => 5,
        ],
        'addonOptions' => [
            'asButton' => true,
            'buttonOptions' => ['class' => 'btn btn-info']
        ]
    ]); ?>

    <?= $form->field($model, 'durasi')->textInput(['id' => 'durasi-sewa']) ?>

    <?= $form->field($model, 'total_pembayaran')->textInput(['id' => 'total-sewa', 'readonly' => true]) ?>

    <?php if (!Yii::$app->request->isAjax){ ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

    <?php
    $this->registerJs('
    var hargaPerJam = 10000;

    // Fungsi untuk memformat angka dengan titik sebagai pemisah ribuan
    function formatRupiah(angka, prefix){
        var number_string = angka.toString().replace(/[^,\d]/g, ""),
        split   = number_string.split(","),
        sisa    = split[0].length % 3,
        rupiah  = split[0].substr(0, sisa),
        ribuan  = split[0].substr(sisa).match(/\d{3}/gi);

        if(ribuan){
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? "Rp " + rupiah : "");
    }

    // Saat durasi berubah, hitung total sewa dan format secara otomatis
    $("#durasi-sewa").on("input", function() {
        var durasi = $(this).val();
        var total = durasi * hargaPerJam;
        
        // Tampilkan total di field total-sewa dalam format "Rp. xxx.xxx"
        $("#total-sewa").val(formatRupiah(total, "Rp "));
    });
');
    ?>
</div>

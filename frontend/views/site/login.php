<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/login.css') ?>">

<div class="site-login">
    <div class="login-box">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Silakan isi data Anda untuk masuk:</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <div class="form-group text-center mt-3">
            <p>Belum punya akun? <?= Html::a('Daftar di sini', ['site/signup'], ['class' => 'btn btn-link']) ?></p>
        </div>
    </div>
</div>

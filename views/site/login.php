<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Masuk';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>",
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-calendar form-control-feedback'></span>",
];
?>


<div class="login-box">
    <div class="login-logo">
        <img src="<?= Url::to(["/img/logo.png"]) ?>" alt="UIN Sunan Ampel Surabaya">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Pengajuan Bidikmisi 2019 UIN Sunan Ampel</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>


        <?= $form->errorSummary($model); ?>
        <!-- ADDED HERE -->
        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label('No. Pendaftaran')
            ->textInput(); ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label('Tanggal Lahir')
            ->widget(
                MaskedInput::className(),
                ['mask' => '99-99-9999']
            ); ?>



        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox(); ?>

            </div>

            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']); ?>

            <?php ActiveForm::end(); ?>

            <?= Html::a('Pendaftaran', ['signup'], ['class' => 'btn btn-info btn-block btn-flat', 'name' => 'signup-button']); ?>

        </div>
        <!-- /.login-box-body -->


    </div><!-- /.login-box -->

    <div class="alert alert-success alert-raised alert-dismissible fade in" >
            <strong>Ingat !</strong>
             Pendaftaran Beasiswa Bidikmisi akan di buka <?=\Yii::$app->formatter->asDate(\Yii::$app->params['tanggalDaftarAwal'], 'long')?> sampai <?=\Yii::$app->formatter->asDate(\Yii::$app->params['tanggalDaftarAkhir'], 'long')?>  ,
             Pengumuman Selanjutnya akan diumumkan pada website bidikmisi.uinsby.ac.id / www.uinsby.ac.id
		       <br>
         </div>
    <div class="alert alert-info alert-raised alert-dismissible fade in" >
           <p><a href="https://w3.uinsby.ac.id/wp-content/uploads/2019/09/Pengumuman-Beasiswa-Bidikmisi-siap-unggah.pdf">Pengumuman Lolos Seleksi Tahap I</a></p>	       <br>
         </div>
  
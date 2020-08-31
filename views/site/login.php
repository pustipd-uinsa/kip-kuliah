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
        <p class="login-box-msg">PENDAFTARAN KIP KULIAH UIN SUNAN AMPEL</p>
      
      

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>


        <?= $form->errorSummary($model); ?>
        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label('NIM')
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
   


    </div><!-- /.login-box -->
  
 
  

  
  
  
  
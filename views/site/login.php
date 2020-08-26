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
        <p class="login-box-msg">Permohonan Keringanan UKT Semester Gasal 2020/2021
Masa pengajuan dokumen diperpanjang sampai tanggal 20 Juli 2020</p>
      
      
<!--
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
   
-->

    </div><!-- /.login-box -->
  
     <div class="alert alert-info alert-raised alert-dismissible fade in" >
  
   <p style="text-align:center;">
    Daftar Pemohon Keringanan UKT yang disetujui <a href="http://ukt.uinsby.ac.id/pengumumanhasil.pdf" target="_blank">link</a>      </p>
  </div>
 
    <div class="alert alert-success alert-raised alert-dismissible fade in" >
  
  <p style="text-align:center;">a.	Keputusan Menteri Agama RI Nomor 515 Tahun 2020 tentang Keringangan Uang Kuliah Tunggal pada Perguruan Tinggi Keagamaan Negeri Atas Dampak Bencana Wabah Covid-19 <a href="https://setkab.go.id/wp-content/uploads/2020/06/KMA-NO-515-Tahun-2020-Tentang-Keringanan-UKT-pada-PTKN-atas-Dampak-Bencana-Wabah-Covid-19.pdf">link</a></p>
<p style="text-align:center;">b.	Keputusan Rektor UIN Sunan Ampel Surabaya Nomor 583 Tahun 2020 tentang Keringanan Uang Kuliah Tunggal pada UIN Sunan Ampel Surabaya Atas Dampak Bencana Wabah Covid-19 <a href="http://ukt.uinsby.ac.id/skRektor.pdf">link</a></p>

  </div>

    <div class="alert alert-info alert-raised alert-dismissible fade in" >
  
   <p style="text-align:center;">
    Petunjuk teknis permohonan mendapatkan keringanan uang kuliah tunggal semester gasal tahun akademik 2020/2021 <a href="http://ukt.uinsby.ac.id/juknis.pdf" target="_blank">link</a>      </p>
  </div>
  <div class="alert alert-error alert-raised alert-dismissible fade in" >
          mahasiswa yang sudah mendapatkan persetujuan keringanan tidak berhak untuk mengajukan keringanan kembali. Daftar mahasiswa yang mendapatkan keringanan UKT dapat dilihat disini
    <a href=<?=Url::to(["/rekapUKt.xlsx"])?>>link</a>
         </div>
  

  
  
  
  
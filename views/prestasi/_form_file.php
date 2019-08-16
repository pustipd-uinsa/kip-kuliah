<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

?>
<br>
<br>
<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_penghasilan_ayah')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_penghasilan_ayah]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_penghasilan_ibu')->fileInput() ?>
        </div>
        <div class="col-md-6">
      <?= html::img(Url::to(["/document/". $model->file_penghasilan_ibu]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_kartu_kks')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_kartu_kks]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_bukti_pembayaran_pln')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_bukti_pembayaran_pln]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_bukti_pembayaran_pdam')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_bukti_pembayaran_pdam]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>
  <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_bukti_pembayaran_pbb')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_bukti_pembayaran_pbb]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>
  <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_bpkb_stnk')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_bpkb_stnk]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

      <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_foto_atap_rumah')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_foto_atap_rumah]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

      <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_foto_lantai_rumah')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_foto_lantai_rumah]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>


      <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_foto_kamar_mandi')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_foto_kamar_mandi]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_foto_depan_rumah')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_foto_depan_rumah]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_foto_ruang_tamu')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_foto_ruang_tamu]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_foto_dapur')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_foto_dapur]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>

     <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'file_foto_kartu_keluarga')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->file_foto_kartu_keluarga]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>


    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

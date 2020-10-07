<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\bootstrap\Tabs;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;


$form = ActiveForm::begin();



$this->registerCss('
/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{

    overflow-y: auto;
}
@media (min-width: 768px) {
    .modal-xl {
      width: 100%;
     max-width:1200px;


    }
  }

');


$js1 = <<<JS
$('#modal1').insertAfter($('body'));
  $("#modal1").on("shown.bs.modal",function(event){
       var button = $(event.relatedTarget);
       var href = button.attr("href");
       $.pjax.reload("#pjax-modal1",{
                 "timeout" : false,
                 "url" :href,
                 "replace" :false,
       });
  });

JS;
$this->registerJs($js1);




/* @var $this yii\web\View */
/* @var $model app\models\Borang */
/* @var $form ActiveForm */
?>
<div class="prestasi-_form">


    <?= $form->errorSummary($model); ?>

    <br>
    <br>
  
  
  
        <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_kk')->fileInput() ?>
        </div>
        <div class="col-md-1">
            <?= $form->field($model, 'jumlah_keluarga')->textInput() ?>
        </div>
          
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_kk]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_kk,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_ktp')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_ktp]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_ktp,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_ktm')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_ktm]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_ktm,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_foto')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_foto]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_foto,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_raport1')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_raport1]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_raport1,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_raport2')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_raport2]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_raport2,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_raport3')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_raport3]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_raport3,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_raport4')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_raport4]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_raport4,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_raport5')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_raport5]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_raport5,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_raport6')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_raport6]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_raport6,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_ijazah')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_ijazah]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_ijazah,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_prestasi')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_prestasi]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_prestasi,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
<hr>
<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_dokumen')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_dokumen]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_dokumen,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
  
<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_penghasilan')->fileInput() ?>
        </div>
      <div class="col-md-3">
            <?= $form->field($model, 'penghasilan_kotor')->textInput() ?>
        </div>
     
       <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_penghasilan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_penghasilan,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
    
  <!--
  
        <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_rumah')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_rumah]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_rumah,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

  <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_kendaraan')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_kendaraan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_kendaraan,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
-->

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_listrik')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_listrik]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_listrik,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_pdam')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_pdam]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_pdam,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>


<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_pbb')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_pbb]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_pbb,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    <hr>



<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_meninggal')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_meninggal]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_meninggal,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

    
<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_phk')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_phk]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_phk,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>
<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_pakta_integritas')->fileInput() ?>
        </div>
        <div class="col-md-6">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_pakta_integritas]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_pakta_integritas,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>

    </div>

           <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
   

    <?php ActiveForm::end(); ?>

</div><!-- prestasi-_form -->

<?php
Modal::begin([
    'id' => 'modal1',
    'header' => '<h4>Gambar Dokumen</h4>',
    'size' => 'modal-xl',
]);
Pjax::begin(
    [
        'id' => 'pjax-modal1', 'timeout' => 'false',
        'enablePushState' => 'false',
        'enableReplaceState' => 'false',
    ]
);
Pjax::end();
?>
<?php Modal::end(); ?>

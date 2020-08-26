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

 $js= "
    obj =  $(this).find('option:selected');
    val = obj.val();
    if (val == 1) {
        document.getElementById('keringanan1').style.display='block';
        document.getElementById('keringanan2').style.display='none';
        document.getElementById('keringanan3').style.display='none';
        document.getElementById('keringanan4').style.display='none';
        

    } 
    if (val == 2) {
        document.getElementById('keringanan2').style.display='block';
        document.getElementById('keringanan1').style.display='none';
        document.getElementById('keringanan3').style.display='none';
       document.getElementById('keringanan4').style.display='none';
   

    } 
    if (val == 3) {
        document.getElementById('keringanan3').style.display='block';
        document.getElementById('keringanan2').style.display='none';
        document.getElementById('keringanan1').style.display='none';
       document.getElementById('keringanan4').style.display='none';
    

    } 
    if (val == 4) {
        document.getElementById('keringanan4').style.display='block';
        document.getElementById('keringanan2').style.display='none';
        document.getElementById('keringanan1').style.display='none';
       document.getElementById('keringanan3').style.display='none';
    

    } 
    
    
 
 
 
 ";

 $js2= "
 $(document).ready(function()
    {
    obj =  $('#borang-jenis_keringanan').find('option:selected');
    val = obj.val();
 if (val == 1) {
        document.getElementById('keringanan1').style.display='block';
        document.getElementById('keringanan2').style.display='none';
        document.getElementById('keringanan3').style.display='none';
        document.getElementById('keringanan4').style.display='none';
        

    } 
    if (val == 2) {
        document.getElementById('keringanan2').style.display='block';
        document.getElementById('keringanan1').style.display='none';
        document.getElementById('keringanan3').style.display='none';
       document.getElementById('keringanan4').style.display='none';
   

    } 
    if (val == 3) {
        document.getElementById('keringanan3').style.display='block';
        document.getElementById('keringanan2').style.display='none';
        document.getElementById('keringanan1').style.display='none';
       document.getElementById('keringanan4').style.display='none';
    

    } 
    if (val == 4) {
        document.getElementById('keringanan4').style.display='block';
        document.getElementById('keringanan2').style.display='none';
        document.getElementById('keringanan1').style.display='none';
       document.getElementById('keringanan3').style.display='none';
    

    } 
    obj =  $('#borang-permohonan_perpanjangan').find('option:selected');
    val = obj.val();
 if (val == 1) {
        document.getElementById('keringanan4').style.display='block';
        

     } else {
       document.getElementById('keringanan4').style.display='none';
        
     } 
    
    
    
 })
 
 
 ";
$this->registerJs($js2);


/* @var $this yii\web\View */
/* @var $model app\models\Borang */
/* @var $form ActiveForm */
?>
<div class="prestasi-_form">


    <?= $form->errorSummary($model); ?>

    <br>
    <br>
  
          <?= $form->field($model, 'jenis_keringanan')->dropDownList([
  
    1=>'Keringanan 15%',
    2=>'Keringanan 75%',
    4=>'Keringanan 100% (UKT Rp 0)',
  
    3=>'Perpanjangan Pembayaran UKT',
  
],['prompt' => 'Pilih Jenis Keringanan','onchange'=>$js]) ?>
<br>
<br>
        <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_kk')->fileInput() ?>
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
            <?= $form->field($model, 'upload_lain')->fileInput() ?>
        </div>
        <div class="col-md-1">
                  <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_lain]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_lain,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
        </div>
           <div class="col-md-1 text-left">  
                         <?= Html::a(
                    Yii::t('app', 'Contoh Dokumen '),
                    Url::to(['/pekerjaan.docx']),
                    [
                        
                        'title' => 'Contoh File', 'class' => 'btn btn-success btn-round', 
                    ]
                ); ?>  

       

    </div>

  <br>
  <br>
    <?=   $this->render('_form_file', [
            'model' => $model,
            'form' => $form

        ]);
    ?>
  
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

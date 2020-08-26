<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;




 $js3= "
    obj =  $(this).find('option:selected');
    val = obj.val();
    if (val == 1) {
        document.getElementById('keringanan3').style.display='block';
        

    } else {
        document.getElementById('keringanan3').style.display='none';
    
    }

";


?>

<br>
<br>

<div id="keringanan1">
    

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
            <?= $form->field($model, 'upload_pemutusan')->fileInput() ?>
        </div>
        <div class="col-md-6">
                        <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_pemutusan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_pemutusan,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
   </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_kerugian')->fileInput() ?>
        </div>
        <div class="col-md-1">
                               <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_kerugian]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_kerugian,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  

    </div>
      <div class="col-md-1 text-left">  
                         <?= Html::a(
                    Yii::t('app', 'Contoh Dokumen '),
                    Url::to(['/poin3.docx']),
                    [
                        
                        'title' => 'Contoh File', 'class' => 'btn btn-success btn-round', 
                    ]
                ); ?>  
      
      </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_penutupan')->fileInput() ?>
        </div>
        <div class="col-md-1">
                     <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_penutupan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_penutupan,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  
</div>
            <div class="col-md-1 text-left">  
                         <?= Html::a(
                    Yii::t('app', 'Contoh Dokumen '),
                    Url::to(['/poin4.docx']),
                    [
                        
                        'title' => 'Contoh File', 'class' => 'btn btn-success btn-round', 
                    ]
                ); ?>  
      
      </div>


    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_penurunan')->fileInput() ?>
        </div>
        <div class="col-md-1">
                               <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_penurunan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_penurunan,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  

    </div>
            <div class="col-md-1 text-left">  
                         <?= Html::a(
                    Yii::t('app', 'Contoh Dokumen '),
                    Url::to(['/poin5.docx']),
                    [
                        
                        'title' => 'Contoh File', 'class' => 'btn btn-success btn-round', 
                    ]
                ); ?>  
      
      </div>


    </div>

<br>
<br>
            <?= $form->field($model, 'ket_masalah_lain')->textArea() ?>
<br>
<br>
 <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_bukti_lain')->fileInput() ?>
        </div>
        <div class="col-md-1">
                               <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_bukti_lain]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_bukti_lain,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  

    </div>
   
   
  </div>
  
  <br>
  <br>
    <?= $form->field($model, 'permohonan_perpanjangan')->dropDownList([
   '0' =>'Tidak Mengajukan Perpanjangan',
   '1' =>'Mengajukan Perpanjangan',
  
  
     
],['onchange'=>$js3]) ?>
  
</div>
<div id="keringanan2" style="display:none">


<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_transkrip')->fileInput() ?>
        </div>
        <div class="col-md-6">
                    <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_transkrip]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_transkrip,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  

        </div>

    </div>
  <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_kesanggupan')->fileInput() ?>
        </div>
        <div class="col-md-1">
                           <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_kesanggupan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_kesanggupan,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  

        </div>
        
            <div class="col-md-1 text-left">  
                         <?= Html::a(
                    Yii::t('app', 'Contoh Dokumen '),
                    Url::to(['/tugasAkhir.docx']),
                    [
                        
                        'title' => 'Contoh File', 'class' => 'btn btn-success btn-round', 
                    ]
                ); ?>  

       
        </div>


    </div>

</div>

<div id="keringanan3" style="display:none">


      <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_permohonan')->fileInput() ?>
        </div>
        <div class="col-md-1">
                           <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_permohonan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_permohonan,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?> 
        </div>
          
            <div class="col-md-1 text-left">  
                         <?= Html::a(
                    Yii::t('app', 'Contoh Dokumen '),
                    Url::to(['/perpanjangan.docx']),
                    [
                        
                        'title' => 'Contoh File', 'class' => 'btn btn-success btn-round', 
                    ]
                ); ?>  

       
        </div>

    </div>


</div>
<div id="keringanan4" style="display:none">


      <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_meninggal_covid')->fileInput() ?>
        </div>
        <div class="col-md-6">
                           <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->upload_meninggal_covid]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_meninggal_covid,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?>  

        </div>

    </div>


</div>




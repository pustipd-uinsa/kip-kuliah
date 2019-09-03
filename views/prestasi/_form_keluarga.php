<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$js="

$(document).ready(function()
{
    if ($('#borang-pekerjaan_ayah_lain').val() =='' ) {
        $('#borang-pekerjaan_ayah_lain').hide();

    }   
    if ($('#borang-pekerjaan_ibu_lain').val() =='' ) {
        $('#borang-pekerjaan_ibu_lain').hide();
    }   

    if  ($(\"input[type='radio'][name='Borang[pekerjaan_ayah]']:checked\").val() != 'Wiraswasta')
{             

   $('.field-borang-omzet_harian_ayah').hide();
   $('.field-borang-penghasilan_ayah').show();
   $('#borang-omzet_harian_ayah').val('0');
}
else {
      
   $('.field-borang-omzet_harian_ayah').show();
   $('.field-borang-penghasilan_ayah').hide();
   $('#borang-penghasilan_ayah').val('0');

}     

if  ($(\"input[type='radio'][name='Borang[pekerjaan_ibu]']:checked\").val() != 'Lainnya')
{             
$('#borang-pekerjaan_ibu_lain').hide();
}
else {
        $('#borang-pekerjaan_ibu_lain').show();

}     

if  ($(\"input[type='radio'][name='Borang[pekerjaan_ibu]']:checked\").val() != 'Wiraswasta')
{             

   $('.field-borang-omzet_harian_ibu').hide();
   $('.field-borang-penghasilan_ibu').show();
   $('#borang-omzet_harian_ibu').val('0');
}


else {
  
   $('.field-borang-omzet_harian_ibu').show();
   $('.field-borang-penghasilan_ibu').hide();
   $('#borang-penghasilan_ibu').val('0');
}

    
})


";
$this->registerJS($js);

/* @var $this yii\web\View */
/* @var $model app\models\Camaba */
/* @var $form ActiveForm */

$jsAyah = " if  ($(\"input[type='radio'][name='Borang[pekerjaan_ayah]']:checked\").val() != 'Lainnya')
{             
$('#borang-pekerjaan_ayah_lain').hide();
}
else {
        $('#borang-pekerjaan_ayah_lain').show();

}     
if  ($(\"input[type='radio'][name='Borang[pekerjaan_ayah]']:checked\").val() != 'Wiraswasta')
{             

   $('.field-borang-omzet_harian_ayah').hide();
   $('.field-borang-penghasilan_ayah').show();
   $('#borang-omzet_harian_ayah').val('0');
}
else {
      
   $('.field-borang-omzet_harian_ayah').show();
   $('.field-borang-penghasilan_ayah').hide();
   $('#borang-penghasilan_ayah').val('0');

}     

";

$jsIbu = " if  ($(\"input[type='radio'][name='Borang[pekerjaan_ibu]']:checked\").val() != 'Lainnya')
{             
$('#borang-pekerjaan_ibu_lain').hide();
}
else {
        $('#borang-pekerjaan_ibu_lain').show();

}     

if  ($(\"input[type='radio'][name='Borang[pekerjaan_ibu]']:checked\").val() != 'Wiraswasta')
{             

   $('.field-borang-omzet_harian_ibu').hide();
   $('.field-borang-penghasilan_ibu').show();
   $('#borang-omzet_harian_ibu').val('0');
}


else {
  
   $('.field-borang-omzet_harian_ibu').show();
   $('.field-borang-penghasilan_ibu').hide();
   $('#borang-penghasilan_ibu').val('0');
}

   
";
?>

<div class="row">
        <div class="col-md-6">
                <?= $form->field($model, 'nama_ayah') ?>
                <?= $form->field($model, 'pekerjaan_ayah')->radioList(['PNS' => 'PNS', 'Pegawai Swasta' => 'Pegawai Swasta', 'Wiraswasta' => 'Wiraswasta (Pedagang,Pengusaha,Sopir,Tukang Ojek,Dll)', 'TNI/POLRI' => 'TNI/POLRI', 'Lainnya' => 'Lainnya'], ['separator' => ' <br>','onclick'=>$jsAyah]) ?>
                <?= $form->field($model, 'pekerjaan_ayah_lain')->label(false) ?>
                <?= $form->field($model, 'penghasilan_ayah') ?>
                <?= $form->field($model, 'omzet_harian_ayah') ?>

        </div>
        <div class="col-md-6">

                <?= $form->field($model, 'nama_ibu') ?>
                <?= $form->field($model, 'pekerjaan_ibu')->radioList(['PNS' => 'PNS', 'Pegawai Swasta' => 'Pegawai Swasta', 'Wiraswasta' => 'Wiraswasta (Pedagang,Pengusaha,Sopir,Tukang Ojek,Dll)', 'TNI/POLRI' => 'TNI/POLRI', 'Lainnya' => 'Lainnya'], ['separator' => ' <br>','onclick'=>$jsIbu]) ?>
                <?= $form->field($model, 'pekerjaan_ibu_lain')->label(false) ?>
                <?= $form->field($model, 'penghasilan_ibu') ?>
                <?= $form->field($model, 'omzet_harian_ibu') ?>



        </div>
        <div class="row">
                <div class="col-md-12">

                        <?= $form->field($model, 'alamat') ?>
                        <?= $form->field($model, 'jumlah_anggota_keluarga')->textInput() ?>
                </div>
        </div>
</div>

<div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
</div>
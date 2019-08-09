<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$juz = [];
for ($i = 0; $i <= 30; $i++) {
    $juz[] = ['id' => $i, 'value' => ($i == 0) ? 'Belum Hafal' : $i . ' Juz'];
}


?>
<br>
<br>
<?= $form->field($model, 'hafalan_alquran')->dropDownList(ArrayHelper::map($juz, 'id', 'value')); ?>
<div class="row">
       <div class="col-md-3">
            <?= $form->field($model, 'tingkat_prestasi_non_akademik1')->dropDownList([1=>'Kabupaten / Kotamadya',2=>'Propinsi',3=>'Nasional' ,4=>'Internasional']); ?>
        </div>
    
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_non_akademik1')->textInput(); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'file_prestasi_non_akademik1')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_non_akademik1]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>
  


    <div class="row">
       <div class="col-md-3">
            <?= $form->field($model, 'tingkat_prestasi_non_akademik2')->dropDownList([1=>'Kabupaten / Kotamadya',2=>'Propinsi',3=>'Nasional' ,4=>'Internasional']); ?>
        </div>
    
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_non_akademik2')->textInput(); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'file_prestasi_non_akademik2')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_non_akademik2]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>

    <div class="row">
       <div class="col-md-3">
            <?= $form->field($model, 'tingkat_prestasi_non_akademik3')->dropDownList([1=>'Kabupaten / Kotamadya',2=>'Propinsi',3=>'Nasional' ,4=>'Internasional']); ?>
        </div>
    
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_non_akademik3')->textInput(); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'file_prestasi_non_akademik3')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_non_akademik3]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>

    <div class="row">
       <div class="col-md-3">
            <?= $form->field($model, 'tingkat_prestasi_non_akademik4')->dropDownList([1=>'Kabupaten / Kotamadya',2=>'Propinsi',3=>'Nasional' ,4=>'Internasional']); ?>
        </div>
    
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_non_akademik4')->textInput(); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'file_prestasi_non_akademik4')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_non_akademik4]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>

    <div class="row">
       <div class="col-md-3">
            <?= $form->field($model, 'tingkat_prestasi_non_akademik5')->dropDownList([1=>'Kabupaten / Kotamadya',2=>'Propinsi',3=>'Nasional' ,4=>'Internasional']); ?>
        </div>
    
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_non_akademik5')->textInput(); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'file_prestasi_non_akademik5')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_non_akademik5]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>

   

    <div class="form-group">
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$peringkat = [];
for ($i = 1; $i <= 10; $i++) {
    $peringkat[] = ['id' => $i, 'value' => 'Rangking ' . $i];
}

?>
<br>
<br>
<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_akademik10_1')->dropDownList(ArrayHelper::map($peringkat, 'id', 'value')); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'file_prestasi_akademik10_1')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_akademik10_1]),['width'=>130,'height'=>'200']) ?>
        </div>
  
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_akademik10_2')->dropDownList(ArrayHelper::map($peringkat, 'id', 'value')); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'file_prestasi_akademik10_2')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_akademik10_2]),['width'=>130,'height'=>'200']) ?>
        </div>
  
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_akademik11_1')->dropDownList(ArrayHelper::map($peringkat, 'id', 'value')); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'file_prestasi_akademik11_1')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_akademik11_1]),['width'=>130,'height'=>'200']) ?>
        </div>
  
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_akademik11_2')->dropDownList(ArrayHelper::map($peringkat, 'id', 'value')); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'file_prestasi_akademik11_2')->fileInput() ?>

        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_akademik11_2]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_akademik12_1')->dropDownList(ArrayHelper::map($peringkat, 'id', 'value')); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'file_prestasi_akademik12_1')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_akademik12_1]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'prestasi_akademik12_2')->dropDownList(ArrayHelper::map($peringkat, 'id', 'value')); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'file_prestasi_akademik12_2')->fileInput() ?>
        </div>
        <div class="col-md-3">
            <?= html::img(Url::to(["/document/". $model->file_prestasi_akademik12_2]),['width'=>130,'height'=>'200']) ?>
        </div>
    </div>


   

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
    </div>

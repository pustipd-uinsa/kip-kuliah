<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

?>

<div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_transkrip')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->upload_transkrip]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>
  <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'upload_kesanggupan')->fileInput() ?>
        </div>
        <div class="col-md-6">
            <?= html::img(Url::to(["/document/". $model->upload_kesanggupan]), ['width'=>130,'height'=>'200']) ?>
        </div>

    </div>


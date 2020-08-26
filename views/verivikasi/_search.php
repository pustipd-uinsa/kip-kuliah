<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

<div class="col-md-10">
    <?= $form->field($model, 'search')->textInput(['placeholder' =>'Search ...'])->label(false) ?>
</div>
    <?php ActiveForm::end(); ?>
</div>
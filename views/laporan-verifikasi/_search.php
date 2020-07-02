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
<div class="row"><div class="col-md-12">

    <?= $form->field($model, 'affirmasi')->dropDownList([0 => 'Non Affirmasi', 1 => 'Affirmasi'], ['placeholder' => 'Affirmasi ...' , 'onchange' => 'this.form.submit()'])->label(false) ?>

</div>
    <?php ActiveForm::end(); ?>
</div>
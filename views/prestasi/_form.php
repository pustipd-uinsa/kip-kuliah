<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\bootstrap\Tabs;



$form = ActiveForm::begin();
$item = [
    [
        'label' => 'Prestasi Akademik',
        'content' =>     $this->render('_form_akademik', [
            'model' => $model,
            'form' => $form

        ]),
        'active' => true
    ],
    [
        'label' => 'Prestasi Non Akademik',
        'content' =>     $this->render('_form_non_akademik', [
            'model' => $model,
            'form' => $form

        ]),

    ],
    [
        'label' => 'Keluarga',
        'content' =>     $this->render('_form_keluarga', [
            'model' => $model,
            'form' => $form

        ]),

    ],
    [
        'label' => 'Rumah',
        'content' =>     $this->render('_form_rumah', [
            'model' => $model,
            'form' => $form

        ]),

    ],
]

/* @var $this yii\web\View */
/* @var $model app\models\Borang */
/* @var $form ActiveForm */
?>
<div class="prestasi-_form">


    <?= $form->errorSummary($model); ?>

    <br>
    <br>
    <?= Tabs::widget([
        'items' => $item,
        'options' => ['class' => 'nav-pills'], //
    ]);
    ?>


    <?php ActiveForm::end(); ?>

</div><!-- prestasi-_form -->
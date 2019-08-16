<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$tgl = [];
for ($i = 1; $i <= 31; $i++) {
    $tgl[] = ['no' => str_pad($i, 2, '0', STR_PAD_LEFT)];
}
$bulan = [];
for ($i = 1; $i <= 12; $i++) {
    $bulan[] = ['no' => str_pad($i, 2, '0', STR_PAD_LEFT)];
}

$tahun = [];
for ($i = 1990; $i <= 2019; $i++) {
    $tahun[] = ['no' => str_pad($i, 4, '0', STR_PAD_LEFT)];
}



$this->title = 'Pendaftaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel ">
                <div class="x_title">

                    <p>Silahkan Isi Data Dibawah ini untuk mengikuti Bidikmisi 2019 UIN Sunan Ampel Surabaya:</p>


                </div>
                <div class="x_content">



                    <div class="row">
                        <div class="col-lg-6">
                            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                            <?= $form->errorSummary($model); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <div class="row">
                                <div class="col-lg-2"> <?= $form->field($model, 'tanggal')->dropDownList(ArrayHelper::map($tgl, 'no', 'no'))->label('Tanggal Lahir DD') ?> </div>
                                <div class="col-lg-2"> <?= $form->field($model, 'bulan')->dropDownList(ArrayHelper::map($bulan, 'no', 'no'))->label(' MM ') ?></div>
                                <div class="col-lg-8"> <?= $form->field($model, 'tahun')->dropDownList(
                                                            ArrayHelper::map($tahun, 'no', 'no')
                                                          
                                                        )->label(' YYYY ') ?></div>
                            </div>
                            <?= $form->field($model, 'nim')->textInput() ?>


                       

                            <div class="form-group">
                                <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
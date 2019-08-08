<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Camaba */
/* @var $form ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="row">
        <div class="col-md-6">
                <?= $form->field($model, 'nama_ayah') ?>
                <?= $form->field($model, 'peker_ayah')->radioList(['PNS' => 'PNS', 'Pegawai Swasta' => 'Pegawai Swasta', 'Wiraswasta' => 'Wiraswasta', 'TNI/PORLI' => 'TNI/POLRI'], ['separator' => ' <br>']) ?>
                <?= $form->field($model, 'peker_ayah_lain')->label('Linnya') ?>
                <?= $form->field($model, 'peng_ayah') ?>
                <?= $form->field($model, 'upload_gaji_ayah') ?>
        </div>
        <div class="col-md-6">

                <?= $form->field($model, 'nama_ibu') ?>
                <?= $form->field($model, 'peker_ibu')->radioList(['PNS' => 'PNS', 'Pegawai Swasta' => 'Pegawai Swasta', 'Wiraswasta' => 'Wiraswasta', 'TNI/PORLI' => 'TNI/POLRI'], ['separator' => ' <br>']) ?>
                <?= $form->field($model, 'peker_ibu_lain')->label('Lainnya') ?>
                <?= $form->field($model, 'peng_ibu') ?>
                <?= $form->field($model, 'upload_gaji_ibu') ?>

          
        </div>
        <?= $form->field($model, 'anggota') ?>
</div>
<?php ActiveForm::end(); ?>
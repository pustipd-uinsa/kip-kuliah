<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Camaba */
/* @var $form ActiveForm */
?>

<div class="row">
        <div class="col-md-6">
                <?= $form->field($model, 'nama_ayah') ?>
                <?= $form->field($model, 'pekerjaan_ayah')->radioList(['PNS' => 'PNS', 'Pegawai Swasta' => 'Pegawai Swasta', 'Wiraswasta' => 'Wiraswasta', 'TNI/POLRI' => 'TNI/POLRI', 'Lainnya' => 'Lainnya'], ['separator' => ' <br>']) ?>
                <?= $form->field($model, 'pekerjaan_ayah_lain')->label('Lainnya') ?>
                <?= $form->field($model, 'penghasilan_ayah') ?>

        </div>
        <div class="col-md-6">

                <?= $form->field($model, 'nama_ibu') ?>
                <?= $form->field($model, 'pekerjaan_ibu')->radioList(['PNS' => 'PNS', 'Pegawai Swasta' => 'Pegawai Swasta', 'Wiraswasta' => 'Wiraswasta', 'TNI/POLRI' => 'TNI/POLRI', 'Lainnya' => 'Lainnya'], ['separator' => ' <br>']) ?>
                <?= $form->field($model, 'pekerjaan_ibu_lain')->label('Lainnya') ?>
                <?= $form->field($model, 'penghasilan_ibu') ?>



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
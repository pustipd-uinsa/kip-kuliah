<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Camaba */
/* @var $form ActiveForm */
?>
<br>
<br>
<div class="row">
    <div class="col-md-3">
        <?= $form->field($model, 'kepemilikan_rumah')->radioList([
            '1' => 'Rumah Sendiri', '2' => 'Menyewa / Mengontrak',
            '3' => 'Menumpang', '4' => 'Tidak Punya'
        ], ['separator' => ' <br>']) ?>
    </div>

    <div class="col-md-4">

        <?= $form->field($model, 'luas_tanah') ?> <br>
        <?= $form->field($model, 'luas_bangunan') ?> <br>

        <?= $form->field($model, 'pembayaran_pbb') ?> <br>


    </div>


</div>
<div class="row">
    <div class="col-md-3">

        <?= $form->field($model, 'sumber_air')->radioList(['1' => 'PDAM', '2' => 'Kemasan', '
3' => 'Sumur', '4' => 'Sungai/Mata Air Gunung'], ['separator' => ' <br>']) ?>
    </div>
    <div class="col-md-4">


        <?= $form->field($model, 'pembayaran_pdam') ?> <br>


    </div>
</div>
<div class="row">
    <div class="col-md-3">

<?= $form->field($model, 'sumber_listrik')->radioList(['1' => 'PLN', '2' => 'Genset Mandiri', '
3' => 'PLN dan Genset', '4' => 'Tidak Ada'], ['separator' => ' <br>']) ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'daya_pln') ?> <br>


    </div>
</div>

<div class="form-group">
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>


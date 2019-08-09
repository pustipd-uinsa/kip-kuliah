<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Borang */
/* @var $form ActiveForm */
?>
<div class="prestasi-_form1">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'hafalan_alquran') ?>
        <?= $form->field($model, 'validasi_prestasi_akademik10_1') ?>
        <?= $form->field($model, 'verivikasi_prestasi_akademik10_1') ?>
        <?= $form->field($model, 'validasi_prestasi_akademik11_1') ?>
        <?= $form->field($model, 'verivikasi_prestasi_akademik11_1') ?>
        <?= $form->field($model, 'validasi_prestasi_akademik12_1') ?>
        <?= $form->field($model, 'verivikasi_prestasi_akademik12_1') ?>
        <?= $form->field($model, 'validasi_prestasi_akademik10_2') ?>
        <?= $form->field($model, 'verivikasi_prestasi_akademik10_2') ?>
        <?= $form->field($model, 'validasi_prestasi_akademik11_2') ?>
        <?= $form->field($model, 'verivikasi_prestasi_akademik11_2') ?>
        <?= $form->field($model, 'validasi_prestasi_akademik12_2') ?>
        <?= $form->field($model, 'verivikasi_prestasi_akademik12_2') ?>
        <?= $form->field($model, 'validasi_prestasi_non_akademik1') ?>
        <?= $form->field($model, 'verivikasi_prestasi_non_akademik1') ?>
        <?= $form->field($model, 'tingkat_prestasi_non_akademik1') ?>
        <?= $form->field($model, 'validasi_prestasi_non_akademik2') ?>
        <?= $form->field($model, 'verivikasi_prestasi_non_akademik2') ?>
        <?= $form->field($model, 'tingkat_prestasi_non_akademik2') ?>
        <?= $form->field($model, 'validasi_prestasi_non_akademik3') ?>
        <?= $form->field($model, 'verivikasi_prestasi_non_akademik3') ?>
        <?= $form->field($model, 'tingkat_prestasi_non_akademik3') ?>
        <?= $form->field($model, 'validasi_prestasi_non_akademik4') ?>
        <?= $form->field($model, 'verivikasi_prestasi_non_akademik4') ?>
        <?= $form->field($model, 'tingkat_prestasi_non_akademik4') ?>
        <?= $form->field($model, 'validasi_prestasi_non_akademik5') ?>
        <?= $form->field($model, 'verivikasi_prestasi_non_akademik5') ?>
        <?= $form->field($model, 'tingkat_prestasi_non_akademik5') ?>
        <?= $form->field($model, 'status_finalisasi') ?>
        <?= $form->field($model, 'jumlah_anggota_keluarga') ?>
        <?= $form->field($model, 'kepemilikan_rumah') ?>
        <?= $form->field($model, 'sumber_listrik') ?>
        <?= $form->field($model, 'sumber_air') ?>
        <?= $form->field($model, 'nama_ayah') ?>
        <?= $form->field($model, 'nama_ibu') ?>
        <?= $form->field($model, 'pekerjaan_ayah') ?>
        <?= $form->field($model, 'pekerjaan_ibu') ?>
        <?= $form->field($model, 'penghasilan_ayah') ?>
        <?= $form->field($model, 'penghasilan_ibu') ?>
        <?= $form->field($model, 'penghasilan_sendiri') ?>
        <?= $form->field($model, 'alamat') ?>
        <?= $form->field($model, 'pembayaran_pbb') ?>
        <?= $form->field($model, 'daya_pln') ?>
        <?= $form->field($model, 'pembayaran_pdam') ?>
        <?= $form->field($model, 'luas_tanah') ?>
        <?= $form->field($model, 'luas_bangunan') ?>
        <?= $form->field($model, 'kode') ?>
        <?= $form->field($model, 'file_prestasi_akademik10_1') ?>
        <?= $form->field($model, 'file_prestasi_akademik11_1') ?>
        <?= $form->field($model, 'file_prestasi_akademik12_1') ?>
        <?= $form->field($model, 'file_prestasi_akademik10_2') ?>
        <?= $form->field($model, 'file_prestasi_akademik11_2') ?>
        <?= $form->field($model, 'file_prestasi_akademik12_2') ?>
        <?= $form->field($model, 'file_prestasi_non_akademik1') ?>
        <?= $form->field($model, 'file_prestasi_non_akademik2') ?>
        <?= $form->field($model, 'file_prestasi_non_akademik3') ?>
        <?= $form->field($model, 'file_prestasi_non_akademik4') ?>
        <?= $form->field($model, 'file_prestasi_non_akademik5') ?>
        <?= $form->field($model, 'file_penghasilan_ayah') ?>
        <?= $form->field($model, 'file_penghasilan_ibu') ?>
        <?= $form->field($model, 'file_penghasilan_sendiri') ?>
        <?= $form->field($model, 'file_kartu_kks') ?>
        <?= $form->field($model, 'file_bukti_pembayaran_pbb') ?>
        <?= $form->field($model, 'file_bpkb_stnk') ?>
        <?= $form->field($model, 'file_foto_atap_rumah') ?>
        <?= $form->field($model, 'file_foto_lantai_rumah') ?>
        <?= $form->field($model, 'file_foto_kamar_mandi') ?>
        <?= $form->field($model, 'file_foto_kartu_keluarga') ?>
        <?= $form->field($model, 'prestasi_akademik10_1') ?>
        <?= $form->field($model, 'prestasi_akademik11_1') ?>
        <?= $form->field($model, 'prestasi_akademik12_1') ?>
        <?= $form->field($model, 'prestasi_akademik10_2') ?>
        <?= $form->field($model, 'prestasi_akademik11_2') ?>
        <?= $form->field($model, 'prestasi_akademik12_2') ?>
        <?= $form->field($model, 'prestasi_non_akademik1') ?>
        <?= $form->field($model, 'prestasi_non_akademik2') ?>
        <?= $form->field($model, 'prestasi_non_akademik3') ?>
        <?= $form->field($model, 'prestasi_non_akademik4') ?>
        <?= $form->field($model, 'prestasi_non_akademik5') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- prestasi-_form1 -->

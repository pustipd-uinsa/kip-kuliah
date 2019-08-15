<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

$this->registerCss('
/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{

    overflow-y: auto;
}
@media (min-width: 768px) {
    .modal-xl {
      width: 100%;
     max-width:1200px;


    }
  }

');


$js1 = <<<JS
$('#modal1').insertAfter($('body'));
  $("#modal1").on("shown.bs.modal",function(event){
       var button = $(event.relatedTarget);
       var href = button.attr("href");
       $.pjax.reload("#pjax-modal1",{
                 "timeout" : false,
                 "url" :href,
                 "replace" :false,
       });
  });

JS;
$this->registerJs($js1);

$form = ActiveForm::begin();
$this->title = Yii::t('app', 'Validasi Lapangan Bidikmisi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Dokumen Bidikmisi'), 'url' => ['index']];

$this->params['breadcrumbs'][] = $this->title;

?>
<h3><?= $model->mahasiswa->nama; ?></h3>
<h4>
    <article class="media event"><i class="fa fa-id-card"></i> No. Pendaftaran: <?= $model->kode ?> </article>
    <article class="media event"><i class="fa fa-building"></i> Program Studi: <?= $model->mahasiswa->nama_prodi ?> </article>
</h4>
<table class="table table-condensed table-striped table-hover table-bordered">
    <thead>
        <th>Data</th>
        <th>Nilai</th>
        <th>Dokumen</th>

        <th>Status</th>
    </thead>
    <tbody>
        <tr>
            <td>Prestasi Akademik Kelas 10 (Gasal)</td>
            <td>Rangking <?= $model->prestasi_akademik10_1 ?></td>
            <td><?= Html::a(
    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
    Url::to(['gambar', 'id' => $model->file_prestasi_akademik10_1]),
    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_akademik10_1,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_akademik10_1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>
        <tr>
            <td>Prestasi Akademik Kelas 10 (Genap)</td>
            <td>Rangking <?= $model->prestasi_akademik10_2 ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_akademik10_2]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_akademik10_2,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_akademik10_2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

        <tr>
            <td>Prestasi Akademik Kelas 12 (Gasal)</td>
            <td>Rangking <?= $model->prestasi_akademik11_1 ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_akademik11_1]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_akademik11_1,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_akademik11_1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>
        <tr>
            <td>Prestasi Akademik Kelas 11 (Genap)</td>
            <td>Rangking <?= $model->prestasi_akademik11_2 ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_akademik11_2]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_akademik11_2,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_akademik11_2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

       <tr>
            <td>Prestasi Akademik Kelas 12 (Gasal)</td>
            <td>Rangking <?= $model->prestasi_akademik12_1 ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_akademik12_1]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_akademik12_1,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_akademik12_1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>
        <tr>
            <td>Prestasi Akademik Kelas 12 (Genap)</td>
            <td>Rangking <?= $model->prestasi_akademik12_2 ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_akademik12_2]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_akademik12_2,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_akademik12_2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>
        <tr>
            <td>Prestasi Non Akademik  1</td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik1 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik1)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik1]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik1,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_non_akademik1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

        <tr>
            <td>Prestasi Non Akademik 2 </td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik2 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik2)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik2]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik2,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_non_akademik2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>


        <tr>
            <td>Prestasi Non Akademik 3 </td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik3 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik3)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik3]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik3,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_non_akademik3')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

        <tr>
            <td>Prestasi Non Akademik 4 </td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik4 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik4)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik4]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik4,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_non_akademik4')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>


        <tr>
            <td>Prestasi Non Akademik 5 </td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik5 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik5)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik5]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik5,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_prestasi_non_akademik5')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

        <tr>
            <td>Pekerjaan Ayah </td>
            <td> <?= ' Pekerjaan :' . $model->pekerjaan_ayah .
            ($model->pekerjaan_ayah!=='Wiraswasta' ?  ' <br> Penghasilan : ' . \Yii::$app->formatter->asDecimal($model->penghasilan_ayah)  :
                ' <br> Omzet Harian : ' . \Yii::$app->formatter->asDecimal($model->omzet_harian_ayah) )
            
            ?></td>
                     <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_penghasilan_ayah]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_penghasilan_ayah,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_penghasilan_ayah')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

        
        <tr>
            <td>Pekerjaan ibu </td>
            <td> <?= ' Pekerjaan :' . $model->pekerjaan_ibu .
            ($model->pekerjaan_ibu!=='Wiraswasta' ?  ' <br> Penghasilan : ' . \Yii::$app->formatter->asDecimal($model->penghasilan_ibu)  :
                ' <br> Omzet Harian : ' . \Yii::$app->formatter->asDecimal($model->omzet_harian_ibu) )
            
            
            ?></td>
                     <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_penghasilan_ibu]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_penghasilan_ibu,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_penghasilan_ibu')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>
        <tr>
            <td>Anggota Keluarga </td>
            <td> <?= " Anggota Keluarga :" .$model->jumlah_anggota_keluarga  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_foto_kartu_keluarga]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_foto_kartu_keluarga,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_anggota_keluarga')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>
        <tr>
            <td>Kartu Keluarga Sejahtera</td>
            <td> </td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_kartu_kks]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_kartu_kks,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_kks')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

    
       
        <tr>
            <td>Kepemilikan Rumah </td>

            <td>
                Alamat : <?=$model->alamat?> <br>
                Status :
                <?= " " .$model->kepemilikanRumah($model->kepemilikan_rumah) ." <br> Luas Tanah : ".\Yii::$app->formatter->asDecimal($model->luas_tanah)
            
            ."<br> Luas Bangunan : ".\Yii::$app->formatter->asDecimal($model->luas_bangunan) .
            "<br> Besar PBB : ".\Yii::$app->formatter->asDecimal($model->pembayaran_pbb)
            ?></td>
            <td> 
                Bukti Pembayaran PBB :
                <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_bukti_pembayaran_pbb]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_bukti_pembayaran_pbb,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?> <br>
                    Foto Atap :
                <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_foto_atap_rumah]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_foto_atap_rumah,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?> <br>    Foto Lantai :
                <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_foto_lantai_rumah]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_foto_lantai_rumah,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?> <br> Foto Kamar Mandi
                     <?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_foto_kamar_mandi]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_foto_kamar_mandi,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?> <br>
            
            </td>
            <td> <?=$form->field($model, 'validasi_pembayaran_pbb')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

                
        <tr>
            <td>Sumber Air  </td>
            <td> <?= $model->sumberAir($model->sumber_air)?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_bukti_pembayaran_pdam]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_bukti_pembayaran_pdam,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_pembayaran_pdam')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>
                 
        <tr>
            <td>Sumber listrik  </td>
            <td> <?= $model->sumberListrik($model->sumber_listrik)?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_bukti_pembayaran_pln]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_bukti_pembayaran_pln,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'validasi_pembayaran_pln')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

        <tr>
            <td><b> Status validasi </b></td>
            <td> </td>
            <td><?=$form->field($model, 'komentar_verifikator')->textarea(['rows' => '6'])->label('catatan') ?></td>
            <td> <?=$form->field($model, 'status_validasi')->radioList(['0'=>'Tidak Diterima','1' =>'Diterima' ])->label(false) ?></td>


        </tr>
    </tbody>


</table>

<?= Html::submitButton('Simpan',['class'=>'btn btn-success']);  ?>
<?php Activeform::end(); ?>
<?php
Modal::begin([
    'id' => 'modal1',
    'header' => '<h4>Gambar Dokumen</h4>',
    'size' => 'modal-xl',
]);
Pjax::begin(
    [
        'id' => 'pjax-modal1', 'timeout' => 'false',
        'enablePushState' => 'false',
        'enableReplaceState' => 'false',
    ]
);
Pjax::end();
?>
<?php Modal::end(); ?>

<?php

$js=" var radios = document.querySelectorAll('input[type=radio]');

function changeHandler(event) {
   var str = $(this).attr('name');
   var fieldname = str.replace('Borang[','');
  var fieldname1 = fieldname.replace(']', '');
   var value = $(this).attr('value');

  console.log(fieldname1+' ');
 $.post( \"".Url::to(['set-validasi','id'=>$model->id])."&fieldname=\"+fieldname1+\"&value=\"+value, function( data ) {
        console.log(data.data)
    });





}

Array.prototype.forEach.call(radios, function(radio) {
   radio.addEventListener('change', changeHandler);
});

$(\"#borang-komentar_verifikator\").on(\"keydown\", function(e){
    if(e.which == 13){
    var value = (\"#borang-komentar_verifikator\").val();

    
    }
  });


";

$this->registerJS($js);
?>
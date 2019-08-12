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

$form = ActiveForm::begin()
?>
<h3><?= $model->mahasiswa->nama; ?></h3>
<h4>
    <article class="media event"><i class="fa fa-id-card"></i> No. Pendaftaran: <?= $model->kode ?> </article>
    <article class="media event"><i class="fa fa-building"></i> Program Studi: <?= $model->mahasiswa->nama_prodi ?> </article>
</h4>
<table class="table table-stripped table-border table-hover">
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
            <td> <?=$form->field($model, 'verivikasi_prestasi_akademik10_1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


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
            <td> <?=$form->field($model, 'verivikasi_prestasi_akademik10_2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


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
            <td> <?=$form->field($model, 'verivikasi_prestasi_akademik11_1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


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
            <td> <?=$form->field($model, 'verivikasi_prestasi_akademik11_2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


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
            <td> <?=$form->field($model, 'verivikasi_prestasi_akademik12_1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


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
            <td> <?=$form->field($model, 'verivikasi_prestasi_akademik12_2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


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
            <td> <?=$form->field($model, 'verivikasi_prestasi_non_akademik1')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


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
            <td> <?=$form->field($model, 'verivikasi_prestasi_non_akademik2')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>


        <tr>
            <td>Prestasi Non Akademik 2 </td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik3 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik3)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik3]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik3,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'verivikasi_prestasi_non_akademik3')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>

        <tr>
            <td>Prestasi Non Akademik 2 </td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik4 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik4)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik4]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik4,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'verivikasi_prestasi_non_akademik4')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>


        <tr>
            <td>Prestasi Non Akademik 2 </td>
            <td> <?= "Nama Prestasi :" .$model->prestasi_non_akademik5 ." <br> Tingkat : ".$model->tingkatPrestasi($model->tingkat_prestasi_non_akademik5)  ?></td>
            <td><?= Html::a(
                    Yii::t('app', '<i class="fa fa-search" aria-hidden="true"></i> '),
                    Url::to(['gambar', 'id' => $model->file_prestasi_non_akademik5]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->file_prestasi_non_akademik5,
                        'title' => 'Buka File', 'class' => 'btn btn-info btn-round', 'data-dismiss' => "modal"
                    ]
                ); ?></td>
            <td> <?=$form->field($model, 'verivikasi_prestasi_non_akademik5')->radioList(['0'=>'Tidak Sesuai','1' =>'Sesuai' ])->label(false) ?></td>


        </tr>


    </tbody>


</table>

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
 $.post( \"".Url::to(['set-verifikasi','id'=>$model->id])."&fieldname=\"+fieldname1+\"&value=\"+value, function( data ) {
        console.log(data.data)
    });

}

Array.prototype.forEach.call(radios, function(radio) {
   radio.addEventListener('change', changeHandler);
}); ";

$this->registerJS($js);
?>
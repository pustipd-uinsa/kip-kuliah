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
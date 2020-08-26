<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;

use kartik\grid\GridView;
use yii\widgets\Pjax;

$this->registerCss('
/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 500px;
    overflow-y: auto;
}');
$js = <<<JS
$('#modal1').insertAfter($('body'));
  $("#modal1").on("shown.bs.modal",function(event){
       var button = $(event.relatedTarget);
       var href = button.attr("href");
       $.pjax.reload("#pjax-modal",{
                 "timeout" : false,
                 "url" :href,
                 "replace" :false,
       });
  });

JS;
$this->registerJs($js);


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

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
 
    'nim',
   'mahasiswa.nama',
  'mahasiswa.nama_prodi',
  'mahasiswa.tgllahir',
  'mahasiswa.namaayah',
  'mahasiswa.namaibu',
   [
        'attribute' => 'UKT',
     'format' => 'decimal',
      'value' =>'mahasiswa.bill.billamount'
  ],
  
    [
        'attribute' => 'Finalisasi',
        'format' =>'raw',
        'value' => function ($model) {
            if ($model->status_finalisasi==1) {
                return "<span class = 'text-primary'> Sudah Finalisasi </span>";
            } else {
                return "<span class = 'text-danger'> Belum Finalisasi </span>";
            }
        }

    ],


  [
        'attribute' => 'jenis_keringanan',
        'format' =>'raw',
        'value' => function ($model) {
            if ($model->jenis_keringanan==1) {
                return "<span class = 'text-primary'> 
   Keringanan 15% </span>";
            } elseif ($model->jenis_keringanan==2) {
                return"<span class = 'text-primary'> 
   Keringanan 75% </span>";
            } elseif ($model->jenis_keringanan==3) {
                return"<span class = 'text-primary'> 
  Perpanjangan Pembayaran UKT </span>";
              
              
              
            } else {
                return"<span class = 'text-primary'> 
   Keringanan 100% </span>";
              
            }
        }

    ],  
  
 [
   'attribute' => 'upload_kk',
   'format' =>'raw',
   'value' => function($model) {
       return Html::a(
                    $model->upload_kk==''?"":  'http://ukt.uinsby.ac.id/document/'. $model->upload_kk,
                    Url::to(['gambar', 'id' => $model->upload_kk]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_kk,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                );   
   }
 ],
  
   [
   'attribute' => 'upload_ktm',
   'format' =>'raw',
   'value' => function($model) {
       return Html::a(
                   $model->upload_ktm==''?"":  'http://ukt.uinsby.ac.id/document/'. $model->upload_ktm
              ,
                    Url::to(['gambar', 'id' => $model->upload_ktm]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_ktm,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                );   
   }
 ],
  
     [
   'attribute' => 'upload_lain',
   'format' =>'raw',
   'value' => function($model) {
       return Html::a(
                     $model->upload_lain==''?"":  'http://ukt.uinsby.ac.id/document/'. $model->upload_lain,
              
                    Url::to(['gambar', 'id' => $model->upload_lain]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_lain,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                );   
   }
 ],
  [
    'attribute' => 'upload_meninggal',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? Html::a(
                    $model->upload_meninggal==''?"":    'http://ukt.uinsby.ac.id/document/'. $model->upload_meninggal,
              
                    Url::to(['gambar', 'id' => $model->upload_meninggal]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_meninggal,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
    [
    'attribute' => 'upload_pemutusan',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? Html::a(
                      $model->upload_pemutusan==''?"":    'http://ukt.uinsby.ac.id/document/'. $model->upload_pemutusan,
              
                    Url::to(['gambar', 'id' => $model->upload_pemutusan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_pemutusan,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
    [
    'attribute' => 'upload_kerugian',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? Html::a(
                 $model->upload_kerugian==''?"":       'http://ukt.uinsby.ac.id/document/'. $model->upload_kerugian,
              
                    Url::to(['gambar', 'id' => $model->upload_kerugian]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_kerugian,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
    [
    'attribute' => 'upload_penutupan',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? Html::a(
                     $model->upload_penutupan==''?"":     'http://ukt.uinsby.ac.id/document/'. $model->upload_penutupan,
              
                    Url::to(['gambar', 'id' => $model->upload_penutupan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_penutupan,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
      [
    'attribute' => 'upload_penurunan',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? Html::a(
                        $model->upload_penurunan==''?"": 'http://ukt.uinsby.ac.id/document/'. $model->upload_penurunan,
              
                    Url::to(['gambar', 'id' => $model->upload_penurunan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_penurunan,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
  
        [
    'attribute' => 'ket_masalah_lain',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? Html::a(
                  $model->ket_masalah_lain,
                    Url::to(['keterangan', 'ket' => $model->ket_masalah_lain]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->ket_masalah_lain,
                        'title' => 'Keterangan',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
      [
    'attribute' => 'upload_bukti_lain',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? Html::a(
                   $model->upload_bukti_lain==''?"":     'http://ukt.uinsby.ac.id/document/'. $model->upload_bukti_lain,
              
                    Url::to(['gambar', 'id' => $model->upload_bukti_lain]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_bukti_lain,
                        'title' => 'Keterangan',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
    [
    'attribute' => 'permohonan_perpanjangan',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==1? 
         ($model->permohonan_perpanjangan==1?'Ya':'Tidak')
         :"";   
   }
 ],
      [
    'attribute' => 'upload_permohonan',
   'format' =>'raw',
   'value' => function($model) {
       return ($model->jenis_keringanan==1 && $model->permohonan_perpanjangan==1)? Html::a(
                        $model->upload_permohonan==''?"":    'http://ukt.uinsby.ac.id/document/'. $model->upload_permohonan,
               
                    Url::to(['gambar', 'id' => $model->upload_permohonan]),
                
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_permohonan,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],

      [
    'attribute' => 'upload_transkrip',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==2? Html::a(
                   $model->upload_transkrip==''?"":       'http://ukt.uinsby.ac.id/document/'. $model->upload_transkrip,
              
                    Url::to(['gambar', 'id' => $model->upload_transkrip]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_transkrip,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
    [
    'attribute' => 'upload_kesanggupan',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==2? Html::a(
                      $model->upload_kesanggupan==''?"":  'http://ukt.uinsby.ac.id/document/'. $model->upload_kesanggupan,
              
                    Url::to(['gambar', 'id' => $model->upload_kesanggupan]),
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_kesanggupan,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
      [
    'attribute' => 'upload_permohonan',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==3? Html::a(
                        $model->upload_permohonan==''?"":    'http://ukt.uinsby.ac.id/document/'. $model->upload_permohonan,
               
                    Url::to(['gambar', 'id' => $model->upload_permohonan]),
                
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_permohonan,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
  [
    'attribute' => 'upload_meninggal_covid',
   'format' =>'raw',
   'value' => function($model) {
       return $model->jenis_keringanan==4? Html::a(
                       $model->upload_meninggal_covid==''?"":    'http://ukt.uinsby.ac.id/document/'. $model->upload_meninggal_covid,
              
                 Url::to(['gambar', 'id' => $model->upload_meninggal_covid]),
                 
                    [
                        'data-toggle' => 'modal', 'data-target' => '#modal1', 'class' => 'popupModal', 'id' => 'href' . $model->upload_meninggal_covid,
                        'title' => 'Buka File',  'data-dismiss' => "modal"
                    ]
                ):"";   
   }
 ],
 
  


   
];


/* @var $this yii\web\View */
/* @var $searchModel app\models\BorangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Dokumen Permohonan Keringanan
');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borang-index">

    <div class="row">
        <div class="col-sm-12">
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose card-header-icon">

                    <h4 class="card-title"><?= $this->title ?> </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">






                        <?php Pjax::begin(); ?>
                    
                     
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'tableOptions' => ['class' => 'table  table-bordered table-hover'],
        'striped' => false,
        'pjax' => true,
        'bordered' => true,
        'striped' => false,
     'pager' => [
                              'maxButtonCount'=>40,    // Set maximum number of page buttons that can be displayed
        ],
        'condensed' => false,
        'panel' => [
            'type' => GridView::TYPE_SUCCESS,
    
        ],
            'toolbar' => [
           '{export}',
        '{toggleData}',
            ],
         'resizableColumns' => true,
    ]);
?>

</div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php Pjax::end(); ?>
</div>

<?php
Modal::begin([
    'id' => 'modal1',
    'header' => '<h4>Detail</h4>',
    'size' => 'modal-lg',
]);
Pjax::begin(
    [
        'id' => 'pjax-modal', 'timeout' => 'false',
        'enablePushState' => 'false',
        'enableReplaceState' => 'false',
    ]
);
Pjax::end();
?>
<?php Modal::end(); ?>


<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use yii\helpers\Url;


use kartik\grid\GridView;
use yii\widgets\Pjax;

$gridColumns=[['class' => 'kartik\grid\SerialColumn'], 
              [
        'class' => 'kartik\grid\ActionColumn', 'options' => [
            'width' => '120px',
        ],
        'contentOptions' => ['class' => 'td-actions text-right'],
        'headerOptions' => ['class' => 'text-right'],
        'template' => '{validasi}',
        'buttons' => [
            'validasi' => function ($url, $model) {

                return
                    Html::a(
                        Yii::t('app', '<i class="fa fa-binoculars" aria-hidden="true"></i> '),
                        Url::to(['validasi', 'id' => $model->id]),
                        [
                            'class' => 'popupModal', 'id' => 'href' . $model->id,
                            'title' => 'Validasi', 'class' => 'btn btn-info btn-round',
                        ]
                    );
            }
        ]
        ],
    
            'kode',
            'nama',
              'UKT',
            'mahasiswa.nama_prodi',
             'jalur', 
            'alamat:ntext',
              
            'kota',
             'komentar_verifikator:ntext',
             'score_hafalan:decimal',
             'score_akademik:decimal',
             'score_nonakademik:decimal',
            
          //   'verifikasi',
             'nilai_total:decimal',
        //     'affirmasi',

               ];


/* @var $this yii\web\View */
/* @var $searchModel app\models\LaporanVerifikasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Laporan Verifikasi');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-verifikasi-index">

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body text-left">
        </div>
        </div>
    </div>
     <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
             
                <h4 class="card-title"><?= $this->title ?> </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">






    <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                     
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

    <?php Pjax::end(); ?>
</div>

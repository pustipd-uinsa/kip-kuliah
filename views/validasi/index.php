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
$('#modal').insertAfter($('body'));
  $("#modal").on("shown.bs.modal",function(event){
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
    'mahasiswa.nama',
    'mahasiswa.nama_prodi',

    'nama_ayah',
    'nama_ibu',
    'pekerjaan_ayah',
    'pekerjaan_ibu',
    'penghasilan_ayah:decimal',
    'penghasilan_ibu:decimal',
    'omzet_harian_ayah:decimal',
    'omzet_harian_ibu:decimal',

    // 'penghasilan_sendiri',
    'alamat:ntext',

   
];


/* @var $this yii\web\View */
/* @var $searchModel app\models\BorangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Dokumen Bidikmisi');
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
                        <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
                        'columns' => $gridColumns,
                        'tableOptions' => ['class' => 'table  table-bordered table-hover'],
                         'pager' => [
                              'maxButtonCount'=>40,    // Set maximum number of page buttons that can be displayed
        ],
                        'striped' => false,
                        'pjax' => true,
                        'bordered' => true,
                        'striped' => false,
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

<?php
Modal::begin([
    'id' => 'modal',
    'header' => '<h4>Detail Dokumen</h4>',
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


<?php
use miloschuman\highcharts\Highcharts;

use app\models\Borang;




$model = Borang::find()->select(['jalur' =>new \yii\db\Expression("case when status_finalisasi =1 then 'Sudah Finalisasi' else 'Belum Finalisasi' end"),'total'=>'count(*)'])


->groupBy(new \yii\db\Expression("case when status_finalisasi =1 then 'Sudah Finalisasi' else 'Belum Finalisasi' end"))
->all();

foreach ($model as $detail) {
    $data3[]=[$detail->jalur,(int)$detail->total];
}
?>
<div class="row">
<div class="col-md-6">
<div class="x_panel">
<div class="x_title">
<h4>Komposisi Finalisasi Dokumen Mahasiswa </h4>
<ul class="nav navbar-right panel_toolbox">

<div class="clearfix"></div>
</div>
<div class="x_content">

<?php


echo Highcharts::widget([
    'options' => [
        'title' => [
            'text' => 'Finalisasi Dokumen',
        ],
           'plotOptions' => [
            'pie' => [
                'cursor' => 'pointer',
            ],
        ],
        'showInLegend' => true,
        

        'series' => [
            [ // new opening bracket
                'type' => 'pie',
                'name' => 'Finalisasi Mahasiswa',
                'data' =>
                   $data3
                ,
            ] // new closing bracket
        ],
    ],
]);
 ?>

</div>
</div>
</div>



</div>
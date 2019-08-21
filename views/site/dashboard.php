<?php
use miloschuman\highcharts\Highcharts;

use app\models\Borang;

$model = Borang::find()->select(['jalur' =>'ukt_2019.jalur.ket','total'=>'count(*)'])
->leftJoin(
    'ukt_2019.mhs',
    'borang.kode = ukt_2019.mhs.kode'
)
->leftJoin(
    'ukt_2019.jalur',
    'ukt_2019.jalur.id = ukt_2019.mhs.jalur'
)
->groupBy('ukt_2019.jalur.ket')
->all();

foreach ($model as $detail) {
    $data[]=[$detail->jalur,(int)$detail->total];
}


$model = Borang::find()->select(['jalur' =>'ukt_2019.prodi.nama','total'=>'count(*)'])
->leftJoin(
    'ukt_2019.mhs',
    'borang.kode = ukt_2019.mhs.kode'
)
->leftJoin(
    'ukt_2019.prodi',
    'ukt_2019.prodi.kode = ukt_2019.mhs.prodi'
)
->groupBy('ukt_2019.prodi.nama')
->all();

foreach ($model as $detail) {
    $data2[]=[$detail->jalur,(int)$detail->total];
}

?>


<div class="col-md-6 col-sm-6 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h4>Komposisi Jalur Mahasiswa Bidikmisi</h4>
<ul class="nav navbar-right panel_toolbox">

<div class="clearfix"></div>
</div>
<div class="x_content">

<?php


echo Highcharts::widget([
    'options' => [
        'title' => [
            'text' => 'Jalur Mahasiswa',
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
                'name' => 'Jumlah Mahasiswa',
                'data' =>
                   $data
                ,
            ] // new closing bracket
        ],
    ],
]);
 ?>

</div>
</div>
</div>


<div class="col-md-6 col-sm-6 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h4>Komposisi Prodi Mahasiswa Bidikmisi</h4>
<ul class="nav navbar-right panel_toolbox">

<div class="clearfix"></div>
</div>
<div class="x_content">

<?php


echo Highcharts::widget([
    'options' => [
        'title' => [
            'text' => 'Prodi Mahasiswa',
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
                'name' => 'Jumlah Mahasiswa',
                'data' =>
                   $data2
                ,
            ] // new closing bracket
        ],
    ],
]);
 ?>

</div>
</div>
</div>


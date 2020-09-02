<?php
/* @var $this yii\web\View */
$this->title = Yii::t('app', 'Input Dokumen Permohonan KIP Kuliah');

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="x_panel">
    <div class="x_title">
        <h2>Data Mahasiswa </h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <h2><?=Yii::$app->user->identity->model->nama;?></h2>
    <article class="media event"><i class="fa fa-id-card"></i> NIM: <?= Yii::$app->user->identity->model->nim?> </article>
<article class="media event"><i class="fa fa-calendar"></i> Tanggal Lahir: <?= Yii::$app->user->identity->model->tgllahir?> </article>

    
<article class="media event"><i class="fa fa-building"></i> Program Studi: <?=Yii::$app->user->identity->model->nama_prodi?> </article>

        <?= $this->render('_form', ['model' => $model]) ?>

    </div>
</div>
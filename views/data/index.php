<?php
/* @var $this yii\web\View */
?>
<div class="x_panel">
    <div class="x_title">
        <h2>Data Calon Mahasiswa</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <h2><?=Yii::$app->user->identity->model->nama;?></h2>
    <article class="media event"><i class="fa fa-id-card"></i> No. Pendaftaran: <?= Yii::$app->user->identity->model->kode?> </article>
<article class="media event"><i class="fa fa-calendar"></i> Tahun Masuk: <?=Yii::$app->user->identity->model->tahun_masuk?> </article>
<article class="media event"><i class="fa fa-building"></i> Program Studi: <?=Yii::$app->user->identity->model->nama_prodi?> </article>

        <?= $this->render('_form_keluarga', ['model' => $model]) ?>

    </div>
</div>
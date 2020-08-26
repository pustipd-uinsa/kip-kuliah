<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model app\models\LaporanVerifikasi */

$this->title = $model->kode;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Laporan Verifikasi'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-verifikasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
             <?php if ((Mimin::checkRoute($this->context->id."/update"))){ ?>        <?= Html::a(Yii::t('app', 'Ubah'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php } if ((Mimin::checkRoute($this->context->id."/delete"))){ ?>        <?= Html::a(Yii::t('app', 'Hapus'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Apakah Anda yakin ingin menghapus item ini??'),
                'method' => 'post',
            ],
        ]) ?>
        <?php } ?>    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'kode',
            'alamat:ntext',
            'kota',
            'komentar_verifikator:ntext',
            'score_hafalan',
            'score_akademik',
            'score_nonakademik',
            'UKT',
            'jalur',
            'verifikasi',
            'nilai_total',
            'affirmasi',
        ],
    ]) ?>

</div>

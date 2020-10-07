<?php
use dmstr\widgets\Alert;

use yii\helpers\Html;
$model = \app\models\Borang::find()->where(['nim' => Yii::$app->user->identity->username])->one();
     
?>
<div class="x_panel">
    <div class="x_title">
        <h2><?= Yii::$app->user->identity->username . '-' . Yii::$app->user->identity->model->nama; ?></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <?php if(!is_null($model)) { ?>
      <img src="http://kipk.uinsby.ac.id/document/<?=$model->upload_foto?>" >   
         <?php } ?>
                

        </div>
        <div class="col-md-7 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">
        <div class="alert alert-info">
               <h4>Selamat datang !</h4>
        </div>

<h3 class="prod_title">Data Mahasiswa </h3>
 <h2><?=Yii::$app->user->identity->model->nama;?></h2>
<h3>

<article class="media event"><i class="fa fa-id-card"></i> NIM: <?= Yii::$app->user->identity->model->nim?> </article>
<article class="media event"><i class="fa fa-calendar"></i> Tanggal Lahir: <?= Yii::$app->user->identity->model->tgllahir?> </article>

<article class="media event"><i class="fa fa-calendar"></i> Tahun Masuk: <?=Yii::$app->user->identity->model->periodemasuk?> </article>
<article class="media event"><i class="fa fa-building"></i> Program Studi: <?=Yii::$app->user->identity->model->nama_prodi?> </article>
<article class="media event"><i class="fa fa-home"></i> Alamat: <?=Yii::$app->user->identity->model->alamat?> 
  </article>
<article class="media event"><?=html::a("Unggah Dokumen", ["/prestasi/index"],
 ["class"=>'btn btn-success btn-flat']) ?>

 <?php
            if (!is_null($model) ) 
             {
                echo  html::a("Finalisasi Data", ["/prestasi/finalisasi"], ["class"=>'btn btn-info btn-flat','data-confirm' => 'Pastikan Dokumen yang di unggah lengkap dan benar , setelah Finalisasi data tidak bisa diubah ']);
                echo  html::a("Buka Finalisasi", ["/prestasi/batal-finalisasi"], ["class"=>'btn btn-danger btn-flat','data-confirm' => 'Pastikan Finalisasi ulang setelah perbaikan data , Data yang diproses adalah data yang di finalisasi ']);
     
            }

 ?></article>

</h3>


        </div>



    </div>
</div>
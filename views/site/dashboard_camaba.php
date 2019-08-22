<?php
use dmstr\widgets\Alert;

use yii\helpers\Html;

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
            <div class="product-image1">
                <img src="http://ukt.uinsby.ac.id/assets/foto/<?= Yii::$app->user->identity->model->foto ?>" alt=" ..." height="521" width="370" class="img-circle">
            </div>



        </div>
        <div class="col-md-7 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">
        <div class="alert alert-info">
    <h4>Selamat datang !</h4>
    <!-- <b>BIDIKMISI</b> adalah bantuan biaya pendidikan yang hanya ditujukan untuk calon mahasiswa tidak mampu (miskin) -->

    <b>BIDIKMISI</b> adalah bantuan biaya pendidikan bagi calon mahasiswa tidak mampu secara ekonomi dan memiliki potensi akademik baik untuk menempuh pendidikan di perguruan tinggi pada program studi unggulan sampai lulus tepat waktu.
    <br>
    <br>
<ul>
<li> Data Yang ditulis dan dilampirkan harus benar dan lengkap, jika tidak maka kemungkinan dapat digugurkan </li>
 <li> Lengkapi data yang diwajibkan dan upload dokumen yang di persyaratkan <br> Untuk melihat upload Sukses cek unggah dokumen jika berubah menjadi gambar maka SUKSES jika tidak upload lagi</li>

 <li> Untuk pengaduan silahkan mengirim pertanyaan di email helpdesk@uinsby.ac.id </li>

 <p>Lakukan Finalisasi Data Setelah Mengunggah Dokumen , Dokumen yang diproses adalah yang di finalisasi. </p>

 </ul>
</div>

<h3 class="prod_title">Data Mahasiswa Baru</h3>
 <h2><?=Yii::$app->user->identity->model->nama;?></h2>
<h3>

<article class="media event"><i class="fa fa-id-card"></i> No. Pendaftaran: <?= Yii::$app->user->identity->model->kode?> </article>
<article class="media event"><i class="fa fa-calendar"></i> Tanggal Lahir: <?= Yii::$app->user->identity->model->tgl_lhr?> </article>

<article class="media event"><i class="fa fa-calendar"></i> Tahun Masuk: <?=Yii::$app->user->identity->model->tahun_masuk?> </article>
<article class="media event"><i class="fa fa-building"></i> Program Studi: <?=Yii::$app->user->identity->model->nama_prodi?> </article>
<article class="media event"><i class="fa fa-home"></i> Alamat: <?=Yii::$app->user->identity->model->alamat?>  <?=Yii::$app->user->identity->model->nama_kabupaten?> <?=Yii::$app->user->identity->model->nama_provinsi?></article>
<article class="media event"><?=html::a("Unggah Dokumen", ["/prestasi/index"],
 ["class"=>'btn btn-success btn-flat']) ?>

 <?php
     $model = \app\models\Borang::find()->where(['kode' => Yii::$app->user->identity->username])->one();
            if (!is_null($model)) {
                echo  html::a("Finalisasi Data", ["/prestasi/finalisasi"], ["class"=>'btn btn-info btn-flat','data-confirm' => 'Pastikan Dokumen yang di unggah lengkap dan benar , setelah Finalisasi data tidak bisa diubah ']);
                echo  html::a("Buka Finalisasi", ["/prestasi/batal-finalisasi"], ["class"=>'btn btn-danger btn-flat','data-confirm' => 'Pastikan Finalisasi ulang setelah perbaikan data , Data yang diproses adalah data yang di finalisasi ']);
     
            }

 ?></article>

</h3>


        </div>



    </div>
</div>
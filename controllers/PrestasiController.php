<?php

namespace app\controllers;

use app\models\Borang;

class PrestasiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Borang::find()->where(['kode' => \Yii::$app->user->identity->username])->one();
        if (is_null($model)) {
            $model = new Borang();
            $model->kode = \Yii::$app->user->identity->username;
            $model->nama_ayah = \Yii::$app->user->identity->model->nama_ayah;
            $model->nama_ibu = \Yii::$app->user->identity->model->nama_ibu;
          //  $model->penghasilan_ayah = \Yii::$app->user->identity->model->peng_ayah;
           // $model->penghasilan_ibu = \Yii::$app->user->identity->model->peng_ibu;

            $model->alamat = \Yii::$app->user->identity->model->alamat_ortu;
        //    $model->pekerjaan_ayah = \Yii::$app->user->identity->model->peker_ayah;
          //  $model->pekerjaan_ibu = \Yii::$app->user->identity->model->peker_ibu;
            $model->jumlah_anggota_keluarga = \Yii::$app->user->identity->model->anggota;
            $model->luas_tanah = \Yii::$app->user->identity->model->luas_tanah;
            $model->luas_bangunan = \Yii::$app->user->identity->model->luas_bangunan;
            //$model->pembayaran_pbb = \Yii::$app->user->identity->model->pbb;
      //      $model->pembayaran_pdam = \Yii::$app->user->identity->model->pdam;
        //    $model->daya_pln = \Yii::$app->user->identity->model->pln;
        }
        $model->saveOld();
        if(  $model->status_finalisasi == 1) {
            \Yii::$app->session->setFlash('error','Dokumen sudah di finalisasi data tidak dapat diubah !');
                return $this->goHome();

        }
        if ($model->load(\Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->goHome();
            }
        }




        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionFinalisasi(){
        
        $model = Borang::find()->where(['kode' => \Yii::$app->user->identity->username])->one();
        $model->saveOld();
   
        $model->status_finalisasi = 1;
        $model->save();
        return $this->goHome();

    }
    public function actionBatalFinalisasi(){
        
        $model = Borang::find()->where(['kode' => \Yii::$app->user->identity->username])->one();
        $model->saveOld();
   
        $model->status_finalisasi = 0;
        $model->save();
        return $this->goHome();

    }
}

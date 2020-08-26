<?php

namespace app\controllers;

use app\models\Borang;

class PrestasiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Borang::find()->where(['nim' => \Yii::$app->user->identity->username])->one();
        if (is_null($model)) {
            $model = new Borang();
            $model->nim = \Yii::$app->user->identity->username;
         
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
        
        $model = Borang::find()->where(['nim' => \Yii::$app->user->identity->username])->one();
        $model->saveOld();
   
        $model->status_finalisasi = 1;
        $model->save();
        return $this->goHome();

    }
    public function actionBatalFinalisasi(){
        
        $model = Borang::find()->where(['nim' => \Yii::$app->user->identity->username])->one();
        $model->saveOld();
   
        $model->status_finalisasi = 0;
        $model->save();
        return $this->goHome();

    }
  
   public function actionGambar($id = '')
    {
  
                  return $this->renderAjax('gambar', [
                'gambar' =>    $id,]);

    
    }
   
}

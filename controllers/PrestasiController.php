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
      
        }
        $model->saveOld();
        if ($model->load(\Yii::$app->request->post()) ) {
            if ($model->save()) {
               return $this->goHome();
            }
            
      
        }   




        return $this->render('index', [
            'model' => $model
        ]);
    }
}

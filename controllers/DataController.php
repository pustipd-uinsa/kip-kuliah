<?php

namespace app\controllers;

use app\models\Camaba;

class DataController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Camaba::find()->where(['kode' => \Yii::$app->user->identity->username])->one();
        
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

<?php

namespace app\controllers;

use Yii;
use app\models\Borang;
use app\models\BorangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 *  implements the CRUD actions for Borang model.
 */
class ValidasiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Borang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BorangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 1);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Borang model.
     * @param integer $id
     * @return mixed
     */
    public function actionValidasi($id)
    {
        $model = $this->findModel($id);
        $model->saveOld();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect('index');
        }
        return $this->render('validasi', [
            'model' => $model,
        ]);
    }
    public function actionGambar($id = '')
    {
        $info = pathinfo($id);
        if ($id != '') {
            if ($info['extension'] == 'pdf') {
               return Yii::$app->response->xSendFile(Url::to(["/document/". $id]));
            } else {
                  return $this->renderAjax('gambar', [
                'gambar' =>    $id,

                  ]);
            }
        }
    
    }
    public function actionSetValidasi($id, $fieldname, $value)
    {
        $model = $this->findModel($id);
        $model->saveOld();
        $model->$fieldname = $value;

        $model->save(false);
    }

    protected function findModel($id)
    {
        if (($model = Borang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

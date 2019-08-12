<?php

namespace app\controllers;

use Yii;
use app\models\Borang;
use app\models\BorangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VerivikasiController implements the CRUD actions for Borang model.
 */
class VerivikasiController extends Controller
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
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

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
    public function actionVerifikasi($id)
    {
        return $this->render('verifikasi', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionGambar($id='')
    {
        return $this->renderAjax('gambar', [
            'gambar' =>    $id,
        ]);
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

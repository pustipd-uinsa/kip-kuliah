<?php
namespace app\commands;

use yii\console\Controller;
use app\models\Borang;
use app\models\User;

class NotifController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex()
    {
        $listBelumFinalisasi = Borang::find()->where(['status_finalisasi'=>0])->all();
        foreach ($listBelumFinalisasi as $mahasiswa) {
            try {
                $user = User::find()->where(['username' => $mahasiswa->kode])->one();
                \Yii::$app->mailer->compose(['html' => 'notif-html', 'text' => 'notif-text'], ['nama' => $mahasiswa->mahasiswa->nama])
                ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' '])
                ->setTo($user->email)
                ->setSubject(' Finalisasi Bidikmisi UIN Sunan Ampel Surabaya ')
                ->send();
            } catch  (Exception $e) {
                //display custom message
                echo $mahasiswa->mahasiswa->nama . '-' . $user->email . "\n" . $e->errorMessage();
              }

            echo $mahasiswa->mahasiswa->nama . '-' . $user->email . "\n";
        }
    }
}

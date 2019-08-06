<?php

namespace app\models;

use app\models\User;
use yii\base\Model;

use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;

    public $email;
    public $password;
    public $tanggal;
    public $bulan;
    public $tahun;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'No Pendaftaran ini Sudah Terdaftar'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['username', 'checkUkt'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'No Pendaftaran ini Sudah Terdaftar'],

            ['password', 'required'],
            [['tanggal', 'bulan', 'tahun'], 'integer'],
            ['password', 'string', 'min' => 6],
        ];
    }


    public function checkUkt($attribute, $params)
    {
        $model = Camaba::find()->where(['kode' => $this->username, 'tgl_lhr' => $this->tanggal . '-' . $this->bulan . '-' . $this->tahun])->one();
        if (!$model) {
            $this->addError('username', 'No Pendaftaran Tidak Ditemukan');
        } elseif ($model->jalur == 5) {
            $this->addError('username', 'Pendaftaran Bidikmisi Tidak Diperkenankan untuk UKT Mandiri');
        } else {
            $this->email = $model->email;
        }
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'No. Pendaftaran UKT'),
            'password' => Yii::t('app', 'Password'),
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                $authAssignment = new AuthAssignment();
                $authAssignment->user_id = $user->id;
                $authAssignment->item_name = 'camaba';
                $authAssignment->created_at = 1;
                $authAssignment->save();

                return $user;
            }
        }

        return null;
    }
}

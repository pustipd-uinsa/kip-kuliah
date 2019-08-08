<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;


/**
 * This is the model class for table "borang".
 *
 * @property integer $id
 * @property string $kode
 * @property integer $hafalan_alquran
 * @property string $prestasi_akademik10_1
 * @property string $file_prestasi_akademik10_1
 * @property integer $validasi_prestasi_akademik10_1
 * @property integer $verivikasi_prestasi_akademik10_1
 * @property string $prestasi_akademik11_1
 * @property string $file_prestasi_akademik11_1
 * @property integer $validasi_prestasi_akademik11_1
 * @property integer $verivikasi_prestasi_akademik11_1
 * @property string $prestasi_akademik12_1
 * @property string $file_prestasi_akademik12_1
 * @property integer $validasi_prestasi_akademik12_1
 * @property integer $verivikasi_prestasi_akademik12_1
 * @property string $prestasi_akademik10_2
 * @property string $file_prestasi_akademik10_2
 * @property integer $validasi_prestasi_akademik10_2
 * @property integer $verivikasi_prestasi_akademik10_2
 * @property string $prestasi_akademik11_2
 * @property string $file_prestasi_akademik11_2
 * @property integer $validasi_prestasi_akademik11_2
 * @property integer $verivikasi_prestasi_akademik11_2
 * @property string $prestasi_akademik12_2
 * @property string $file_prestasi_akademik12_2
 * @property integer $validasi_prestasi_akademik12_2
 * @property integer $verivikasi_prestasi_akademik12_2
 * @property string $prestasi_non_akademik1
 * @property string $file_prestasi_non_akademik1
 * @property integer $validasi_prestasi_non_akademik1
 * @property integer $verivikasi_prestasi_non_akademik1
 * @property integer $tingkat_prestasi_non_akademik1
 * @property string $prestasi_non_akademik2
 * @property string $file_prestasi_non_akademik2
 * @property integer $validasi_prestasi_non_akademik2
 * @property integer $verivikasi_prestasi_non_akademik2
 * @property integer $tingkat_prestasi_non_akademik2
 * @property string $prestasi_non_akademik3
 * @property string $file_prestasi_non_akademik3
 * @property integer $validasi_prestasi_non_akademik3
 * @property integer $verivikasi_prestasi_non_akademik3
 * @property integer $tingkat_prestasi_non_akademik3
 * @property string $prestasi_non_akademik4
 * @property string $file_prestasi_non_akademik4
 * @property integer $validasi_prestasi_non_akademik4
 * @property integer $verivikasi_prestasi_non_akademik4
 * @property integer $tingkat_prestasi_non_akademik4
 * @property string $prestasi_non_akademik5
 * @property string $file_prestasi_non_akademik5
 * @property integer $validasi_prestasi_non_akademik5
 * @property integer $verivikasi_prestasi_non_akademik5
 * @property integer $tingkat_prestasi_non_akademik5
 * @property integer $status_finalisasi
 */
class Borang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $old_file;


    public  function saveOld() {
        $files =
        [
            'file_prestasi_akademik10_1', 'file_prestasi_akademik11_1', 'file_prestasi_akademik12_1',
            'file_prestasi_akademik10_2', 'file_prestasi_akademik11_2', 'file_prestasi_akademik12_2',
            'file_prestasi_non_akademik1', 'file_prestasi_non_akademik2', 'file_prestasi_non_akademik3',
            'file_prestasi_non_akademik4', 'file_prestasi_non_akademik5'
        ];
    foreach ($files as $file) {
     
        $this->old_file[$file] = $this->$file;
    }

    }

    public static function tableName()
    {
        return 'borang';
    }

    public function beforeSave($insert)
    {

        if (parent::beforeSave($insert)) {
            // Place your custom code here
            $files =
                [
                    'file_prestasi_akademik10_1', 'file_prestasi_akademik11_1', 'file_prestasi_akademik12_1',
                    'file_prestasi_akademik10_2', 'file_prestasi_akademik11_2', 'file_prestasi_akademik12_2',
                    'file_prestasi_non_akademik1', 'file_prestasi_non_akademik2', 'file_prestasi_non_akademik3',
                    'file_prestasi_non_akademik4', 'file_prestasi_non_akademik5'
                ];
            foreach ($files as $file) {
             
                $this->upload($file);
            }

            return true;
        } else {
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hafalan_alquran', 'validasi_prestasi_akademik10_1', 'verivikasi_prestasi_akademik10_1', 'validasi_prestasi_akademik11_1', 'verivikasi_prestasi_akademik11_1', 'validasi_prestasi_akademik12_1', 'verivikasi_prestasi_akademik12_1', 'validasi_prestasi_akademik10_2', 'verivikasi_prestasi_akademik10_2', 'validasi_prestasi_akademik11_2', 'verivikasi_prestasi_akademik11_2', 'validasi_prestasi_akademik12_2', 'verivikasi_prestasi_akademik12_2', 'validasi_prestasi_non_akademik1', 'verivikasi_prestasi_non_akademik1', 'tingkat_prestasi_non_akademik1', 'validasi_prestasi_non_akademik2', 'verivikasi_prestasi_non_akademik2', 'tingkat_prestasi_non_akademik2', 'validasi_prestasi_non_akademik3', 'verivikasi_prestasi_non_akademik3', 'tingkat_prestasi_non_akademik3', 'validasi_prestasi_non_akademik4', 'verivikasi_prestasi_non_akademik4', 'tingkat_prestasi_non_akademik4', 'validasi_prestasi_non_akademik5', 'verivikasi_prestasi_non_akademik5', 'tingkat_prestasi_non_akademik5', 'status_finalisasi'], 'integer'],
            [['kode'], 'string', 'max' => 20],

            [
                [
                    'file_prestasi_akademik10_1', 'file_prestasi_akademik11_1', 'file_prestasi_akademik12_1',
                    'file_prestasi_akademik10_2', 'file_prestasi_akademik11_2', 'file_prestasi_akademik12_2',
                    'file_prestasi_non_akademik1', 'file_prestasi_non_akademik2', 'file_prestasi_non_akademik3',
                    'file_prestasi_non_akademik4', 'file_prestasi_non_akademik5'
                ], 'file',
                'skipOnEmpty' => true, 'extensions' => 'jpeg,jpg,png', 'maxSize' => 1048576
            ],
            [['prestasi_akademik10_1',  'prestasi_akademik11_1',  'prestasi_akademik12_1',  'prestasi_akademik10_2',  'prestasi_akademik11_2',  'prestasi_akademik12_2',  'prestasi_non_akademik1',  'prestasi_non_akademik2',  'prestasi_non_akademik3',  'prestasi_non_akademik4',  'prestasi_non_akademik5',], 'string', 'max' => 100],
        ];
    }


    public function upload($fieldName)
    {
        $path = Yii::getAlias('@app') . '/web/document/';
        //s  die($fieldName);
        $image = UploadedFile::getInstance($this, $fieldName);
        if (!empty($image) && $image->size !== 0) {
            $fileNames = $fieldName . $this->kode . $fieldName . '.' . $image->extension;

            if ($image->saveAs($path . $fileNames)) {
                $this->attributes = [$fieldName => $fileNames];
                return true;
            } else {
                return false;
                $this->attributes = [$fieldName => $this->old_file[$fieldName]];
            }
        } else {
            $this->attributes = [$fieldName => $this->old_file[$fieldName]];
            return true;
        }
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kode' => Yii::t('app', 'Kode'),
            'hafalan_alquran' => Yii::t('app', 'Hafalan Alquran'),
            'prestasi_akademik10_1' => Yii::t('app', 'Prestasi Akademik Kelas 10 (Gasal)'),
            'file_prestasi_akademik10_1' => Yii::t('app', 'File Prestasi Akademik Kelas 10 (Gasal)'),
            'validasi_prestasi_akademik10_1' => Yii::t('app', 'Validasi Prestasi Akademik10 1'),
            'verivikasi_prestasi_akademik10_1' => Yii::t('app', 'Verivikasi Prestasi Akademik10 1'),
            'prestasi_akademik11_1' => Yii::t('app', 'Prestasi Akademik Kelas 11 (Gasal)'),
            'file_prestasi_akademik11_1' => Yii::t('app', 'File Prestasi Akademik Kelas 11 (Gasal)'),
            'validasi_prestasi_akademik11_1' => Yii::t('app', 'Validasi Prestasi Kelas 11 (Gasal)'),
            'verivikasi_prestasi_akademik11_1' => Yii::t('app', 'Verivikasi Prestasi Akademik11 1'),
            'prestasi_akademik12_1' => Yii::t('app', 'Prestasi Akademik Kelas 12 (Gasal)'),
            'file_prestasi_akademik12_1' => Yii::t('app', 'File Prestasi Akademik Kelas 12 (Gasal)'),
            'validasi_prestasi_akademik12_1' => Yii::t('app', 'Validasi Prestasi Akademik12 1'),
            'verivikasi_prestasi_akademik12_1' => Yii::t('app', 'Verivikasi Prestasi Akademik12 1'),
            'prestasi_akademik10_2' => Yii::t('app', 'Prestasi Akademik Kelas 10 (Genap)'),
            'file_prestasi_akademik10_2' => Yii::t('app', 'File Prestasi Akademik Kelas 10 (Genap)'),
            'validasi_prestasi_akademik10_2' => Yii::t('app', 'Validasi Prestasi Akademik10 2'),
            'verivikasi_prestasi_akademik10_2' => Yii::t('app', 'Verivikasi Prestasi Akademik10 2'),
            'prestasi_akademik11_2' => Yii::t('app', 'Prestasi Akademik Kelas 11 (Genap)'),
            'file_prestasi_akademik11_2' => Yii::t('app', 'File Prestasi Akademik Kelas 11 (Genap)'),
            'validasi_prestasi_akademik11_2' => Yii::t('app', 'Validasi Prestasi Akademik11 2'),
            'verivikasi_prestasi_akademik11_2' => Yii::t('app', 'Verivikasi Prestasi Akademik11 2'),
            'prestasi_akademik12_2' => Yii::t('app', 'Prestasi Akademik Kelas 12 (Genap)'),
            'file_prestasi_akademik12_2' => Yii::t('app', 'File Prestasi Akademik Kelas 12 (Genap)'),
            'validasi_prestasi_akademik12_2' => Yii::t('app', 'Validasi Prestasi Akademik12 2'),
            'verivikasi_prestasi_akademik12_2' => Yii::t('app', 'Verivikasi Prestasi Akademik12 2'),
            'prestasi_non_akademik1' => Yii::t('app', 'Prestasi Non Akademik1'),
            'file_prestasi_non_akademik1' => Yii::t('app', 'File Prestasi Non Akademik1'),
            'validasi_prestasi_non_akademik1' => Yii::t('app', 'Validasi Prestasi Non Akademik1'),
            'verivikasi_prestasi_non_akademik1' => Yii::t('app', 'Verivikasi Prestasi Non Akademik1'),
            'tingkat_prestasi_non_akademik1' => Yii::t('app', 'Tingkat Prestasi Non Akademik1'),
            'prestasi_non_akademik2' => Yii::t('app', 'Prestasi Non Akademik2'),
            'file_prestasi_non_akademik2' => Yii::t('app', 'File Prestasi Non Akademik2'),
            'validasi_prestasi_non_akademik2' => Yii::t('app', 'Validasi Prestasi Non Akademik2'),
            'verivikasi_prestasi_non_akademik2' => Yii::t('app', 'Verivikasi Prestasi Non Akademik2'),
            'tingkat_prestasi_non_akademik2' => Yii::t('app', 'Tingkat Prestasi Non Akademik2'),
            'prestasi_non_akademik3' => Yii::t('app', 'Prestasi Non Akademik3'),
            'file_prestasi_non_akademik3' => Yii::t('app', 'File Prestasi Non Akademik3'),
            'validasi_prestasi_non_akademik3' => Yii::t('app', 'Validasi Prestasi Non Akademik3'),
            'verivikasi_prestasi_non_akademik3' => Yii::t('app', 'Verivikasi Prestasi Non Akademik3'),
            'tingkat_prestasi_non_akademik3' => Yii::t('app', 'Tingkat Prestasi Non Akademik3'),
            'prestasi_non_akademik4' => Yii::t('app', 'Prestasi Non Akademik4'),
            'file_prestasi_non_akademik4' => Yii::t('app', 'File Prestasi Non Akademik4'),
            'validasi_prestasi_non_akademik4' => Yii::t('app', 'Validasi Prestasi Non Akademik4'),
            'verivikasi_prestasi_non_akademik4' => Yii::t('app', 'Verivikasi Prestasi Non Akademik4'),
            'tingkat_prestasi_non_akademik4' => Yii::t('app', 'Tingkat Prestasi Non Akademik4'),
            'prestasi_non_akademik5' => Yii::t('app', 'Prestasi Non Akademik5'),
            'file_prestasi_non_akademik5' => Yii::t('app', 'File Prestasi Non Akademik5'),
            'validasi_prestasi_non_akademik5' => Yii::t('app', 'Validasi Prestasi Non Akademik5'),
            'verivikasi_prestasi_non_akademik5' => Yii::t('app', 'Verivikasi Prestasi Non Akademik5'),
            'tingkat_prestasi_non_akademik5' => Yii::t('app', 'Tingkat Prestasi Non Akademik5'),
            'status_finalisasi' => Yii::t('app', 'Status Finalisasi'),
        ];
    }
}

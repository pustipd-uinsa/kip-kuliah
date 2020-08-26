<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "v_nilai".
 *
 * @property integer $id
 * @property string $nama
 * @property string $kode
 * @property string $alamat
 * @property string $kota
 * @property string $komentar_verifikator
 * @property string $score_hafalan
 * @property double $score_akademik
 * @property string $score_nonakademik
 * @property string $UKT
 * @property string $jalur
 * @property integer $verifikasi
 * @property double $nilai_total
 * @property integer $affirmasi
 */
class LaporanVerifikasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'v_nilai';
    }
   public static function primaryKey()
    {
        return ["id"];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'verifikasi', 'affirmasi'], 'integer'],
            [['alamat', 'komentar_verifikator'], 'string'],
            [['score_hafalan', 'score_akademik', 'score_nonakademik', 'nilai_total'], 'number'],
            [['nama', 'jalur'], 'string', 'max' => 100],
            [['kode'], 'string', 'max' => 20],
            [['kota'], 'string', 'max' => 50],
            [['UKT'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'kode' => 'Kode',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'komentar_verifikator' => 'Komentar Verifikator',
            'score_hafalan' => 'Score Hafalan',
            'score_akademik' => 'Score Akademik',
            'score_nonakademik' => 'Score Nonakademik',
            'UKT' => 'Ukt',
            'jalur' => 'Jalur',
            'verifikasi' => 'Verifikasi',
            'nilai_total' => 'Nilai Total',
           'mahasiswa.nama_prodi' =>'Program Studi',
            'affirmasi' => 'Affirmasi',
        ];
    }
      public function getMahasiswa()
    {
        return $this->hasOne(Camaba::className(), ['kode' => 'kode']);
    }

}

<?php

namespace app\models;

use Yii;

class Camaba extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mhs';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_ukt');
    }

    public  function getProdi1()
    {
        return $this->hasOne(Prodi::className(), ["kode" => "prodi"]);
    }
    public  function getNama_prodi()
    {
        return is_null($this->prodi1) ? "" : $this->prodi1->nama;
    }

    public  function getProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ["id" => "prov"]);
    }
    public  function getNama_provinsi()
    {
        return is_null($this->provinsi) ? "" : ucfirst($this->provinsi->name);
    }

    public  function getKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ["id" => "kab"]);
    }
    public  function getNama_Kabupaten()
    {
        return is_null($this->kabupaten) ? "" : ucfirst($this->kabupaten->nama);
    }
}

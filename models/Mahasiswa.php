<?php

namespace app\models;

use Yii;

class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
 
    /**
     * @inheritdoc
     */
    public function rules()
    {
     
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
      
        
    }

    public function getProdi()
    {
        return $this->hasOne(Prodi::className(), ['kode' => 'kodeunit']);
    }

    public function getNama_prodi()
    {
        return is_null($this->prodi) ? "" : $this->prodi->nama;
    }

    public function getFakultas()
    {
        return $this->hasOne(Prodi::className(), ['kodeunit' => 'kodeunitparent'])
            ->via("prodi");
    }
  public function getBill()
  {
    return Bill::find()->where(['nim'=>$this->nim])->orderBy('periode desc')->one();
    
  }
  
  
  
}

<?php
namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "borang".
 *

 */
class Borang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $old_file;
    public $pekerjaan_ayah_lain;
    public $pekerjaan_ibu_lain;
    public $jalur;
    public $total;


    public function saveOld()
    {
        $files =
            [

'upload_meninggal' ,
	'upload_pemutusan' ,
	'upload_kerugian' ,
	'upload_penutupan' ,
	'upload_penurunan' ,
	'upload_lain' ,
	'upload_transkrip' ,
	'upload_kesanggupan' ,
	'upload_permohonan' ,
	'upload_kk' ,
	'upload_ktm' ,   
  'upload_bukti_lain',      
  'upload_meninggal_covid',      
          
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
                
   
'upload_meninggal' ,
	'upload_pemutusan' ,
	'upload_kerugian' ,
	'upload_penutupan' ,
	'upload_penurunan' ,
	'upload_lain' ,
	'upload_transkrip' ,
	'upload_kesanggupan' ,
	'upload_permohonan' ,
	'upload_kk' ,
	'upload_ktm' ,   
               'upload_bukti_lain', 
              'upload_meninggal_covid',      
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
          [['jenis_keringanan'],'required'],
            [[
            'status_finalisasi','permohonan_perpanjangan'
            ], 'integer'],
            [['nim'], 'string', 'max' => 20],

            [
                [
                  
'upload_meninggal' ,
	'upload_pemutusan' ,
	'upload_kerugian' ,
	'upload_penutupan' ,
	'upload_penurunan' ,
	'upload_lain' ,
	'upload_transkrip' ,
	'upload_kesanggupan' ,
	'upload_permohonan' ,
	'upload_kk' ,
	'upload_ktm' ,   
                   'upload_bukti_lain', 
                  'upload_meninggal_covid', 
                  
                ], 'file',
                'skipOnEmpty' => true, 'extensions' => 'jpeg,jpg,png,pdf', 'maxSize' => 104857600
            ],
          [['ket_masalah_lain'],'safe']
        
        ];
    }


    public function upload($fieldName)
    {
        $path = Yii::getAlias('@app') . '/web/document/';
        //s  die($fieldName);
        $image = UploadedFile::getInstance($this, $fieldName);
        if (!empty($image) && $image->size !== 0) {
            $fileNames = $fieldName . $this->nim  . '.' . $image->extension;

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
                  
'upload_meninggal' => "Orang Tua Meninggal (Upload Bukti)" ,
	'upload_pemutusan' => "Orang Tua Mengalami PHK (Upload Bukti)" ,
	'upload_kerugian' => "Orang Tua Mengalami Kerugian Usaha / Pailit (Upload Bukti)" ,
	'upload_penutupan' => "Orang Tua Mengalami Penutupan Usaha (Upload Bukti)" ,
	'upload_penurunan' => "Orang Tua Mengalami Penurunan Pendapatan Signifikan (Upload Bukti)" ,
   'upload_bukti_lain' =>'Upload Bukti Lainnya',         
	'upload_transkrip' => "Upload Transkrip Sementara" ,
	'upload_kesanggupan'  => "Upload Kesanggupan Menyelesaikan Tugas Akhir" ,
	'upload_permohonan'  => "Upload Permohonan pengunduran masa pembayaran UKT" ,
	'upload_lain' => ' Surat Pernyataan Pekerjaan Orangtua (Bapak/Ibu) / Wali	' ,   
  'upload_meninggal_covid' => 'Surat Keterangan Kematian Orang Tua Akibat Covid-19 dari Rumah Sakit / Puskesmas',   
          'permohonan_perpanjangan' =>'Permohonan Perpanjangan Masa Pembayaran Untuk UKT 6 - 7'
      
        ];
    }

    public function getMahasiswa()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim']);
    }

    public function tingkatPrestasi($i)
    {
        $data = [null => '', 1 => 'Kabupaten / Kotamadya', 2 => 'Propinsi', 3 => 'Nasional', 4 => 'Internasional'];
        return $data[$i];
    }
    public function kepemilikanRumah($i)
    {
        $data = [
            '1' => 'Rumah Sendiri', '2' => 'Menyewa / Mengontrak',
            '3' => 'Menumpang', '4' => 'Tidak Punya'
        ];
        return $data[$i];
    }
    public function sumberAir($i)
    {
        $data = [
            '1' => 'PDAM', '2' => 'Kemasan', '3' => 'Sumur', '4' => 'Sungai/Mata Air Gunung'
        ];
        return $data[$i];
    }
    public function sumberListrik($i)
    {
        $data = [
            '0' => 'Tidak Ada', '1' => 'PLN', '2' => 'Genset Mandiri', '3' => 'PLN dan Genset'
        ];
        return $data[$i];
    }
}

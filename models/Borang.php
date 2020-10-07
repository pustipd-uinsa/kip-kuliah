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
                'upload_kk' ,
                'upload_ktp' ,
                'upload_foto' ,
                'upload_ktm' ,
                'upload_raport1' ,
                'upload_raport2' ,
                'upload_raport3' ,
                'upload_raport4' ,
                'upload_raport5' ,
                'upload_raport6' ,
                'upload_prestasi' ,
                'upload_listrik' ,
                'upload_pdam' ,
                'upload_pbb' ,
                'upload_dokumen' ,
                'upload_meninggal' ,
                'upload_phk' ,
                'upload_rumah' ,
            'upload_penghasilan',
             'upload_ijazah',
          'upload_kendaraan',
                'upload_pakta_integritas' ,       
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
                    'upload_ijazah' ,
                    'upload_kk' ,
                    'upload_ktp' ,
                    'upload_foto' ,
                    'upload_ktm' ,
                    'upload_raport1' ,
                    'upload_raport2' ,
                    'upload_raport3' ,
                    'upload_raport4' ,
                    'upload_raport5' ,
                    'upload_raport6' ,
                    'upload_prestasi' ,
                    'upload_listrik' ,
                    'upload_pdam' ,
                    'upload_pbb' ,
                    'upload_dokumen' ,
                    'upload_meninggal' ,
                    'upload_phk' ,
                    'upload_pakta_integritas' ,
                'upload_penghasilan',
              'upload_kendaraan',
                    'upload_rumah' ,
                
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
          
          
            [ ['jumlah_keluarga'],'required' ] ,
            [ ['penghasilan_kotor'],'number' ] ,
          [
              
              [
               'status_finalisasi','jumlah_keluarga'
            ], 'integer'],
            [['nim'], 'string', 'max' => 20],

            [
                [
                    'upload_kk' ,
                    'upload_ktp' ,
                    'upload_foto' ,
                    'upload_ktm' ,
                    'upload_raport1' ,
                    'upload_raport2' ,
                    'upload_raport3' ,
                    'upload_raport4' ,
                    'upload_raport5' ,
                    'upload_raport6' ,
                    'upload_prestasi' ,
                    'upload_listrik' ,
                    'upload_pdam' ,
                    'upload_pbb' ,
                    'upload_dokumen' ,
                    'upload_meninggal' ,
                    'upload_phk' ,
                    'upload_ijazah' ,
                  'upload_rumah' ,
                  'upload_penghasilan',
                  'upload_kendaraan',
                    
                    'upload_pakta_integritas' ,
                  
                ], 'file',
                'skipOnEmpty' => true, 'extensions' => 'jpeg,jpg,png,pdf', 'maxSize' => 104857600
            ],
         
        
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
            'upload_rumah' => 'Foto rumah (tampak dari luar, kondisi di dalam, lantai, atap)',
          'upload_kk'  => "Hasil Scan Kartu Susunan Keluarga ",
            'upload_ktp'  => "Hasil Scan KTP",
            'upload_foto'  => "Pas foto",
            'upload_ktm' => "Hasil Scan Kartu Tanda Mahasiswa",
           'jumlah_keluarga' => 'Jumlah Anggota Keluarga',
            'upload_penghasilan' => 'Pernyataan Penghasilan Orangtua ',
            'upload_raport1' => "Raport Semester 1",
            'upload_raport2' => "Raport Semester 2",
            'upload_raport3' => "Raport Semester 3",
            'upload_raport4' => "Raport Semester 4",
            'upload_raport5' => "Raport Semester 5",
            'upload_raport6' => "Raport Semester 6",
            'upload_ijazah' => "ljazah beserta transkrip nilai yang dilegalisasi oleh Kepala Madrasah",
          'upload_kendaraan' => 'Surat keterangan kepemilikan kendaraan bermotor',
            
            'upload_prestasi' => 'Dokumen Prestasi',

            'upload_listrik' =>'Rekening Listrik Bulan Terbaru' ,
            'upload_pdam' =>'Rekening PDAM Bulan Terbaru' ,
            'upload_pbb' =>'Bukti pembayaran PBB tahun terakhir dari orang tua/wali ' ,
            'upload_dokumen' => "Hasil scan  Fotokopi Kartu Indonesia Pintar untuk PIP/Kartu Keluarga
Sejahtera untuk PKH/Kartu Jakarta Pintar (bila ada)" ,
            'upload_meninggal' => "Orang Tua meninggal dunia dibuktikan dengan surat keterangan kematian" ,
            'upload_phk' =>"Pemutusan hubungan kerja dibuktikan dengan surat keterangan PHK dari perusahaan atau tempat kerja",
            'upload_pakta_integritas' =>"Pakta Integritas" ,        ];
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

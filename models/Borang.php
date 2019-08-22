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
    public $pekerjaan_ayah_lain;
    public $pekerjaan_ibu_lain;
    public $jalur;
    public $total;


    public function saveOld()
    {
        $files =
            [

                'file_prestasi_akademik10_1', 'file_prestasi_akademik11_1', 'file_prestasi_akademik12_1',
                'file_prestasi_akademik10_2', 'file_prestasi_akademik11_2', 'file_prestasi_akademik12_2',
                'file_prestasi_non_akademik1', 'file_prestasi_non_akademik2', 'file_prestasi_non_akademik3',
                'file_prestasi_non_akademik4', 'file_prestasi_non_akademik5',
                'file_penghasilan_ayah', 'file_penghasilan_ibu', 'file_penghasilan_sendiri', 'file_kartu_kks', 'file_bukti_pembayaran_pbb', 'file_bpkb_stnk', 'file_foto_atap_rumah',
                'file_foto_lantai_rumah', 'file_foto_kamar_mandi','file_foto_depan_rumah','file_foto_ruang_tamu','file_foto_dapur',

                'file_foto_kartu_keluarga', 'file_bukti_pembayaran_pln', 'file_bukti_pembayaran_pdam',
            ];
        foreach ($files as $file) {
            $this->old_file[$file] = $this->$file;
        }

        if (!in_array($this->pekerjaan_ayah, ['PNS', 'Pegawai Swasta', 'Wiraswasta', 'TNI/POLRI', 'Petani'])) {
            $this->pekerjaan_ayah_lain = $this->pekerjaan_ayah;
           $this->pekerjaan_ayah = 'Lainnya';
           
        }

        if (!in_array($this->pekerjaan_ibu, ['PNS', 'Pegawai Swasta', 'Wiraswasta', 'TNI/POLRI', 'Petani'])) {
            $this->pekerjaan_ibu_lain = $this->pekerjaan_ibu;
           $this->pekerjaan_ibu = 'Lainnya';

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
                    'file_prestasi_non_akademik4', 'file_prestasi_non_akademik5',
                    'file_penghasilan_ayah', 'file_penghasilan_ibu', 'file_penghasilan_sendiri', 'file_kartu_kks', 'file_bukti_pembayaran_pbb', 'file_bpkb_stnk', 'file_foto_atap_rumah',
                    'file_foto_lantai_rumah', 'file_foto_kamar_mandi','file_foto_depan_rumah','file_foto_ruang_tamu','file_foto_dapur',

                    'file_foto_kartu_keluarga', 'file_bukti_pembayaran_pln', 'file_bukti_pembayaran_pdam',
                ];
            foreach ($files as $file) {
                $this->upload($file);
            }

            if ($this->pekerjaan_ayah_lain !== '' && (!in_array($this->pekerjaan_ayah, ['PNS', 'Pegawai Swasta', 'Wiraswasta', 'TNI/POLRI', 'Petani']))) {
                $this->pekerjaan_ayah = $this->pekerjaan_ayah_lain;
            }
            if ($this->pekerjaan_ibu_lain !== '' && (!in_array($this->pekerjaan_ibu, ['PNS', 'Pegawai Swasta', 'Wiraswasta', 'TNI/POLRI', 'Petani']))) {
                $this->pekerjaan_ibu = $this->pekerjaan_ibu_lain;
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
            [[
                'hafalan_alquran', 'validasi_prestasi_akademik10_1', 'verivikasi_prestasi_akademik10_1', 'validasi_prestasi_akademik11_1', 'verivikasi_prestasi_akademik11_1', 'validasi_prestasi_akademik12_1', 'verivikasi_prestasi_akademik12_1', 'validasi_prestasi_akademik10_2', 'verivikasi_prestasi_akademik10_2', 'validasi_prestasi_akademik11_2', 'verivikasi_prestasi_akademik11_2', 'validasi_prestasi_akademik12_2', 'verivikasi_prestasi_akademik12_2', 'validasi_prestasi_non_akademik1', 'verivikasi_prestasi_non_akademik1', 'tingkat_prestasi_non_akademik1', 'validasi_prestasi_non_akademik2', 'verivikasi_prestasi_non_akademik2', 'tingkat_prestasi_non_akademik2', 'validasi_prestasi_non_akademik3', 'verivikasi_prestasi_non_akademik3', 'tingkat_prestasi_non_akademik3', 'validasi_prestasi_non_akademik4', 'verivikasi_prestasi_non_akademik4', 'tingkat_prestasi_non_akademik4', 'validasi_prestasi_non_akademik5', 'verivikasi_prestasi_non_akademik5', 'tingkat_prestasi_non_akademik5', 'status_finalisasi',

                'verifikasi_pembayaran_pbb', 'validasi_pembayaran_pbb',
                'verifikasi_pembayaran_pln', 'validasi_pembayaran_pln',
                'verifikasi_pembayaran_pdam', 'validasi_pembayaran_pdam',
                'verifikasi_kks', 'validasi_kks',
                'verifikasi_penghasilan_ayah', 'validasi_penghasilan_ayah',
                'verifikasi_penghasilan_ibu', 'validasi_penghasilan_ibu',
                'verifikasi_anggota_keluarga', 'validasi_anggota_keluarga',
                'jumlah_anggota_keluarga', 'kepemilikan_rumah', 'sumber_listrik', 'sumber_air','status_verifikasi','status_validasi'
            ], 'integer'],
            [['nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'penghasilan_ayah', 'penghasilan_ibu',  'alamat', 'jumlah_anggota_keluarga', 'pembayaran_pbb', 'daya_pln', 'pembayaran_pdam', 'luas_tanah', 'luas_bangunan', 'kepemilikan_rumah', 'sumber_listrik', 'sumber_air'], 'required'],
            [['penghasilan_ayah', 'penghasilan_ibu', 'penghasilan_sendiri', 'pembayaran_pbb', 'daya_pln', 'pembayaran_pdam', 'luas_tanah', 'luas_bangunan','omzet_harian_ayah','omzet_harian_ibu'], 'number'],
            [['alamat', 'pekerjaan_ibu_lain', 'pekerjaan_ayah_lain', 'komentar_verifikator', 'komentar_validator'], 'string'],
            [['kode'], 'string', 'max' => 20],

            [
                [
                    'file_prestasi_akademik10_1', 'file_prestasi_akademik11_1', 'file_prestasi_akademik12_1',
                    'file_prestasi_akademik10_2', 'file_prestasi_akademik11_2', 'file_prestasi_akademik12_2',
                    'file_prestasi_non_akademik1', 'file_prestasi_non_akademik2', 'file_prestasi_non_akademik3',
                    'file_prestasi_non_akademik4', 'file_prestasi_non_akademik5',
                    'file_penghasilan_ayah', 'file_penghasilan_ibu', 'file_penghasilan_sendiri', 'file_kartu_kks', 'file_bukti_pembayaran_pbb', 'file_bpkb_stnk', 'file_foto_atap_rumah',
                    'file_foto_lantai_rumah', 'file_foto_kamar_mandi','file_foto_depan_rumah','file_foto_ruang_tamu','file_foto_dapur',

                    'file_foto_kartu_keluarga', 'file_bukti_pembayaran_pln', 'file_bukti_pembayaran_pdam',

                ], 'file',
                'skipOnEmpty' => true, 'extensions' => 'jpeg,jpg,png,pdf', 'maxSize' => 104857600
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
            $fileNames = $fieldName . $this->kode  . '.' . $image->extension;

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
            'kepemilikan_rumah' => 'Apakah Status Kepemilikan Rumah Anda ?',
            'sumber_air' => 'Apakah Sumber Air di Rumah Anda ?',
            'sumber_listrik' => 'Apakah Sumber Kelistrikan di Rumah Anda ?',
            'pembayaran_pbb' => 'Besaran Pembayaran Pajak Bumi dan Bangunan / Tahun',
            'pembayaran_pdam' => 'Besaran Pembayaran PDAM / Bulan ',
            'daya_pln' => 'Besaran Daya PLN di Rumah (VA)',
            'file_foto_kartu_keluarga' => 'File Kartu Keluarga'


        ];
    }

    public function getMahasiswa()
    {
        return $this->hasOne(Camaba::className(), ['kode' => 'kode']);
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

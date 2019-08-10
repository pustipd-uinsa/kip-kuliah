<?php

namespace app\models;

use Yii;

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
 * @property string $nama_ayah
 * @property string $nama_ibu
 * @property string $pekerjaan_ayah
 * @property string $pekerjaan_ibu
 * @property string $penghasilan_ayah
 * @property string $penghasilan_ibu
 * @property string $penghasilan_sendiri
 * @property string $alamat
 * @property integer $jumlah_anggota_keluarga
 * @property string $pembayaran_pbb
 * @property string $daya_pln
 * @property string $pembayaran_pdam
 * @property string $luas_tanah
 * @property string $luas_bangunan
 * @property integer $kepemilikan_rumah
 * @property integer $sumber_listrik
 * @property integer $sumber_air
 * @property string $file_penghasilan_ayah
 * @property string $file_penghasilan_ibu
 * @property string $file_penghasilan_sendiri
 * @property string $file_kartu_kks
 * @property string $file_bukti_pembayaran_pbb
 * @property string $file_bpkb_stnk
 * @property string $file_foto_atap_rumah
 * @property string $file_foto_lantai_rumah
 * @property string $file_foto_kamar_mandi
 * @property string $file_foto_kartu_keluarga
 */
class Borang1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'borang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hafalan_alquran', 'validasi_prestasi_akademik10_1', 'verivikasi_prestasi_akademik10_1', 'validasi_prestasi_akademik11_1', 'verivikasi_prestasi_akademik11_1', 'validasi_prestasi_akademik12_1', 'verivikasi_prestasi_akademik12_1', 'validasi_prestasi_akademik10_2', 'verivikasi_prestasi_akademik10_2', 'validasi_prestasi_akademik11_2', 'verivikasi_prestasi_akademik11_2', 'validasi_prestasi_akademik12_2', 'verivikasi_prestasi_akademik12_2', 'validasi_prestasi_non_akademik1', 'verivikasi_prestasi_non_akademik1', 'tingkat_prestasi_non_akademik1', 'validasi_prestasi_non_akademik2', 'verivikasi_prestasi_non_akademik2', 'tingkat_prestasi_non_akademik2', 'validasi_prestasi_non_akademik3', 'verivikasi_prestasi_non_akademik3', 'tingkat_prestasi_non_akademik3', 'validasi_prestasi_non_akademik4', 'verivikasi_prestasi_non_akademik4', 'tingkat_prestasi_non_akademik4', 'validasi_prestasi_non_akademik5', 'verivikasi_prestasi_non_akademik5', 'tingkat_prestasi_non_akademik5', 'status_finalisasi', 'jumlah_anggota_keluarga', 'kepemilikan_rumah', 'sumber_listrik', 'sumber_air'], 'integer'],
            [['nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'penghasilan_ayah', 'penghasilan_ibu',  'alamat', 'jumlah_anggota_keluarga', 'pembayaran_pbb', 'daya_pln', 'pembayaran_pdam', 'luas_tanah', 'luas_bangunan', 'kepemilikan_rumah', 'sumber_listrik', 'sumber_air'], 'required'],
            [['penghasilan_ayah', 'penghasilan_ibu', 'penghasilan_sendiri', 'pembayaran_pbb', 'daya_pln', 'pembayaran_pdam', 'luas_tanah', 'luas_bangunan'], 'number'],
            [['alamat'], 'string'],
            [['kode'], 'string', 'max' => 20],
            [['prestasi_akademik10_1', 'file_prestasi_akademik10_1', 'prestasi_akademik11_1', 'file_prestasi_akademik11_1', 'prestasi_akademik12_1', 'file_prestasi_akademik12_1', 'prestasi_akademik10_2', 'file_prestasi_akademik10_2', 'prestasi_akademik11_2', 'file_prestasi_akademik11_2', 'prestasi_akademik12_2', 'file_prestasi_akademik12_2', 'prestasi_non_akademik1', 'file_prestasi_non_akademik1', 'prestasi_non_akademik2', 'file_prestasi_non_akademik2', 'prestasi_non_akademik3', 'file_prestasi_non_akademik3', 'prestasi_non_akademik4', 'file_prestasi_non_akademik4', 'prestasi_non_akademik5', 'file_prestasi_non_akademik5'], 'string', 'max' => 100],
            [['nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'file_penghasilan_ayah', 'file_penghasilan_ibu', 'file_penghasilan_sendiri', 'file_kartu_kks', 'file_bukti_pembayaran_pbb', 'file_bpkb_stnk', 'file_foto_atap_rumah', 'file_foto_lantai_rumah', 'file_foto_kamar_mandi', 'file_foto_kartu_keluarga'], 'string', 'max' => 50],
        ];
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
            'prestasi_akademik10_1' => Yii::t('app', 'Prestasi Akademik10 1'),
            'file_prestasi_akademik10_1' => Yii::t('app', 'File Prestasi Akademik10 1'),
            'validasi_prestasi_akademik10_1' => Yii::t('app', 'Validasi Prestasi Akademik10 1'),
            'verivikasi_prestasi_akademik10_1' => Yii::t('app', 'Verivikasi Prestasi Akademik10 1'),
            'prestasi_akademik11_1' => Yii::t('app', 'Prestasi Akademik11 1'),
            'file_prestasi_akademik11_1' => Yii::t('app', 'File Prestasi Akademik11 1'),
            'validasi_prestasi_akademik11_1' => Yii::t('app', 'Validasi Prestasi Akademik11 1'),
            'verivikasi_prestasi_akademik11_1' => Yii::t('app', 'Verivikasi Prestasi Akademik11 1'),
            'prestasi_akademik12_1' => Yii::t('app', 'Prestasi Akademik12 1'),
            'file_prestasi_akademik12_1' => Yii::t('app', 'File Prestasi Akademik12 1'),
            'validasi_prestasi_akademik12_1' => Yii::t('app', 'Validasi Prestasi Akademik12 1'),
            'verivikasi_prestasi_akademik12_1' => Yii::t('app', 'Verivikasi Prestasi Akademik12 1'),
            'prestasi_akademik10_2' => Yii::t('app', 'Prestasi Akademik10 2'),
            'file_prestasi_akademik10_2' => Yii::t('app', 'File Prestasi Akademik10 2'),
            'validasi_prestasi_akademik10_2' => Yii::t('app', 'Validasi Prestasi Akademik10 2'),
            'verivikasi_prestasi_akademik10_2' => Yii::t('app', 'Verivikasi Prestasi Akademik10 2'),
            'prestasi_akademik11_2' => Yii::t('app', 'Prestasi Akademik11 2'),
            'file_prestasi_akademik11_2' => Yii::t('app', 'File Prestasi Akademik11 2'),
            'validasi_prestasi_akademik11_2' => Yii::t('app', 'Validasi Prestasi Akademik11 2'),
            'verivikasi_prestasi_akademik11_2' => Yii::t('app', 'Verivikasi Prestasi Akademik11 2'),
            'prestasi_akademik12_2' => Yii::t('app', 'Prestasi Akademik12 2'),
            'file_prestasi_akademik12_2' => Yii::t('app', 'File Prestasi Akademik12 2'),
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
            'nama_ayah' => Yii::t('app', 'Nama Ayah'),
            'nama_ibu' => Yii::t('app', 'Nama Ibu'),
            'pekerjaan_ayah' => Yii::t('app', 'Pekerjaan Ayah'),
            'pekerjaan_ibu' => Yii::t('app', 'Pekerjaan Ibu'),
            'penghasilan_ayah' => Yii::t('app', 'Penghasilan Ayah'),
            'penghasilan_ibu' => Yii::t('app', 'Penghasilan Ibu'),
            'penghasilan_sendiri' => Yii::t('app', 'Penghasilan Sendiri'),
            'alamat' => Yii::t('app', 'Alamat'),
            'jumlah_anggota_keluarga' => Yii::t('app', 'Jumlah Anggota Keluarga'),
            'pembayaran_pbb' => Yii::t('app', 'Pembayaran Pbb'),
            'daya_pln' => Yii::t('app', 'Daya Pln'),
            'pembayaran_pdam' => Yii::t('app', 'Pembayaran Pdam'),
            'luas_tanah' => Yii::t('app', 'Luas Tanah'),
            'luas_bangunan' => Yii::t('app', 'Luas Bangunan'),
            'kepemilikan_rumah' => Yii::t('app', 'Kepemilikan Rumah'),
            'sumber_listrik' => Yii::t('app', 'Sumber Listrik'),
            'sumber_air' => Yii::t('app', 'Sumber Air'),
            'file_penghasilan_ayah' => Yii::t('app', 'File Penghasilan Ayah'),
            'file_penghasilan_ibu' => Yii::t('app', 'File Penghasilan Ibu'),
            'file_penghasilan_sendiri' => Yii::t('app', 'File Penghasilan Sendiri'),
            'file_kartu_kks' => Yii::t('app', 'File Kartu Kks'),
            'file_bukti_pembayaran_pbb' => Yii::t('app', 'File Bukti Pembayaran Pbb'),
            'file_bpkb_stnk' => Yii::t('app', 'File Bpkb Stnk'),
            'file_foto_atap_rumah' => Yii::t('app', 'File Foto Atap Rumah'),
            'file_foto_lantai_rumah' => Yii::t('app', 'File Foto Lantai Rumah'),
            'file_foto_kamar_mandi' => Yii::t('app', 'File Foto Kamar Mandi'),
            'file_foto_kartu_keluarga' => Yii::t('app', 'File Foto Kartu Keluarga'),
        ];
    }
}

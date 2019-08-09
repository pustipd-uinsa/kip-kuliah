<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mhs".
 *
 * @property integer $id_mhs
 * @property string $kode
 * @property string $nama
 * @property string $jk
 * @property string $tgl_lhr
 * @property string $prodi
 * @property integer $jalur
 * @property integer $status
 * @property string $alamat
 * @property string $gol_dar
 * @property integer $prov
 * @property integer $kab
 * @property integer $kode_pos
 * @property string $tlp_rmh
 * @property string $hp
 * @property string $email
 * @property integer $agama
 * @property string $ukuran_baju
 * @property integer $warganegara
 * @property string $asal_sekolah
 * @property string $nama_ayah
 * @property string $peng_ayah
 * @property string $peker_ayah
 * @property string $nama_ibu
 * @property string $peng_ibu
 * @property string $peker_ibu
 * @property string $alamat_ortu
 * @property integer $anggota
 * @property string $hp_ortu
 * @property integer $peng_sendiri
 * @property string $penghasilan_total
 * @property integer $pbb
 * @property integer $pln
 * @property integer $pdam
 * @property string $kepemilikan
 * @property integer $luas_tanah
 * @property integer $luas_bangunan
 * @property string $sum_listrik
 * @property string $sum_air
 * @property integer $alat_kom
 * @property integer $tahun_masuk
 * @property string $upload_pbb
 * @property string $upload_stnk
 * @property string $upload_atap
 * @property string $upload_lantai
 * @property string $upload_pln
 * @property string $upload_pdam
 * @property string $upload_gaji_ayah
 * @property string $upload_gaji_ibu
 * @property string $upload_kk
 * @property string $upload_kjs
 * @property string $upload_rmh
 * @property string $upload_alat_kom
 * @property string $upload_srt_mrk
 * @property string $upload_penyakit
 * @property string $upload_panti_yatim
 * @property string $upload_tetangga
 * @property string $upload_surat_asli
 * @property string $upload_anakkuliah
 * @property string $upload_sendiri
 * @property string $upload_sktm
 * @property string $foto
 * @property integer $ver_tanah
 * @property integer $ver_bangunan
 * @property integer $ver_spd
 * @property integer $ver_atap
 * @property integer $ver_lantai
 * @property integer $ver_pbb
 * @property integer $ver_pln
 * @property integer $ver_pdam
 * @property integer $ver_ayah
 * @property integer $ver_ibu
 * @property integer $ver_anggota
 * @property integer $ver_sendiri
 * @property string $ver_kjs
 * @property integer $ver_alat_kom
 * @property integer $ver_srt_mrk
 * @property integer $ver_penyakit
 * @property integer $ver_panti_yatim
 * @property integer $ver_tetangga
 * @property integer $ver_surat_asli
 * @property integer $ver_anakkuliah
 * @property integer $ver_sktm
 * @property string $pilih_ukt
 * @property string $hasil
 * @property string $rekom_1
 * @property string $rekom_2
 * @property string $kel_1
 * @property integer $kel_2
 * @property string $alasan_1
 * @property string $alasan_2
 * @property integer $pindah
 * @property string $gantiUKT
 * @property string $alesan
 * @property integer $mhs_finalisasi
 * @property string $mhs_submiter
 * @property string $upload_skl
 * @property string $upload_datavalid
 * @property string $upload_rapor
 * @property string $upload_kesanggupan
 * @property integer $ver_rapor
 * @property integer $ver_kesanggupan
 * @property integer $revisi
 */
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'rekom_1', 'rekom_2', 'alasan_1'], 'required'],
            [['jalur', 'status', 'prov', 'kab', 'kode_pos', 'agama', 'warganegara', 'anggota', 'peng_sendiri', 'pbb', 'pln', 'pdam', 'luas_tanah', 'luas_bangunan', 'alat_kom', 'tahun_masuk', 'ver_tanah', 'ver_bangunan', 'ver_spd', 'ver_atap', 'ver_lantai', 'ver_pbb', 'ver_pln', 'ver_pdam', 'ver_ayah', 'ver_ibu', 'ver_anggota', 'ver_sendiri', 'ver_alat_kom', 'ver_srt_mrk', 'ver_penyakit', 'ver_panti_yatim', 'ver_tetangga', 'ver_surat_asli', 'ver_anakkuliah', 'ver_sktm', 'kel_2', 'pindah', 'mhs_finalisasi', 'ver_rapor', 'ver_kesanggupan', 'revisi'], 'integer'],
            [['alamat', 'alamat_ortu', 'alasan_1', 'alasan_2', 'alesan'], 'string'],
            [['kode', 'nama', 'asal_sekolah', 'penghasilan_total', 'sum_listrik', 'sum_air', 'upload_kjs', 'upload_rmh', 'upload_alat_kom', 'upload_srt_mrk', 'upload_penyakit', 'upload_panti_yatim', 'upload_tetangga', 'upload_surat_asli', 'upload_anakkuliah', 'upload_sendiri', 'upload_sktm', 'hasil', 'mhs_submiter', 'upload_skl', 'upload_datavalid', 'upload_rapor', 'upload_kesanggupan'], 'string', 'max' => 100],
            [['jk'], 'string', 'max' => 1],
            [['tgl_lhr', 'tlp_rmh'], 'string', 'max' => 20],
            [['prodi', 'email', 'nama_ayah', 'peker_ayah', 'nama_ibu', 'peker_ibu'], 'string', 'max' => 50],
            [['gol_dar'], 'string', 'max' => 2],
            [['hp', 'hp_ortu'], 'string', 'max' => 15],
            [['ukuran_baju'], 'string', 'max' => 4],
            [['peng_ayah', 'peng_ibu', 'kepemilikan', 'upload_pbb', 'upload_stnk', 'upload_atap', 'upload_lantai', 'upload_pln', 'upload_pdam', 'upload_gaji_ayah', 'upload_gaji_ibu', 'upload_kk', 'foto', 'ver_kjs'], 'string', 'max' => 200],
            [['pilih_ukt'], 'string', 'max' => 5],
            [['rekom_1', 'rekom_2'], 'string', 'max' => 10],
            [['kel_1', 'gantiUKT'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mhs' => Yii::t('app', 'Id Mhs'),
            'kode' => Yii::t('app', 'Kode'),
            'nama' => Yii::t('app', 'Nama'),
            'jk' => Yii::t('app', 'Jk'),
            'tgl_lhr' => Yii::t('app', 'Tgl Lhr'),
            'prodi' => Yii::t('app', 'Prodi'),
            'jalur' => Yii::t('app', 'Jalur'),
            'status' => Yii::t('app', 'Status'),
            'alamat' => Yii::t('app', 'Alamat'),
            'gol_dar' => Yii::t('app', 'Gol Dar'),
            'prov' => Yii::t('app', 'Prov'),
            'kab' => Yii::t('app', 'Kab'),
            'kode_pos' => Yii::t('app', 'Kode Pos'),
            'tlp_rmh' => Yii::t('app', 'Tlp Rmh'),
            'hp' => Yii::t('app', 'Hp'),
            'email' => Yii::t('app', 'Email'),
            'agama' => Yii::t('app', 'Agama'),
            'ukuran_baju' => Yii::t('app', 'Ukuran Baju'),
            'warganegara' => Yii::t('app', 'Warganegara'),
            'asal_sekolah' => Yii::t('app', 'Asal Sekolah'),
            'nama_ayah' => Yii::t('app', 'Nama Ayah'),
            'peng_ayah' => Yii::t('app', 'Penghasilan Ayah'),
            'peker_ayah' => Yii::t('app', 'Pekerjaan Ayah'),
            'nama_ibu' => Yii::t('app', 'Nama Ibu'),
            'peng_ibu' => Yii::t('app', 'Penghasilan Ibu'),
            'peker_ibu' => Yii::t('app', 'Pekerjaan Ibu'),
            'alamat_ortu' => Yii::t('app', 'Alamat Ortu'),
            'anggota' => Yii::t('app', 'Jumlah Anggota Keluarga'),
            'hp_ortu' => Yii::t('app', 'Hp Ortu'),
            'peng_sendiri' => Yii::t('app', 'Penghasilan Sendiri'),
            'penghasilan_total' => Yii::t('app', 'Penghasilan Total'),
            'pbb' => Yii::t('app', 'Pbb'),
            'pln' => Yii::t('app', 'Pln'),
            'pdam' => Yii::t('app', 'Pdam'),
            'kepemilikan' => Yii::t('app', 'Kepemilikan'),
            'luas_tanah' => Yii::t('app', 'Luas Tanah'),
            'luas_bangunan' => Yii::t('app', 'Luas Bangunan'),
            'sum_listrik' => Yii::t('app', 'Sum Listrik'),
            'sum_air' => Yii::t('app', 'Sum Air'),
            'alat_kom' => Yii::t('app', 'Alat Kom'),
            'tahun_masuk' => Yii::t('app', 'Tahun Masuk'),
            'upload_pbb' => Yii::t('app', 'Upload Pbb'),
            'upload_stnk' => Yii::t('app', 'Upload Stnk'),
            'upload_atap' => Yii::t('app', 'Upload Atap'),
            'upload_lantai' => Yii::t('app', 'Upload Lantai'),
            'upload_pln' => Yii::t('app', 'Upload Pln'),
            'upload_pdam' => Yii::t('app', 'Upload Pdam'),
            'upload_gaji_ayah' => Yii::t('app', 'Upload Gaji Ayah'),
            'upload_gaji_ibu' => Yii::t('app', 'Upload Gaji Ibu'),
            'upload_kk' => Yii::t('app', 'Upload Kk'),
            'upload_kjs' => Yii::t('app', 'Upload Kjs'),
            'upload_rmh' => Yii::t('app', 'Upload Rmh'),
            'upload_alat_kom' => Yii::t('app', 'Upload Alat Kom'),
            'upload_srt_mrk' => Yii::t('app', 'Upload Srt Mrk'),
            'upload_penyakit' => Yii::t('app', 'Upload Penyakit'),
            'upload_panti_yatim' => Yii::t('app', 'Upload Panti Yatim'),
            'upload_tetangga' => Yii::t('app', 'Upload Tetangga'),
            'upload_surat_asli' => Yii::t('app', 'Upload Surat Asli'),
            'upload_anakkuliah' => Yii::t('app', 'Upload Anakkuliah'),
            'upload_sendiri' => Yii::t('app', 'Upload Sendiri'),
            'upload_sktm' => Yii::t('app', 'Upload Sktm'),
            'foto' => Yii::t('app', 'Foto'),
            'ver_tanah' => Yii::t('app', 'Ver Tanah'),
            'ver_bangunan' => Yii::t('app', 'Ver Bangunan'),
            'ver_spd' => Yii::t('app', 'Ver Spd'),
            'ver_atap' => Yii::t('app', 'Ver Atap'),
            'ver_lantai' => Yii::t('app', 'Ver Lantai'),
            'ver_pbb' => Yii::t('app', 'Ver Pbb'),
            'ver_pln' => Yii::t('app', 'Ver Pln'),
            'ver_pdam' => Yii::t('app', 'Ver Pdam'),
            'ver_ayah' => Yii::t('app', 'Ver Ayah'),
            'ver_ibu' => Yii::t('app', 'Ver Ibu'),
            'ver_anggota' => Yii::t('app', 'Ver Anggota'),
            'ver_sendiri' => Yii::t('app', 'Ver Sendiri'),
            'ver_kjs' => Yii::t('app', 'Ver Kjs'),
            'ver_alat_kom' => Yii::t('app', 'Ver Alat Kom'),
            'ver_srt_mrk' => Yii::t('app', 'Ver Srt Mrk'),
            'ver_penyakit' => Yii::t('app', 'Ver Penyakit'),
            'ver_panti_yatim' => Yii::t('app', 'Ver Panti Yatim'),
            'ver_tetangga' => Yii::t('app', 'Ver Tetangga'),
            'ver_surat_asli' => Yii::t('app', 'Ver Surat Asli'),
            'ver_anakkuliah' => Yii::t('app', 'Ver Anakkuliah'),
            'ver_sktm' => Yii::t('app', 'Ver Sktm'),
            'pilih_ukt' => Yii::t('app', 'Pilih Ukt'),
            'hasil' => Yii::t('app', 'Hasil'),
            'rekom_1' => Yii::t('app', 'Rekom 1'),
            'rekom_2' => Yii::t('app', 'Rekom 2'),
            'kel_1' => Yii::t('app', 'Kel 1'),
            'kel_2' => Yii::t('app', 'Kel 2'),
            'alasan_1' => Yii::t('app', 'Alasan 1'),
            'alasan_2' => Yii::t('app', 'Alasan 2'),
            'pindah' => Yii::t('app', 'Pindah'),
            'gantiUKT' => Yii::t('app', 'Ganti Ukt'),
            'alesan' => Yii::t('app', 'Alesan'),
            'mhs_finalisasi' => Yii::t('app', 'Mhs Finalisasi'),
            'mhs_submiter' => Yii::t('app', 'Mhs Submiter'),
            'upload_skl' => Yii::t('app', 'Upload Skl'),
            'upload_datavalid' => Yii::t('app', 'Upload Datavalid'),
            'upload_rapor' => Yii::t('app', 'Upload Rapor'),
            'upload_kesanggupan' => Yii::t('app', 'Upload Kesanggupan'),
            'ver_rapor' => Yii::t('app', 'Ver Rapor'),
            'ver_kesanggupan' => Yii::t('app', 'Ver Kesanggupan'),
            'revisi' => Yii::t('app', 'Revisi'),
        ];
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

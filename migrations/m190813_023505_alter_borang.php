<?php

use yii\db\Migration;

class m190813_023505_alter_borang extends Migration
{
    public function up()
    {

        $this->addColumn('borang', 'verifikasi_pembayaran_pbb', $this->integer());
        $this->addColumn('borang', 'validasi_pembayaran_pbb', $this->integer());

        
        $this->addColumn('borang', 'verifikasi_kks', $this->integer());
        $this->addColumn('borang', 'validasi_kks', $this->integer());
        
        $this->addColumn('borang', 'verifikasi_penghasilan_ayah', $this->string(50));
        $this->addColumn('borang', 'validasi_penghasilan_ayah', $this->string(50));
      
        $this->addColumn('borang', 'verifikasi_penghasilan_ibu', $this->string(50));
        $this->addColumn('borang', 'validasi_penghasilan_ibu', $this->string(50));

        $this->addColumn('borang', 'file_bukti_pembayaran_pln', $this->string(50));
        $this->addColumn('borang', 'verifikasi_pembayaran_pln', $this->integer());
        $this->addColumn('borang', 'validasi_pembayaran_pln', $this->integer());

        $this->addColumn('borang', 'file_bukti_pembayaran_pdam', $this->string(50));
        $this->addColumn('borang', 'verifikasi_pembayaran_pdam', $this->integer());
        $this->addColumn('borang', 'validasi_pembayaran_pdam', $this->integer());

        $this->addColumn('borang', 'verifikasi_anggota_keluarga', $this->integer());
        $this->addColumn('borang', 'validasi_anggota_keluarga', $this->integer());
        
        $this->addColumn('borang', 'komentar_verifikator', $this->text());
        $this->addColumn('borang', 'komentar_validator', $this->text());
        
    }

    public function down()
    {
        echo "m190813_023505_alter_borang cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

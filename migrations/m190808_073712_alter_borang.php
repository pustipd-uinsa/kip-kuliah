<?php

use yii\db\Migration;

class m190808_073712_alter_borang extends Migration
{
    public function up()
    {
        $this->addColumn('borang', 'nama_ayah', $this->string(50)->notNull());
        $this->addColumn('borang', 'nama_ibu', $this->string(50)->notNull());
        $this->addColumn('borang', 'pekerjaan_ayah', $this->string(50)->notNull());
        $this->addColumn('borang', 'pekerjaan_ibu', $this->string(50)->notNull());
        $this->addColumn('borang', 'penghasilan_ayah', $this->decimal(19,2)->notNull());
        $this->addColumn('borang', 'penghasilan_ibu', $this->decimal(19,2)->notNull());
        $this->addColumn('borang', 'penghasilan_sendiri', $this->decimal(19,2)->notNull());
       
       
       
        $this->addColumn('borang', 'alamat', $this->text()->notNull());
        $this->addColumn('borang', 'jumlah_anggota_keluarga', $this->integer()->notNull());
       
        $this->addColumn('borang', 'pembayaran_pbb', $this->decimal(19,2)->notNull());
        $this->addColumn('borang', 'daya_pln', $this->decimal(19,2)->notNull());
        $this->addColumn('borang', 'pembayaran_pdam', $this->decimal(19,2)->notNull());
        
        $this->addColumn('borang', 'luas_tanah', $this->decimal(19,2)->notNull());
        $this->addColumn('borang', 'luas_bangunan', $this->decimal(19,2)->notNull());
        $this->addColumn('borang', 'kepemilikan_rumah', $this->integer()->notNull());
        $this->addColumn('borang', 'sumber_listrik', $this->integer()->notNull());
        $this->addColumn('borang', 'sumber_air', $this->integer()->notNull());
        
        $this->addColumn('borang', 'file_penghasilan_ayah', $this->string(50));
        $this->addColumn('borang', 'file_penghasilan_ibu', $this->string(50));
        $this->addColumn('borang', 'file_penghasilan_sendiri', $this->string(50));
        $this->addColumn('borang', 'file_kartu_kks', $this->string(50));
        $this->addColumn('borang', 'file_bukti_pembayaran_pbb', $this->string(50));
        $this->addColumn('borang', 'file_bpkb_stnk', $this->string(50));
        $this->addColumn('borang', 'file_foto_atap_rumah', $this->string(50));
        $this->addColumn('borang', 'file_foto_lantai_rumah', $this->string(50));
        $this->addColumn('borang', 'file_foto_kamar_mandi', $this->string(50));
        $this->addColumn('borang', 'file_foto_kartu_keluarga', $this->string(50));
        

        
    }

    public function down()
    {
        echo "m190808_073712_alter_borang cannot be reverted.\n";

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

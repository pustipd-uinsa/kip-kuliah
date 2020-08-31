<?php

use yii\db\Migration;

class m190806_065632_borang extends Migration
{
    public function up()
    {
        $this->createTable('borang', [
            'id' => $this->primaryKey(),
            'nim' => $this->string(20),
    'upload_kk' =>'TEXT NULL',
    'upload_ktp' =>'TEXT NULL',
    'upload_foto' =>'TEXT NULL',
       'upload_ktm' =>'TEXT NULL',
       'upload_raport1' =>'TEXT NULL',
       'upload_raport2' =>'TEXT NULL',
       'upload_raport3' =>'TEXT NULL',
       'upload_raport4' =>'TEXT NULL',
       'upload_raport5' =>'TEXT NULL',
       'upload_raport6' =>'TEXT NULL',
       'upload_prestasi' =>'TEXT NULL',
       'upload_listrik' =>'TEXT NULL',
       'upload_pdam' =>'TEXT NULL',
       'upload_pbb' =>'TEXT NULL',
       'upload_dokumen' =>'TEXT NULL',
       'upload_meninggal' =>'TEXT NULL',
       'upload_phk' =>'TEXT NULL',
       'upload_pakta_integritas' =>'TEXT NULL',
       

  'status_finalisasi' =>$this->integer()->notNull()->defaultValue(0)

          ]);
    }

    public function down()
    {
        echo "m190806_065632_borang cannot be reverted.\n";

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

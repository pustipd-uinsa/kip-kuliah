<?php

use yii\db\Migration;

class m190806_065632_borang extends Migration
{
    public function up()
    {
        $this->createTable('borang', [
            'id' => $this->primaryKey(),
            'nim' => $this->string(20),
            'jenis_keringanan' => $this->integer(),
'upload_meninggal' =>'TEXT NULL',
	'upload_pemutusan' =>'TEXT NULL',
	'upload_kerugian' =>'TEXT NULL',
	'upload_penutupan' =>'TEXT NULL',
	'upload_penurunan' =>'TEXT NULL',
	'upload_lain' =>'TEXT NULL',
	'upload_transkrip' =>'TEXT NULL',
	'upload_kesanggupan' =>'TEXT NULL',
	'upload_permohonan' =>'TEXT NULL',
	'upload_kk' =>'TEXT NULL',
	'upload_ktm' =>'TEXT NULL',
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

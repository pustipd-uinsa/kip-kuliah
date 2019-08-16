<?php

use yii\db\Migration;

class m190816_073310_alterborang extends Migration
{
    public function up()
    {
        $this->addColumn('borang', 'file_foto_depan_rumah', $this->string(50));
        $this->addColumn('borang', 'file_foto_ruang_tamu', $this->string(50));
        $this->addColumn('borang', 'file_foto_dapur', $this->string(50));
        
    

    }

    public function down()
    {

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

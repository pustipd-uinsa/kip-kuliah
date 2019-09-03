<?php

use yii\db\Migration;

class m190813_072620_alter_borang extends Migration
{
    public function up()
    {

        $this->addColumn('borang', 'status_verifikasi', $this->integer()->notNull()->defaultValue('0'));
        $this->addColumn('borang', 'status_validasi', $this->integer()->notNull()->defaultValue('0'));
        
  
    }

    public function down()
    {
        echo "m190813_072620_alter_borang cannot be reverted.\n";

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

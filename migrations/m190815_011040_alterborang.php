<?php

use yii\db\Migration;

class m190815_011040_alterborang extends Migration
{
    public function up()
    {
        $this->addColumn('borang', 'omzet_harian_ayah', $this->decimal(19,2));
        $this->addColumn('borang', 'omzet_harian_ibu', $this->decimal(19,2));

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

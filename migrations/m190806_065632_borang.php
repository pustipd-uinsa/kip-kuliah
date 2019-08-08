<?php

use yii\db\Migration;

class m190806_065632_borang extends Migration
{
    public function up()
    {
        $this->createTable('borang', [
            'id' => $this->primaryKey(),
            'kode' => $this->string(20),
            'hafalan_alquran' => $this->integer(),

            'prestasi_akademik10_1' => $this->string(100),
            'file_prestasi_akademik10_1' => $this->string(100),
            'validasi_prestasi_akademik10_1' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_akademik10_1' => $this->integer()->notNull()->defaultValue(0),
           
            'prestasi_akademik11_1' => $this->string(100),
            'file_prestasi_akademik11_1' => $this->string(100),
            'validasi_prestasi_akademik11_1' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_akademik11_1' => $this->integer()->notNull()->defaultValue(0),
           
            'prestasi_akademik12_1' => $this->string(100),
            'file_prestasi_akademik12_1' => $this->string(100),
            'validasi_prestasi_akademik12_1' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_akademik12_1' => $this->integer()->notNull()->defaultValue(0),
           
            'prestasi_akademik10_2' => $this->string(100),
            'file_prestasi_akademik10_2' => $this->string(100),
            'validasi_prestasi_akademik10_2' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_akademik10_2' => $this->integer()->notNull()->defaultValue(0),
           
            'prestasi_akademik11_2' => $this->string(100),
            'file_prestasi_akademik11_2' => $this->string(100),
            'validasi_prestasi_akademik11_2' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_akademik11_2' => $this->integer()->notNull()->defaultValue(0),
           
            'prestasi_akademik12_2' => $this->string(100),
            'file_prestasi_akademik12_2' => $this->string(100),
            'validasi_prestasi_akademik12_2' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_akademik12_2' => $this->integer()->notNull()->defaultValue(0),

            'prestasi_non_akademik1' => $this->string(100),
            'file_prestasi_non_akademik1' => $this->string(100),
            'validasi_prestasi_non_akademik1' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_non_akademik1' => $this->integer()->notNull()->defaultValue(0),
            'tingkat_prestasi_non_akademik1' => $this->integer(),
            
            'prestasi_non_akademik2' => $this->string(100),
            'file_prestasi_non_akademik2' => $this->string(100),
            'validasi_prestasi_non_akademik2' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_non_akademik2' => $this->integer()->notNull()->defaultValue(0),
            'tingkat_prestasi_non_akademik2' => $this->integer(),

            'prestasi_non_akademik3' => $this->string(100),
            'file_prestasi_non_akademik3' => $this->string(100),
            'validasi_prestasi_non_akademik3' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_non_akademik3' => $this->integer()->notNull()->defaultValue(0),
            'tingkat_prestasi_non_akademik3' => $this->integer(),


            'prestasi_non_akademik4' => $this->string(100),
            'file_prestasi_non_akademik4' => $this->string(100),
            'validasi_prestasi_non_akademik4' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_non_akademik4' => $this->integer()->notNull()->defaultValue(0),
            'tingkat_prestasi_non_akademik4' => $this->integer(),


            'prestasi_non_akademik5' => $this->string(100),
            'file_prestasi_non_akademik5' => $this->string(100),
            'validasi_prestasi_non_akademik5' => $this->integer()->notNull()->defaultValue(0),
            'verivikasi_prestasi_non_akademik5' => $this->integer()->notNull()->defaultValue(0),
            'tingkat_prestasi_non_akademik5' => $this->integer(),
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

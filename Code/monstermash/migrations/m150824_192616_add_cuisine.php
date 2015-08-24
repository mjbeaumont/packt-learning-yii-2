<?php

use yii\db\Schema;
use yii\db\Migration;

class m150824_192616_add_cuisine extends Migration
{
    public function up()
    {
        $this->createTable('{{%cuisine}}',
            [
                'id' => Schema::TYPE_PK,
                'description' => Schema::TYPE_STRING
            ],
            'engine=InnoDB');

        $this->addColumn('{{%monster}}','cuisineId', Schema::TYPE_INTEGER);
        $this->addForeignKey('cuisineId','{{%monster}}','cuisineId','{{%cuisine}}','id');

        $this->batchInsert('{{%cuisine}}',['description',],[
            ['Blood'],
            ['Transylvanian Continental'],
            ['Brains'],
            ['Souls']
        ]);
    }

    public function down()
    {
        $this->dropForeignKey('cuisineId','{{%monster}}');
        $this->dropIndex('cuisineId','{{%monster}}');
        $this->dropTable('{{%cuisine}}');
        $this->dropColumn('{{%monster}}','cuisineId');

        return true;
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

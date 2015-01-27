<?php

use yii\db\Schema;
use yii\db\Migration;

class m150126_065306_create_products_table extends Migration
{
    public function up()
    {
		$this->createTable('products', [
		'id' => Schema::TYPE_PK,
		'title' => Schema::TYPE_STRING . ' NOT NULL',
		'content' => Schema::TYPE_TEXT,
		]);
    }

    public function down()
    {
        $this->dropTable('products');
    }
}

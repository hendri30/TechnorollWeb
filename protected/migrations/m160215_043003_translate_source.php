<?php

class m160215_043003_translate_source extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_translate_source',array(
			'id'		=>	'INT NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'category'	=>	'VARCHAR (32) UNIQUE',
			'message'	=>	'TEXT',
		));
	}

	public function down()
	{
		$this->dropTable('tbl_translate_source');
		// echo "m160215_043003_translate_source does not support migration down.\n";
		// return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
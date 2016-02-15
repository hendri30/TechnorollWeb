<?php

class m160215_042527_portfolio extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_portfolio',array(
			'id'			=>	'pk',
			'name'			=>	'varchar (120) NOT NULL',
			'file_name'		=>	'varchar (100) NOT NULL',
			'link'			=>	'varchar (255)',
			'active'		=>	'boolean NOT NULL',
			'last_update'	=>	'datetime'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_portfolio');
		// echo "m160215_042527_portfolio does not support migration down.\n";
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
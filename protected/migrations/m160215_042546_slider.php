<?php

class m160215_042546_slider extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_slider',array(
			'id'			=>	'pk',
			'caption'		=>	'varchar (100)',
			'quotes'		=>	'text',
			'file_name'		=>	'varchar (255) NOT NULL',
			'active'		=>	'boolean NOT NULL',
			'sequence'		=>	'boolean NOT NULL',
			'last_update'	=>	'datetime'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_slider');
		// echo "m160215_042546_slider does not support migration down.\n";
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
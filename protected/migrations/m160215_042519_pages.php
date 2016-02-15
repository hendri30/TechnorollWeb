<?php

class m160215_042519_pages extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_pages',array(
			'id'			=>	'pk',
			'key'			=>	'varchar (80) UNIQUE',
			'meta_tag'		=>	'text',
			'meta_desc'		=>	'text',
			'name'			=>	'varchar (120) NOT NULL',
			'content'		=>	'text NOT NULL',
			'thumb_image'	=>	'varchar (100)',
			'last_update'	=>	'datetime'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_pages');
		// echo "m160215_042519_pages does not support migration down.\n";
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
<?php

class m160215_042512_contact extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_contact',array(
			'id'		=>	'pk',
			'name'		=>	'varchar (64) not null',
			'email'		=>	'varchar (64) not null',
			'subject'	=>	'varchar (64) not null',
			'message'	=>	'text not null',
			'created'	=>	'datetime'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_contact');
		// echo "m160215_042512_contact does not support migration down.\n";
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
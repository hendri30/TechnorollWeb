<?php

class m160215_042501_user extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user',array(
			'id'		=>	'pk',
			'username'	=>	'varchar (64) not null',
			'password'	=>	'varchar (128) not null',
			'role_id'	=>	'int not null',
			'last_login'=>	'datetime'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
		// echo "m160215_042501_user does not support migration down.\n";
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
<?php

class m160215_042506_role extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_role',array(
			'id'		=>	'pk',
			'role_name'	=>	'varchar (32) not null'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_role');
		// echo "m160215_042506_role does not support migration down.\n";
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
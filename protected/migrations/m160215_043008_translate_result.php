<?php

class m160215_043008_translate_result extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_translate_result',array(
			'id'			=>	'INTEGER NOT NULL',
			'language'		=>	'VARCHAR (16)',
			'translation'	=>	'TEXT',
		));
		$this->addPrimaryKey('PK_tbl_translate_result','tbl_translate_result','id, language');
		$this->addForeignKey(
			'FK_tbl_translate_result_tbl_translate_source',
			'tbl_translate_result',
			'id',
			'tbl_translate_source',
			'id',
			'CASCADE',
			'RESTRICT'
		);
	}

	public function down()
	{
		$this->dropTable('tbl_translate_result');
		// echo "m160215_043008_translate_result does not support migration down.\n";
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
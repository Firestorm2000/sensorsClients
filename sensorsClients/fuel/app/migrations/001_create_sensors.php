<?php

namespace Fuel\Migrations;

class Create_sensors
{
	public function up()
	{
		\DBUtil::create_table('sensors', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'name' => array('constraint' => 20, 'null' => false, 'type' => 'varchar'),
			'unit' => array('constraint' => 10, 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sensors');
	}
}
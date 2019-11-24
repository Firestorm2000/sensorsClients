<?php

namespace Fuel\Migrations;

class Create_sensors
{
	public function up()
	{
		\DBUtil::create_table('sensors', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'name' => array('constraint' => 30, 'null' => false, 'type' => 'varchar'),
			'unit' => array('constraint' => 30, 'null' => false, 'type' => 'varchar'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sensors');
	}
}
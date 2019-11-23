<?php

namespace Fuel\Migrations;

class Create_sensors
{
	public function up()
	{
		\DBUtil::create_table('sensors', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => false,),
			'name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'unit' => array('null' => false, 'type' => 'text'),
			
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sensors');
	}
}

<?php

namespace Fuel\Migrations;

class Create_reports
{
	public function up()
	{
		\DBUtil::create_table('reports', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'sensor_id'=> array('type' => 'int'),
			'value' => array('constraint' => 10, 'null' => false, 'type' => 'varchar'),
			'timestamp' => array('constraint' => 11, 'null' => false, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('reports');
	}
}

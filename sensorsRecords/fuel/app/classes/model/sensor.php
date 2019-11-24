<?php
class Model_Sensor extends Model_Crud
{
	protected static $_table_name = 'sensors';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		//$val->add_field('id', 'Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[30]');
		$val->add_field('unit', 'Unit', 'required|max_length[30]');

		return $val;
	}
	protected static $_has_many = array( //has many
		'reports' => array(
			'key_form' => 'id',
			'model_to'=>'Model_Report',
			'key_to' => 'sensor_id',
			'cascade_save' => true,
			'cascade_delete' => false,
		)
	);


}

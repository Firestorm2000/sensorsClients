<?php
class Model_Sensor extends Model_Crud
{
	protected static $_table_name = 'sensors';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('id', 'Id', 'required|valid_string[numeric]');
		$val->add_field('unit', 'Unit', 'required');

		return $val;
	}

}

<?php

class Model_Report extends \Orm\Model
{
	protected static $_properties = array(
		"id" => array(
			"label" => "Id",
			"data_type" => "int",
		),
		"reported" => array(
			"label" => "Reported",
			"data_type" => "timestamp",
		),
		"sensor_id" => array(
			"label" => "Sensor id",
			"data_type" => "int",
		),
		"value" => array(
			"label" => "Value",
			"data_type" => "int",
		),
		"created_at" => array(
			"label" => "Created at",
			"data_type" => "int",
		),
		"updated_at" => array(
			"label" => "Updated at",
			"data_type" => "int",
		),
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'property' => 'created_at',
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'property' => 'updated_at',
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'reports';

	protected static $_primary_key = array('id');

	protected static $_has_many = array(
	);

	protected static $_many_many = array(
	);

	protected static $_has_one = array(
	);

	protected static $_belongs_to = array(
	);
	//function for showing all reports in the index page of the report controller
	//$order -> the column for ORDER BY
	//$dir -> ASC or DESC
	public static function show_reports($order,$dir){
		//query with the given values
			 $results = DB::select()->from('reports')
			 												->as_object('Model_Report')
															->order_by($order,$dir)
															->execute()
															->as_array();
			 return $results;
	}

}

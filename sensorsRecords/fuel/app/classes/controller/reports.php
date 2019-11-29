<?php

class Controller_Reports extends Controller_Rest
{
	//example rest get: /reports/report?id=&&value=23
	public function get_report(){
		//getting  the sensor_id and value from URL and recorded from date()
		//setting the values to a Model_Report object,
		$report = Model_Report::forge(array(
			'sensor_id' => Input::get('id'),
			'value' => Input::get('value'),
			'reported' => date('Y-m-d H:i:s'),
		));
		//saving the object
		if ($report and $report->save())
		{
			Session::set_flash('success', 'Added report');
		}
		else Session::set_flash('error', 'failed to save report');
		//rediredting to the page with all reports
		Response::redirect('report');
		//manual check 
				// return $this ->response(
				// 	array(
				// 		'id'=>Input::get('id'),
				// 		'value'=>Input::get('value'),
				// 		'timestamp'=> time(),
				// 		'empty' => null
				// 	)
				// );


	}
	/*public function get_reportSort(){
		$value= Input::get('value');
		$dir =Input::get('dir');
		$reports = Model_Report::show_reports($value,$dir);
		//$ReportController = new Controller_Report();
		//$ReportController->action_index()->template->title = "Reports";
		//$report->template->content = View::forge('report/index',array('reports'=>$reports));
		//Response::redirect('report');
		return $this ->response(array(
			'value'=>Input::get('value'),
			'dir'=>Input::get('dir'),
			'model'=>Model_Report::show_reports($value,$dir)
		));
	}*/
}

<?php

class Controller_Reports extends Controller_Rest
{
	public function get_report(){
		$report = Model_Report::forge(array(
			'sensor_id' => Input::get('id'),
			'value' => Input::get('value'),
			'reported' => date('Y-m-d H:i:s'),
		));

		if ($report and $report->save())
		{
			Session::set_flash('success', 'Added report');
		}
		else Session::set_flash('error', 'failed to save report');

		//Response::redirect('reports');

				return $this ->response(
					array(
						'id'=>Input::get('id'),
						'value'=>Input::get('value'),
						'timestamp'=> time(),
						'empty' => null
					)
				);


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

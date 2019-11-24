<?php

class Controller_Reports extends Controller_Rest
{

	public function action_index()
	{
		$data['reports'] = Model_Report::find_all();
		$this->template->title = 'Reports &raquo; Index';
		$this->template->content = View::forge('reports/index', $data);
	}
	public function get_report(){
		$report = Model_Report::forge(array(
			'sensor_id' => Input::get('id'),
			'value' => Input::get('value'),
			'reported' => date('Y-m-d H:i:s'),
		));

		if ($report and $report->save())
		{
			Session::set_flash('success', 'Added report');
			//Response::redirect('sensor');
		}
		else Session::set_flash('erroe', 'failed to save report');

				return $this ->response(
					array(
						'id'=>Input::get('id'),
						'value'=>Input::get('value'),
						'timestamp'=> time(),
						'empty' => null
					)
				);

	}
}

<?php

class Controller_Reports extends Controller_Rest
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Reports &raquo; Index';
		$this->template->content = View::forge('reports/index', $data);
	}
	public function get_report(){
		return $this ->response(
			array(
				'foo'=>Input::get('foo'),
				'baz'=>array(
					1,50,219
				),
				'empty' => null
			)
		);
	}
}

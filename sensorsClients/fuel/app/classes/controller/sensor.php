<?php

class Controller_Sensor extends Controller_Template
{

	public function action_create()
	{
		$data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Sensor &raquo; Create';
		$this->template->content = View::forge('sensor/create', $data);
	}

	public function action_delete()
	{
		$data["subnav"] = array('delete'=> 'active' );
		$this->template->title = 'Sensor &raquo; Delete';
		$this->template->content = View::forge('sensor/delete', $data);
	}

	public function action_update()
	{
		$data["subnav"] = array('update'=> 'active' );
		$this->template->title = 'Sensor &raquo; Update';
		$this->template->content = View::forge('sensor/update', $data);
	}

	public function action_read()
	{
		$data["subnav"] = array('read'=> 'active' );
		$this->template->title = 'Sensor &raquo; Read';
		$this->template->content = View::forge('sensor/read', $data);
	}

}

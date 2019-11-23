<?php

class Controller_Reports extends Controller_Template
{

	public function action_create()
	{
		$data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Reports &raquo; Create';
		$this->template->content = View::forge('reports/create', $data);
	}

	public function action_update()
	{
		$data["subnav"] = array('update'=> 'active' );
		$this->template->title = 'Reports &raquo; Update';
		$this->template->content = View::forge('reports/update', $data);
	}

	public function action_read()
	{
		$data["subnav"] = array('read'=> 'active' );
		$this->template->title = 'Reports &raquo; Read';
		$this->template->content = View::forge('reports/read', $data);
	}

	public function action_delete()
	{
		$data["subnav"] = array('delete'=> 'active' );
		$this->template->title = 'Reports &raquo; Delete';
		$this->template->content = View::forge('reports/delete', $data);
	}

}

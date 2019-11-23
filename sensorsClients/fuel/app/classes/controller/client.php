<?php

class Controller_Client extends Controller_Template
{

	public function action_create()
	{
		$data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Client &raquo; Create';
		$this->template->content = View::forge('client/create', $data);
	}

	public function action_delete()
	{
		$data["subnav"] = array('delete'=> 'active' );
		$this->template->title = 'Client &raquo; Delete';
		$this->template->content = View::forge('client/delete', $data);
	}

	public function action_update()
	{
		$data["subnav"] = array('update'=> 'active' );
		$this->template->title = 'Client &raquo; Update';
		$this->template->content = View::forge('client/update', $data);
	}

	public function action_read()
	{
		$data["subnav"] = array('read'=> 'active' );
		$this->template->title = 'Client &raquo; Read';
		$this->template->content = View::forge('client/read', $data);
	}

}

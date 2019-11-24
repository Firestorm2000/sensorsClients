<?php
class Controller_Sensor extends Controller_Template
{

	public function action_index()
	{
		$data['sensors'] = Model_Sensor::find_all();
		$this->template->title = "Sensors";
		$this->template->content = View::forge('sensor/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('sensor');

		$data['sensor'] = Model_Sensor::find_by_pk($id);

		$this->template->title = "Sensor";
		$this->template->content = View::forge('sensor/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Sensor::validate('create');

			if ($val->run())
			{
				$sensor = Model_Sensor::forge(array(
					'id' => Input::post('id'),
					'name' => Input::post('name'),
					'unit' => Input::post('unit'),
				));

				if ($sensor and $sensor->save())
				{
					Session::set_flash('success', 'Added sensor #'.$sensor->id.'.');
					Response::redirect('sensor');
				}
				else
				{
					Session::set_flash('error', 'Could not save sensor.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Sensors";
		$this->template->content = View::forge('sensor/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('sensor');

		$sensor = Model_Sensor::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Sensor::validate('edit');

			if ($val->run())
			{
				$sensor->id = Input::post('id');
				$sensor->name = Input::post('name');
				$sensor->unit = Input::post('unit');

				if ($sensor->save())
				{
					Session::set_flash('success', 'Updated sensor #'.$id);
					Response::redirect('sensor');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('sensor', $sensor, false);
		$this->template->title = "Sensors";
		$this->template->content = View::forge('sensor/edit');

	}

	public function action_delete($id = null)
	{
		if ($sensor = Model_Sensor::find_one_by_id($id))
		{
			$sensor->delete();

			Session::set_flash('success', 'Deleted sensor #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete sensor #'.$id);
		}

		Response::redirect('sensor');

	}

}

<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    if (Input::method() == 'POST'){
      $value = Input::post('value');
      $reports = Model_Report::show_reports($value,'asc');
    } else {
      $value ='value';
      $reports = Model_Report::show_reports($value,'desc');
    }

    $this->template->title = "Reports";
    $this->template->content = View::forge('report/index',
                                array('reports'=>$reports,
                                    ));

  }
}

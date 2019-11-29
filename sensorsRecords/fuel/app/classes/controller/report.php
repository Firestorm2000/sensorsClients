<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    if (Input::method() == 'POST'){
      $value = Input::post('value');
      if(Input::post('dirs')){
          $reports = Model_Report::show_reports($value,'asc');
      } else $reports = Model_Report::show_reports($value,'desc');
    } else {
      $value ='value';
      $reports = Model_Report::show_reports($value,'asc');
    }

    $this->template->title = "Reports";
    $this->template->content = View::forge('report/index',
                                array('reports'=>$reports,
                                    ));

  }
}

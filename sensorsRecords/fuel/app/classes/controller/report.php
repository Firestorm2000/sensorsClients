<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    if (Input::method() == 'POST'){
      $value = Input::post('value');
      if(Input::post('dir')){
          $dir ='desc';
      } else $dir='asc';
    } else {
      $value ='value';
      $dir='desc';
    }
    $reports = Model_Report::show_reports($value,$dir);
    $this->template->title = "Reports";
    $this->template->content = View::forge('report/index',
                                array('reports'=>$reports,
                                    ));

  }
}

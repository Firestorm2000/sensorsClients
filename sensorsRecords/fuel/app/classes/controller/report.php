<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    if (Input::method() == 'POST'){
      $value = Input::post('value');
    } else $value ='value';
    $reports = Model_Report::show_reports($value,'asc');
    $this->template->title = "Reports";
    $this->template->content = View::forge('report/index',
                                array('reports'=>$reports,
                                      // 'dir'=>$dir,
                                      // 'value'=>$value
                                    ));

  }
  /*public function action_sort(){
    if (Input::method() == 'POST'){
      $value = Input::post('value');
      $value='sensor_id';
    } else $value ='reported';
    $reports = Model_Report::show_reports($value,'asc');
    $this->template->title = "Reports";
    $this->template->content = View::forge('report/index',
                                array('reports'=>$reports,
                                      // 'dir'=>$dir,
                                      // 'value'=>$value
                                    ));
  }*/
  // public function get_index($value,$dir){
  //   $reports = Model_Report::show_reports($value,$dir);
  //   Session::setFlash('value',$value);
  //   $this->template->title = "Reports";
  //   $this->template->content = View::forge('report/index',
  //                               array('reports'=>$reports,
  //                                   ));
  // }
}

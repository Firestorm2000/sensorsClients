<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    //Session::set('direction','asc');
    if (Input::method() == 'POST'){
      //geting the value of the headers(buttons) of the table columns
      $value = Input::post('value');
      //checking for change in the checkbox and changing the direction
      $dir = Session::get('direction');
      //change value of direction on every click
      if(Session::get('direction') == 'asc'){
        Session::set('direction','desc');
      }else Session::set('direction','asc');
    } else {
      //inizialising values for the table
      $value ='value';
      $dir='desc';
    }
    //getting all reports ORDER by $value '$dir'
    $reports = Model_Report::show_reports($value,$dir);

    //setting title to the view index
    $this->template->title = "Reports";
    //setting the content of the view index
    $this->template->content = View::forge('report/index',
                                array('reports'=>$reports,
                                    ));

  }
}

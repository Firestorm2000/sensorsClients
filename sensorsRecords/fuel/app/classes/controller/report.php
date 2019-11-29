<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    if (Input::method() == 'POST'){
      //geting the value of the headers(buttons) of the table columns
      $value = Input::post('value');
      //checking for change in the checkbox and changing the direction
      if(Input::post('dir')){
          $dir ='desc';
      } else $dir='asc';
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

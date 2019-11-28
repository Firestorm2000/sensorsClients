<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    //$order_column = recorded;
    $reports = Model_Report::show_reports('reported','asc');
    // $value = 'reported';
    // $dir ='asc'
    $this->template->title = "Reports";
    $this->template->content = View::forge('report/index',
                                array('reports'=>$reports,
                                      // 'dir'=>$dir,
                                      // 'value'=>$value
                                    ));

  }
}

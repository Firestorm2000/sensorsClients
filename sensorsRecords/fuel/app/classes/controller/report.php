<?php
class Controller_Report extends Controller_Template{
  public function action_index()
  {
    $reports = Model_Report::show_reports();
    $this->template->title = "Reports";
    $this->template->content = View::forge('report/index', array('reports'=>$reports));

  }
}

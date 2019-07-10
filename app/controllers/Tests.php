<?php
class Tests extends Controller {
  public function __construct(){
    $this->testModel = $this->model('Test');
  }


  //The name of the function corresponds to the name of the View in the views folder.
  public function index() {
    $tests = $this->testModel->getTests();
    $data  = ['title' => 'Test', 'tests' => $tests];

    $this->view("tests/test", $data);
  }
}
?>

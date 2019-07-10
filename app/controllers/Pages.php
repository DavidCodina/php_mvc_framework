<?php
class Pages extends Controller {
  public function __construct(){
  }

  //The name of the function corresponds to the name of the View in the views folder.
  public function index() {
    $data = ['title' => 'Home'];
    $this->view("pages/index", $data);
  }


  public function about(){
    $data = ['title' => 'About'];
    $this->view("pages/about", $data);
  }
  //Create additional methods for rendering additional views...
}
?>

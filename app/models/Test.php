<?php
//////////////////////////////////////////////////////////////////////////////
//
//  It's a good convention to have your models singular and your controllers plural
//  (controller file name and controller class name).
//
//  Note: Test.php was merely a test for trying out Database.php
//

//  This model will be loaded with the controller.
//  Remember that Controller.php has:
//
//        public function model($model){
//          require_once '../app/models/' . $model . 'php';
//
//          return new $model();
//         }
//
//
//  To test this we used Pages.php:
//
//      public function __construct(){
//        //This is just a test.
//        $this->postModel = $this->model('Test');
//      }
//
//
//  At present, it echoed: SQLSTATE[HY000] [1049] Unknown database 'php_test'
//  This is appropriate given that we currently don't have a databse set up yet.
//  Normally, I would create an install.php (requiring config.php), and data/init.sql
//  to set up the database, and then I would include these files inside of app.
//  The problem with doing this is that the .htaccess files prohibit access to app.
//  Thus we have to do it manually using phpmyadmin.
//
//
//////////////////////////////////////////////////////////////////////////////

class Test {
  private $db;

  public function __construct(){
    $this->db = new Database;
  }


  public function getTests(){
    $this->db->query("SELECT * FROM tests");

    $results = $this->db->resultSet();

    return $results;
    //or just return $this->db->resultSet();
  }
}
?>

<?php
  define('APPROOT', dirname(dirname(__FILE__)));
  define('URLROOT', _YOUR_URL_);        //e.g., 'http://localhost/php_mvc_framework'
  define('SITENAME', _YOUR_SITENAME_);  //e.g., 'PHP MVC Framework'

  //Database Parameters:
  define('DB_HOST', 'localhost');
  define('DB_USER', _YOUR_USER_);       //Will be 'root' by default if using XAMPP
  define('DB_PASS', _YOUR_PASSWORD_);   //Will be '' by default in XAMPP
  define('DB_NAME', _YOUR_DB_NAME_);    //Set up a database, in phpmyadmin, on computer, remotely, whatever...
?>

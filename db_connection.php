<?php
  //database connection code here
  $server   = "localhost";
  $username = "root"; //built in admin username
  $password = ""; //by default its blank
  $db_name  = "nzfashion";

  $mysqli = new mysqli($server,$username,$password,$db_name);

  if($mysqli->connect_error){
    echo "<pre>";
    echo $mysqli->connect_error;
    die("connection failed");
    echo "</pre>";
  }
   //echo "connection successfull";
?>

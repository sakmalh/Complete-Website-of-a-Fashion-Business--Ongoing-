<?php
session_start();
require("db_connection.php");
require("code_bank_inc.php");

 $userexist = false;
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

   $userexist = true;

 } else{
   header("location:user_login.php");
 }


  if($userexist == true){
    $userid = $_SESSION['userid'];
    $proid = $_GET['value'];


    $sql2 = "select * from wish where proid=$proid AND userid=$userid";
    $x = $mysqli->query($sql2);
    if(mysqli_num_rows($x)>0){
     header("location:indexs.php");
    } else {

     $sql  = "insert into wish (proid,userid) values(";
     $sql .= "'$proid',";
     $sql .= "'$userid')";

     $x = $mysqli->query($sql);

     header("location:indexs.php");
   }
  }

   ?>

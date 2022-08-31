<?php
  //1st step and should be done at top and at the beginning
  session_start();

  //connecting to the databse
  require("db_connection.php");

  /*echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

  $useremail     = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];

  //searching for the user account only using the user_id
  $sql = "select * from userdetails where useremail='$useremail'";

  //execute the sql comamnd
  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    //username matched
    //lets check for the password
    $row = mysqli_fetch_assoc($rs);

     if($row['userpass'] == $access_code){

      //echo "password also matched + username also matched";
      //lets send or redirect the user to dashboard.php

      //store info in $_SESSION
      $_SESSION['loggedin'] = true;
      $_SESSION['userid']  = $row['user_id'];
      $_SESSION['userfname'] = $row['userfname'];
      $_SESSION['userpic'] = $row['userpic'];
      date_default_timezone_set("Asia/Colombo");
      $_SESSION['last_log_date'] = date('Y-m-d h:i:sa');
      //adding this to the logs tracking table if you have one,!

      header("location:index.php");
    }
    else{
      //echo "password did not match + username is OK";
      header("location:invaliduser_login.php");
    }

  }
  else{
    //echo "username did not match";
    header("location:invaliduser_login.php");
  }
?>

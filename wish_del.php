<?php
  require("validate_user_inc.php");
  require("db_connection.php");
  require("code_bank_inc.php");

  $proid = $_GET['value'];
  $userid = $_SESSION['userid'];

  $sql = "select * from wish where proid=$proid AND userid=$userid";

  $rs  = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    $sql_delete = "delete from wish where proid=$proid AND userid=$userid";
    $y = $mysqli->query($sql_delete);
    header("location:wish_list.php");
  } else {
    header("location:wish_list.php");
  }



 ?>

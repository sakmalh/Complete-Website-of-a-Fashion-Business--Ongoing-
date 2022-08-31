<?php
  require("validate_user_inc2.php");

?>
<?php

  //conntect to database
  require("db_connection.php");

     //storing the values from the form to variables
     $userid         = addslashes($_REQUEST['userid']);
     $oldpass          = addslashes($_REQUEST['oldpass']);
     $newpass          = addslashes($_REQUEST['newpass']);
     $conpass          = addslashes($_REQUEST['conpass']);

     $sql = "select * from userdetails where user_id=$userid";
     $rs = $mysqli->query($sql);
     $row = mysqli_fetch_assoc($rs);

     //next build the Dynamic SQL command using these variables.

     if ($newpass == $conpass && $oldpass == $row['userpass'] ) {
       $sql2 = "update userdetails set userpass='$newpass' where user_id=$userid";

       $mysqli->query($sql2);
       header("location:user_passd.php?status=pass");
     }
     else {
       header("location:user_passd.php?status=fail");
     }
?>

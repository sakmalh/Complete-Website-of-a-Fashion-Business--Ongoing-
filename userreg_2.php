<?php
  require("validate_user_inc.php");

?>
<?php
  require ("db_connection.php");
  require ("code_bank_inc.php");

  $fname         = addslashes($_REQUEST['fname']);
  $lname          = addslashes($_REQUEST['lname']);
  $email           = addslashes($_REQUEST['email']);
  $phone          = addslashes($_REQUEST['phone']);
  $password         = addslashes($_REQUEST['password']);
  $picture     = "default.jpg";

  $sql  = "insert into userdetails(userfname,userlname,useremail,userno,userpass,userpic) values(";
  $sql .= "'$fname',";
  $sql .= "'$lname',";
  $sql .= "'$email',";
  $sql .= "'$phone',";
  $sql .= "'$password',";
  $sql .= "'$picture')";

  $x = $mysqli->query($sql);

  if($x>0){
     header("location:user_loginreg.php");
   }

   else{
     //echo "record adding failed";
     //redirec the user to the next page
     header("location:user_reg.php?status=fail");
   }

 ?>

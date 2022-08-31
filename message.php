<?php

require ("db_connection.php");
require ("code_bank_inc.php");

date_default_timezone_set("Asia/Colombo");

$name              = addslashes($_REQUEST['name']);
$email             = addslashes($_REQUEST['emailid']);
$message           = addslashes($_REQUEST['message']);
$datesent          = date("Y-m-d");

$sql  = "insert into messages (Name,Email,Message,Date_Sent) values(";
$sql .= "'$name',";
$sql .= "'$email',";
$sql .= "'$message',";
$sql .= "'$datesent')";

$x = $mysqli->query($sql);

if($x>0){
 header("location:contactus.php");
} else {
  header("location:contactus.php?status=fail");
}
 ?>

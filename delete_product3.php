<?php
  require("validate_user_inc.php");

?>
<?php

  //connect to database
  require("db_connection.php");
  require("code_bank_inc.php");

  /*echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

  $proid = $_REQUEST['proid'];

  //lets search for this record and make sure its there in the db
  $sql = "select * from product where pid=$proid";

  $rs  = $mysqli->query($sql);

  //lets make sure the record was found
  if(mysqli_num_rows($rs)>0){
    //1 YES record was found
    //take the backup then delete the record permanently.!
    $sql_backup = "insert into product_archive select * from product where pid=$proid";
    $x = $mysqli->query($sql_backup);

    if($x > 0){
      $old_file_name = getProfilePicture($proid);
      //backup was successfull lets delete the record
      $sql_delete = "delete from product where pid=$proid";
      $y = $mysqli->query($sql_delete);



        if($y > 0){
          //deleting the record was successful

          //lets delete the profile pics
          if($old_file_name != "default.jpg"){
            unlink("productpics/large/$old_file_name");
          }


          header("location:delete_product4.php?status=pass");
        }
        else{
          //deleting record failed
          header("location:delete_product4.php?status=fail");
        }

    }
    else{
      //backup failed..
    }

  }
  else{
    //nothing NO record was found
    //really ?? thats starnge.!
  }













 ?>

<?php
  require("validate_user_inc.php");

?>
<?php
  require ("db_connection.php");
  require ("code_bank_inc.php");

  $prname         = addslashes($_REQUEST['prname']);
  $price          = addslashes($_REQUEST['price']);
  $size           = addslashes($_REQUEST['size']);
  $color          = addslashes($_REQUEST['color']);
  $sleeve         = addslashes($_REQUEST['sleeve']);
  $fabrictype     = addslashes($_REQUEST['fabrictype']);
  $brand          = addslashes($_REQUEST['brand']);
  $productDesc    = addslashes($_REQUEST['productDesc']);

  $sql  = "insert into product (prname,price,size,color,sleeve,fabrictype,brand,productDesc) values(";
  $sql .= "'$prname',";
  $sql .= "'$price',";
  $sql .= "'$size',";
  $sql .= "'$color',";
  $sql .= "'$sleeve',";
  $sql .= "'$fabrictype',";
  $sql .= "'$brand',";
  $sql .= "'$productDesc')";



  $x = $mysqli->query($sql);

  if($x>0){
     //echo "record added successfully";
     //redirect the user to the next page
     /*check whether a profile pic has been uploaded ifso upload it*/

     if( $_FILES['picture']['error'] == 0 && $_FILES['picture']['type']=="image/jpeg"){

       $last_id = $mysqli->insert_id;
       $filename    = $_FILES['picture']['tmp_name'];
       $destination = $last_id . "_" . rand().rand().rand() . ".jpg";

       $fx = move_uploaded_file($filename,"productpics/large/".$destination);
       if($fx>0){
       }
       else{
       //file not uploaded or failed.!
        header("location:add_product3.php?status=fail");
        }
      }
     $sql2 = "update product set picture='$destination' where pid=$last_id";
     $mysqli->query($sql2);
     header("location:add_product3.php?status=pass");
   }

   else{
     //echo "record adding failed";
     //redirec the user to the next page
     header("location:add_product3.php?status=fail");
   }

 ?>

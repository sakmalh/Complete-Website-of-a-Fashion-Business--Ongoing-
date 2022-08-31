<?php
  require("validate_user_inc.php");

?>
<?php

  //conntect to database
  require("db_connection.php");
  require("code_bank_inc.php");

     //storing the values from the form to variables
     $proid          = addslashes($_REQUEST['proid']);
     $prname         = addslashes($_REQUEST['prname']);
     $price          = addslashes($_REQUEST['price']);
     $size           = addslashes($_REQUEST['size']);
     $color          = addslashes($_REQUEST['color']);
     $sleeve         = addslashes($_REQUEST['sleeve']);
     $fabrictype     = addslashes($_REQUEST['fabrictype']);
     $brand          = addslashes($_REQUEST['brand']);
     $productDesc    = addslashes($_REQUEST['productDesc']);

     //next build the Dynamic SQL command using these variables.

     $sql  = "update product set ";
     $sql .= "prname='$prname',";
     $sql .= "price='$price',";
     $sql .= "size='$size',";
     $sql .= "color='$color',";
     $sql .= "sleeve='$sleeve',";
     $sql .= "fabrictype='$fabrictype',";
     $sql .= "brand='$brand',";
     $sql .= "productDesc='$productDesc' where pid=$proid";

    $x = $mysqli->query($sql);

    if($x>0){
      //changes were successfully saved
      //redirect the user to the next page confirmation  page

      //see whether an image has been uploaded if so do the
      //needful to upload it

      if($_FILES['picture']['error'] == 0 && $_FILES['picture']['type']=="image/jpeg"){
         $old_picture_name = getProfilePicture($proid);

         $filename    = $_FILES['picture']['tmp_name'];
         $destination = "";

         if($old_picture_name == "default.jpg"){
           //should generate a filename
           $destination = $cus_id . "_" . rand().rand().rand().".jpg";
         }
         else{
           //should use the existing filename
           $destination = $old_picture_name;
         }



         $fx = move_uploaded_file($filename,"productpics/large/".$destination);
         $sql2 = "update product set picture='$destination' where pid=$proid";

         $mysqli->query($sql2);


      }



      header("location:edit_product4.php?status=pass");
    }
    else{
      //saving changes to the record failed.
      //redirect the user to the next page confirmation  page
      header("location:edit_product4.php?status=fail");
    }




 ?>

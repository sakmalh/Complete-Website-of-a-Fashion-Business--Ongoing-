<?php
  //require("db_connection");

  function getProfilePicture($pid){
    global $mysqli;
    $sql = "select picture from product where pid=$pid";
    $rs  = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($rs);
    return $row['picture'];
  }

  function getProfilePictureuser($userid){
    global $mysqli;
    $sql = "select userpic from userdetails where user_id=$userid";
    $rs  = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($rs);
    return $row['userpic'];
  }

  function getProductDetails($proid){
    global $mysqli;
    $sql = "select * from product where pid=$proid";
    $rs  = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($rs);
    $deets = array($row['pid'], $row['prname'], $row['price'], $row['color'], $row['brand'], $row['picture'], $row['productDesc']);
    return $deets;
  }

  /* image resize function starts here */
  //"profile_pics/thumbs/" "14_545784548757.jpg"
	function resizeThumbPicture($path, $image_name)	{
		$uploadedfile = $path.$image_name;//actual path of the image

		// Capture the original size of the uploaded image
		list($width,$height,$type) = getimagesize($uploadedfile);

		if(@$width==@$height){
			@$newwidth=150;
			@$newheight=150;
		}
		else if(@$width>@$height){
			//landscape
			@$newwidth=150;
			@$newheight=120;
		}
		else if(@$height>@$width){
			//portrait
			@$newwidth=120;
			@$newheight=150;
		}



		if($type==1){
			$src = imagecreatefromgif(@$uploadedfile);
		}
		else if($type==2){
			$src = imagecreatefromjpeg(@$uploadedfile);
		}
		else if($type==3){
			$src = imagecreatefrompng(@$uploadedfile);
		}


		@$tmp=imagecreatetruecolor(@$newwidth,@$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,@$newwidth,@$newheight,@$width,@$height);
		@$filename = $path.$image_name;
		imagejpeg($tmp,$filename,100);//100 means full 100% quality
		imagedestroy($src);
		imagedestroy($tmp); // NOTE: PHP will clean up the temp

    }/* image resize function ends   here */


 ?>

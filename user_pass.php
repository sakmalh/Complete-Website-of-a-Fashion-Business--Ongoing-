<?php
session_start();
require("db_connection.php");
require("code_bank_inc.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css2/style.css">
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
    <?php
        $userid = $_SESSION['userid'];
        $sql = "select * from userdetails where user_id=$userid";

        //execute the sql comamnd
        $rs = $mysqli->query($sql);

        if(mysqli_num_rows($rs)>0){
          $row = mysqli_fetch_assoc($rs);
    ?>
      <button class="btn btn-white text-bg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fas fa-align-justify"></i></button>

      <section class="bg-light text-dark p-4 text-sm-start">

        <div class="container py-3">
          <h3><span class="py-5" style="color:#033B5B;"> Change User Password</span></h3>


        <form class="" action="user_pass2.php" enctype="multipart/form-data"
        method="post">
          <input type="hidden" name="userid" value="<?php echo $row['user_id']; ?>">

          <div class="form-outline">
            <input type="text" id="form6Example1" name="oldpass" class="form-control" required />
            <label class="form-label" for="form6Example1">Current Password</label>
          </div>

          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="form-outline">
                <input type="text" id="form6Example1" name="newpass" class="form-control" required />
                <label class="form-label" for="form6Example1">New Password</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-outline">
                <input type="text" id="form6Example2" name="conpass" class="form-control" required/>
                <label class="form-label" for="form6Example2">Confirm Password</label>
              </div>
            </div>
          </div>



          <!-- Submit button -->
          <button type="submit" class="btn btn-secondary btn-block mb-4">Change Password</button>
        </form>
        </div>

      </section>


      <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="row ">
            <div class="d-flex justify-content-center" id="profimg">
              <img src="userpics/<?php echo $row['userpic'];?>"  style="border-radius: 50%" width="100" height="100" alt="">
            </div>
          </div>
          <div class="row">
            <div class="d-flex justify-content-center mt-3">
              <p style="font-size: 18px;"><?php echo $row['userfname'];?> <?php echo $row['userlname'];?></p>
            </div>
            <div class="row">
              <div class="d-flex justify-content-center">
                <p style="font-size: 12px;"><?php echo $row['useremail'];?></p>
              </div>
          </div>
          <hr class="mb-0"></hr>
          <div class="list-group list-group-flush m-0 p-0">
            <a href="wish_list.php" class="list-group-item list-group-item-action list-group-item-light"><p class="m-1 p-0">&nbsp;&nbsp;<i class="fas fa-hand-holding-heart"></i> &nbsp;&nbsp; Wish List</p></a>
            <a href="user_orders.php" class="list-group-item list-group-item-action list-group-item-light"><p class="m-1 p-0">&nbsp;&nbsp;<i class="fas fa-shopping-cart"></i>&nbsp; &nbsp; Orders</p></a>
            <hr class="m-0"></hr>
            <a href="user_deets.php" class="list-group-item list-group-item-action list-group-item-light"><p class="m-1 p-0">&nbsp;&nbsp;<i class="fas fa-user-edit"></i>&nbsp;&nbsp; User Profile</p></a>
            <a href="user_pass.php" class="list-group-item list-group-item-action list-group-item-light"><p class="m-1 p-0">&nbsp;&nbsp;<i class="fas fa-lock"></i>&nbsp;&nbsp; Change Password</p></a>

            <a href="logout0.php" style="position:absolute; display:inline-block; bottom:0; right:1px;" class="list-group-item list-group-item-action list-group-item-light"><p class="pt-2">&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp; Sign Out</p></a>
          </div >
         </div>
      </div>
      <?php
      }
      else{
        ?>

        <?php
        }

       ?>

    </body>
  </html>

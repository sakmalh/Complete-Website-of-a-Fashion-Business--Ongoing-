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

    <section class="bg-dark text-light p-3 text-center text-sm-start">
      <div class="container showcase ">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Get your <span style="color:gold;">Gold Membership Card</span> Now </h1>
            <p class="lead my-4">
              Join our Membership Program to get additional discount and offers. Request from
              our nearest outlet.
              </p>
          </div>
          <img class="img-fluid w-50 d-none d-sm-block"src="src\card.png" alt="">
        </div>
      </div>
    </section>

    <section class=" p-4 bg-light text-dark p-3 text-center text-sm-start">
      <div class="row p-5">
        <div class="col-sm-4 text-center">
          <div class="row p-2">
            <img src="src/deli.svg" height="150" alt="">
            <div class="row py-3">
              <h4><span style="color:#3E3962;">Convenient</span></h4>
              We accept cash on delivery for your convenience
            </div>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="row p-2">
            <img src="src/lo.svg" height="150" alt="">
            <div class="row py-3">
              <h4><span style="color:#3E3962;">Track</span></h4>
              Track your product delivery anytime and anywhere
            </div>
          </div>

        </div>
        <div class="col-sm-4 text-center">
          <div class="row p-2">
            <img src="src/card.svg" height="150" alt="">
            <div class="row py-3">
              <h4><span style="color:#3E3962;">Card Payments</span></h4>
              All types of card payments are accepted for your ease.
            </div>

          </div>

        </div>

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

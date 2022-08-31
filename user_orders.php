<?php
require("validate_user_inc2.php");
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
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
        $userid = $_SESSION['userid'];

        $sql = "select * from ordertable where userid=$userid";
        ?>

      <button class="btn btn-white text-bg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fas fa-align-justify"></i></button>

      <section class="bg-light text-dark p-4 text-center text-sm-start">

        <div class="container py-3">
          <h3><span class="py-5" style="color:#033B5B;"> Order List  </span></h3>

      <section>
        <div class="">
          <div class="row">




        <?php
          $rs = $mysqli->query($sql);

          if(mysqli_num_rows($rs)>0){
            while($row = mysqli_fetch_assoc($rs)){
              $productarray = getProductDetails($row['proid'])
        ?>
        <div class="col-sm-6">
        <div class="card mb-3">
        <div class="row no-gutters my-4">
        <div class="col-md-4">
          <img src="productpics/large/<?php echo $productarray[5] ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title"><?php echo $productarray[1] ?></h5>
            <p class="card-text"><?php echo $productarray[6] ?></p>
            <button type="button" class="btn btn-dark btn-sm"  data-toggle="modal" data-target="#exampleModalCenter">Track</button>
            <a href="productdisplay.php?value=<?php echo $productarray[0] ?>"><button class="btn btn-secondary btn-sm" type="button" name="button">Check Product</button></a>


            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Track Delivery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mb-2">
                    Order ID - <?php echo $row['orderid'] ?>
                    <br>
                    Order Status - <?php echo $row['status'] ?>
                    <br>
                    Estimated Delivery Time - <?php echo $row['timedeliver'] ?> Days
                  </div>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      </div>
      </div>


        <?php
        }
        ?>
      </div>

    </div>
      <?php
      }
      else {
        ?>
        <h5>No Records Found. Add to wish list</h5>
      <?php } ?>
      </section>


      <?php
        $sql = "select * from userdetails where user_id=$userid";

        //execute the sql comamnd
        $rs = $mysqli->query($sql);

        if(mysqli_num_rows($rs)>0){
        $row = mysqli_fetch_assoc($rs);

       ?>
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

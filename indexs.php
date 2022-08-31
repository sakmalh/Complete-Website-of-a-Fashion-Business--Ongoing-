<!DOCTYPE html>
<?php
session_start();
require("db_connection.php");
require("code_bank_inc.php");
 ?>

 <?php
 $userexist = false;
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

   $userexist = true;

 }

  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css2/styless.css">
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="index.php"><img src="logo/logon2.png" height="30px" alt="">&nbsp; N Z Fashion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Tshirt</a>
                <a class="dropdown-item" href="#">Shirts</a>
                <a class="dropdown-item" href="#">Trousers</a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Contact Us </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">About Us </a>
            </li>
            <li class="nav-item ">
              <?php
              if($userexist == TRUE){
                $userid = $_SESSION['userid'];
                $sql = "select * from userdetails where user_id=$userid";

                //execute the sql comamnd
                $rs = $mysqli->query($sql);

                if(mysqli_num_rows($rs)>0){
                  $row = mysqli_fetch_assoc($rs);

               ?>
                 <!-- <img src="userpics/<?php echo $row['userpic'];?>" style="border-radius: 50%" width="45" height="45" alt=""> -->
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php echo $row['userfname']," ",$row['userlname']; ?>
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="user_dashboard.php">Dashboard</a>
                     <a class="dropdown-item" href="wish_list.php">Wish List</a>
                     <a class="dropdown-item" href="logoutindex.php">Sign Out</a>
                   </div>
                 </li>
               <?php
           }
         }
         else {


              ?>
              <a class="nav-link" href="user_login.php">SignIn/Register </a>
              <?php
            } ?>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button class="btn btn-outline-none my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </form>

        </div>
      </nav>
    </section>

    <section class="">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="src/Slide1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="src/Slide2.jpg" alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

   <section class="bg-secondary text-light p-3">
     <div class="container">
       <div class="row">
          <div class="col-sm-8">
            <h3>Sign Up for exciting discounts and rewards. </h3>
          </div>
          <div class="col-sm-4">
            <div class="input-group news-input">
            <input type="text" class="form-control input-lg" placeholder="Enter Email Address">
            <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" type="button">Sign Up</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-dark">
                    <h5 class="modal-title" id="exampleModalLabel"> Thank You for Subsrcibing.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-dark">
                    Your email has been registered to recieve daily updates and discounts from. NZ Fashion.

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
       </div>





     </div>

   </section>

   <section class="m-5">
     <div class="Arrival-title">
      <h3>NEW ARRIVALS</h3>
     </div>
     <div class="container">
       <div class="row">
         <?php

         for ($x = 24; $x <= 27; $x++) {


           $sql = "select * from product where pid=$x";

           $rs  = $mysqli->query($sql);

           if(mysqli_num_rows($rs)>0){
             $row = mysqli_fetch_assoc($rs);
          ?>
         <div class="col-md-3 col-sm-6 mb-4">
           <div class="product-grid">
             <div class="product-image">
               <a href="productdisplay.php?value=<?php echo $row['pid']?>">
                 <img class="productpic"src="productpics/large/<?php echo $row['picture'];?>" alt="">
               </a>
               <ul class="product-links">
                 <li><a href="wish_add.php?value=<?php echo $row['pid'] ?>" data-tip = "Add to wish list"><i class="fas fa-heart"></i> </a></li>
                 <li><a href="productdisplay.php?value=<?php echo $row['pid']?>" data-tip = "Product View"> <i class="fas fa-search"></i></a></li>
               </ul>
             </div>
             <div class="product-content">
               <h4 class="product-title"><a href="productdisplay.php?value=<?php echo $row['pid']?>"><?php echo $row['prname'];?></a></h4>
               <div class="product-price">
                 Rs.<?php echo $row['price'];?>
               </div>
               <a class="view-product" href="productdisplay.php?value=<?php echo $row['pid']?>">View Product</a>

             </div>

           </div>
         </div>
         <?php
         }
       }
          ?>
       </div>
     </div>
   </section>




  </body>
</html>

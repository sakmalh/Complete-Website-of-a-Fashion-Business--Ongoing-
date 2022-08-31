<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css2/testcss.css">
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      require("db_connection.php");
      require("code_bank_inc.php");

     ?>

    <section>
      <div class="container">
        <div class="row">
          <?php

          for ($x = 24; $x <= 29; $x++) {


            $sql = "select * from product where pid=$x";

            $rs  = $mysqli->query($sql);

            if(mysqli_num_rows($rs)>0){
              $row = mysqli_fetch_assoc($rs);
           ?>
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="product-grid">
              <div class="product-image">
                <a href="#">
                  <img class="productpic"src="productpics/large/<?php echo $row['picture'];?>" alt="">
                </a>
                <ul class="product-links">
                  <li><a href="" data-tip = "Add to wish list"><i class="fas fa-heart"></i> </a></li>
                  <li><a href="" data-tip = "Product View"> <i class="fas fa-search"></i></a></li>
                </ul>
              </div>
              <div class="product-content">
                <h4 class="product-title"><a href="#"><?php echo $row['prname'];?></a></h4>
                <div class="product-price">
                  Rs.<?php echo $row['price'];?>
                </div>
                <a class="view-product" href="#">View Product</a>

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

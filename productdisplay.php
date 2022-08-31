<!DOCTYPE html>
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
    <?php
    session_start();
    require("db_connection.php");
    require("code_bank_inc.php");
    $proid = $_GET['value'];

    $sql = "select * from product where pid=$proid";
    $rs = $mysqli->query($sql);
    if(mysqli_num_rows($rs)>0){
      $row = mysqli_fetch_assoc($rs);
    ?>
    <section class="p-5">

      <div class="container bootdey">
        <div class="col-md-12">
        <section class="panel">
              <div class="panel-body">
                <div class="row">


                  <div class="col-md-6">
                      <div class="pro-img-details">
                          <img src="productpics/large/<?php echo $row['picture'];?>" alt="">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <h4 class="pro-d-title">
                              <?php echo $row['prname'];?>
                      </h4>
                      <p>
                        <?php echo $row['productDesc'];?>                      </p>
                      <div class="product_meta">
                          <span class="posted_in"> <strong>Size:</strong>  <?php echo $row['size'];?>
                          <span class="tagged_as"><strong>Color: </strong> <?php echo $row['color'];?>
                            <span class="tagged_as"><strong>Fabric Type:</strong>  <?php echo $row['fabrictype'];?>
                            <span class="tagged_as"><strong>Brand: </strong> <?php echo $row['brand'];?>
                      </div>
                      <div class="m-bot15"> <strong>Price : </strong> <span class="pro-price"> Rs.<?php echo $row['price'];?></span></div>
                      <div class="form-group">
                          <label>Quantity</label>
                          <input type="quantiy" placeholder="1" class="form-control quantity">
                      </div>
                      <p>
                        <a href="order_add.php?value=<?php echo $row['pid'] ?>"> <button class="btn btn-round btn-secondary" type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
                        <a href="wish_add.php?value=<?php echo $row['pid'] ?>"><button class="btn btn-round btn-danger" type="button"><i class="fa fa-heart"></i> Add to Wish</button></a>


                      </p>
                  </div>
              </div>
          </section>
          </div>
          </div>
          </div>
    </section>
    <?php
  } ?>
  </body>
</html>

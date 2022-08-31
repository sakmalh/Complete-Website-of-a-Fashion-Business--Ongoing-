<?php
  require("validate_user_inc.php");

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
    <div class="container mt-4">
      <?php
          //code here
          if($_REQUEST['status'] == "pass"){
            ?>
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <strong>Success</strong> New product record successfully created.

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <hr>
                <a href="dashboard.php" class="btn btn-light mt-2">Dashboard</a>
                <a href="add_product1.php" class="btn btn-success mt-2">Add Another Product</a>
            </div>
            <?php
          }
          else{
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Failed</strong> Creating new product record failed. try again
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <hr>
              <hr>
                <a href="dashboard.php" class="btn btn-dark mt-2">Dashboard</a>
                <a href="add_product1.php" class="btn btn-danger mt-2">Try Again</a>
            </div>
            <?php
          }

         ?>

    </div>
  </body>
</html>

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
    <nav class="navbar bg-white fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="logo/logo2.jpg" alt="" width="40" height="30" class="d-inline-block align-text-top">
          <span  class="text-secondary px-2" height="40">NZ Fashion</span>
        </a>
        <button class="btn-white btn-sm btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"><i class="fas fa-stream text-secondary"></i></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Panel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add_product1.php">Add Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="edit_product1.php">Edit Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="delete_product1.php">Delete Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="search_product1.php">Search Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="search_user1.php">Search User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Messages1.php">Messages</a>
              </li>
            </ul>
            <form class="d-flex py-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="dashboard mt-5 py-4 px-4">
      <div class="row">
        <div class="col-sm-4 py-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Number of Users joined.</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-warning">Search Users</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 py-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products Listed</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success">Search Products</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 py-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Messages</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-danger">Check Messages</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>

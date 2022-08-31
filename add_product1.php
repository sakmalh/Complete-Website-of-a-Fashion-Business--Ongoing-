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

    <section class="bg-light text-dark text-sm-start align-items-center ">
        <div class="container-fluid p-0 align-items-center p-4 px-0">
          <div class="row bg-image p-5 shadow-1-strong rounded mb-5 text-white">
          <div class="container bg-white text-dark p-3 shadow-1-strong rounded mb-5 align-items-center">
            <form class="" action="add_product2.php" enctype="multipart/form-data"
            method="post">
              <div class="row pt-2">
                <div class="col-sm-6">
                  <label for="inputpname">Product Name</label>
                  <input type="text" name="prname" class="form-control" id="inputpname" placeholder="productname">
                </div>
                <div class="col-sm-6 ">
                  <div class="input-group mt-4">
                    <input type="text" class="form-control" name="price" aria-label="Dollar amount (with dot and two decimal places)">
                    <span class="input-group-text">Rs</span>
                    <span class="input-group-text">Price</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 mt-3 ">
                  <label for="inputState">Size</label>
                  <select id="inputState" class="form-control" name="size">
                    <option selected>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>Extra Large</option>
                  </select>
                </div>
                <div class="col-sm-4 mt-3">
                  <label for="inputCity">Color</label>
                  <input type="text" class="form-control" name="color" id="inputColor" placeholder="Color">
                </div>
                <div class="col-sm-4 mt-3">
                  <label for="inputState">Sleeve Length</label>
                  <select id="inputState" class="form-control" name="sleeve">
                    <option selected>Short</option>
                    <option>Long</option>
                    <option>Not Applicable</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 mt-3 ">
                  <label for="inputState">Fabric Type</label>
                  <input type="text" class="form-control" name="fabrictype" id="inputFabric" placeholder="Fabric Type">
                </div>
                <div class="col-sm-6 mt-3">
                  <label for="inputCity">Brand Name</label>
                  <input type="text" class="form-control" name="brand" id="inputBrand" placeholder="Brand">
                </div>
              </div>
              <div class="input-group mb-3 mt-4">
                <label class="input-group-text" for="inputGroupFile01">Upload Picture</label>
                <input type="file" name="picture" class="form-control" id="inputGroupFile01">
              </div>

              <div class="mb-3">
                <label for="ProductDesc" class="form-label">Product Description</label>
                <textarea class="form-control" name="productDesc" id="ProductDesc" rows="3" placeholder="Product Description"></textarea>
              </div>
              <div class="btn p-0 pt-3 ">
                <button type="submit" class="btn btn-primary">Add Product</button>
                <button type="reset" name="" value="Cancel" class="btn btn-danger">Cancel</button>
              </div>

            </form>
          </div>
          </div>
        </div>
    </section>

  </body>
</html>

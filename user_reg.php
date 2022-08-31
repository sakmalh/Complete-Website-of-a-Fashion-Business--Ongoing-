<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css2/style.css">
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
    <section class="bg-light text-dark p-3 text-center text-sm-start">
        <div class="container pb-2">
          <div class="d-sm-flex align-items-center justify-content-between">
            <div>
              <form class="" action="userreg_2.php" method="post">
                <div class="row mb-3">
                  <div class="col-sm-6">

                    <label for="Fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname" id="Firstname" required>

                  </div>
                  <div class="col-sm-6">
                    <label for="Lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="Lastname" required>

                  </div>

                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                  <input type="text" name="phone" class="form-control" id="exampleInputPassword1" required>
                </div>

                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>

                  <div class="">
                    <button type="submit" value="LOGIN" class="btn btn-primary w-100">Create Account</button>
                  </div>

              </form>

            </div>
            <img class="img-fluid w-50 d-none d-sm-block"src="logo\logo1.png" alt="">
          </div>
        </div>
      </section>
  </body>
</html>

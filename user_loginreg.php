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
              <h5 class="text-success">Successfully Created An Account</h5>
              <form class="" action="userlogin_2.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="user_id" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="access_code" class="form-control" id="exampleInputPassword1">
                </div>
                  <div class="">
                    <button type="submit" value="LOGIN" class="btn btn-primary w-100">Submit</button>
                  </div>

              </form>
              <section class="pt-2">
                <a href="user_reg.php"><button value="Register" class="btn btn-secondary w-100">Create Account</button></a>

              </section>

            </div>
            <img class="img-fluid w-50 d-none d-sm-block"src="logo\logo1.png" alt="">
          </div>
        </div>
      </section>
  </body>
</html>

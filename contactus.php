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


      <section id="contact" class="bg-light text-dark p-3 text-center text-sm-start">
        <div class="social">
          <a href="#"><i class="fab fa-facebook"> </i></a>
          <a href="#"><i class="fab fa-twitter"> </i></a>
          <a href="#"><i class="fab fa-instagram"> </i></a>
          <a href="#"><i class="fab fa-behance"> </i></a>

        </div>
        <div class="contact-box">
          <div class="c-heading">
            <h1>Get in Touch</h1>
            <p>Call or Email Regarding Question or Issue</p>

          </div>
          <div class="c-inputs">
            <form class=""  action="message.php" enctype="multipart/form-data" method="post">
              <input type="text" placeholder="Full Name" name="name" value="" required>
              <input type="email" placeholder="Example@gmail.com" name="emailid" value="" required>
              <textarea name="message" placeholder="Write message" required></textarea>
              <button type="submit" name="button">SEND</button>
            </form>

          </div>
        </div>


        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5477820524547!2d80.6369406!3d7.292179200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662be0c2cc7f%3A0xfd9ffe3da66f497!2sKandy%20City%20Centre%2C%20Sri%20Dalada%20Veediya%2C%20Kandy%2020000!5e0!3m2!1sen!2slk!4v1661758313107!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </section>

      </body>
    </html>

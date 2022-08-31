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
    <section class="bg-light text-secondary p-3 mt-4">
      <div class="container table-responsive">
        <table class="table table-hover p-4">
          <thead>
            <tr>
              <th scope="col">Seen</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Messages</th>
              <th scope="col">Date</th>
              <th scope="col">Read</th>
            </tr>
          </thead>
          <?php
              require("db_connection.php");

              $sql = "select * from messages";


              //lets execute the sql command
              $rs = $mysqli->query($sql);

              if(mysqli_num_rows($rs) > 0){
                //at least 1 record was found...
                while($row = mysqli_fetch_assoc($rs)){
                  ?>
                   <tr>
                     <td><?php if ($row['Read'] == "1") {?>
                      <span class="text-danger"><i class="fas fa-book"></i></span>
                  <?php  } else {?>  <span class="text-secondary"><i class="fas fa-book-open"></i></span><?php } ?>     </td>
                     <td><?php echo $row['Name']?>   </td>
                     <td><?php echo $row['Email']?> </td>
                     <td><?php echo $row['Message']?>   </td>
                     <td><?php echo $row['Date_Sent']?>   </td>
                     <td><a href="readmessage.php?value=<?php echo $row['message_id'];?>"> Mark As Read </a>  </td>
                  </tr>

                  <?php
                }//end of while
              }
              else{
                //no matching records
                ?>
                <tr>
                 <td colspan='7'>
                   <h3 class="text-danger">No Messages</h3>
                 </td>
                </tr>
                <?php
              }




             ?>
          </table>

      </div>
    </section>
  </body>
</html>

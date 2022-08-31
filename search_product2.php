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
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
    <?php
      $search_by = $_REQUEST['search_by'];
      $keywords  = $_REQUEST['keywords'];
     ?>
     <section class="bg-light text-secondary p-3 mt-4">
       <div class="container">
         <div class="row">
           <div class="col-sm-2">
             <h4 class="mb-3 mb-md-0 ">Search by options</h4>
           </div>
           <div class="col-sm-10 mt-2">
             <form action="search_product2.php" method="post">
               <div class="input-group input-group-lg">
                 <input type="text" class="form-control" name="keywords" placeholder="Search" value="<?php echo $keywords;?>">
                 <select class="form-control" name="search_by">
                   <option value="name"  <?php echo ($search_by == "name")?"selected":""; ?>>Product Name</option>
                   <option value="price"  <?php echo ($search_by == "price")?"selected":""; ?>>Price</option>
                   <option value="size"  <?php echo ($search_by == "size")?"selected":""; ?>>Size</option>
                   <option value="color"  <?php echo ($search_by == "color")?"selected":""; ?>>Color</option>
                   <option value="sleeve"  <?php echo ($search_by == "sleeve")?"selected":""; ?>>Sleeve</option>
                   <option value="fabric"  <?php echo ($search_by == "fabric")?"selected":""; ?>>Fabric Type</option>
                   <option value="brand"  <?php echo ($search_by == "brand")?"selected":""; ?>>Brand</option>
                   <option value="proid"  <?php echo ($search_by == "proid")?"selected":""; ?>>Customer ID</option>
                 </select>
                 <div class="input-group-btn">
                   <button class="btn btn-secondary btn-lg" type="submit">
                     <i class="fas fa-search"></i>
                   </button>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </section>

     <section class="bg-light text-secondary p-3 mt-4">
       <div class="container table-responsive">
         <table class="table table-hover p-4">
           <thead>
             <tr>
               <th scope="col">Picture</th>
               <th scope="col">Name</th>
               <th scope="col">Color</th>
               <th scope="col">Size</th>
               <th scope="col">Brand</th>
               <th scope="col">Price</th>
               <th scope="col">Edit</th>
               <th scope="col">Delete</th>

             </tr>
           </thead>
           <?php
               require("db_connection.php");

               $search_by = $_REQUEST['search_by'];
               $keywords  = $_REQUEST['keywords'];

               $sql = "";

               switch($search_by){
                 case 'proid':
                  $sql = "select * from product where pid=$keywords";
                  break;
                case 'name':
                  $sql = "select * from product where prname='$keywords' OR prname like '%$keywords%'";
                  break;
                case 'size':
                  $sql = "select * from product where size='$keywords' OR  size like '%$keywords%'";
                  break;
                case 'color':
                  $sql = "select * from product where color='$keywords' OR color like '$keywords%'";
                  break;
                case 'sleeve':
                    $sql = "select * from product where sleeve='$keywords' OR sleeve like '$keywords%'";
                    break;
                case 'fabric':
                    $sql = "select * from fabric where color='$keywords' OR fabric like '$keywords%'";
                    break;
                case 'brand':
                    $sql = "select * from brand where color='$keywords' OR brand like '$keywords%'";
                    break;
                case 'price':
                  $sql = "select * from product where price<=$keywords";
                  break;
               }
               //echo $sql;

               //lets execute the sql command
               $rs = $mysqli->query($sql);

               if(mysqli_num_rows($rs) > 0){
                 //at least 1 record was found...
                 while($row = mysqli_fetch_assoc($rs)){
                   ?>
                    <tr>
                      <td><img src="productpics/large/<?php echo $row['picture']?>" style="border-radius: 50%" height="100"alt=""></td>
                      <td><?php echo $row['prname']?>      </td>
                      <td><?php echo $row['color']?>   </td>
                      <td><?php echo $row['size']?></td>
                      <td><?php echo $row['brand']?>   </td>
                      <td><?php echo $row['price']?>   </td>
                      <td><a href="edit_product2.php?proid=<?php echo $row['pid'];?>"><i class="fas fa-edit"></i></a>  </td>
                      <?php
                            if($_SESSION['user_grp'] == "admin"){
                         ?>
                      <td><a href="delete_product2.php?proid=<?php echo $row['pid'];?>"><i class="fas fa-trash"></i></a></td>
                    <?php }
                    else {

                     ?>
                     <td><i class="fas fa-trash"></i></td>
                   <?php }
                   ?>
                    </tr>

                   <?php
                 }//end of while
               }
               else{
                 //no matching records
                 ?>
                 <tr>
                  <td colspan='7'>
                    <h3 class="text-danger">Error no match found.</h3>
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

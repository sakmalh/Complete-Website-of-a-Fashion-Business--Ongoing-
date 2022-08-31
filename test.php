
<?php
    session_start();
    require("db_connection.php");

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo($_SESSION['userfname']);
    } else {
    echo "Please log in first to see this page.";
    }

?>

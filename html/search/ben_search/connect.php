<?php
 // Connects to Our Database
$link = new mysqli('128.138.65.97', 'root', 'dbPassword', 'itemTracker');

/* check connection */
if (mysqli_connect_errno()) {
    echo "Could not connect to database, please check your connection details";
    exit();
}
  ?>

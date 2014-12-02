<?php
 // Connects to Our Database
// $link = new mysqli('localhost', 'username', 'password', 'db_name');
$link = new mysqli('192.168.1.112', 'suba8204', 'encore305', 'csci3308_project');

/* check connection */
if (mysqli_connect_errno()) {
    echo "Could not connect to database, please check your connection details";
    exit();
}
  ?>

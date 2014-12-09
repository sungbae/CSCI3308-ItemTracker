<?php
 // Connects to Our Database
$link = new mysqli('mysql3.000webhost.com', 'a6435557_sungDB', 'abc123', 'a6435557_sungDB');

/* check connection */
if (mysqli_connect_errno()) {
    echo "Could not connect to database, please check your connection details";
    exit();
}
echo "Connected Successfully";
  ?>

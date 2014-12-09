<!DOCTYPE html>
<html>
<body>

<?php
// this file is to connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if($conn->connection_error){
    die("Connection failed: " . $conn->connection_error);
}
?>

</body>
</html>

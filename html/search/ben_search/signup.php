<?php
$servername = "mysql3.000webhost.com";
$username = "a6435557_sungDB";
$password = "abc123";
$dbname = "a6435557_sungDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$signup_user = $_POST["signup_user"];
$signup_pass = $_POST["signup_pass"];
$sql = sprintf("INSERT INTO signup (username, password) VALUES ('%s', '%s')",$signup_user,$signup_pass);

$result = $conn->query($sql);

echo "You have Signed up";

$conn->close();
?> 

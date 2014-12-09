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
$name = $_POST["name"]."*";
//$sql = "SELECT Name FROM itemTracker WHERE Item = %s";
$sql = sprintf("SELECT Name FROM itemTracker WHERE Item = %s",$name);
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Item is with: " . $row["Name"] "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

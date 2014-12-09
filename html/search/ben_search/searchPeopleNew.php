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
$personname = $_POST["personname"];
$sql = sprintf("SELECT Item FROM itemTracker WHERE Name = '%s'",$personname);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo $personname , " is in possession of: ";
    while($row = $result->fetch_assoc()) {
        echo $row["Item"] , "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

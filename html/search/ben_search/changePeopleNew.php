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
//$itemname = $_POST["Laptop"];
$sql = sprintf("SELECT Name FROM itemTracker WHERE Item = 'Laptop'");

$personname = $conn->query($sql);
if ($personname->num_rows > 0) {
    // output data of each row
    while($row = $personname->fetch_assoc()) {
        echo "Item is currently with " . $row["Name"] , ".<br>";
    }
} else {
    echo "it doesn't work fucker";
}
echo "$row["Name"]";
$personnamechange = $_POST["personnamechange"];
$sql = sprintf("UPDATE itemTracker SET Name='%s' WHERE Name='%s'",$personnamechange, $personname);
$conn->query($sql);
$sql2 = sprintf("SELECT Name FROM itemTracker WHERE Item = '%s'",$itemname);
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    echo $personnamechange , " is now in possession of ";
    while($row = $result2->fetch_assoc()) {
        echo $row["Item"] , "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

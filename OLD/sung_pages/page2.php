<!DOCTYPE html>
<html>
<body>

<?php
// this file is to connect to the database
$servername = "LocalHost";
$username = "UserName";
$password = "Password";
$dbname = "Database";

// create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connection_error){
    die("Connection failed: " . $conn->connection_error);
}

$sql = "SELECT * from item";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br> id: ". $row["id"]. " - Name: ". $row["items"].;
    }
}
else{
    echo "0 results";
}

$conn->close();
?>

</body>
</html>


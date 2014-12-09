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

$itemnamechange = $_POST["itemnamechange"];
$sql = sprintf("SELECT Name FROM itemTracker WHERE Item = '%s'",$itemnamechange);

$personname = $conn->query($sql);
if ($personname->num_rows > 0) {
    // output data of each row
    while($row = $personname->fetch_assoc()) {
		$personnamechange = $_POST["personnamechange"];
		$sql2 = sprintf("UPDATE itemTracker SET Name='%s' WHERE Name='%s'",$personnamechange, "" . $row["Name"]);
		$conn->query($sql2);
		$sql3 = sprintf("SELECT Name FROM itemTracker WHERE Item = '%s'", $itemnamechange);
		$result2 = $conn->query($sql3);
		if ($result2->num_rows > 0) {
			// output data of each row
			echo $personnamechange , " is now in possession of ", $itemnamechange, ".";
		}
		else {
			echo "you should not see this";
		}
	} 

} 
else {
    echo "it doesn't work";
}

?>

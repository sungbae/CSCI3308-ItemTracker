<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Item Tracker - CSCI 3308</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSCI 3308 Item Tracker" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Ben Busby, Sung Bae, Yiyang Qi" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../../css/animate-custom.css" />
    </head>
    <body>  
	<div class="container">
		<header>
			<h1> Item Search</h1>
		</header>
<?php
$servername = "mysql.freehostingnoads.net";
$username = "u131515183_yang";
$password = "abc123";
$dbname = "u131515183_yang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$itemname = $_POST["itemname"];
$sql = sprintf("SELECT Name FROM itemTracker WHERE Item = '%s'",$itemname);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "$itemname is currently with " . $row["Name"] , ".<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
</body>
</html>


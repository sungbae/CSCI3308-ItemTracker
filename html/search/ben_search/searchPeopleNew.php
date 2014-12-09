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
			<h1> Search People</h1>
		</header>
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
    echo $personname , " is in possession of: <br>";
    while($row = $result->fetch_assoc()) {
        echo $row["Item"] , "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
</body>
</html>


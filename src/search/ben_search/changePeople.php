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
			<h1> Item Giver</h1>
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
 echo "Item does not exist.";
}

?>
</body>
</html>

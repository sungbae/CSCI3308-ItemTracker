<?php
include 'connect.php';

$name = $_POST["name"]."*";
var_dump($_POST["name"]);

$search_query = $link->prepare("SELECT * FROM `itemTracker` WHERE Item = ?");
$search_query->bind_param('s', $name);
$search_query->execute();
$search_query->store_result();
$search_rows = $search_query->num_rows;
$search_query->bind_result($product_name, $person_name);

echo "$search_rows";

if($search_rows >= 0){

while($search_query->fetch()){
echo "Your search returned $search_rows results";
echo "$product_name is with $person_name <br>";
}
} else { echo "Your search did not return any results, please try again."; }
 ?>

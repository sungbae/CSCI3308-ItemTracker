<!DOCTYPE html>
<html>
<body>

<?php
include 'connect.php';

$search = $_POST['search']."*";

$search_query = $link->prepare("SELECT * FROM `itemTracker` WHERE Name = ?")
$search_query->bind_param('s', $search);
$search_query->execute();
$search_query->store_result();
$search_rows = $search_query->num_rows;
//$search_query->bind_result($product_name);

if($search_rows > 0){
while($search_query->fetch()){
echo "$search has borrowed $search_rows item(s):";
//echo "$product_name <br>";
}
} else { echo "Your search did not return any results, please try again."; }
?>

</body>
</html>

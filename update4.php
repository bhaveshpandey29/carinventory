<?php
include_once "./dbconnect.php";
echo "<div style='width:1352px;height:80px;background-color:blue'><h2 style='color:white'><center>Mini Car Inventory</center></h2></div>";
$sql = "DELETE FROM products WHERE prod_name = 'Hundai' && bm_type = 'Model 2' LIMIT 1";
if ($conn->query($sql) === TRUE) {
    echo "<center><h2>Great! We have confirmed that the car is sold now.</h2></center>";
	echo "<br><br><br>";
	echo "<center><a href = 'inventory.php'> <h3>My Updated Inventory </h3></a></center>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
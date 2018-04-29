<?php
echo "<div style='width:1352px;height:80px;background-color:blue'><h2 style='color:white'><center>Mini Car Inventory</center></h2></div>";
echo '<br>';
echo '<hr>';
include_once "./dbconnect.php";

$prod_type=$_POST['prod_name'];
$bm_type=$_POST['bmtype'];
$sql="INSERT INTO products(prod_name,bm_type)values('$prod_type','$bm_type')";

mysqli_query($conn,$sql);
echo '<br><br><center><h2>Entry added successfully<h2></center>';
echo '<center><br><h2>Click <a href = admin.php>here</a> to add more cars</h2></center>';
echo '<center><br><h2>Click <a href = inventory.php>here</a> to view your inventory</h2></center>';
mysqli_close($conn);
?>

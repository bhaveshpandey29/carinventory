<?php
include_once "./dbconnect.php";
mysqli_query($conn,"SELECT * FROM products WHERE prod_name='TATA' && bm_type= 'Model 1'");
$var1= mysqli_affected_rows($conn);

mysqli_query($conn,"SELECT * FROM products WHERE prod_name='TATA' && bm_type= 'Model 2'");
$var2= mysqli_affected_rows($conn);

mysqli_query($conn,"SELECT * FROM products WHERE prod_name='Hundai' && bm_type= 'Model 1'");
$var3= mysqli_affected_rows($conn);

mysqli_query($conn,"SELECT * FROM products WHERE prod_name='Hundai' && bm_type= 'Model 2'");
$var4= mysqli_affected_rows($conn);

//echo $var1;
//echo "<br>";
//mysqli_query($conn,"DELETE FROM products WHERE prod_name = 'Hundai'&& bm_type = 'Model 1'");
//echo "Affected rows: " . mysqli_affected_rows($conn);

mysqli_close($conn);
?>
<?php include_once "./dbconnect.php";
 include_once "./count.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title> My Inventory </title>
</head>
<body><center><?php
echo "<div style='width:1352px;height:80px;background-color:blue'><h2 style='color:white'><center>Mini Car Inventory</center></h2></div>";
echo '<br>';
echo '<hr>';
?>
<table width="400" border ="1" cellspacing="1" cellpadding ="1"/>
<tr>

<th> Manufacturer</th>
<th> Model Name</th>
<th> Count </th>
<th> Operation </th>
</tr></center>
</body>
<?php
	echo "<tr>";
	if ($var1>=2):echo "<td>TATA</td>"; #Display only if the quantity is more than 1
	echo "<td> Model 1</td>";
	echo "<td>".$var1."</td>";
    echo "<td><form action = 'addProduct.php' method = 'POST'><input type= 'submit' value = 'SOLD'/></form></td>"; # updation of the database
    endif;	
	echo "</tr>";
	if ($var2>=2):
	echo "<td>TATA</td>";
	echo "<td> Model 2</td>";
	echo "<td>".$var2."</td>";	
	echo "<td><form action = 'update2.php' method = 'POST'><input type= 'submit' value = 'SOLD'/></form></td>";
	endif;
	echo "</tr>";
	if ($var3>=2):
	echo "<td>Hundai</td>";
	echo "<td> Model 1</td>";
	echo "<td>".$var3."</td>";	
	echo "<td><form action = 'update3.php' method = 'POST'/><input type= 'submit' value = 'SOLD'/></form></td>";
	endif;
	echo "</tr>";
	if ($var4>=2):
	echo "<td>Hundai</td>";
	echo "<td> Model 2</td>";
	echo "<td>".$var4."</td>";	
	echo "<td><form action = 'update4.php' method = 'POST'/><input type= 'submit' value = 'SOLD'/><form></td>";
	endif;
  	echo "</tr>";

?>
</html>
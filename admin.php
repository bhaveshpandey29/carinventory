<!doctype html>
<html>
<head>
<title>Add Product</title>
</head>
<body>
<script>

</script>
<div style='width:1352px;height:80px;background-color:blue'><h2 style='color:white'><center>Mini Car Inventory</center></h2></div>
<br>
<hr>
<center>
<form name ='form1' action='<?php echo htmlspecialchars('addProduct.php');?>' method='POST'/>
<br><br>
<h2>Manufacturer Name:</h2><select name='prod_name'>
<option>--Select Manufacturer--</option>
<option value='TATA'>TATA</option>
<option value='Hundai'>Hundai</option>
</select><br>

<h2>Model Name:</h2><select name='bmtype'>
<option>--Select type--</option>
<option value='Model 1'>Model 1</option>
<option value='Model 2'>Model 2</option>
</select><br><br>
<input type='submit' value='Add Product'/> 
<input type='reset' value='Reset'/>
</form>
</center>
</body>
</html>
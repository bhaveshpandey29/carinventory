<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prodbrand";

$conn = mysqli_connect($servername,$username,$password,$dbname);

#connection check
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "good to go!";
}
*/
?>
<?php
include 'ugalileo/config.php';
$connect=mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbDatabase);
if (!$connect) {
	# code...
	echo "Failed to connect to datbase".mysqli_connect_error();
}
?>

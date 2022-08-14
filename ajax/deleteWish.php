<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();
error_reporting(0);

extract($_POST);
$customer_id = $_SESSION['customer_id'];
if (empty($customer_id)) {
	echo 3;
	exit();
}

$save = $obj->deleteData("DELETE FROM wishlist WHERE wl_id='$id'");
if ($save) {
	echo 1;
}
else{
	echo 0;
}

 ?>
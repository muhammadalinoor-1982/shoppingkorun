<?php
session_start();
error_reporting(0);
include("Admin/class/DbConnection.php");
$obj = new DbConnection();
$setting = $obj->getData("SELECT * FROM settings WHERE id = 1"); 

if (isset($_SESSION['customer_id']) && $_SESSION['customer_id']!='') {

	$customer_id = $_SESSION['customer_id'];

	$getTotalWish = $obj->getData("SELECT * FROM wishlist WHERE customer_id='$customer_id'");

	$wish_count = count($getTotalWish);
}
else{
	echo $wish_count;
}

?>
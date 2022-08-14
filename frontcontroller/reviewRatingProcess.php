<?php 
session_start();
if (empty($_SESSION['customer_id'])) {
	header("Location:../login.php");
	exit();
}

include("../Admin/class/DbConnection.php");
include("../Admin/class/SSLCommerz.php");
$obj = new DbConnection();

extract($_POST);

$customer_id = $_SESSION['customer_id'];

$review_ratting = $obj->dataSave("INSERT INTO review_ratting(customer_id, product_id, ratting, review) VALUES('$customer_id', '$product_id', '$ratings', '$detail') ");

header("Location:../product-detail.php?id=".base64_encode($product_id));

 ?>
<?php 
session_start();

error_reporting(0);

extract($_POST);

unset($_SESSION['cart'][$id]);

$sum = 0;
$i = 0;
foreach ($_SESSION['cart'] as $value) {
	$sum = $sum + $value['price'] * $value['quantity'];
	$i++;
}

echo json_encode(['total'=>$sum, 'item'=>$i]);

 ?>
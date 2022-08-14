<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();
error_reporting(0);

extract($_POST);

$getSize = $obj->getData("SELECT size_tag FROM size WHERE size_name = '$size'");
$getColor = $obj->getData("SELECT color_tag FROM color WHERE color_name = '$color'");

$option = [
			'color'=>$color,
			'size'=>$size,
			'size_tag'=>$getSize[0]['size_tag'],
			'color_tag'=>$getColor[0]['color_tag']
		  ];

$_SESSION['cart'][$id]=[
						'name'=>$name,
						'image'=>$image,
						'price'=>$price,
						'quantity'=>$qnt,
						'option'=>$option,
						'total_price'=>$price * $qnt
					   ];

$sum = 0;
$i = 0;
foreach ($_SESSION['cart'] as $value) {
	$sum = $sum + $value['price'] * $value['quantity'];
	$i++;
}

echo json_encode(['total'=>$sum, 'item'=>$i, 'cart_item'=>$_SESSION['cart'] ]);


 ?>
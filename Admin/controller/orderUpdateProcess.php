<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$payment_status = $_POST['payment_status'];
$order_status 	= $_POST['order_status'];
$id				= $_POST['id'];

$orderDetails = $obj->getData("SELECT * FROM order_details WHERE order_id  = '$id'");

$sql = "UPDATE orders SET payment_status='$payment_status', order_status='$order_status' WHERE id='$id'";
$status = $obj->updateData($sql);

if ($status) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Order updated!!</div>";

				foreach ($orderDetails as $value) {

						$product = $obj->getData("SELECT quantity FROM products WHERE id  = '".$value['product_id']."'");
						$quantity = $product[0]['quantity'] - $value['quantity'];
						$sql = "UPDATE products SET quantity='$quantity' WHERE id  = '".$value['product_id']."'";
						$status = $obj->updateData($sql);
					}	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Order!!</div>";
			}

header("Location:../order-update.php?id=".$id);

 ?>
<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();

$customer_id= $_POST['cus_id'];
$name 		= $_POST['cus_name'];
$phone 		= $_POST['cus_phone'];
$email 		= $_POST['cus_email'];
$address 	= $_POST['cus_address'];

$sql = "UPDATE customer SET name='$name', phone='$phone', email='$email', address='$address' WHERE customer_id='$customer_id'";
$status = $obj->updateData($sql);

if ($status) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Customer Address has been updated</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Customer Address !!</div>";
			}

header("Location:../customer-address-book-update.php?customer_id=".$customer_id);

 ?>
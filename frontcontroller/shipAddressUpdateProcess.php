<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();

$ship_id= $_POST['ship_id'];
$name 		= $_POST['ship_name'];
$phone 		= $_POST['ship_phone'];
$email 		= $_POST['ship_email'];
$address 	= $_POST['ship_address'];

$sql = "UPDATE orders SET ship_name='$name', ship_phone='$phone', ship_email='$email', ship_address='$address' WHERE id='$ship_id'";
$status = $obj->updateData($sql);

if ($status) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Ship Address has been updated</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Ship Address !!</div>";
			}

header("Location:../ship-address-book-update.php?id=".$ship_id);

 ?>
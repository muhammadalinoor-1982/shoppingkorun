<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();

$customer_id= $_POST['customer_id'];
$name 		= $_POST['name'];
$phone 		= $_POST['phone'];
$email 		= $_POST['email'];
$gender 	= $_POST['gender'];
$address 	= $_POST['address'];
$status 	= $_POST['status'];

$sql = "UPDATE customer SET name='$name', phone='$phone', email='$email', gender='$gender', address='$address', status='$status' WHERE customer_id='$customer_id'";
$status = $obj->updateData($sql);

if ($status) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Your account has been updated</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update account info !!</div>";
			}

header("Location:../edit-account.php");

 ?>
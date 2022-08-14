<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$ratting 		= $_POST['ratting'];
$review 		= $_POST['review'];
$review_status 	= $_POST['review_status'];
$r_id			= $_POST['r_id'];

$orderDetails = $obj->getData("SELECT * FROM review_ratting WHERE r_id  = '$r_id'");

$sql = "UPDATE review_ratting SET ratting='$ratting', review='$review', review_status='$review_status' WHERE r_id='$r_id'";
$status = $obj->updateData($sql);

if ($status) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>review updated!!</div>";

			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update review!!</div>";
			}

header("Location:../review-update.php?r_id=".base64_encode($r_id));

 ?>
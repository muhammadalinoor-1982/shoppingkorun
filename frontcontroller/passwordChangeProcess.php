<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();

$cpassword 		= $_POST['cpassword'];
$npassword 		= $_POST['npassword'];
$cnewpassword 	= $_POST['cnewpassword'];


if ($npassword!== $cnewpassword){ $_SESSION['cnewpasserror'] = "<div class='alert alert-info'>Password is not match</div>"; 
					header("Location:../change-password.php");
					exit();
						}

$access = $obj->getSingleData("SELECT customer_id, password FROM customer WHERE customer_id = '".$_SESSION['customer_id']."'");


if (md5($cpassword) == $access['password']) {

	$query = "UPDATE customer SET password='".md5($npassword)."' WHERE customer_id = '".$access['customer_id']."'";
	$passwordUpdate = $obj->updateData($query);
}

if($passwordUpdate){
	$_SESSION['change-password'] = "<div class='alert alert-info'>Congratulations You have successfully changed your password</div>"; 
					header("Location:../change-password.php");
					exit();
}
else{
	$_SESSION['change-password'] = "<div class='alert alert-info'>Unable to change password</div>"; 
					header("Location:../change-password.php");
					exit();
}

 ?>

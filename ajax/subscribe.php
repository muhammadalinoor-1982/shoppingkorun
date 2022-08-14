<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();
error_reporting(0);

extract($_POST);

$data = $obj->getData("SELECT * FROM subscribe_email WHERE email = '$email' LIMIT 1");

if (count($data) < 1) {

	$save = $obj->dataSave("INSERT INTO subscribe_email(email) VALUES('$email')");
	
}
else{
	$save = 0;
}


		
if ($save) {
	echo "Success";
}
else{
	echo "Failed";
}


 ?>
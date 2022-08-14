<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();
error_reporting(0);

extract($_POST);
$customer_id = $_SESSION['customer_id'];
if (empty($customer_id)) {
	echo json_encode(['status'=>3, "id"=>$id, "name"=>$name, "image"=>$image, "price"=>$price]);
	exit();
}

$data = $obj->getData("SELECT * FROM wishlist WHERE customer_id='$customer_id' AND product_id='$id'");


if (count($data)<1) {
			$save = $obj->dataSave("INSERT INTO wishlist(customer_id, product_id) VALUES('$customer_id', '$id') ");
		if ($save) {
		    
		    echo json_encode(['status'=>1, "id"=>$id, "name"=>$name, "image"=>$image, "price"=>$price]);

			
		}
		else{
		    
		    echo json_encode(['status'=>0, "id"=>$id, "name"=>$name, "image"=>$image, "price"=>$price]);
			
		}
}
else{
    
	    echo json_encode(['status'=>0, "id"=>$id, "name"=>$name, "image"=>$image, "price"=>$price]);
}



 ?>
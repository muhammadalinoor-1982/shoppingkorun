<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

if ($_FILES['bulk_file']['name']!='') {

$file = fopen($_FILES['bulk_file']['tmp_name'], 'r');

$i = 0;

while (!feof($file)) {
	
	$data = fgetcsv($file);

		echo "<pre>";
		print_r($data);
		echo "</pre>";

	if ($i > 0) {

			$category 		= $data[3];
			$brand 			= $data[2];
			$product_code 	= $data[6];
			$product_name 	= $data[0];
			$counrty 		= $data[7];
			$price 			= $data[8];
			$discount 		= $data[9];
			$quantity 		= $data[10];
			$description 	= $data[1];
			$status 		= $data[12];
			$feature 		= $data[13];
			$trending 		= $data[14];
			$color			= $data[4];
			$size			= $data[5];	
			$file_name		= $data[11];			

			$sql = "INSERT INTO products(product_name, product_description, brand_id, category_id, color, size, product_code, menufecture_counrty, price, discount, quantity, product_image, status, feature_product, trending_product) VALUES('$product_name', '$description', '$brand', '$category', '$color', '$size', '$product_code', '$counrty', '$price', '$discount', '$quantity', '$file_name', '$status', '$feature', '$trending')";

			$product_id = $obj->dataSave($sql);
		}

		$i++;

	}

	$_SESSION['smg'] = "<div class='alert alert-success'>Bulk Product successflly uploded</div>";
}
else{

	$_SESSION['smg'] = "<div class='alert alert-info'>Unable to uploadd Bulk Product</div>";
}

header("Location:../product-bulkupload.php");
 ?>
<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$id = $_GET['id'];

$deleted_product_pic = $obj->getSingleData("SELECT * FROM deleted_product WHERE id = '$id'");
						@unlink("../uploads/products/".$deleted_product_pic['product_image']);
						@unlink("../qrcode/temp/".$deleted_product_pic['qrcode']);

$sql = "DELETE FROM deleted_product WHERE id = '$id'";

$status = $obj->deleteData($sql);

header("Location:../deleted-product-list.php");

 ?>
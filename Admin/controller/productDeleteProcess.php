<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$id = $_GET['id'];

$update_with_user = $obj->updateData("UPDATE products SET updated_by = '".$_SESSION['user_id']."' WHERE id = '$id'");
$insert_deleted_product = "INSERT INTO  deleted_product(SELECT * FROM products WHERE id='$id')";
$save = $obj->dataSave($insert_deleted_product);
$sql = "DELETE FROM products WHERE id = '$id'";

$status = $obj->deleteData($sql);

header("Location:../product-list.php");

 ?>
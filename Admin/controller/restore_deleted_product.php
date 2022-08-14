<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$id = $_GET['id'];

$update_with_user = $obj->updateData("UPDATE deleted_product SET updated_by = '".$_SESSION['user_id']."' WHERE id = '$id'");
$insert_deleted_product = "INSERT INTO  products(SELECT * FROM deleted_product WHERE id='$id')";
$save = $obj->dataSave($insert_deleted_product);
$sql = "DELETE FROM deleted_product WHERE id = '$id'";
$status = $obj->deleteData($sql);

header("Location:../deleted-product-list.php?id=".$id);

 ?>
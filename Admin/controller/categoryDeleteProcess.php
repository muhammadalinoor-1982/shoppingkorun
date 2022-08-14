<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$id = $_GET['id'];
$sql = "DELETE FROM categories WHERE cat_id = '$id'";

$status = $obj->deleteData($sql);

header("Location:../category-list.php");

 ?>
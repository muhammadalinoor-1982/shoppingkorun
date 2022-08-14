<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$brand_id = $_GET['brand_id'];
$sql = "DELETE FROM brands WHERE brand_id = '$brand_id'";

$status = $obj->deleteData($sql);

header("Location:../brand-list.php");

 ?>
<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$id = $_GET['id'];
$sql = "DELETE FROM banner WHERE id = '$id'";

$status = $obj->deleteData($sql);

header("Location:../banner-list.php");

 ?>
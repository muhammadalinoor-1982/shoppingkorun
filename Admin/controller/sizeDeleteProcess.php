<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$size_id = $_GET['size_id'];
$sql = "DELETE FROM size WHERE size_id = '$size_id'";

$status = $obj->deleteData($sql);

header("Location:../size-list.php");

 ?>
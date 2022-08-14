<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$color_id = $_GET['color_id'];
$sql = "DELETE FROM color WHERE color_id = '$color_id'";

$status = $obj->deleteData($sql);

header("Location:../color-list.php");

 ?>
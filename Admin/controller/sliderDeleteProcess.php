<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$slider_id = $_GET['slider_id'];
$sql = "DELETE FROM slider WHERE slider_id = '$slider_id'";

$status = $obj->deleteData($sql);

header("Location:../slider-list.php");

 ?>
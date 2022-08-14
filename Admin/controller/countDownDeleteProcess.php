<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$count_id = $_GET['count_id'];
$sql = "DELETE FROM count_down WHERE count_id = '$count_id'";

$status = $obj->deleteData($sql);

header("Location:../countDown-list.php");

 ?>
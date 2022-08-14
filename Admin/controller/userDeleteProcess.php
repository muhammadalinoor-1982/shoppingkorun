<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$user_id = $_GET['user_id'];
$sql = "DELETE FROM users WHERE user_id = '$user_id'";

$status = $obj->deleteData($sql);

header("Location:../account-list.php");

 ?>
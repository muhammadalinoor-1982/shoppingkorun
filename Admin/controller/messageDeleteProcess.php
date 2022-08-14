<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$msg_id = $_GET['msg_id'];
$sql = "DELETE FROM message WHERE msg_id = '$msg_id'";

$status = $obj->deleteData($sql);

header("Location:../message-list.php");

 ?>
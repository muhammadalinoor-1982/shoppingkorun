<?php 
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();

$r_id = $_GET['r_id'];
$sql = "DELETE FROM review_ratting WHERE r_id = '$r_id'";

$status = $obj->deleteData($sql);

header("Location:../review-list.php?r_id=".$r_id);

 ?>
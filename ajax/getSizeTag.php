<?php 
session_start();
 include("../Admin/class/DbConnection.php");
 $obj = new DbConnection();

$size = $_POST['size'];
$sql = "SELECT size_tag FROM size WHERE size_name = '$size'";

$data = $obj->getData($sql);

echo $data[0]['size_tag'];

 ?>
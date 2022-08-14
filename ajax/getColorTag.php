<?php 
session_start();
 include("../Admin/class/DbConnection.php");
 $obj = new DbConnection();

$color = $_POST['color'];
$sql = "SELECT color_tag FROM color WHERE color_name = '$color'";

$data = $obj->getData($sql);

echo $data[0]['color_tag'];

 ?>
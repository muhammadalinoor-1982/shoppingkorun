<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$category_name 		= $_POST['category_name'];
$parent_id			= $_POST['parent_id'];
$status 			= $_POST['status'];

$sql = "INSERT INTO categories(category_name, parent_id, cat_status) VALUES('$category_name', '$parent_id', '$status')";

$save = $obj->dataSave($sql);

if ($save) 
	{
		$_SESSION['smg'] = "<div class='alert alert-success'>New Category Added successfully!!</div>";
	}
else
	{
		$_SESSION['smg'] = "<div class='alert alert-info'>Unable to save New Category!!</div>";
	}

header("Location:../Category.php");

 ?>
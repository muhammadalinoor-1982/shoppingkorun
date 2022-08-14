<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$category_name 	= $_POST['category_name'];
$parent_id 		= $_POST['parent_id'];
$cat_status 	= $_POST['cat_status'];
$cat_id			=$_POST['cat_id'];


$sql = "UPDATE categories SET category_name='$category_name', parent_id='$parent_id' cat_status='$cat_status' WHERE cat_id='$cat_id'";
$status = $obj->updateData($sql);

if ($status) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Category updated!!</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Category!!</div>";
			}

header("Location:../category-update.php?id=".$cat_id);

 ?>
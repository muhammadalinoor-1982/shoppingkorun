<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$size_name = $_POST['size_name'];
$status 	= $_POST['status'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$ext = array_pop(explode(".", $_FILES['photo']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../size.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/size/".$file_name);

$sql = "INSERT INTO size(size_name, status, size_tag) VALUES('$size_name','$status', '$file_name')";

$save = $obj->dataSave($sql);

if ($save) 
	{
		$_SESSION['smg'] = "<div class='alert alert-success'>New Size Added successfully!!</div>";
	}
else
	{
		$_SESSION['smg'] = "<div class='alert alert-info'>Unable to save New Size!!</div>";
	}

header("Location:../size.php");

 ?>
<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$color_name = $_POST['color_name'];
$status 	= $_POST['status'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$ext = array_pop(explode(".", $_FILES['photo']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../color.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/color/".$file_name);

$sql = "INSERT INTO color(color_name, status, color_tag) VALUES('$color_name','$status', '$file_name')";

$save = $obj->dataSave($sql);

if ($save) 
	{
		$_SESSION['smg'] = "<div class='alert alert-success'>New Color Added successfully!!</div>";
	}
else
	{
		$_SESSION['smg'] = "<div class='alert alert-info'>Unable to save New Color!!</div>";
	}

header("Location:../color.php");

 ?>
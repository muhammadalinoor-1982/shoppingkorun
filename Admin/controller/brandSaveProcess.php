<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$brand_name = $_POST['brand_name'];
$status 	= $_POST['status'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$ext = array_pop(explode(".", $_FILES['photo']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../Brand.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/brands/".$file_name);

$sql = "INSERT INTO brands(brand_name, brand_status, brand_logo) VALUES('$brand_name','$status', '$file_name')";

$save = $obj->dataSave($sql);

if ($save) 
	{
		$_SESSION['smg'] = "<div class='alert alert-success'>New Brand Added successfully!!</div>";
	}
else
	{
		$_SESSION['smg'] = "<div class='alert alert-info'>Unable to save New Brand!!</div>";
	}

header("Location:../Brand.php");

 ?>
<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$count_name = $_POST['count_name'];
$count_down = $_POST['count_down'];
$count_status 	= $_POST['count_status'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$ext = array_pop(explode(".", $_FILES['count_image']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../countDown.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['count_image']['name'];
						move_uploaded_file($_FILES['count_image']['tmp_name'], "../uploads/countDown/".$file_name);

$sql = "INSERT INTO count_down(count_name, count_down, count_status, count_image) VALUES('$count_name','$count_down','$count_status', '$file_name')";

$save = $obj->dataSave($sql);

if ($save) 
	{
		$_SESSION['smg'] = "<div class='alert alert-success'>New Count Down Added successfully!!</div>";
	}
else
	{
		$_SESSION['smg'] = "<div class='alert alert-info'>Unable to save New Count Down!!</div>";
	}

header("Location:../countDown.php");

 ?>
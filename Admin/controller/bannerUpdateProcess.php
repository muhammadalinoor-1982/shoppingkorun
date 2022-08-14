<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$id 			= $_POST['id'];
$name 			= $_POST['name'];
$high_light 	= $_POST['high_light'];
$description 	= $_POST['description'];
$status 		= $_POST['status']; 
$old_img		= $_POST['old_img'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$sql = "UPDATE banner SET name='$name', high_light='$high_light', description='$description', status='$status' WHERE id='$id'";

$status = $obj->updateData($sql);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/banners/".$new_file_name);
											unlink("../uploads/banners/".$old_img);
											$img_update = $obj->updateData("UPDATE banner SET image='$new_file_name' WHERE id='$id'");
										}
								   }


if ($status || $img_update) {

			$_SESSION['smg'] = "<div class='alert alert-success'>Banner Data Update successfull...!!</div>";
		}
	else
		{
			$_SESSION['smg'] = "<div class='alert alert-info'>Unable to Update Banner Data...!!</div>";
		}


header("Location:../banner-update.php?id=".$id);

 ?>
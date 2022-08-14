<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$color_name 	= $_POST['color_name'];
$status 		= $_POST['status'];
$color_id		= $_POST['color_id'];
$old_img		= $_POST['old_img'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];


$sql = "UPDATE color SET color_name='$color_name', status='$status' WHERE color_id='$color_id'";
$status = $obj->updateData($sql);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/color/".$new_file_name);
											unlink("../uploads/color/".$old_img);
											$img_update = $obj->updateData("UPDATE color SET color_tag='$new_file_name' WHERE color_id='$color_id'");
										}
								   }

if ($status || $img_update) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Color updated!!</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Color!!</div>";
			}

header("Location:../color-update.php?color_id=".$color_id);

 ?>
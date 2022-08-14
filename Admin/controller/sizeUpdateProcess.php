<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$size_name 	= $_POST['size_name'];
$status 		= $_POST['status'];
$size_id				= $_POST['size_id'];
$old_img		= $_POST['old_img'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];


$sql = "UPDATE size SET size_name='$size_name', status='$status' WHERE size_id='$size_id'";
$status = $obj->updateData($sql);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/size/".$new_file_name);
											unlink("../uploads/size/".$old_img);
											$img_update = $obj->updateData("UPDATE size SET size_tag='$new_file_name' WHERE size_id='$size_id'");
										}
								   }

if ($status || $img_update) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Size updated!!</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Size!!</div>";
			}

header("Location:../size-update.php?size_id=".$size_id);

 ?>
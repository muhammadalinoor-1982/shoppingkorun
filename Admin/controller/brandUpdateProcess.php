<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$brand_name 	= $_POST['brand_name'];
$brand_status 	= $_POST['brand_status'];
$brand_id		= $_POST['brand_id'];
$old_img		= $_POST['old_img'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];


$sql = "UPDATE brands SET brand_name='$brand_name', brand_status='$brand_status' WHERE brand_id='$brand_id'";
$status = $obj->updateData($sql);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/brands/".$new_file_name);
											unlink("../uploads/brands/".$old_img);
											$img_update = $obj->updateData("UPDATE brands SET brand_logo='$new_file_name' WHERE brand_id='$brand_id'");
										}
								   }

if ($status || $img_update) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Brand updated!!</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Brand!!</div>";
			}

header("Location:../brand-update.php?brand_id=".$brand_id);

 ?>
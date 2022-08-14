<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$count_name 	= $_POST['count_name'];
$count_down 	= $_POST['count_down'];
$count_status 	= $_POST['count_status'];
$count_id		= $_POST['count_id'];
$old_img		= $_POST['old_img'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];


$sql = "UPDATE count_down SET count_name = '$count_name', count_down = '$count_down', count_status = '$count_status' WHERE count_id = '$count_id'";
$status = $obj->updateData($sql);

if ($_FILES['count_image']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['count_image']['name']));
										$new_file_name = time().'_'.$_FILES['count_image']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['count_image']['tmp_name'], "../uploads/countDown/".$new_file_name);
											unlink("../uploads/countDown/".$old_img);
											$img_update = $obj->updateData("UPDATE count_down SET count_image='$new_file_name' WHERE count_id='$count_id'");
										}
								   }

if ($status || $img_update) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Count Down updated!!</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Count Down!!</div>";
			}

header("Location:../countDown-update.php?count_id=".$count_id);

 ?>
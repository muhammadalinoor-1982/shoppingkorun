<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$slider_id 		= $_POST['slider_id'];
$name 			= $_POST['name'];
$header 		= $_POST['header'];
$description 	= $_POST['description'];
$link 			= $_POST['link'];
$url 			= $_POST['url'];
$status 		= $_POST['status'];
$old_img		= $_POST['old_img'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$sql = "UPDATE slider SET slider_name='$name', slider_header='$header', slider_description='$description', slider_link='$link', slider_url='$url', slider_status='$status' WHERE slider_id='$slider_id'";

$status = $obj->updateData($sql);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/slider/".$new_file_name);
											unlink("../uploads/slider/".$old_img);
											$img_update = $obj->updateData("UPDATE slider SET slider_image='$new_file_name' WHERE slider_id='$slider_id'");
										}
								   }


if ($status || $img_update) {

			$_SESSION['smg'] = "<div class='alert alert-success'>Slider Data Update successfull...!!</div>";
		}
	else
		{
			$_SESSION['smg'] = "<div class='alert alert-info'>Unable to Update Slider Data...!!</div>";
		}


header("Location:../slider_update.php?slider_id=".$slider_id);

 ?>
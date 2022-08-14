<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$name 		= $_POST['name'];
$email 		= $_POST['email'];
$password 	= md5($_POST['password']);
$phone 		= $_POST['phone'];
$user_type 	= $_POST['user_type'];
$status 	= $_POST['status'];
$user_id	= $_POST['user_id'];
$old_img	= $_POST['old_img'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$sql = "UPDATE users SET name='$name', phone='$phone', user_type='$user_type', status='$status' WHERE user_id='$user_id'";
$status = $obj->updateData($sql);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/users/".$new_file_name);
											unlink("../uploads/users/".$old_img);
											$img_update = $obj->updateData("UPDATE users SET images='$new_file_name' WHERE user_id='$user_id'");
										}
								   }

if ($status || $img_update) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>User info updated !!</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update user info !!</div>";
			}

header("Location:../account-update.php?user_id=".$user_id);

 ?>
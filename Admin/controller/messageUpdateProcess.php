<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$msg_id 	= $_POST['msg_id'];
$head 		= $_POST['head'];
$body 		= $_POST['body'];
$link 		= $_POST['link'];
$old_img	= $_POST['old_img'];
$foot 		= $_POST['foot'];
$status 	= $_POST['status'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$sql = "UPDATE message SET msg_head='$head', msg_body='$$body', msg_link='$link', msg_foot='$foot', msg_status='$status' WHERE msg_id='$msg_id'";
$status = $obj->updateData($sql);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/message/".$new_file_name);
											unlink("../uploads/message/".$old_img);
											$img_update = $obj->updateData("UPDATE message SET msg_tag='$new_file_name' WHERE msg_id='$msg_id'");
										}
								   }

if ($status || $img_update) 
			{
				$_SESSION['smg'] = "<div class='alert alert-success'>Message updated!!</div>";	
			}
		else
			{
				$_SESSION['smg'] = "<div class='alert alert-info'>Unable to update Message!!</div>";
			}

header("Location:../message-update.php?msg_id=".$msg_id);

 ?>
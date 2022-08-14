<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$head 	= $_POST['head'];
$body 	= $_POST['body'];
$link 	= $_POST['link'];
$foot 	= $_POST['foot'];
$status = $_POST['status'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$ext = array_pop(explode(".", $_FILES['photo']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../message.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/message/".$file_name);

$sql = "INSERT INTO message(msg_head, msg_body, msg_link, msg_tag, msg_foot, msg_status) VALUES('$head','$body', '$link', '$file_name', '$foot', '$status')";

$save = $obj->dataSave($sql);

if ($save) 
	{
		$_SESSION['smg'] = "<div class='alert alert-success'>New Message has been save successfully!!</div>";
	}
else
	{
		$_SESSION['smg'] = "<div class='alert alert-info'>Unable to save New Message!!</div>";
	}

header("Location:../message.php");

 ?>
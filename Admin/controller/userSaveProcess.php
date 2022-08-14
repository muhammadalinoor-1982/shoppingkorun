<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$name 		= $_POST['name'];
$email 		= $_POST['email'];
$password 	= md5($_POST['Password']);
$phone 		= $_POST['phone'];
$user_type 	= $_POST['user_type'];
$status 	= $_POST['status'];
$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$access = $obj->checkUser("SELECT * FROM users WHERE email = '$email'");

if ($access=='0') {


	$query = "INSERT INTO users(name, email, password, phone, user_type, status) VALUES('$name', '$email', '$password', '$phone', '$user_type', '$status')";

	$insert_id = $obj->dataSave($query);

	if ($insert_id) 
		{
			$emp_id = 'N00R-'.date('Y').'-'.$insert_id;
			$obj->updateData("UPDATE users SET emp_id = '$emp_id' WHERE user_id = '$insert_id'");

			if ($_FILES['photo']['name'] != '') 
				{
				$ext = array_pop(explode(".", $_FILES['photo']['name']));
				$file_name = $emp_id.'_'.$_FILES['photo']['name'];

					if (in_array($ext, $extAlow)) 
						{
							move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/users/".$file_name);
							$obj->updateData("UPDATE users SET images = '$file_name' WHERE emp_id = '$emp_id'");
						}	
				}

			$_SESSION['smg'] = "<div class='alert alert-success'>User info saved !!</div>";
		}
	else
		{
			$_SESSION['smg'] = "<div class='alert alert-info'>Unable to save user info !!</div>";
		}
}
else{

	$_SESSION['smg'] = "<div class='alert alert-info'>This user already exist !!</div>";
}


header("Location:../new-account.php");

 ?>
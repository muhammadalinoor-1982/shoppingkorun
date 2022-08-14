<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = $obj->userlogin("users", $username);

if (count($data) > 0) 
	{
		if ($data['status']=='0')
			{
				$_SESSION['message'] = "<div class='alert alert-info'>Sorry you have no <h4>privileges</h4></div>";
				header("Location:../sign-in.php");
				exit();
			}

				if ($data['password'] === $password) 
				{
					$_SESSION['user_id'] = $data['user_id'];
					$_SESSION['name'] = $data['name'];
					$_SESSION['email'] = $data['email'];
					$_SESSION['phone'] = $data['phone'];
					$_SESSION['images'] = $data['images'] ? $data['images'] : 'no_img.jpg';
					$_SESSION['user_type'] = $data['user_type'];
					$_SESSION['status'] = $data['status'];

					header("Location:../index.php");
				}
				else
				{
				$_SESSION['message'] = "<div class='alert alert-info'>Invalid Password</div>";
				header("Location:../sign-in.php");	
				}
	
	}

else{
	$_SESSION['message'] = "<div class='alert alert-info'>Invalid Email Address</div>";
	header("Location:../sign-in.php");
	}

 ?>
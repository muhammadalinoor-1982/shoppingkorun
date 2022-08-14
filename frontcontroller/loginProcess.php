<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();

$email = $_POST['email'];
$password = md5($_POST['password']);

$data = $obj->userlogin("customer", $email);

if (count($data) > 0) 
	{
		if ($data['status']=='0')
			{
				$_SESSION['message'] = "<div class='alert alert-info'>Sorry you have no <h4>privileges</h4></div>";
				header("Location:../login.php");
				exit();
			}

				if ($data['password'] === $password) 
				{
					$_SESSION['customer_id'] = $data['customer_id'];
					$_SESSION['customer_email'] = $data['email'];
					$_SESSION['customer_name'] = $data['name'];
					$_SESSION['customer_phone'] = $data['phone'];
					$_SESSION['customer_address'] = $data['address'];
					$url = !empty($_SESSION['url']) ? $_SESSION['url'] : 'index.php';
					header("Location:../".$url);
				}
				else
				{
				$_SESSION['message'] = "<div class='alert alert-info'>Invalid Password</div>";
				header("Location:../login.php");	
				}
	
	}

else{
	$_SESSION['message'] = "<div class='alert alert-info'>Invalid Email Address</div>";
	header("Location:../login.php");
	}

 ?>
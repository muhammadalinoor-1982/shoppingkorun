<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();


$name 			= $_POST['name'];
$high_light 	= $_POST['high_light'];
$description 	= $_POST['description'];
$status 		= $_POST['status'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];			

if ($name==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Banner Name is Required</div>"; 
					header("Location:../banner.php");
					exit();
				  }	

if ($high_light==''){ $_SESSION['smg'] = "<div class='alert alert-info'>High Light is Required</div>"; 
					header("Location:../banner.php");
					exit();
				  }

if ($description==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Description is Required</div>"; 
					header("Location:../banner.php");
					exit();
				  }

if ($status==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Status is Required</div>"; 
					header("Location:../banner.php");
					exit();
				  }

if ($_FILES['photo']['name'] == ''){ $_SESSION['smg'] = "<div class='alert alert-info'>Image is Required</div>"; 
					header("Location:../banner.php");
					exit();
				  }
				  
				  $ext = array_pop(explode(".", $_FILES['photo']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../banner.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/banners/".$file_name);

$sql = "INSERT INTO banner(name, high_light, description, status, image) VALUES('$name', '$high_light', '$description', '$status', '$file_name')";

$save = $obj->dataSave($sql);

if ($save) {
			$_SESSION['smg'] = "<div class='alert alert-success'>banner Entry has been saved successfully</div>";
		   }
	else
		{
		$_SESSION['smg'] = "<div class='alert alert-info'>unable to Save banner Entry</div>";
		}

header("Location:../banner.php");
 ?>
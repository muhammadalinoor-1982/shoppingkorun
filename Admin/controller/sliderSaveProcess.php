<?php 
session_start();
include("../class/DbConnection.php");
$obj = new DbConnection();

$name 			= $_POST['name'];
$header 		= $_POST['header'];
$description 	= $_POST['description'];
$link 			= $_POST['link'];
$url 			= $_POST['url'];
$status 		= $_POST['status'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];

if ($name==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Name is Required</div>"; 
					header("Location:../slider_entry.php");
					exit();
				  }

if ($header==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Header is Required</div>"; 
					header("Location:../slider_entry.php");
					exit();
				  }

if ($description==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Description is Required</div>"; 
					header("Location:../slider_entry.php");
					exit();
				  }
				  
if ($link==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Link is Required</div>"; 
					header("Location:../slider_entry.php");
					exit();
				  }

if ($url==''){ $_SESSION['smg'] = "<div class='alert alert-info'>URL is Required</div>"; 
					header("Location:../slider_entry.php");
					exit();
				  }

if ($status==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Status is Required</div>"; 
					header("Location:../slider_entry.php");
					exit();
				  }


if ($_FILES['photo']['name'] == ''){ $_SESSION['smg'] = "<div class='alert alert-info'>Slider Image is Required</div>"; 
					header("Location:../slider_entry.php");
					exit();
				  }
				  $ext = array_pop(explode(".", $_FILES['photo']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../slider_entry.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/slider/".$file_name);

$sql = "INSERT INTO slider(slider_name, slider_header, slider_description, slider_link, slider_url, slider_status, slider_image) VALUES('$name', '$header', '$description', '$link', '$url', '$status', '$file_name')";

$save = $obj->dataSave($sql);

if ($save) {
			$_SESSION['smg'] = "<div class='alert alert-success'>Slider Entry has been saved successfully</div>";
		   }
	else
		{
		$_SESSION['smg'] = "<div class='alert alert-info'>unable to Save slider Entry</div>";
		}

header("Location:../slider_entry.php");
 ?>
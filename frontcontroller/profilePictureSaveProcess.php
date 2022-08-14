<?php 
session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();

$extAlow	=['jpg', 'jpeg', 'png', 'svg', 'gif'];
$ext = array_pop(explode(".", $_FILES['cust_images']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['pro-pic'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../profilePicture.php");
							exit();
						}


						if ($_FILES['cust_images']['size'] >= 1024*1024 ) 
						{
							$_SESSION['pro-pic-size'] = "<div class='alert alert-info'>Too large Image, Image size must be within 1MB</div>"; 
							header("Location:../profilePicture.php");
							exit();
						}

						$file_name = time().'L3T'.$_FILES['cust_images']['name'];
						move_uploaded_file($_FILES['cust_images']['tmp_name'], "../Admin/uploads/customer_pro_pic/".$file_name);

$access = $obj->getSingleData("SELECT customer_id FROM customer WHERE customer_id = '".$_SESSION['customer_id']."'");

$query = "UPDATE customer SET cust_images='$file_name' WHERE customer_id = '".$access['customer_id']."'";
$save = $obj->updateData($query);

if ($save) 
	{
		$_SESSION['pro-pic'] = "<div class='alert alert-success'>Picture uploaded successfully!!</div>";
	}
else
	{
		$_SESSION['pro-pic'] = "<div class='alert alert-info'>Unable to Uploade Picture!!</div>";
	}

header("Location:../profilePicture.php");

 ?>
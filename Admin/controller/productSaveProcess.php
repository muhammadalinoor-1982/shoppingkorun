<?php 
session_start();
include("../class/DbConnection.php");
include("../qrcode/qrlib.php");
$PNG_WEB_DIR = '../qrcode/temp/';
$errorCorrectionLevel = 'L';
$matrixPointSize = 4;
$qr_filename = 'qr_'.time().'.png';
$qr_filepath = $PNG_WEB_DIR.$qr_filename;
$obj = new DbConnection();

$category 		= $_POST['category'];
$brand 			= $_POST['brand'];
$product_code 	= ($_POST['product_code']);
$product_name 	= $_POST['product_name'];
$counrty 		= $_POST['counrty'];
$price 			= $_POST['price'];
$discount 		= $_POST['discount'];
$quantity 		= $_POST['quantity'];
$description 	= $_POST['description'];
$status 		= $_POST['status'];
$feature 		= $_POST['feature'];
$trending 		= $_POST['trending'];
$color			= json_encode($_POST['color']);
$size			= json_encode($_POST['size']);
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$country_name = $obj->getSingleData("SELECT country_name FROM countries WHERE country_id='$counrty'");
$brand_name = $obj->getSingleData("SELECT brand_name FROM brands WHERE brand_id='$brand'");
$qr_txt = 'Name:'.$product_name.', '.'Color:'.$color.', '.'Size:'.$size.', '.'Brand:'.$brand_name['brand_name'].', '.'Code:'.$product_code.', '.'Country:'.$country_name['country_name'];

if ($category==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Category is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

if ($brand==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Brand is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

if ($product_code==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Croduct Code is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }				

if ($product_name==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Product Name is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }	

//if ($counrty==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Counrty is Required</div>"; 
//					header("Location:../form-product_entry.php");
//					exit();
//				  }

if ($price==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Price is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

//if ($discount==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Discount Price is Required</div>"; 
//					header("Location:../form-product_entry.php");
//					exit();
//				  }

if ($quantity==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Quantity is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

if ($description==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Description is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

if ($status==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Status is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

if ($feature==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Feature Product is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

if ($trending==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Trending Product is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }

//if ($color==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product color is Required</div>"; 
//					header("Location:../form-product_entry.php");
//					exit();
//				  }

//if ($size==''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product size is Required</div>"; 
//					header("Location:../form-product_entry.php");
//					exit();
//				  }

if ($_FILES['photo']['name'] == ''){ $_SESSION['smg'] = "<div class='alert alert-info'>Product Status is Required</div>"; 
					header("Location:../form-product_entry.php");
					exit();
				  }
				  
				  $ext = array_pop(explode(".", $_FILES['photo']['name']));
				  
						if (!in_array($ext, $extAlow)) 
						{
							$_SESSION['smg'] = "<div class='alert alert-info'>Invalid Image Format</div>"; 
							header("Location:../form-product_entry.php");
							exit();
						}

						$file_name = time().'_'.$_FILES['photo']['name'];
						move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/products/".$file_name);

$sql = "INSERT INTO products(product_name, product_description, brand_id, category_id, color, size, product_code, menufecture_counrty, price, discount, quantity, product_image, status, feature_product, trending_product, qrcode, posted_by) VALUES('$product_name', '$description', '$brand', '$category', '$color', '$size', '$product_code', '$counrty', '$price', '$discount', '$quantity', '$file_name', '$status', '$feature', '$trending', '$qr_filename', '".$_SESSION['user_id']."')";

$product_id = $obj->dataSave($sql);

QRcode::png($qr_txt, $qr_filepath, $errorCorrectionLevel, $matrixPointSize, 2);

if ($product_id) {
			$_SESSION['smg'] = "<div class='alert alert-success'>Product Entry has been saved successfully</div>";

			if (count($_FILES['other_img']['name']) > 0 ) {

				for ($i=0; $i<count($_FILES['other_img']['name']); $i++) {
			
							$ext = array_pop(explode(".", $_FILES['other_img']['name'][$i]));
						  
								if (in_array($ext, $extAlow)) 
									{
										$file_name = time().'_'.$_FILES['other_img']['name'][$i];
										move_uploaded_file($_FILES['other_img']['tmp_name'][$i], "../uploads/multi_img/".$file_name);
										$query = "INSERT INTO product_images(product_id, images) VALUES('$product_id','$file_name')";
										$SAVE = $obj->dataSave($query);
									}

										

							}


					}

			
		   }
	else
		{
		$_SESSION['smg'] = "<div class='alert alert-info'>unable to Save Product Entry</div>";
		}

header("Location:../form-product_entry.php");
 ?>
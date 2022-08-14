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

$id 			= $_POST['id'];
$category_id 	= $_POST['category'];
$brand_id 		= $_POST['brand'];
$counrty 		= $_POST['counrty'];
$product_name 	= $_POST['product_name'];
$product_code 	= $_POST['product_code'];
$price			= $_POST['price'];
$discount 		= $_POST['discount'];
$quantity 		= $_POST['quantity'];
$status 		= $_POST['status'];
$feature 		= $_POST['feature'];
$trending 		= $_POST['trending']; 
$color			= json_encode($_POST['color']);
$size			= json_encode($_POST['size']);
$old_img		= $_POST['old_img'];
$extAlow		=['jpg', 'jpeg', 'png', 'svg', 'gif'];

$country_name = $obj->getSingleData("SELECT country_name FROM countries WHERE country_id='$counrty'");
$brand_name = $obj->getSingleData("SELECT brand_name FROM brands WHERE brand_id='$brand'");
$qr_txt = 'Name:'.$product_name.', '.'Color:'.$color.', '.'Size:'.$size.', '.'Brand:'.$brand_name['brand_name'].', '.'Code:'.$product_code.', '.'Country:'.$country_name['country_name'];

$sql = "UPDATE products SET category_id='$category_id', color='$color', size='$size', brand_id='$brand_id', menufecture_counrty='$counrty', product_name='$product_name', product_code='$product_code', price='$price', discount='$discount', quantity='$quantity', status='$status', feature_product='$feature', trending_product='$trending', qrcode='$qr_filename', posted_by='".$_SESSION['user_id']."' WHERE id='$id'";

$status = $obj->updateData($sql);

QRcode::png($qr_txt, $qr_filepath, $errorCorrectionLevel, $matrixPointSize, 2);

if ($_FILES['photo']['name'] !='') {  
										$ext = array_pop(explode('.', $_FILES['photo']['name']));
										$new_file_name = time().'_'.$_FILES['photo']['name'];

										if (in_array($ext, $extAlow)) {
											move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/products/".$new_file_name);
											unlink("../uploads/products/".$old_img);
											$img_update = $obj->updateData("UPDATE products SET product_image='$new_file_name' WHERE id='$id'");
										}
								   }


if ($status || $img_update) {

			$_SESSION['smg'] = "<div class='alert alert-success'>Product Data Update successfull...!!</div>";
		}
	else
		{
			$_SESSION['smg'] = "<div class='alert alert-info'>Unable to Update Product Data...!!</div>";
		}


header("Location:../product_update.php?id=".base64_encode($id));

 ?>
<?php 
session_start();
include("../Admin/class/DbConnection.php");
include("../Admin/class/SSLCommerz.php");
$obj = new DbConnection();

extract($_POST);

$customer_id = $_SESSION['customer_id'];

$customer_id  = isset($ship_toggle) ? $customer_id 		: $_SESSION['customer_id'];
$ship_name	  = isset($ship_toggle) ? $ship_name	  	: $_SESSION['customer_name'];
$ship_email	  = isset($ship_toggle) ? $ship_email  		: $_SESSION['customer_email'];
$ship_phone   = isset($ship_toggle) ? $ship_phone  		: $_SESSION['customer_phone'];
$ship_address = isset($ship_toggle) ? $ship_address 	: $_SESSION['customer_address'];

$order_id = $obj->dataSave("INSERT INTO orders(ship_name, ship_phone, ship_email, ship_address, customer_id, total_amount, shiping_method, shiping_charge, payment_method) VALUES('$ship_name', '$ship_phone', '$ship_email', '$ship_address', '$customer_id', '$total_amount', '$ship', '$shiping_charge', '$pay') ");

$customer = $_SESSION['customer_id'];
$data = $obj->getData("SELECT * FROM customer WHERE customer_id = '$customer'");

foreach ($_SESSION['cart'] as $key=>$value) {
	
	$order_details_id = $obj->dataSave("INSERT INTO order_details(order_id, product_id, quantity, price) VALUES('$order_id', '$key', '".$value['quantity']."', '".$value['price']."') ");
}


if ($pay == 'SSLCOMMERZ') {

	$post_data = array();
$post_data['total_amount'] = (float)$total_amount;
$post_data['currency'] = "BDT";
$post_data['tran_id'] = $order_id;
$post_data['success_url'] = "http://localhost/NOOR_Enterprise/success.php";
$post_data['fail_url'] = "http://localhost/NOOR_Enterprise/failed.php";
$post_data['cancel_url'] = "http://localhost/NOOR_Enterprise/cancel.php";

# CUSTOMER INFORMATION
$post_data['cus_name'] = "";
$post_data['cus_email'] = "";
$post_data['cus_add1'] = "";
$post_data['cus_add2'] = "";
$post_data['cus_city'] = "";
$post_data['cus_state'] = "";
$post_data['cus_postcode'] = "";
$post_data['cus_country'] = "";
$post_data['cus_phone'] = "<?php echo $data[0]['phone']; ?>";
$post_data['cus_fax'] = "";

# SHIPMENT INFORMATION
$post_data['ship_name'] = $ship_name;
$post_data['ship_add1 '] = $ship_address;
$post_data['ship_add2'] = "";
$post_data['ship_city'] = "";
$post_data['ship_state'] = "";
$post_data['ship_postcode'] = "";
$post_data['ship_country'] = "";

# OPTIONAL PARAMETERS
$post_data['value_a'] = $customer;
$post_data['value_b'] = "";
$post_data['value_c'] = "";
$post_data['value_d'] = "";

$sslc = new SSLCommerz();

$options = $sslc->initiate($post_data, false);

$_SESSION['order_id'] = $order_id;

exit();

}

$_SESSION['order_id'] = $order_id;

header("Location:../success.php");

 ?>
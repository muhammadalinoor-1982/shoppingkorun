<?php include("includes/settings.php"); 
error_reporting(0); 
if (empty($_SESSION['customer_id'])) {
  header("Location:login.php");
  exit();
}

$id = base64_decode($_GET['id']);

  $orders = $obj->getData("SELECT * FROM orders WHERE id = $id");

  $invoice = $obj->getData("SELECT products.price, products.discount, products.product_image, order_details.product_id, products.product_name, order_details.quantity, order_details.price,  order_details.order_id, customer.name, customer.phone, customer.email, customer.address FROM products, order_details, orders, customer WHERE products.id = order_details.product_id AND customer.customer_id = orders.customer_id AND order_details.order_id ='$id'");

    $payment_status = ['Unpaid', 'Paid'];
    $order_status = ['Pending', 'Processing', 'Shipping', 'Complete', 'Cancle'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="description" content="Fabulous is a creative, clean, fully responsive, powerful and multipurpose HTML Template with latest website trends. Perfect to all type of fashion stores.">
  <meta name="keywords" content="HTML,CSS,womens clothes,fashion,mens fashion,fashion show,fashion week">
  <meta name="author" content="JTV">

<title><?php echo $setting[0]['site_name']; ?></title>

<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all">
<link rel="stylesheet" type="text/css" href="noor/css/noor.css" media="all">
</head>

<body class="my-address-page">
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- end header --> 
  
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-9 col-xs-12">
          <div class="col-main">
            <div class="my-account">
              <div style="text-align: center;" class="page-title">
                <h2>Order Details</h2>
              </div>

            <div class="box-account">
				<div class="row" style="background-image: linear-gradient(to right, #dafcd4, #95ad91);">
					<div style="text-align: center;" class="col-sm-4 col-md-4 info-box">
						<h2><?php echo $invoice[0]['product_name']; ?></h2>
              			<div><img style="width: 280px; height: 250px;" src="Admin/uploads/products/<?php echo $invoice[0]['product_image']; ?>" /></div>
					</div>
					<div class="col-sm-4 col-md-4 info-box" style="top: 120px;">
              			<h5>Order ID # <span style="background-color: #08db21; border-radius: 5px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">&nbsp; <?php echo $invoice[0]['order_id']; ?> &nbsp;</span></h5>
              			<h5>Order Status: <span style="background-color: #ffb200; border-radius: 5px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">&nbsp; <?php echo $order_status[$orders[0]['order_status']]; ?> &nbsp;</span></h5>
              			<h5>Payment Status: <span style="background-color: yellow; border-radius: 5px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">&nbsp; <?php echo $payment_status[$orders[0]['payment_status']]; ?> &nbsp;</span></h5>
					</div>
					<div class="col-sm-3 col-md-3 info-box" style="top: 80px;">
						<h1><span style="color: #f716b7; font-size: 200%; font-weight: 900;"><?php echo $invoice[0]['discount']; ?>%</span> OFF</h1>
					</div>
				</div>
			</div>

			   <div class="dashboard">
                <div class="recent-orders">
                  <div class="table-responsive">
                    <table class="table table-striped table-responsive table-bordered text-left my-orders-table">
                      <thead>
                        <tr style="background-color: #009dff; color: #fff;" class="first last">
                          <th>Customer Name</th>
                          <th><span class="nobr">Price</span></th>
                          <th>Quantity</th>
                          <th>Payment Method</th>
                          <th>Shiping Method</th>
                          <th><span class="nobr">Shiping Charge</span></th>
                          <th><span class="nobr">Total Price</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="text-align: center; background-color: #e8f6ff;" class="first last">
                          <td><?php echo $invoice[0]['name']; ?></td>
                          <td><span class="price">$<?php echo $invoice[0]['price']; ?></span></td>
                          <td><?php echo $invoice[0]['quantity']; ?></td>
                          <td><?php echo $orders[0]['payment_method']; ?></td>
                          <td><?php echo $orders[0]['shiping_method']; ?></td>
                          <td><span class="price">$<?php echo $orders[0]['shiping_charge']; ?></span></td>
                          <td><span class="price">$<?php echo $orders[0]['total_amount']; ?></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="dashboard">
                <div class="box-account">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 info-box">
                      <h3>Default Billing Address</h3>
                      <address>
                      <?php echo $invoice[0]['name']; ?><br>
                      Phone: <?php echo $invoice[0]['phone']; ?><br>
                      Email: <?php echo $invoice[0]['email']; ?><br>
                      <?php echo $invoice[0]['address']; ?><br>
                      </address>
                    </div>
                    <div class="col-sm-6 col-md-6 info-box">
                      <h3>Default Shipping Address</h3>
                      <address>
                      <?php echo $orders[0]['ship_name']; ?><br>
                      Phone: <?php echo $orders[0]['ship_phone']; ?><br>
                      Email: <?php echo $orders[0]['ship_email']; ?><br>
                      <?php echo $orders[0]['ship_address']; ?><br>
                      </address>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12">
          <div class="block block-account">
            <div class="block-title">My Account</div>
            <div class="block-content">
              <ul>
                <li><a href="account-info.php"><i class="fa fa-angle-right"></i> Account Information</a></li>
                <li><a href="change-password.php"><i class="fa fa-angle-right"></i> Change Password</a></li>
                <li><a href="edit-account.php"><i class="fa fa-angle-right"></i> Edit Account</a></li>
                <li><a href="address-book.php"><i class="fa fa-angle-right"></i> Address Book</a></li>
                <li class="current"><a href="my-orders.php"><i class="fa fa-angle-right"></i> My Orders</a></li>
                <li><a href="wishlist.php"><i class="fa fa-angle-right"></i> My Wishlist</a></li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!--End main-container --> 
  
  <!-- Footer -->
  <?php include("includes/footer.php"); ?>
</div>

<!-- JavaScript --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/revslider.js"></script> 
<script src="js/main.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/mob-menu.js"></script>
</body>
</html>
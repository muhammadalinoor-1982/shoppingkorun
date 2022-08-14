<?php include("includes/settings.php"); 
error_reporting(0); 
if (empty($_SESSION['customer_id'])) {
  header("Location:login.php");
  exit();
}

$customer_id = $_SESSION['customer_id'];

$data = $obj->getData("SELECT * FROM orders, customer WHERE orders.customer_id = customer.customer_id AND customer.customer_id = '$customer_id'");

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
                <h2>My Address Book</h2>
              </div>
              <div class="dashboard">
                <div class="box-account">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 info-box">
                      <h3>Default Billing Address</h3>
                      <address>
                      <?php echo $data[0]['name']; ?><br>
                      Phone: <?php echo $data[0]['phone']; ?><br>
                      Email: <?php echo $data[0]['email']; ?><br>
                      <?php echo $data[0]['address']; ?><br>
                      <?php $data[0]['customer_id']; ?>
                      <a href="customer-address-book-update.php?customer_id=<?php echo $data[0]['customer_id']; ?>" class="btn edit-btn"><i class="fa fa-pencil"></i> Change Billing Address</a>
                      </address>
                    </div>
                    <div class="col-sm-6 col-md-6 info-box">
                      <h3>Default Shipping Address</h3>
                      <address>
                      <?php echo $data[0]['ship_name']; ?><br>
                      Phone: <?php echo $data[0]['ship_phone']; ?><br>
                      Email: <?php echo $data[0]['ship_email']; ?><br>
                      <?php echo $data[0]['ship_address']; ?><br>
                      <?php $data[0]['id']; ?>
                      <a href="ship-address-book-update.php?id=<?php echo $data[0]['id']; ?>" class="btn edit-btn"><i class="fa fa-pencil"></i> Change Shipping Address</a>
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
                <li class="current"><a href="address-book.php"><i class="fa fa-angle-right"></i> Address Book</a></li>
                <li><a href="my-orders.php"><i class="fa fa-angle-right"></i> My Orders</a></li>
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
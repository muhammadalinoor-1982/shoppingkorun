<?php include("includes/settings.php"); 
error_reporting(0); 
if (empty($_SESSION['customer_id'])) {
  header("Location:login.php");
  exit();
}

$customer_id = $_SESSION['customer_id'];

$data = $obj->getData("SELECT * FROM orders, customer WHERE orders.customer_id = customer.customer_id AND customer.customer_id = '$customer_id'");

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

<body class="my-orders-page">
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
              <div class="page-title">
                <h2>My Orders</h2>
              </div>
              <div class="dashboard">
                <div class="recent-orders">
                  <div class="table-responsive">
                    <table class="table table-striped table-responsive table-bordered text-left my-orders-table">
                      <thead>
                        <tr class="first last">
                          <th>#</th>
                          <th>Date</th>
                          <th>Ship To</th>
                          <th><span class="nobr">Order Total</span></th>
                          <th>Status</th>
                          <th>Payment Status</th>
                          <th class="text-center">Details</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($data as $value){ ?>
                        <tr>
                          <td><?php echo $value['id']; ?></td>
                          <td><?php echo $value['created_at']; ?></td>
                          <td><?php echo $value['name']; ?></td>
                          <td><span class="price">$<?php echo $value['total_amount']; ?></span></td>
                          <td class="text-primary"><em><?php echo $order_status[$value['order_status']]; ?></em></td>
                          <td class="text-primary"><em><?php echo $value['payment_status'] ? 'Paid' : 'Unpaid'; ?></em></td>
                          <td class="text-center last"><div class="btn-group"> <a href="order-view.php?id=<?php echo base64_encode($value['id']); ?>" class="btn btn-view-order">View Order</a> </div></td>
                        </tr>
                      <?php } ?>  
                      </tbody>
                    </table>
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
<?php include("includes/settings.php"); ?>
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

<body class="account-information-page">
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
          	<form action="frontcontroller/passwordChangeProcess.php" method="post">
            <div class="my-account">
              <div class="page-title">
                <h2>Edit Account Information</h2>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-6 col-xs-12">
                  <div class="title-box">
                  	<?php if (isset($_SESSION['change-password'])) {
                        echo $_SESSION['change-password'];
                        } ?>
                    <h3>Change Password</h3>
                  </div>
                  <ul class="list-unstyled">
                    <li>
                      <div class="form-group">
                      	<?php if (isset($_SESSION['cpasserror'])) {
                        echo $_SESSION['cpasserror'];
                        } ?>
                        <label for="cpassword">Current Password <span class="required">*</span></label>
                        <input type="password" name="cpassword" id="cpassword" class="form-control">
                      </div>
                      <div class="form-group">
                      	<?php if (isset($_SESSION['npasserror'])) {
                        echo $_SESSION['npasserror'];
                        } ?>
                        <label for="npassword">New Password <span class="required">*</span></label>
                        <input type="password" name="npassword" id="npassword" class="form-control">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                      	<?php if (isset($_SESSION['cnewpasserror'])) {
                        echo $_SESSION['cnewpasserror'];
                        } ?>
                        <label for="cnewpassword">Confirm New Password <span class="required">*</span></label>
                        <input type="password" name="cnewpassword" id="cnewpassword" class="form-control">
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="buttons-set">
                <input class="button login" type="submit" name="submit" value="Change Password">
                <span class="required pull-right"><b>*</b> Required Field</span> </div>
            </div>
            </form>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12">
          <div class="block block-account">
            <div class="block-title">My Account</div>
            <div class="block-content">
              <ul>
                <li><a href="account-info.php"><i class="fa fa-angle-right"></i> Account Information</a></li>
                <li class="current"><a href="change-password.php"><i class="fa fa-angle-right"></i> Change Password</a></li>
                <li><a href="edit-account.php"><i class="fa fa-angle-right"></i> Edit Account</a></li>
                <li><a href="address-book.php"><i class="fa fa-angle-right"></i> Address Book</a></li>
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
<?php 
unset($_SESSION['change-password']);
unset($_SESSION['emailerror']);
unset($_SESSION['cpasserror']); 
unset($_SESSION['npasserror']);
unset($_SESSION['cnewpasserror']);
?>
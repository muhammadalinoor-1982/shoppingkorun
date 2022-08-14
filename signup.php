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
<div id="page"> 
  <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- end header --> 
  
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-9 col-xs-12">
          <form id="registration" action="frontcontroller/signUpProcess.php" method="post">
          <div class="col-main">
            <div class="my-account">
              <div class="page-title">
                <h2>New Account Information</h2>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-6 col-xs-12">
                  <div class="title-box">
                    <h3>Account Information</h3>
                  </div>
                  <ul class="list-unstyled">
                    <li>
                      <div class="form-group">
                        <?php if (isset($_SESSION['nameerror'])) {
                        echo $_SESSION['nameerror'];
                        } ?>
                        <label for="name">Name <span class="required">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Mr.">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <?php if (isset($_SESSION['phoneerror'])) {
                                  echo $_SESSION['phoneerror'];
                        } ?>
                        <div class="alert alert-danger msg" style="display: none;"></div>
                        <label for="phone">phone <span class="required">*</span></label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="+880-">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <?php if (isset($_SESSION['emailerror'])) {
                                  echo $_SESSION['emailerror'];
                        } ?>
                        <label for="emailAddress">Email Address <span class="required">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="vince-roy@example.com">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <?php if (isset($_SESSION['gendererror'])) {
                                  echo $_SESSION['gendererror'];
                        } ?>
                      <label for="emailAddress"><span class="required">*</span>Gender: </label>
                      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <label for="address">Address <span class="required">*</span></label>
                        <input type="address" name="address" id="address" class="form-control" placeholder="Enter your address">
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                  <div class="title-box">
                    <h3>Password</h3>
                  </div>
                  <ul class="list-unstyled">
                    <li>
                      <div class="form-group">
                        <?php if (isset($_SESSION['passerror'])) {
                                  echo $_SESSION['passerror'];
                        } ?>
                        <div class="alert alert-danger message" style="display: none;"></div>
                        <label for="npassword">New Password <span class="required">*</span></label>
                        <input type="password" name="npassword" id="npassword" class="form-control" required>
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <label for="cnewpassword">Confirm New Password <span class="required">*</span></label>
                        <input type="password" name="cnewpassword" id="cnewpassword" class="form-control">
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="g-recaptcha" data-sitekey="6LcrwJUUAAAAAMjD5olWREZQt-9Erd0htYymBSPk"></div>
                <div class="buttons-set">
                  <input class="button login" type="submit" name="submit" value="Save">
                  <span class="required pull-right"><b>*</b> Required Field</span> 
                </div>
            </div>
          </div>
          </form>
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12">
          <div class="block block-account">
            <div class="block-title">My Account</div>
            <div class="block-content">
              <ul>
                <li><a href="dashboard.html"><i class="fa fa-angle-right"></i> Account Dashboard</a></li>
                <li class="current"><a href="signup.php"><i class="fa fa-angle-right"></i>Creat New Account</a></li>
                <li><a href="edit-account.php"><i class="fa fa-angle-right"></i> Edit Account</a></li>
                <li><a href="my-address.html"><i class="fa fa-angle-right"></i> Address Book</a></li>
                <li><a href="my-order.html"><i class="fa fa-angle-right"></i> My Orders</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> Billing Agreements</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> Recurring Profiles</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> My Product Reviews</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> My Tags</a></li>
                <li><a href="wishlist.html"><i class="fa fa-angle-right"></i> My Wishlist</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> My Downloadable</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> Newsletter Subscriptions</a></li>
              </ul>
            </div>
          </div>
          <div class="block block-compare">
            <div class="block-title "><span>Compare Products (3)</span></div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item">
                  <input type="hidden" value="2173" class="compare-item-id">
                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
                <li class="item">
                  <input type="hidden" value="2174" class="compare-item-id">
                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
                <li class="item">
                  <input type="hidden" value="2175" class="compare-item-id">
                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
              </ol>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
              </div>
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
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/revslider.js"></script> 
<script src="js/main.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/mob-menu.js"></script>
</body>
</html>
<?php 
unset($_SESSION['nameerror']); 
unset($_SESSION['phoneerror']);
unset($_SESSION['emailerror']);
unset($_SESSION['gendererror']);
unset($_SESSION['passerror']);
?>
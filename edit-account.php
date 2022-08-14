<?php include("includes/settings.php");

$id = $_SESSION['customer_id'];
$data = $obj->getData("SELECT * FROM customer WHERE customer_id ='$id'");
$status = ['Active', 'Inactive'];
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
          
          <form action="frontcontroller/accountUpdateProcess.php" method="post">
            <?php foreach($data as $value){ ?>
          <div class="col-main">
            <div class="my-account">
              <div class="page-title">
                <h2>Edit Account Information</h2>
              </div>
              <?php if (isset($_SESSION['smg'])) {
                       echo $_SESSION['smg'];
              } ?>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                  <div class="title-box">
                    <h3>Account Information</h3>
                  </div>
                  <ul class="list-unstyled">
                    <li>
                      <div class="form-group">
                        <label for="name">Name <span class="required">*</span></label>
                        <input type="text" name="name" id="name" value="<?php echo $value['name']; ?>" class="form-control" placeholder="Mr.">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <label for="phone">phone <span class="required">*</span></label>
                        <input type="text" name="phone" id="phone" value="<?php echo $value['phone']; ?>" class="form-control" placeholder="+880-">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <label for="emailAddress">Email Address <span class="required">*</span></label>
                        <input type="email" name="email" id="email" value="<?php echo $value['email']; ?>" class="form-control" placeholder="vince-roy@example.com">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <label for="emailAddress"><span class="required">*</span>Gender: </label>
                        <input type="radio" name="gender" value="<?php echo $value['gender']; ?>">Female
                        <input type="radio" name="gender" value="<?php echo $value['gender']; ?>">Male
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                        <label for="address">Address <span class="required">*</span></label>
                        <input type="address" name="address" id="address" value="<?php echo $value['address']; ?>" class="form-control" placeholder="Enter your address">
                      </div>
                    </li>
                    <li>
                      <div class="form-group">
                          <label for="status">Status <span class="required">*</span></label>
                          <select name="status" id="status">
                              <option value="">Choose Status:</option>
                              <option value="1"<?php if($value['status']==1) echo 'selected' ?>>Active</option>
                              <option value="0"<?php if($value['status']==0) echo 'selected' ?>>Inactive</option>
                          </select>
                      </div>
                    </li>
                    <li>
                      <input type="hidden" name="customer_id" value="<?php echo $value['customer_id'] ?>">
                    </li>
                  </ul>
                </div>
                
              </div>
                <div class="buttons-set">
                    <input  class="button login" type="submit" name="submit" value="Update">
                    <span class="required pull-right"><b>*</b> Required Field</span> 
                </div>
            </div>
          </div>
          <?php } ?>
          </form>
          
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12">
          <div class="block block-account">
            <div class="block-title">My Account</div>
            <div class="block-content">
              <ul>
                <li><a href="account-info.php"><i class="fa fa-angle-right"></i> Account Information</a></li>
                <li><a href="change-password.php"><i class="fa fa-angle-right"></i> Change Password</a></li>
                <li class="current"><a href="edit-account.php"><i class="fa fa-angle-right"></i> Edit Account</a></li>
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

<!-- JavaScript --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/revslider.js"></script> 
<script src="js/main.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/mob-menu.js"></script>
</body>
</html>
<?php unset($_SESSION['smg']); ?>
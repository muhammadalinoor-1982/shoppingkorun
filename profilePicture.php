<?php include("includes/settings.php"); 
error_reporting(0); 
if (empty($_SESSION['customer_id'])) {
  header("Location:index.php");
  exit();
}

$customer_id = $_SESSION['customer_id'];
$pro_pic = $obj->getData("SELECT * FROM customer WHERE customer_id = '$customer_id'");

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
<div id="page"> <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- end header --> 
  
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-9 col-xs-12">
          <div class="col-main">
          	<form action="frontcontroller/profilePictureSaveProcess.php" method="post" enctype="multipart/form-data">
            <div class="my-account">
              <div class="page-title">
                <h2>Edit Account Information</h2>
              </div>
              <div style="float: left;" class="row">
                <div class="col-sm-6 col-md-6 col-xs-12">
                  <div class="title-box">
                    <h3>Profile Picture</h3>
                  </div>
                  <ul class="list-unstyled">
                    <li>
                      <div class="form-group">
                      	<?php if (isset($_SESSION['pro-pic'])) {
                        echo $_SESSION['pro-pic'];
                        } 

                        if (isset($_SESSION['pro-pic-size'])) {
                        echo $_SESSION['pro-pic-size'];
                        }
                        ?>
                        <label for="cpassword">Upload Picture</label>
                        <input type="file" name="cust_images" id="cust_images" class="form-control">
                      </div>
                    </li>
                    <li>
                      <div class="buttons-set">
                        <input class="button login" type="submit" name="submit" value="Save">
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-xs-12">
                      <div class="title-box">
                        <div style="position: relative; left: 300px; width: 200px; height: 200;"><img alt="Product tilte is here" src="Admin/uploads/customer_pro_pic/<?php echo $pro_pic[0]['cust_images'];  ?>"></div>
                      </div>
                    </div>
                  </div>
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
                <li><a href="change-password.php"><i class="fa fa-angle-right"></i> Change Password</a></li>
                <li class="current"><a href="profilePicture.php"><i class="fa fa-angle-right"></i> Profile Picture</a></li>
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
unset($_SESSION['pro-pic']);
unset($_SESSION['pro-pic-size']);
?>
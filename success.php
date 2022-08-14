<?php include("includes/settings.php");
unset($_SESSION['cart']);

$id = @$_POST['tran_id']!='' ? $_POST['tran_id'] : $_SESSION['order_id'];
$shipping = $obj->getData("SELECT * FROM orders WHERE id='$id'");

$customer_id = @$_POST['value_a']!='' ? $_POST['value_a'] : $_SESSION['customer_id'];
$customer = $obj->getData("SELECT * FROM customer WHERE customer_id = '$customer_id'");

$sms = "Dear ".$shipping[0]['ship_name'].", your order(#".$id.") has benn placed";
$send_SMS = $obj->sendSMS($shipping[0]['ship_phone'], $sms);

$subject = "Order Confirmation";
$boday = "Dear ".$shipping[0]['ship_name'].", your order(#".$id.") has benn placed"; 
$send_mail = $obj->sendMail($shipping[0]['ship_email'], $subject, $boday);

$products = $obj->getData("SELECT products.product_image, products.product_name, order_details.price, order_details.quantity, order_details.product_id FROM order_details, products  WHERE products.id = order_details.product_id AND order_details.order_id ='$id'");

if (isset($_POST) && @$_POST['tran_id'] !='') {
  $obj->updateData("UPDATE orders SET payment_status=1, order_status=1 WHERE id='".$_POST['tran_id']."'");
}

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

<body class="login-page">
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> 
  <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- end header --> 
  
  <!-- Navigation -->
  
  <section class="main-container col2-layout">
    <div class="main container">
      <div class="account-login">
        <div style="text-align: center;" class="page-title">
          <h1>Success</h1>
        </div>
        <fieldset class="col4-set">
          <!-- Order Details start-->
            <div class="content-tab-product-category"> 
              <!-- Tab panes start-->
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane  fade in" id="complete-order" style="display: block;">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="checkout-payment-area">
                        <div class="checkout-total">
                          <div style="text-align: center;" class="page-title">
                          <h3>Order Details</h3>
                          </div>
                            <div class="table-responsive">
                              <table class="checkout-area table">
                                <thead>
                                  <tr class="cart_item check-heading">
                                    <td class="ctg-type"> Product</td>
                                    <td class="cgt-des"> Total</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  $sum = 0;
                                  foreach ($products as $key=>$value) { ?>
                                  <tr class="cart_item check-item prd-name">
                                    <td class="ctg-type"><span><img style="width: 50px; height: 50;" src="Admin/uploads/products/<?php echo $value['product_image']; ?>" /></span> <?php echo $value['product_name']; ?> × <span><?php echo $value['quantity']; ?></span></td>
                                    <td class="cgt-des"> <?php echo $value['quantity']*$value['price']; ?></td>
                                  </tr>
                                  <?php $sum = $sum + $value['quantity']*$value['price']; } ?>

                                  <tr class="cart_item">
                                    <td class="ctg-type">Shipping (<?php echo $shipping[0]['shiping_method']; ?>)</td>
                                    <td class="ctg-type"><span><?php echo $shipping[0]['shiping_charge']; ?></span></td>
                                  </tr>

                                  <tr class="cart_item">
                                    <td class="ctg-type"> Subtotal</td>
                                    <td class="cgt-des"><?php echo $sum; ?></td>
                                  </tr>
                                  <tr class="cart_item">
                                    <td class="ctg-type crt-total"> Total</td>
                                    <td class="cgt-des prc-total"> BDT <?php echo $sum + $shipping[0]['shiping_charge']; ?> </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          
                        </div>
                        <div class="payment-section">
                          <div class="pay-toggle">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="checkout-payment-area">
                        <div class="checkout-total">
                          <div style="text-align: center;" class="page-title">
                          <h1>Shipping Details</h1>
                          </div>
                            <div style="text-align: center;" class="page-title">
                              <span><strong>Shipping Address</strong></span>
                              <ul style="list-style-type: none; text-align: left;">
                              	<li>Name:<?php echo $shipping[0]['ship_name']; ?></li>
                              	<li>Phone:<?php echo $shipping[0]['ship_phone']; ?></li>
                              	<li>Email:<?php echo $shipping[0]['ship_email']; ?></li>
                              	<li>Address:<?php echo $shipping[0]['ship_address']; ?></li>
                              </ul>
                            </div>
                        </div>
                        <div class="checkout-total">
                          <div style="text-align: center;" class="page-title">
                          <h1>Customer Details</h1>
                          </div>
                            <div style="text-align: center;" class="page-title">
                              <span><strong>Your Address</strong></span>
                              <ul style="list-style-type: none; text-align: left;">
                              	<li>Name:<?php echo $customer[0]['name']; ?></li>
                              	<li>Phone:<?php echo $customer[0]['phone']; ?></li>
                              	<li>Email:<?php echo $customer[0]['email']; ?></li>
                              	<li>Address:<?php echo $customer[0]['address']; ?></li>
                              </ul>
                            </div>
                        </div>
                        <div class="payment-section">
                          <div class="pay-toggle">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tab panes end-->

            </div>
           <!-- Order Details end-->
          <div class="col-1 new-users"><strong>Thank you for your Shopping</strong>
            <div class="content">
              <div class="buttons-set">
                <a href="index.php"><button class="button create-account" type="button"><span>Continue Shopping</span></button></a>
              </div>
            </div>
          </div>
        </fieldset>



          <fieldset class="col2-set">
          <!-- Order Details start-->
            <div class="content-tab-product-category"> 
              <!-- Tab panes start-->
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane  fade in" id="complete-order" style="display: block;">
                  <div class="row">
                    
                  </div>
                </div>
              </div>
              <!-- Tab panes end-->

            </div>
           <!-- Order Details end-->
        </fieldset>



      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
  
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
<?php unset($_SESSION['message']); ?>
</html>
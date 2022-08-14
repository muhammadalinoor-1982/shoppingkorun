<?php include("includes/settings.php");
   $_SESSION['url'] = 'checkout.php'; 
    if (!isset($_SESSION['customer_id']) || $_SESSION['customer_id'] =='') 
      { header("Location: login.php"); 
      exit();
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

<body class="checkout-page">
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> 
  <!-- Header -->
 <?php include("includes/header.php"); ?>
  <!-- end header --> 
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.php" title="Go to Home Page">Home</a> <span>/</span></li>
            <li> <strong>Checkout</strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- main-container -->
  <div class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-12">
          <div class="product-area">
            <div class="title-tab-product-category">
              <div class="text-center">
              	<form action="frontcontroller/orderProcess.php" method="post">
              	<div class="checkout-area">
                	<div class="row">
                	
                	        <div class="col-md-12 col-xs-12">
                              <div class="billing-details">
                                <div class="right-side">
                                  <div class="ship-acc clearfix">
                                    <div class="ship-toggle">
                                      <input type="checkbox" id="ship-toggle" name="ship_toggle">
                                      <label for="ship-toggle">Ship to a different address?</label>
                                    </div>
                                    <div class="ship-acc-body">
                                      
                                        <div class="row">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-box">
                                              <label>Full Name <em>*</em></label>
                                              <input type="text" name="ship_name" class="info" placeholder="First Name">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-box">
                                              <label>Email Address<em>*</em></label>
                                              <input type="email" name="ship_email" class="info" placeholder="Your Email">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-box">
                                              <label>Phone Number<em>*</em></label>
                                              <input type="text" name="ship_phone" class="info" placeholder="Phone Number">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-box">
                                              <label>Address <em>*</em></label>
                                              <input type="text" name="ship_address" class="info mb-10" placeholder="Street Address">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>	
                	</div>
                </div>
              </div>
            </div>
            <div class="content-tab-product-category"> 
              <!-- Tab panes -->
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane  fade in" id="complete-order" style="display: block;">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="checkout-payment-area">
                        <div class="checkout-total">
                          <h3>Your order</h3>
                          
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
                                	foreach ($_SESSION['cart'] as $key=>$value) { ?>
                                  <tr class="cart_item check-item prd-name">
                                    <td class="ctg-type"><span><img style="width: 50px; height: 50;" src="Admin/uploads/products/<?php echo $value['image']; ?>" /></span> <?php echo $value['name']; ?> × <span><?php echo $value['quantity']; ?></span></td>
                                    <td class="cgt-des"> <?php echo $value['quantity']*$value['price']; ?></td>
                                  </tr>
                                  <?php $sum = $sum + $value['quantity']*$value['price']; } ?>

                                  <tr class="cart_item">
                                    <td class="ctg-type"> Subtotal</td>
                                    <td class="cgt-des" id="sub_total"><?php echo $sum; ?></td>
                                  </tr>
                                  <tr class="cart_item">
                                    <td class="ctg-type">Shipping</td>
                                    <td class="cgt-des ship-opt">
                                      <div class="shipp">
                                        <input type="radio" class="ship" id="pay-toggle" name="ship" value="In Dhaka City" data-value="50">
                                        <label for="pay-toggle">In Dhaka City: <span>BDT: 50.00</span></label>
                                      </div>
									                 </td>
                                  </tr>
                                  <tr class="cart_item">
                                    <td class="ctg-type">Shipping</td>
                                    <td class="cgt-des ship-opt">
                                      <div class="shipp">
                                        <input type="radio" class="ship" id="pay-toggle" name="ship" value="All Over Bangladesh" data-value="150">
                                        <label for="pay-toggle">All Over Bangladesh: <span>BDT: 150.00</span></label>
                                      </div>
                                   </td>
                                  </tr>
                                  <tr class="cart_item">
                                    <td class="ctg-type crt-total"> Total</td>
                                    <td class="cgt-des prc-total"> BDT <span id="prc-total"><?php echo $sum; ?></span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          
                        </div>
                        <div class="payment-section">
                          <div class="pay-toggle">
                            
                              <div class="pay-type-total">
                                <div class="pay-type">
                                  <input type="radio" id="pay-toggle01" name="pay" value="SSLCOMMERZ">
                                  <label for="pay-toggle01">Pay with Card</label>
                                </div>
                                <div class="pay-type">
                                  <input type="radio" id="pay-toggle02" name="pay" value="COD">
                                  <label for="pay-toggle03">Cash on Delivery</label>
                                </div>
                              </div>
                              <input type="hidden" name="total_amount" id="total_amount" value=" <?php echo $sum; ?> ">
                              <input type="hidden" name="shiping_charge" id="shiping_charge" value="50.00">
                              <div class="input-box"> 
                              	<input class="btn btn-primary btn-def btn2" type="submit" name="submit" value="Place order"> 
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="jtv-crosssel-pro">
        <div class="jtv-new-title">
          <h2>you may be interested</h2>
        </div>
        <div class="category-products">
          <ul class="products-grid">
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                    <div class="new-label new-top-left">new</div>
                    <div class="sale-label sale-top-right">sale</div>
                    <div class="mask-shop-white"></div>
                    <div class="new-label new-top-left">new</div>
                    <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                    </a> <a href="compare.html">
                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                    </a> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                    <div class="mask-shop-white"></div>
                    <div class="new-label new-top-left">new</div>
                    <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                    </a> <a href="compare.html">
                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                    </a> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                    <div class="mask-shop-white"></div>
                    <div class="new-label new-top-left">new</div>
                    <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                    </a> <a href="compare.html">
                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                    </a> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                    <div class="sale-label sale-top-left">sale</div>
                    <div class="mask-shop-white"></div>
                    <div class="new-label new-top-left">new</div>
                    <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                    </a> <a href="compare.html">
                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                    </a> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$139.55</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
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
<script>
 $(document).ready(function(){
    $(".ship").click(function(){
      var total = parseFloat($("#sub_total").html()) + parseFloat($(this).attr("data-value"));
      $("#prc-total").html(total);
      $("#total_amount").val(total);  
      $("#shiping_charge").val($(this).attr("data-value"));
    });
 });
</script>
</body>
</html>
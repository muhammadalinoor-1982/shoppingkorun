<?php include("includes/settings.php");
   $_SESSION['url'] = 'checkout.php'; 
    if (!isset($_SESSION['customer_id']) || $_SESSION['customer_id'] =='') 
      { header("Location: login.php"); 
      exit();
    } 
    if (isset($_POST) && @$_POST['update_cart_action']!='') {
    	foreach ($_SESSION['cart'] as $key=>$value) {
    		$_SESSION['cart'][$key]['quantity'] = $_POST['qty'.$key];
    	}
    }
    if (isset($_POST) && count($_POST['bulk_delete']) > 0) {

      foreach ($_POST['bulk_delete'] as $id) {
        unset($_SESSION['cart'][$id]);
      }
     
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

<body class="shopping-cart-page">
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
            <li> <strong>Shopping cart </strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->
  
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="product-area">
            <div class="title-tab-product-category">
              <div class="text-center">
                <ul class="nav jtv-heading-style" role="tablist">
                  <li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab">Shopping cart</a></li>
                </ul>
              </div>
            </div>
            <div class="content-tab-product-category"> 
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="cart"> 
                  <!-- cart are start-->
                  <div class="cart-page-area">
                    <form method="post" action="shopping-cart.php">
                      <div class="table-responsive">
                        <table class="shop-cart-table">
                          <thead>
                            <tr>
                              <th class="product-thumbnail ">Image</th>
                              <th class="product-name ">Product Name</th>
                              <th class="product-price ">Price</th>
                              <th class="product-quantity">Quantity</th>
                              <th class="product-subtotal ">Total</th>
                              <th class="product-remove">Remove</th>
                              <th class="product-remove">Select</th>
                            </tr>
                          </thead>
                          <tbody>
							             <?php 
                           $sum = 0;
                           foreach ($_SESSION['cart'] as $key=>$value) { ?>
                            <tr class="cart_item">
                              <td class="item-img"><a href="#"><img src="Admin/uploads/products/<?php echo $value['image']; ?>" alt="Product tilte is here "> </a></td>
                              <td class="item-title"><a href="#"><?php echo $value['name']; ?></a></td>
                              <td class="item-price"> <?php echo $value['price']; ?></td>
                              <td class="item-qty">
                      					<div class="custom pull-left">
                        						<button style="float: left;" onClick="var result = document.getElementById('qty<?php echo $key; ?>'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                        						<input style="float: left; width: 78px; text-align: center;" type="text" class="input-text qty" title="Qty" value="<?php echo $value['quantity']; ?>" maxlength="12" id="qty<?php echo $key; ?>" name="qty<?php echo $key; ?>">
                        						<button style="float: left;" onClick="var result = document.getElementById('qty<?php echo $key; ?>'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                      					</div>
                            	</td>
                              <td class="total-price"><strong><?php echo $value['quantity']*$value['price']; ?></strong></td>
                              <td class="remove-item"><a href="frontcontroller/removeCart.php?id=<?php echo $key; ?>"><i class="fa fa-trash-o"></i></a></td>
                              <td class="item-price"><input name="bulk_delete[]" value="<?php echo $key; ?>" type="checkbox"></td>
                            </tr>
							           <?php $sum = $sum + $value['quantity']*$value['price']; } ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="cart-bottom-area">
                        <div class="row">
                          <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="update-coupne-area">
                              <div class="update-continue-btn text-right">
                                <button class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button>
                                <button class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Clear Cart</span></button>
                                <button class="button btn-empty" title="Delete Cart" value="delete_cart" name="delete_cart_action" type="submit"><span>Delete Cart</span></button>
                                <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                              </div>
                              <div class="coupn-area">
                                <div class="discount">
                                  <h3>Discount Codes</h3>
                                  <label for="coupon_code">Enter your coupon code if you have one.</label>
                                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                                  <input type="text" value="" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                                  <button value="Apply Coupon" onclick="discountForm.submit(false)" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart-total-area">
                              <div class="process-cart-total">
                                <p id="prc-total">Cart Totals <span><?php echo $sum; ?></span></p>
                                <input type="hidden" name="total_amount" id="total_amount" value=" <?php echo $sum; ?> ">
                                <input type="hidden" name="shiping_charge" id="shiping_charge" value="50.00">
                              </div>
                              <div class="process-checkout-btn text-right">
                                <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button" onclick="window.location.href='checkout.php'"><span>Proceed to Checkout</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- cart are end--> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
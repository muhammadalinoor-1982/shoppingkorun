<?php 
include("includes/settings.php"); 
error_reporting(0);
$id = base64_decode($_GET['id']);
$product = $obj->getData("SELECT * FROM products WHERE id='$id'");
$product_images = $obj->getData("SELECT * FROM product_images WHERE product_id='$id'");

$review = $obj->getData("SELECT review_ratting.*, customer.name FROM review_ratting, customer WHERE customer.customer_id = review_ratting.customer_id AND review_ratting.product_id='$id' AND review_ratting.review_status=1");

$review_total = $obj->getData("SELECT avg(ratting) as total FROM review_ratting WHERE product_id='$id' AND review_status=1");

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
<body class="cms-index-index cms-home-page">
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> 
  <!-- Header -->
<?php include("includes/header.php"); ?>
  <!-- end header --> 
  <!-- Revslider -->
  <div class="container jtv-home-revslider">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-3 hidden-xs"></div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 jtv-main-home-slider">
        <div id='rev_slider_1_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
          <div id='rev_slider_1' class='rev_slider fullwidthabanner'>
            <ul>
              <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slide-img1.jpg'><img src='images/slider/slide-img1.jpg' alt="slider image1" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
                <div class="info">
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;'><span>Shop The Trend</span></div>
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>Amazing Chance!</div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Our new arrivals can't wait to meet you.</div>
                  <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Browse Now</a></div>
                </div>
              </li>
              <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slide-img3.jpg'><img src='images/slider/slide-img3.jpg' alt="slider image2" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
                <div class="info">
                  <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-x='45'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;padding-right:0px'><span>Spring Fashion</span></div>
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>Be Summer Ready</div>
                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Identify your Look, Define your Style!</div>
                  <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Join us</a></div>
                </div>
              </li>
              <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slide-img2.jpg'><img src='images/slider/slide-img2.jpg' alt="slider image3" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
                <div class="info">
                  <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-x='45'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;padding-right:0px'><span>Big Sale</span></div>
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>New Fashion</div>
                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Look great & feel amazing in our stunning dresses.</div>
                  <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Buy Now</a></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="jtv-dis-bar">
          <h3>Share This Page To Get 25% Discount New Collection</h3>
          <ul class="jtv-social-icons text-left text-md-right pt-2">
            <li class="jtv-social_facebook"><a href="#" target="_blank" class=""><i class="fa fa-facebook"></i></a></li>
            <li class="jtv-social_twitter"><a href="#" target="_blank" class=""><i class="fa fa-twitter"></i></a></li>
            <li class="jtv-social_google"><a href="#" target="_blank" class=""><i class="fa fa-google-plus"></i></a></li>
            <li class="jtv-social_email"><a href="#" target="_blank" class=""><i class="fa fa-envelope"></i></a></li>
            <li class="jtv-social_pinterest"><a href="#" target="_blank" class=""><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container -->
  <section class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 main-inner">
          <div class="col-main">
            <div class="jtv-featured-products">
              <div class="slider-items-products">
                <div class="jtv-new-title">
                  <h2>Featured Products</h2>
                </div>
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="new-label new-top-left">new</div>
                            <div class="mask-shop-white"></div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span></span>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                </div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="mask-shop-white"></div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span></span>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $199.00 </span> </p>
                                </div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="sale-label sale-top-left">Sale</div>
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
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$179.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
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
          <!-- Trending Products Slider -->
          <div class="jtv-trending-products">
            <div class="slider-items-products">
              <div class="jtv-new-title">
                <h2>Trending Products</h2>
              </div>
              <div id="trending-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="new-label new-top-left">new</div>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$222.79</span></span>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $269.00 </span> </p>
                              </div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="sale-label sale-top-right">Sale</div>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$199.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="sale-label sale-top-right">Sale</div>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $269.00 </span> </p>
                              </div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="sale-label sale-top-left">Sale</div>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$189.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$219.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
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
          <!-- End Trending Products Slider --> 
          
          <!-- Latest Blog -->
          <div class="jtv-latest-blog">
            <div class="jtv-new-title">
              <h2>Latest News</h2>
            </div>
            <div class="row">
              <div class="blog-outer-container">
                <div class="blog-inner">
                  <div class="col-xs-12 col-sm-6 blog-preview_item">
                    <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img1.jpg"> </a> </div>
                    <h4 class="blog-preview_title"><a href="blog_single_post.html">Neque porro quisquam est qui</a></h4>
                    <div class="blog-preview_info">
                      <ul class="post-meta">
                        <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                        <li><i class="fa fa-comments"></i><a href="#">8 comments</a></li>
                        <li><i class="fa fa-clock-o"></i><span class="day">12</span><span class="month">Feb</span></li>
                      </ul>
                      <div class="blog-preview_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 blog-preview_item">
                    <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img1.jpg"> </a> </div>
                    <h4 class="blog-preview_title"><a href="blog_single_post.html">Dolorem ipsum quia dolor sit amet</a></h4>
                    <div class="blog-preview_info">
                      <ul class="post-meta">
                        <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                        <li><i class="fa fa-comments"></i><a href="#">8 comments</a></li>
                        <li><i class="fa fa-clock-o"></i><span class="day">15</span><span class="month">Jan</span></li>
                      </ul>
                      <div class="blog-preview_desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem dolore lauda. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Latest Blog --> 
        </div>
        <!-- Sidebar -->
        <div class="col-left sidebar col-sm-4 col-xs-12 col-sm-pull-8 col-md-3 col-md-pull-9">
          <div class="jtv-hot-deal-product">
            <ul class="products-grid">
              <li class="right-space two-height item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="#" title="Product tilte is here" class="product-image"><img src="images/products/product-fashion-1.jpg" alt="Product tilte is here"> </a>
                      <div class="hot-label hot-top-left">Hot Deal</div>
                      <div class="mask-shop-white"></div>
                      <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                      <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                      </a> <a href="compare.html">
                      <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                      </a> </div>
                  </div>
                  <div class="jtv-timer-box">
                    <div class="countbox_1 timer-grid"></div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span></span></div>
                        </div>
                        <div class="actions">
                          <div class="add_cart">
                            <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="sidebar-banner"><img src="images/new-arrivals-banner.jpg" alt="New Arrivals"></div>
          
          <!-- Top Seller Slider -->
          <div class="jtv-top-products">
            <div class="slider-items-products">
              <div class="jtv-new-title">
                <h2>Top Seller</h2>
              </div>
              <div id="top-products-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="sale-label sale-top-right">Sale</div>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span><span class="price"> $156.00 </span></p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span><span class="price"> $167.00 </span></p>
                              </div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
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
          <!-- End Top Seller Slider --> 
          
        </div>
      </div>
    </div>
  </section>
  <!-- Support Policy Box -->
  <div class="container">
    <div class="support-policy-box">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="support-policy"> <i class="fa fa-truck"></i>
            <div class="content">Free Shipping on order over $49</div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="support-policy"> <i class="fa fa-phone"></i>
            <div class="content">Need Help +1 123 456 7890</div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="support-policy"> <i class="fa fa-refresh"></i>
            <div class="content">30 days return Service</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Collection Banner -->
  <div class="jtv-collection-area">
    <div class="container">
      <div class="column-right pull-left col-sm-4 no-padding"> <a href="#"> <img src="images/women-top.jpg" alt="Top Collections"> </a>
        <div class="col-right-text">
          <h5 class="text-uppercase">Top Collections <span> 35% </span> get it now</h5>
        </div>
      </div>
      <div class="column-left pull-right col-sm-8 no-padding">
        <div class="column-left-top">
          <div class="col-left-top-left pull-left col-sm-8 no-padding"> <a href="#"> <img src="images/men-suits.jpg" alt="Men's Suits"> </a>
            <div class="col-left-top-left-text">
              <h5 class="text-uppercase">Dressing for your Wedding</h5>
              <h3 class="text-uppercase">Men's Suits</h3>
              <h5 class="text-uppercase">Look Good, Feel Good</h5>
            </div>
          </div>
          <div class="col-left-top-right pull-right col-sm-4 no-padding"> <a href="#"> <img src="images/footwear.jpg" alt="footwear"> </a>
            <div class="col-left-top-right-text text-center">
              <h5 class="text-uppercase">Footwear Fashion Sale</h5>
              <h3>50%</h3>
              <h5 class="text-uppercase">Buy 1, Get 1</h5>
            </div>
          </div>
        </div>
        <div class="column-left-bottom col-sm-12 no-padding">
          <div class="col-left-bottom-left pull-left col-sm-4 no-padding"> <a href="#"> <img src="images/handbag.jpg" alt="Handbag"> </a>
            <div class="col-left-bottom-left-text">
              <h5 class="text-uppercase">What's New?</h5>
              <h3 class="text-uppercase">Bag's</h3>
              <h5 class="text-uppercase">Everyday<br>
                Low Prices</h5>
            </div>
          </div>
          <div class="col-left-bottom-right pull-right col-sm-8 no-padding"> <a href="#"> <img src="images/watch-banner.jpg" alt="Watch"> </a>
            <div class="col-left-bottom-right-text">
              <h5 class="text-uppercase">Never Miss a Second</h5>
              <h3 class="text-uppercase">Watch</h3>
              <h5 class="text-uppercase">Time to buy a watch!</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- collection area end --> 
  <!-- Brand Logo -->
  <div class="container jtv-brand-logo-block">
    <div class="jtv-brand-logo">
      <div class="slider-items-products">
        <div id="jtv-brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            <div class="item"><a href="#"><img src="images/brand1.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="images/brand2.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="images/brand3.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="images/brand4.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="images/brand5.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="images/brand6.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="images/brand7.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="images/brand8.png" alt="Brand Logo"></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <?php include("includes/footer.php"); ?>
</div>
<div style="background-color: rgb(119, 119, 119); opacity: 0.7; cursor: pointer; height: 1024px; display: block;" id="fancybox-overlay"></div>
<div style="width: 1190px; height: auto; top: 20%; left: 270px; display: block;" id="fancybox-wrap">
  <div id="fancybox-outer">
    <div style="border-width: 10px; width: 1170px; height: auto;" id="fancybox-content">
      <div style="width:auto;height:auto;overflow: auto;position:relative;">
        <div class="product-view">
          <div class="product-essential">
            <form action="#" method="post" id="product_addtocart_form">
              <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
              <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                <div class="product-image">
                  <div class="product-full"> 
                    <div class="new-label new-top-left"> <?php echo $product[0]['discount']."% Off";?> </div>
                    <img id="product-zoom" src="Admin/uploads/products/<?php echo $product[0]['product_image']; ?>" data-zoom-image="Admin/uploads/products/<?php echo $product[0]['product_image']; ?>" alt="product-image"/> 
                  </div>
                  <div class="more-views">
                    <div class="slider-items-products">
                      <div id="jtv-more-views-img" class="product-flexslider hidden-buttons product-img-thumb">
                        <div class="slider-items slider-width-col4 block-content">
                          <?php foreach ($product_images as $value) { ?>
                          <div class="more-views-items"> 
                              <a href="#" data-image="Admin/uploads/multi_img/<?php echo $value['images']; ?>" 
                                 data-zoom-image="Admin/uploads/multi_img/<?php echo $value['images']; ?>"> 
                                <img id="product-zoom"  src="Admin/uploads/multi_img/<?php echo $value['images']; ?>" alt="product-image"/> 
                              </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end: more-images --> 
              </div>
              <div class="product-shop col-lg-7 col-sm-7 col-xs-12">
                <div class="product-name">
                  <h1><?php $product[0]['product_name']; ?></h1>
                </div>
                <div class="rating"> 
                    <?php for($i=0; $i < $review_total[0]['total']; $i++) { ?>
                          <i class="fa fa-star"></i> 
                    <?php } for($i=0; $i < (5-$review_total[0]['total']); $i++) { ?>
                          <i class="fa fa-star-o"></i>
                    <?php } ?> 
                </div>
                <div class="price-block">
                  <div class="price-box">
                    <?php if ($product[0]['discount'] > 0) { 
                    $price = $product[0]['price'] - ($product[0]['discount'] * $product[0]['price'] / 100); ?>
                    <p class="special-price"> <span class="price-label">Special Price</span><span class="price"> $<?php echo $price; ?></span></p>
                    <p class="old-price"> <span class="price-label">Regular Price:</span><span class="price"> $<?php echo $product[0]['price']; ?></span></p>
                    <?php } else { 
                          $price = $product[0]['price'];
                      ?>
                    <p class="special-price"> <span class="price-label">Price</span><span class="price"><?php echo $product[0]['price']; ?></span></p>
                    <?php } ?>
                    <?php if ($product[0]['quantity'] > 0) { ?>
                    <p class="availability in-stock"><span>In Stock</span></p>
                    <?php } else {?>
                    <p style="background-color: orange; width: 130px; border-radius: 5px;" class="availability out-of-stock"><span><strong> Out of Stock</strong></span></p>
                    <?php } ?>
                  </div>
                </div>
                <div class="short-description">
                  <h2>Quick Overview</h2>
                  <?php echo $product[0]['product_description']; ?>
                </div>
                <div class="options">
                      <label><b>Color: </b></label>
                      <?php $colors = json_decode($product[0]['color']); ?>
                      <select name="color" id="color">
                        <option value="0">Chose Color:</option>
                        <?php foreach ($colors as $color) { ?>
                        <option value="<?php echo $color; ?>">
                        <?php echo $color; ?>
                        </option>
                        <?php } ?>
                      </select>
                      <div class="color-tag"> </div>

                      <label><b> Size: </b></label>
                      <?php $sizes = json_decode($product[0]['size']); ?>
                      <select name="size" id="size">
                        <option value="0">Chose Size:</option>
                        <?php foreach ($sizes as $size) { ?>
                        <option value="<?php echo $size; ?>">
                          <?php echo $size; ?>
                        </option>
                        <?php } ?>
                      </select>
                      <div class="size-tag"> </div>
                </div>
                <div class="add-to-box">
                  <div class="add-to-cart">
                    <div class="pull-left">
                      <div class="custom pull-left">
                        <label>Quantity:</label>
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                      </div>
                    </div>
                    <?php  if ($product[0]['quantity'] > 0) { ?> 
                    <button 
                    class="button btn-cart_add" data-id="<?php echo $product[0]['id']; ?>" data-name="<?php echo $product[0]['product_name']; ?>" data-image="<?php echo $product[0]['product_image']; ?>" data-unit_price="<?php echo $product[0]['price']; ?>" data-price="<?php echo $price; ?>" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    <?php } ?>
                  </div>
                  <div class="email-addto-box">
                    <ul class="add-to-links">
                      <li><a href="javascript:void(0)" class="add-to-wish" data-id="<?php echo $product[0]['id']; ?>"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                      <li><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i><span>Add to Compare</span></a></li>
                      <li><a class="email-friend" href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--product-view--> 
        
      </div>
    </div>
    <a style="display: inline;" id="fancybox-close" href="index.php"></a> </div>
</div>
</div>

<!-- JavaScript --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/revslider.js"></script> 
<script src="js/main.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/mob-menu.js"></script> 
<script src="js/countdown.js"></script> 
<script src="js/cloud-zoom.js"></script> 
<script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_1').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 870,
                startheight: 490,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script> 
<!-- Hot Deals Timer 1--> 
<script>
var dthen1 = new Date("12/25/17 11:59:00 PM");
	start = "08/04/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);
</script>
</body>
</html>
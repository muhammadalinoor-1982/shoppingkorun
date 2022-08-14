<?php include("includes/settings.php");
error_reporting(0); 
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

<!-- Newsletter Popup -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog newsletter-popup">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-body">
        <h4 class="modal-title">Subscribe</h4>
        <form id="newsletter-form" class="news-subscribe" method="post" action="#">
          <div class="content-subscribe">
            <div class="form-subscribe-header">
              <label>For all the latest news, products, collection...</label>
              <label>Subscribe now to get 20% off</label>
              <div class="alert alert-success message" style="display: none;"></div>
            </div>
            <div class="input-box">
              <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
            </div>
            <div class="actions">
              <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
            </div>
          </div>
          <div class="subscribe-bottom">
            <input name="notshowpopup" id="notshowpopup" type="checkbox">
            Don’t show this popup again </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> 
  <!-- Header -->
<?php include("includes/header.php"); ?>
  <!-- end header --> 
  <!-- Revslider -->
  <div class="container jtv-home-revslider">
    <div class="row">
      <div class="col-lg-9 col-sm-9 col-xs-12 jtv-main-home-slider">
        <div id='rev_slider_1_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
          <div id='rev_slider_1' class='rev_slider fullwidthabanner'>
            <?php $main_slider = $obj->getData("SELECT slider_image, slider_name, slider_header, slider_description, slider_link, slider_url FROM slider WHERE slider_status=1 "); ?>
            <ul>
            <?php foreach ($main_slider as $slider) { ?>
              <li data-transition='slotzoom-horizontal' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slide-img1.jpg'><img src="Admin/uploads/slider/<?php echo $slider['slider_image']; ?>" alt="slider image1" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
                <div class="info">
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;'><span><?php echo $slider['slider_name']; ?></span></div>
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'><?php echo $slider['slider_header']; ?></div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><?php echo $slider['slider_description']; ?></div>
                  <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href="<?php echo $slider['slider_url']; ?>" class="buy-btn"><?php echo $slider['slider_link']; ?></a></div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="banner-block"> <a href="#"> <img src="images/banner1.jpg" alt=""> </a>
          <div class="text-des-container pad-zero">
            <div class="text-des">
              <p>Designer</p>
              <h2>Handbags</h2>
            </div>
          </div>
        </div>
        <div class="banner-block"> <a href="#"> <img src="images/banner2.jpg" alt=""> </a>
          <div class="text-des-container">
            <div class="text-des">
              <p>The Ultimate</p>
              <h2>Shoes Collection</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <!-- Main Container -->
  <section class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="col-main">
            <div class="jtv-featured-products">
              <div class="slider-items-products">
                <div class="jtv-new-title">
                  <h2>Featured Products</h2>
                </div>
                <?php $feature_products = $obj->getData("SELECT id, product_name, price, discount, product_image FROM products WHERE status=1 AND feature_product=1"); ?>
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                  	<?php foreach ($feature_products as $product) { ?>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.php"> <img alt="Product tilte is here" src="Admin/uploads/products/<?php echo $product['product_image']; ?>"> </a>
                            <div class="new-label new-top-left">new</div>
                            <div class="mask-shop-white"></div>
                             

                            <a href="javascript:void(0)" class="add-to-wish" data-id="<?php echo $product['id']; ?>", data-image="<?php echo $product['product_image']; ?>", data-name="<?php echo $product['product_name']; ?>", data-price="<?php echo $product['price']; ?>">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> 

                            <a href="quick-view.php?id=<?php echo base64_encode($product['id']); ?>">
                            <div class="mask-right-shop"><i class="fa fa-search"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.php?id=<?php echo base64_encode($product['id']); ?>"><?php echo $product['product_name']; ?></a> </div>
                            <div class="item-content">
                              <div class="rating"> 
                                <?php $obj->getRetting($product['id']);?>
                              </div>
                              <div class="item-price">
                                <?php if ($product['discount'] > 0) { 
                                $price = $product['price'] - ($product['discount'] * $product['price'] / 100); ?>
                                <div class="price-box"> <span class="regular-price"> <span class="price">$<?php echo $price; ?></span></span>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $<?php echo $product['price']; ?></span> </p>
                                </div>
                                <?php } else { $price = $product['price'];?>
                                <div class="price-box"> <span class="regular-price"> <span class="price">$<?php echo $price; ?></span></span></div>
                                <?php } ?>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button" onclick="window.location.href='product-detail.php?id=<?php echo base64_encode($product['id']); ?>'"><span><i class="fa fa-shopping-cart"></i> View Details</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  
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
              <?php $trending_products = $obj->getData("SELECT id, product_name, price, product_image FROM products WHERE status=1 AND trending_product=1"); ?>
              <div id="trending-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                  <?php foreach ($trending_products as $product) { ?>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.php"> <img alt="Product tilte is here" src="Admin/uploads/products/<?php echo $product['product_image']; ?>"> </a>
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
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.php?id=<?php echo base64_encode($product['id']); ?>"><?php echo $product['product_name']; ?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$<?php echo $product['price']; ?></span></span>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $269.00 </span> </p>
                              </div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button" onclick="window.location.href='product-detail.php?id=<?php echo base64_encode($product['id']); ?>'"><span><i class="fa fa-shopping-cart"></i> View Details</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
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
                  <div class="col-xs-12 col-sm-4 blog-preview_item">
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
                  <div class="col-xs-12 col-sm-4 blog-preview_item">
                    <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img1.jpg"> </a> </div>
                    <h4 class="blog-preview_title"><a href="blog_single_post.html">Neque porro quisquam est qui</a></h4>
                    <div class="blog-preview_info">
                      <ul class="post-meta">
                        <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                        <li><i class="fa fa-comments"></i><a href="#">20 comments</a></li>
                        <li><i class="fa fa-clock-o"></i><span class="day">25</span><span class="month">Feb</span></li>
                      </ul>
                      <div class="blog-preview_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 blog-preview_item">
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
      </div>
    </div>
  </section>
  
  <!-- Collection Banner -->
  <div class="jtv-collection-area">
    <div class="container">
		<?php $banners_one = $obj->getData("SELECT name, high_light, description, image FROM banner WHERE status=1 AND name='Summer Collections'"); ?>
		<?php foreach ($banners_one as $banners1) { ?>
      <div class="column-right pull-left col-sm-4 no-padding"> <a href="#"> <img src="Admin/uploads/banners/<?php echo $banners1['image']; ?>" alt="Top Collections"> </a>
        <div class="col-right-text">
          <h5 class="text-uppercase"><?php echo $banners1['name']; ?><span><?php echo $banners1['high_light']; ?></span><?php echo $banners1['description']; ?></h5>
        </div>
      </div>
	<?php } ?>
      <div class="column-left pull-right col-sm-8 no-padding">
        <div class="column-left-top">
        <?php $banners_two = $obj->getData("SELECT name, high_light, description, image FROM banner WHERE status=1 AND name='Prity Girls'"); ?>
		<?php foreach ($banners_two as $banners2) { ?>
          <div class="col-left-top-left pull-left col-sm-8 no-padding"> <a href="#"> <img src="Admin/uploads/banners/<?php echo $banners2['image']; ?>"> </a>
            <div class="col-left-top-left-text">
              <h5 class="text-uppercase"><?php echo $banners2['name']; ?></h5>
              <h3 class="text-uppercase"><?php echo $banners2['high_light']; ?></h3>
              <h5 class="text-uppercase"><?php echo $banners2['description']; ?></h5>
            </div>
          </div>
		<?php } ?>
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
		<?php $banners_three = $obj->getData("SELECT name, high_light, description, image FROM banner WHERE status=1 AND name='Crazy Guy'"); ?>
		<?php foreach ($banners_three as $banners3) { ?>
          <div class="col-left-bottom-right pull-right col-sm-8 no-padding"> <a href="#"> <img src="Admin/uploads/banners/<?php echo $banners3['image']; ?>"> </a>
            <div class="col-left-bottom-right-text">
              <h5 class="text-uppercase"><?php echo $banners3['name']; ?></h5>
              <h3 class="text-uppercase"><?php echo $banners3['high_light']; ?></h3>
              <h5 class="text-uppercase"><?php echo $banners3['description']; ?></h5>
            </div>
          </div>
		<?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- collection area end -->
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="jtv-hot-deal-product">
        <div class="jtv-new-title">
              <h2>Deals Of The Day</h2>
            </div>
          <ul class="products-grid">
            <li class="right-space two-height item">
            <?php $Hot_Deal = $obj->getData("SELECT count_name, count_image FROM count_down WHERE count_status=1 AND count_name='Test'"); ?>
            <?php foreach ($Hot_Deal as $hotDeal) { ?>
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a href="#" title="Product tilte is here" class="product-image"><img src="Admin/uploads/countDown/<?php echo $hotDeal['count_image']; ?>"> </a>
                    <div class="hot-label hot-top-left">Hot Deal</div>
                    <div class="mask-shop-white"></div>
                    <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                    </a> <a href="compare.html">
                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                    </a> </div>

                    <div class="jtv-timer-box" id="new_count_down">
                      <div class="countbox_1 timer-grid">
                          <div class="day box-time-date"><span class="time-num time-day" id="days">0</span>Days</div>
                          <div class="hour box-time-date"><span class="time-num" id="hrs">0</span>Hrs</div>
                          <div class="min box-time-date"><span class="time-num" id="mins">0</span>Mins</div>
                          <div class="sec box-time-date"><span class="time-num" id="secs">0</span>Secs</div>
                      </div>
                    </div>
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
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 hidden-sm">
        <div class="sidebar-banner">
		<?php $banners_four = $obj->getData("SELECT image FROM banner WHERE status=1 AND name='Smart Girl'"); ?>
		<?php foreach ($banners_four as $banners4) { ?>
        <div class="jtv-top-banner"> <a href="#"> <img src="Admin/uploads/banners/<?php echo $banners4['image']; ?>" alt="banner"> </a> </div>
		<?php } ?>
        <div class="jtv-top-banner"> <a href="#"> <img src="images/banner4.jpg" alt="banner"> </a> </div></div>
      </div>
      <!-- Top Seller Slider -->
      <div class="col-sm-4 col-xs-12">
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
  
  <!-- Brand Logo -->
  <?php $brand_image = $obj->getData("SELECT brand_id, brand_logo FROM brands WHERE brand_status=1"); ?>
  <div class="container jtv-brand-logo-block">
    <div class="jtv-brand-logo">
      <div class="slider-items-products">
        <div id="jtv-brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            <?php foreach ($brand_image as $brand) { ?>
            <div class="item"><a href="#"><img src="Admin/uploads/brands/<?php echo $brand['brand_logo']; ?>" alt="Brand Logo"></a> </div>
            <?php } ?>
          </div>
        </div> 
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
<script src="js/countdown.js"></script> 
<script>
jQuery(document).ready(function(){
jQuery('#rev_slider_1').show().revolution({
dottedOverlay: 'none',
delay: 5000,
startwidth: 858,
startheight: 500,

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
<!-- Hot Deals Timer --> 
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

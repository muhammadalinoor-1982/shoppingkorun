<?php 
include("includes/settings.php"); 
error_reporting(0);
$id = base64_decode($_GET['id']);

$product = $obj->getData("SELECT * FROM products, categories WHERE products.id='$id' AND categories.cat_id = products.category_id");

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
<meta name="description" content="<?php echo $setting[0]['meta_description']; ?>">
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

<body class="product-page">
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> 
  <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- end header --> 
  <?php 
  $parent_level_1 = $obj->getSingleData("SELECT category_name, parent_id, cat_id FROM categories WHERE cat_id='".$product[0]['parent_id']."'"); 
  $parent_level_0 = $obj->getSingleData("SELECT category_name, parent_id, cat_id FROM categories WHERE cat_id='".$parent_level_1['parent_id']."' ");
  ?>
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.php" title="Go to Home Page">Home</a> <span>/</span></li>
            
            <li><a href="category-sub-parent.php?id=<?php echo base64_encode($parent_level_0['cat_id']);?>" title="">
                <?php echo $parent_level_0['category_name']; ?></a> <span>/</span></li>
            
            <li><a href="category-sub-parent.php?id=<?php echo base64_encode($parent_level_1['cat_id']);?>" title="">
                <?php echo $parent_level_1['category_name']; ?></a> <span>/</span></li>
                
            <li><a href="category.php?id=<?php echo base64_encode($product[0]['category_id']);?>" title=""><?php echo $product[0]['category_name']; ?>
            </a> <span>/</span></li>
            
            <li><a href="product-detail.php?id=<?php echo base64_encode($product[0]['id']);?>" title=""><?php echo $product[0]['product_name']; ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="product-view">
          <div class="product-essential">
            <form action="#" method="post" id="product_addtocart_form">
              <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                <div class="product-image">
                  <div class="product-full">
                    <div class="new-label new-top-left"> <?php echo $product[0]['discount']."% Off";?> </div>
                    <img id="product-zoom" src="Admin/uploads/products/<?php echo $product[0]['product_image']; ?>" data-zoom-image="Admin/uploads/products/<?php echo $product[0]['product_image']; ?>" alt="product-image"/> </div>
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
              <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                <div class="product-name">
                  <h1><?php echo $product[0]['product_name']; ?></h1>
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

                    <p class="special-price"> <span class="price-label">Special Price</span><span class="price">$<?php echo $price; ?></span></p>
                    <p class="old-price"> <span class="price-label">Regular Price:</span><span class="price">$<?php echo $product[0]['price']; ?></span></p>

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
                <div class="short-description">
                  <img src="Admin/qrcode/temp/<?php echo $product[0]['qrcode']; ?>" alt="">
                </div>
                <?php $colors = json_decode($product[0]['color']); ?>
                <?php $sizes = json_decode($product[0]['size']); ?>
                <div class="options">

                      <?php if(count($colors) > 0) : ?>
                      <label><b>Color: </b></label>
                      <select name="color" id="color">
                        <option value="0">Chose Color:</option>
                        <?php foreach ($colors as $color) { ?>
                        <option value="<?php echo $color; ?>">
                        <?php echo $color; ?>
                        </option>
                        <?php } ?>
                      </select>
                      <div class="color-tag"> </div>
                      <?php endif; ?>

                      <?php if(count($sizes) > 0) : ?>
                      <label><b> Size: </b></label>
                      <select name="size" id="size">
                        <option value="0">Chose Size:</option>
                        <?php foreach ($sizes as $size) { ?>
                        <option value="<?php echo $size; ?>">
                          <?php echo $size; ?>
                        </option>
                        <?php } ?>
                      </select>
                      <div class="size-tag"> </div>
                      <?php endif; ?>

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
                <div class="social">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
                <div class="product-next-prev"> <a class="product-next" href="#"><i class="fa fa-angle-left"></i></a> <a class="product-prev" href="#"><i class="fa fa-angle-right"></i></a> </div>
              </div>
            </form>
          </div>
        </div>
        <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
          <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
            <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a></li>
            <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
            <li><a href="#reviews_tabs" data-toggle="tab">Reviews</a></li>
            <li><a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a></li>
          </ul>
          <div id="productTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="product_tabs_description">
              <div class="std">
                <p><?php echo $product[0]['product_description']; ?></p>
              </div>
            </div>
            <div class="tab-pane fade" id="product_tabs_tags">
              <div class="box-collateral box-tags">
                <div class="tags">
                  <form id="addTagForm" action="#" method="get">
                    <div class="form-add-tags">
                      <label for="productTagName">Add Tags:</label>
                      <div class="input-box">
                        <input class="input-text" name="productTagName" id="productTagName" type="text">
                        <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span></button>
                      </div>
                      <!--input-box--> 
                    </div>
                  </form>
                </div>
                <!--tags-->
                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
              </div>
            </div>
            <div class="tab-pane fade" id="reviews_tabs">
              <div class="box-collateral box-reviews" id="customer-reviews">
                <div class="box-reviews1">
                  <div class="form-add">
                    <form id="review-form" method="post" action="frontcontroller/reviewRatingProcess.php">
                      <h3>Write Your Own Review</h3>
                      <fieldset>
                        <h4>How do you rate this product? <em class="required">*</em></h4>
                        <span id="input-message-box"></span>
                        <table id="product-review-table" class="data-table">
                          <thead>
                            <tr class="first last">
                              <th>&nbsp;</th>
                              <th><span class="nobr">GOOD</span></th>
                              <th><span class="nobr">BETTER</span></th>
                              <th><span class="nobr">BEST</span></th>
                              <th><span class="nobr">EXCELLENT</span></th>
                              <th><span class="nobr">OUTSTANDING</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="first odd">
                              <th>Choose</th>
                              <td class="value"><input type="radio" class="radio" value="1" id="Price_1" name="ratings"></td>
                              <td class="value"><input type="radio" class="radio" value="2" id="Price_2" name="ratings"></td>
                              <td class="value"><input type="radio" class="radio" value="3" id="Price_3" name="ratings"></td>
                              <td class="value"><input type="radio" class="radio" value="4" id="Price_4" name="ratings"></td>
                              <td class="value last"><input type="radio" class="radio" value="5" id="Price_5" name="ratings"></td>
                            </tr>
                          </tbody>
                        </table>
                        <input type="hidden" value="<?php echo $product[0]['id']; ?>" class="validate-rating" name="product_id" required>
                        
                        <div class="review2">
                          <ul>
                            <li>
                              <label class="required " for="review_field">Review<em>*</em></label>
                              <div class="input-box">
                                <textarea rows="3" cols="5" id="review_field" name="detail" required></textarea>
                              </div>
                            </li>
                          </ul>
                          <div class="buttons-set">
                            <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                <div class="box-reviews2">
                  <h3>Customer Reviews</h3>
                  <div class="box visible">
                    <ul>
                      <?php foreach ($review as $rvalue) { ?>
                      <li>
                        <table class="ratings-table">
                          <tbody>
                            <tr>
                              <th>Ratting</th>
                              <td><div class="rating"> 
                                <?php for($i=0; $i < $rvalue['ratting']; $i++) { ?>
                                <i class="fa fa-star"></i> 
                                <?php } for($i=0; $i < (5-$rvalue['ratting']); $i++) { ?>
                                <i class="fa fa-star-o"></i>
                                <?php } ?>
                              </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="review">
                          <small>Review by <span><strong style="color: green;"><?php echo $rvalue['name']; ?> </strong></span>on <?php echo $rvalue['created_at']; ?> </small>
                          <div class="review-txt"><?php echo $rvalue['review']; ?></div>
                        </div>
                      </li>
                        <?php } ?>
                    </ul>
                  </div>
                  <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="product_tabs_custom">
              <div class="product-tabs-content-inner clearfix">
                <p>Lorem Ipsum is
                  simply dummy text of the printing and typesetting industry. Lorem Ipsum
                  has been the industry's standard dummy text ever since the 1500s, when 
                  an unknown printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but also the 
                  leap into electronic typesetting, remaining essentially unchanged. It 
                  was popularised in the 1960s with the release of Letraset sheets 
                  containing Lorem Ipsum passages, and more recently with desktop 
                  publishing software like Aldus PageMaker including versions of Lorem 
                  Ipsum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
  <!-- Related Products Slider -->
  
  <div class="container">
    <div class="jtv-related-products">
      <div class="slider-items-products">
        <div class="jtv-new-title">
          <h2>Related Products</h2>
        </div>
        <div class="related-block">
          <div id="jtv-related-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$115.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$79.90</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$49.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$97.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$199.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                        </div>
                        <div class="actions">
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
  <!-- Related Products Slider End --> 
  
  <!-- Upsell Product Slider -->
  
  <div class="container">
    <div class="jtv-upsell-products">
      <div class="slider-items-products">
        <div class="jtv-new-title">
          <h2>Upsell Product</h2>
        </div>
        <div class="upsell-block">
          <div id="jtv-upsell-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$95.99</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$39.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$49.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$69.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$19.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$139.00</span></span></div>
                        </div>
                        <div class="actions">
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
    <!-- End Upsell  Slider --> 
  </div>
  
  <!-- Footer -->
  <?php include("includes/footer.php"); ?>
</div>

<!-- JavaScript --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/main.js"></script> 
<script src="js/jquery.flexslider.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/mob-menu.js"></script> 
<script src="js/cloud-zoom.js"></script>
</body>
</html>

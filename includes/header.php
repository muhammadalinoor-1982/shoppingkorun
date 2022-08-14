  <?php $parents = $obj->getData("SELECT * FROM categories WHERE parent_id=0 AND cat_status=1"); ?>

  <header>
    <div class="header-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 col-xs-12">
            <div class="logo">
            	<!-- <a title="ecommerce Template" href="index.php"><img alt="ecommerce Template" src="images/logo.png"></a> -->
        <a style="color: #fff;" href="index.php"><h1 class="one">s</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="two">h</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="three">o</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="four">p</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="five">p</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="six">i</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="seven">n</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="eight">g</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="nine">k</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="ten">o</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="eleven">r</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="twoelve">u</h1></a>
  			<a style="color: #fff;" href="index.php"><h1 class="thirteen">n</h1></a>
            </div><br><br><br><br><br>
            <div class="nav-icon">
              <div class="mega-container visible-lg visible-md visible-sm">
                <div class="navleft-container">
                  <div class="mega-menu-title">
                    <h3><i class="fa fa-navicon"></i>Categories</h3>
                  </div>
                  <div class="mega-menu-category">
                    <ul class="nav">
                      

					<?php foreach ($parents as $parent) { ?>
					   <li><a href="category.php?id=<?php echo base64_encode($parent['cat_id']); ?>"><?php echo $parent['category_name'];

                        $sub_categoy = $obj->getData("SELECT * FROM categories WHERE parent_id='".$parent['cat_id']."' AND cat_status=1"); ?></a>
                        <?php if (count($sub_categoy) > 0 ) { ?>
                        <div class="wrap-popup">
                          <div class="popup">
                            <div class="row">
                            <?php foreach ($sub_categoy as $value) { ?>
                              <div class="col-md-4 col-sm-6">
                                <h3><a href="category.php?id=<?php echo base64_encode($value['cat_id']); ?>"><?php echo $value['category_name']; ?></a></h3>
                                <?php
                                $subSubCategory = $obj->getData("SELECT * FROM categories WHERE parent_id = '".$value['cat_id']."' AND cat_status = 1");
                               if(count($subSubCategory) > 0) { ?>
                                <ul class="nav">
       							            <?php foreach($subSubCategory as $svalue){ ?>
                                  <li><a href="category.php?id=<?php echo base64_encode($svalue['cat_id']); ?>"><?php echo $svalue['category_name']; ?></li>
                                <?php } ?>  
                                </ul>
                                <?php } ?>
                              </div>
                              <?php } ?>
                              <div class="col-md-4 has-sep hidden-sm">
                                <div class="custom-menu-right">
                                  <div class="box-banner media">
                                    <div class="add-right"><a href="#"><img src="images/jtv-menu-banner1.jpg" class="img-responsive" alt="New Arrive"></a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br>
                            <a href="#" class="ads"><img src="images/jtv-menu-banner4.jpg" alt="Mega Sale" class="img-responsive"></a> </div>
                        </div>
                    <?php } ?>   
                      </li>
					<?php } ?>

                      <li><a href="blog.html">Blog</a>
                        <div class="wrap-popup column1">
                          <div class="popup">
                            <ul class="nav">
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="blog-archive.html">Blog Archive</a></li>
                              <li><a href="blog_single_post.html">Blog Single</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="nosub"><a href="contact.html">Contact Us</a></li>
                    </ul>
                    <div class="side-banner"><img src="images/top-banner.jpg" alt="Flash Sale" class="img-responsive"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-sm-9 col-xs-12 jtv-rhs-header">
            <div class="jtv-mob-toggle-wrap">
              <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span></div>
            </div>
            <div class="jtv-header-box">

            <?php $customer_id = $_SESSION['customer_id'];
                    $cust_info = $obj->getData("SELECT * FROM customer WHERE customer_id = '$customer_id'"); 
                  ?>

              <?php if ($cust_info[0]['cust_images'] > 0) { ?>
              <div style="position: relative; top: 57px; left: 560px; float: left;"><img style="border-radius: 50px;" src="Admin/uploads/customer_pro_pic/<?php echo $cust_info[0]['cust_images'] ? $cust_info[0]['cust_images'] : 'no-image.jpg' ; ?>" width="35" height="35"></div>
              <?php } ?>

             <div style="position: relative; top: 65px; left: 570px;"><strong style="color: #fff;"><?php echo $cust_info[0]['name']; ?></strong></div>

              <div class="search_cart_block">
                <div class="search-box hidden-xs">
                  <form id="search_mini_form" action="search.php" method="get">
                    <input id="search" type="text" name="keyword" value="<?php echo @$_GET['keyword']; ?>" class="searchbox" placeholder="Search entire store here..." maxlength="128">
                    <button type="submit" title="Search" class="search-btn-bg" id="submit-button"><span class="hidden-sm">Search</span><i class="fa fa-search hidden-xs hidden-lg hidden-md"></i></button>
                  </form>
                </div>
                <?php 
                  $sum = 0;
                  $i = 0;
                  foreach ($_SESSION['cart'] as $value) {
                    $sum = $sum + $value['price'] * $value['quantity'];
                    $i++;
                  }
                 ?>
                <div class="right_menu">
                  <div class="menu_top">
                    <div class="top-cart-contain pull-right">
                      <div class="mini-cart">
                        <div class="basket"><a class="basket-icon" href="#"><i class="fa fa-shopping-basket"></i> Shopping Cart <span class="item-count"><?php echo $i; ?></span></a>
                          <div class="top-cart-content">
                            <div class="block-subtitle">
                              <div class="top-subtotal"><span class="item-count"><?php echo $i; ?></span> items, <span class="price">$<?php echo $sum; ?></span></div>
                            </div>

                            <ul class="mini-products-list" id="cart-sidebar">
                            <?php foreach ($_SESSION['cart'] as $key=>$value) { ?>
                              <li class="item">
                                <div class="item-inner"><a class="product-image" title="product tilte is here" href="product-detail.html"><img alt="product tilte is here" src="Admin/uploads/products/<?php echo $value['image']; ?>"></a>
                                  <div class="product-details">
                                    <div class="access"><a class="btn-remove1" title="Remove This Item" href="#" data-id="<?php echo $key; ?>">Remove</a></div>
                                    <p class="product-name"><a href="product-detail.html"><?php echo $value['name']; ?></a></p>
                                    <strong><?php echo $value['quantity']; ?></strong> x <span class="price">$<?php echo $value['price']; ?></span>
                                    <?php if(count($value['option']['color_tag']) > 0) : ?>
                                    <p class="color-tag"><span class="color-tag"><img src="Admin/uploads/color/<?php echo $value['option']['color_tag']; ?>" /></span></p>
                                    <?php endif; ?>
                                    <?php if(count($value['option']['size_tag']) > 0) : ?>
                                    <p class="size-tag"><span class="size-tag"><img src="Admin/uploads/size/<?php echo $value['option']['size_tag']; ?>" /></span></p>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </li>
                              <?php } ?>
                            </ul>

                            <div class="actions"> <a href="shopping-cart.php" class="view-cart"><span>View Cart</span></a>
                              <button onclick="window.location.href='checkout.php'" class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="top_section hidden-xs">
                <div class="toplinks">
                  <div class="site-dir hidden-xs"> <a class="hidden-sm" href="#"><i class="fa fa-phone"></i><strong>Hotline:</strong><?php echo $setting[0]['site_phone']; ?></a> <a href="mailto:support@example.com"><i class="fa fa-envelope"></i><?php echo $setting[0]['site_email']; ?></a> </div>
                  <ul class="links">
                    <li><a title="My Account" href="account-info.php">My Account</a></li>
                    <li><a title="My Wishlist" href="wishlist.php">Wishlist(<span style="color: #ffe900; "><strong><?php echo $wish_count; ?></strong></span>)</a></li>
                    <li><a title="Checkout" href="checkout.php">Checkout</a></li>

                    <?php if (isset($_SESSION['customer_id']) && $_SESSION['customer_id'] !='') { ?>
                    <li><a title="Log In" href="frontcontroller/logoutProcess.php">Log out</a></li>
                    <?php } else{ ?>
                    <li><a title="Log In" href="login.php">Log In</a></li>
                    <?php } ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
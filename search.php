<?php include("includes/settings.php"); 
$keyword = $_GET['keyword'];
$products = $obj->getData("SELECT * FROM products WHERE product_name LIKE '%$keyword%' AND status=1");

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

<body>
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
            <li><a href="index.php" title="Go to Home Page">Home</a><span>/</span></li>
            <li><strong>Search</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <article class="col-main">
            <div class="page-title">
              <h2><?php echo $keyword; ?></h2>
            </div>
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="shop-list-sidebar.html" title="List" class="button-list">&nbsp;</a> </div>
              </div>
              <div id="sort-by">
                <label class="left">Sort By: </label>
                <ul>
                  <li><a href="#">Position<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Name</a></li>
                      <li><a href="#">Price</a></li>
                      <li><a href="#">Position</a></li>
                    </ul>
                  </li>
                </ul>
                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
              <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">16<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="category-products">
              <ul class="products-grid">
                <?php foreach ($products as $product) { ?>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.php"> <img alt="Product tilte is here" src="Admin/uploads/products/<?php echo $product['product_image']; ?>"> </a>
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
                        <div class="item-title"> 
                          <a title="Product tilte is here" href="product-detail.php?id=<?php echo base64_encode($product['id']); ?>">
                            <?php echo $product['product_name']; ?>
                          </a> 
                        </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $product['price']; ?></span></span>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $119.00 </span> </p>
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
                </li>
                <?php } ?>

              </ul>
            </div>
            <div class="toolbar bottom">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <div class="pages">
                    <ul class="pagination">
                      <li><a href="#">«</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>                     
                      <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 text-right">Showing 1 to 15 of 25 (2 Pages)</div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 
  
  <!-- Footer -->
  <?php include("includes/footer.php"); ?>
</div>

<!-- JavaScript --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery-ui.js"></script> 
<script src="js/main.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/mob-menu.js"></script>
</body>
</html>
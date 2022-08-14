<?php include("includes/settings.php");
error_reporting(0); 
if (empty($_SESSION['customer_id'])) {
  header("Location:index.php");
  exit();
}

$customer_id = $_SESSION['customer_id'];

$products = $obj->getData("SELECT * FROM products, wishlist WHERE products.id = wishlist.product_id AND wishlist.customer_id='$customer_id'");

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

<body class="wishlist-page">
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> 
<!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- end header -->
  
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <section class="col-sm-12 col-xs-12">
          <div class="cart-page-area">
            <h2>My Wishlist</h2>
            <form method="post" action="#">
              <div class="table-responsive">
                <table class="shop-cart-table">
                  <thead>
                    <tr>
                      <th class="product-thumbnail ">Image</th>
                      <th class="product-name ">Product Name</th>
                      <th class="product-price ">Unit Price</th>
                      <th class="product-subtotal ">Stock</th>
                      <th class="product-quantity">Add Item</th>
                      <th class="product-remove">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($products as $product) { ?>
                    <tr class="cart_item">
                      <td class="item-img"><a href="#"><img alt="Product tilte is here" src="Admin/uploads/products/<?php echo $product['product_image'];  ?>"> </a></td>
                      <td class="item-title"><a href="#"><?php echo $product['product_name'];  ?></a></td>
                      <td class="item-price"> $<?php echo $product['price'];  ?> </td>
                      <td class="item-qty"> <?php echo $product['quantity'] > 0 ? '<span Style="color: green;"> In Stock </span>' : '<span Style="color: red;">Out of Stock</span>';  ?> </td>
                      <td class="total-price"><a class="btn-def btn2" href="product-detail.php?id=<?php echo base64_encode($product['id']); ?>">Buy Now</a></td>
                      <td class="remove-item"><a href="javascript:void(0)" class="remove-wish" data-id="<?php echo $product['wl_id'];  ?>"><i class="fa fa-trash-o">
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Footer --> 
  
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
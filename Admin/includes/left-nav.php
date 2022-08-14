<aside id="leftsidebar" class="sidebar"> 
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="uploads/users/<?php echo $_SESSION['images']; ?>" width="68" height="68" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown"><?php echo $_SESSION['name']; ?></div>
            <div class="email"><?php echo $_SESSION['email']; ?></div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li class="divider"></li>
                    <li><a href="sign-in.php"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
           <li class="header nav_color">MAIN NAVIGATION</li>
           <?php if ($_SESSION['user_type'] == '0') {?>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>NOOR Admin</span></a>
                <ul class="ml-menu">
                    <li class="active"><a href="sign-in.php">sign-in</a></li>
                    <li><a href="locked.php">Locked User</a></li>
                    <li><a href="forgot-password.php">Forgot Password</a></li>
                </ul>
            </li>
            <?php } ?>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">supervisor_account</i> <span class="icon-name">User Account</span></a>
                <ul class="ml-menu">
                    <li><a href="new-account.php">New Account</a></li>
                    <li><a href="account-list.php">Account List</a></li>
                    <li><a href="profile.php">User Profile</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">rate_review</i><span>Review and Ratting</span> </a>
                <ul class="ml-menu">
                    <li><a href="review-list.php">Review List</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">add_shopping_cart</i><span>Order</span> </a>
                <ul class="ml-menu">
                    <li><a href="order-list.php">Order List</a></li>
                    <li><a href="order-update.php">Order Update</a></li>
                    <li><a href="invoice.php">Invoice</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><div class="demo-google-material-icon"> <i class="material-icons">add_shopping_cart</i></div><span>Count Down</span> </a>
                <ul class="ml-menu">
                    <li><a href="countDown.php">Count Down</a></li>
                    <li><a href="countDown-list.php">Count Down List</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><div class="demo-google-material-icon"> <i class="material-icons">add_shopping_cart</i></div><span>Bulk Upload</span> </a>
                <ul class="ml-menu">
                    <li><a href="product-bulkupload.php">Bulk Upload</a></li>
                </ul>
            </li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><div class="demo-google-material-icon"><i class="material-icons">add_shopping_cart</i></div><span>Message</span> </a>
                <ul class="ml-menu">
                    <li class="active"><a href="message.php">Message</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">add_shopping_cart</i><span>Products</span> </a>
                <ul class="ml-menu">
                    <li><a href="form-product_entry.php">New product</a></li>
                    <li><a href="product-list.php">Product List</a></li>
                    <li><a href="banner.php">Banner</a></li>
                    <li><a href="banner-list.php">Banner List</a></li>
                    <li><a href="slider_entry.php">New Slider</a></li>
                    <li><a href="slider-list.php">Slider List</a></li>
                    <li><a href="Category.php">Category</a></li>
                    <li><a href="category-list.php">Category List</a></li>
                    <li><a href="Brand.php">Brand</a></li>
                    <li><a href="brand-list.php">Brand List</a></li>
                    <li><a href="color.php">Color</a></li>
                    <li><a href="color-list.php">Color List</a></li>
                    <li><a href="size.php">Size</a></li>
                    <li><a href="size-list.php">Size List</a></li>
                    <li><a href="customer-list.php">Customer List</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">add_shopping_cart</i><span>Deleted Product</span> </a>
                <ul class="ml-menu">
                    <li><a href="deleted-product-list.php">Deleted Product List</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-search"></i><span>Advance Search</span> </a>
                <ul class="ml-menu">
                    <li><a href="search_by_category.php">search_by_category</a> </li>
                    <li><a href="search_by_Product_id.php">search_by_Product_id</a> </li>
                    <li><a href="search_by_order_id.php">search_by_order_id</a> </li>
                    <li><a href="search_by_complain_id.php">search_by_complain_id</a> </li>
                    <li><a href="search-results.php">search-results</a> </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu --> 
</aside>
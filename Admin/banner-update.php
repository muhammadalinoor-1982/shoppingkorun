<?php
 session_start();
 include("class/DbConnection.php");
 $obj = new DbConnection();

  if(empty($_SESSION['user_id'])){
     header("Location:sign-in.php");
     exit();
  }

  $id = $_GET['id'];
  $data = $obj->getData("SELECT * FROM banner WHERE id = '$id'");

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>NOOR Enterprise Banner Update</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Bootstrap Material Datetime Picker Css -->


<!-- Morris Chart Css-->
<link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!-- Colorpicker Css -->
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
<!-- Multi Select Css -->
<link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">
<!-- Bootstrap Spinner Css -->
<link href="assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
<!-- Bootstrap Tagsinput Css -->
<link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<!-- noUISlider Css -->
<link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />


<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!-- Wait Me Css -->
<link  rel="stylesheet" href="assets/plugins/waitme/waitMe.css"/>
<!-- Bootstrap Select Css -->
<link  rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css">
<!-- dropzone Select Css -->
<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="assets/noor/css/noor.css" /> <!-- noor Css -->
</head>
<body class="theme-red" onload="myFunction()">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfb-component__wrap"> <a href="#" class="mfb-component__button--main"> <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i> <i class="mfb-component__main-icon--active zmdi zmdi-close"></i> </a>
        <ul class="mfb-component__list">
            <li> <a href="mail-inbox.html" data-mfb-label="Inbox" class="mfb-component__button--child bg-blue"> <i class="zmdi zmdi-email mfb-component__child-icon"></i> </a> </li>
            <li> <a href="chat.html" data-mfb-label="Chat App" class="mfb-component__button--child bg-orange"> <i class="zmdi zmdi-comments mfb-component__child-icon"></i> </a> </li>
            <li> <a href="blog.html" data-mfb-label="Blogger" class="mfb-component__button--child bg-purple"> <i class="zmdi zmdi-blogger mfb-component__child-icon"></i> </a> </li>
        </ul>
    </li>
</ul>

<!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="zmdi zmdi-search"></i> </div>
    <input type="text" placeholder="Search...">
    <div class="close-search"> <i class="zmdi zmdi-close"></i> </div>
</div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">            
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand tfont" href="index.php">NOOR Enterprise</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>            
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-orange"> <i class="material-icons">person_add</i> </div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-cyan"> <i class="material-icons">add_shopping_cart</i> </div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"> <i class="material-icons">delete_forever</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-green"> <i class="material-icons">mode_edit</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-pink"> <i class="material-icons">comment</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-lime"> <i class="material-icons">cached</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"> <i class="material-icons">settings</i> </div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <li class="dropdown hidden-sm-down"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-flag"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <h4> Footer display issue <small>72%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Make new buttons <small>56%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Create new dashboard <small>68%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Solve transition issue <small>77%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Answer GitHub questions <small>87%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
                </ul>
            </li>
            <li><a href="sign-in.php" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="assets/images/random-avatar1.jpg" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Muhammad Ali Noor</div>
            <div class="email">aupuchowdhury@live.com</div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
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
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>NOOR Admin</span></a>
                <ul class="ml-menu">
                    <li><a href="sign-in.php">sign-in</a> </li>
                    <li><a href="locked.php">Locked User</a></li>
                    <li><a href="forgot-password.php">Forgot Password</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">supervisor_account</i> <span class="icon-name">User Account</span></a>
                <ul class="ml-menu">
                    <li><a href="new-account.php">New Account</a></li>
                    <li><a href="account-list.php">Account List</a></li>
                    <li><a href="profile.php">User Profile</a> </li>
                </ul>
            </li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><div class="demo-google-material-icon"><i class="material-icons">add_shopping_cart</i></div><span>Products</span> </a>
                <ul class="ml-menu">
                    <li><a href="form-product_entry.php">New product</a></li>
                    <li><a href="product-list.php">Product List</a></li>
                    <li class="active"><a href="banner.php">Banner</a></li>
                    <li class="active"><a href="banner-list.php">Banner List</a></li>
                    <li><a href="Category.php">Category</a></li>
                    <li><a href="category-list.php">Category List</a></li>
                    <li><a href="Brand.php">Brand</a></li>
                    <li><a href="brand-list.php">Brand List</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><div class="demo-google-material-icon"> <i class="material-icons">search</i></div><span>Advance Search</span> </a>
                <ul class="ml-menu">
                    <li> <a href="search_by_category.php">search_by_category</a></li>
                    <li> <a href="search_by_Product_id.php">search_by_Product_id</a></li>
                    <li> <a href="search_by_order_id.php">search_by_order_id</a></li>
                    <li> <a href="search_by_complain_id.php">search_by_complain_id</a></li>
                    <li> <a href="search-results.php">search-results</a></li>
                </ul>
            </li>  
        </ul>
    </div>
    <!-- #Menu --> 
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="skins">
            <div class="right_menu">
                <ul class="choose-skin">
                    <h6>Flat Color</h6>
                    <li data-theme="red"  class="active">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <h6>Gradient Theme</h6>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="chat">
            <div class="right_menu">
                <div class="search">
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search..." required>
                        </div>
                    </div>
                </div>
                <h6>Recent</h6>
                <ul class="list-unstyled">
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
                            <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="assets/images/random-avatar5.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="assets/images/random-avatar3.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h6>Contacts</h6>
                <ul class="list-unstyled">
                    <li class="offline">
                        <div class="media"> <a class="float-left" > <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left" > <img class="media-object " src="assets/images/random-avatar5.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="offline">
                        <div class="media"> <a class="float-left " > <img class="media-object " src="assets/images/random-avatar6.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="settings">
            <div class="right_menu">
                <p class="text-left">GENERAL SETTINGS</p>
                <ul class="setting-list">
                    <li> <span>Report Panel Usage</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Email Redirect</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">SYSTEM SETTINGS</p>
                <ul class="setting-list">
                    <li> <span>Notifications</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Auto Updates</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">ACCOUNT SETTINGS</p>
                <ul class="setting-list">
                    <li> <span>Offline</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Location Permission</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<section class="content">
    <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-7">
                            <h2>Products</h2>                    
                            <ul class="breadcrumb">                        
                                <li class="breadcrumb-item"><a href="index.php">Noor Admin</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Products</a></li>
                                <li class="breadcrumb-item active"> Banner Update</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Vertical Layout -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="Noor-color-card">
                            <div class="header">
                                <h6 style="text-align: center;"> Banner Update </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" id="smg"><?php if (isset($_SESSION['smg'])) {echo $_SESSION['smg'];}?></div>
                <!-- Start Category option -->
                <form action="controller/bannerUpdateProcess.php" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">

                <div class="row clearfix">
                            <!-- Start Product Name -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="pn"><h6 class="noor_h6"><span class="noor_span">*</span> Name</h6></label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $data[0]['name']; ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <!-- end Product Name -->
                            <!-- Start Product Code-->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="pid"><h6 class="noor_h6"><span class="noor_span">*</span> High Light</h6></label>
                                        <input type="text" name="high_light" class="form-control" value="<?php echo $data[0]['high_light']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <!-- end Product Code -->

                            <div class="col-sm-12">
                                  <div class="form-group">
                                       <div class="form-line">
                                            <label for="pd"><h6 class="noor_h6"><span class="noor_span">*</span>Description</h6></label>
                                                <textarea id="ckeditor" name="description">
                                                   <?php echo $data[0]['description'];?>
                                                </textarea>
                                        </div>
                                  </div>
                            </div>
                            
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="date"><h6 class="noor_h6"><span class="noor_span">*</span> Status</h6></label>
                                        <select class="form-control show-tick" name="status">
                                            <option value="">-- Choose status --</option>
                                            <option value="1"<?php if($data[0]['status']==1) echo 'selected'; ?>>Enable</option>
                                            <option value="0"<?php if($data[0]['status']==0) echo 'selected'; ?>>Disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                </div>
                            
                <!-- end Date-Time -->
					        <div class="col-lg-6 col-md-12">
                                <h6 class="noor_h6"><span class="noor_span">*</span> Upload Photo</h6>
                                    <label for="file-upload" class="custom-file-upload">
                                        <i class="material-icons">cloud_upload</i> Upload Photo
                                    </label>
                                        <input type="file" name="photo" id="file-upload" />
                                        <img src="uploads/banners/<?php echo $data[0]['image']; ?>" width="100">
                            </div>

                            <input type="hidden" name="old_img" value="<?php echo $data[0]['image']; ?>">
                                                <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
                                                
                        <div class="col-lg-12">
                            <input style="position: relative; top: 30px; left: 450px;" class="btn btn-raised btn-info" type="submit" name="submit" value="Save">
                        </div><br /><br />
					        
           </form>                  
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js -->
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js --> 

<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->

<script src="assets/plugins/ckeditor/ckeditor.js"></script> <!-- Ckeditor --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->

<script src="assets/js/pages/forms/advanced-form-elements.js"></script>
<script src="assets/js/pages/forms/basic-form-elements.js"></script> 
<script src="assets/js/pages/forms/editors.js"></script>

<?php unset($_SESSION['smg']); ?>
<script>

function myFunction() {

    setInterval(function(){ document.getElementById("smg").style.display = "none"; }, 3000);
}

</body>
</html>


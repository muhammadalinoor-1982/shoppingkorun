<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>NOOR Enterprise Search by Complain ID</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- Wait Me Css -->
<link  rel="stylesheet" href="assets/plugins/waitme/waitMe.css"/>
<!-- Bootstrap Select Css -->
<link  rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<!-- AdminCC You can choose a theme from css/themes instead of get all themes -->
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="assets/noor/css/noor.css" /> <!-- noor Css -->
</head>
</head>
<body class="theme-red">
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
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">supervisor_account</i> <span class="icon-name">User Account</span></a>
                <ul class="ml-menu">
                    <li><a href="new-account.php">New Account</a></li>
                    <li><a href="account-list.php">Account List</a></li>
                    <li><a href="profile.php">User Profile</a> </li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">supervisor_account</i> <span class="icon-name">User Account</span></a>
                <ul class="ml-menu">
                    <li><a href="form-product_entry.php">New Account</a></li>
                    <li><a href="Category.php">Account List</a></li>
                    <li><a href="profile.php">User Profile</a> </li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><div class="demo-google-material-icon"><i class="material-icons">add_shopping_cart</i></div><span>Products</span></a>
                <ul class="ml-menu">
                    <li><a href="form-product_entry.php">New product</a></li>
                    <li><a href="product-list.php">Product List</a></li>
                    <li><a href="Category.php">Category</a></li>
                    <li><a href="category-list.php">Category List</a></li>
                    <li><a href="Brand.php">Brand</a></li>
                    <li><a href="brand-list.php">Brand List</a></li>
                </ul>
            </li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-search"></i><span>Advance Search</span> </a>
                <ul class="ml-menu">
                    <li> <a href="search_by_category.php">search_by_category</a></li>
                    <li> <a href="search_by_Product_id.php">search_by_Product_id</a></li>
                    <li> <a href="search_by_order_id.php">search_by_order_id</a></li>
                    <li class="active"> <a href="search_by_complain_id.php">search_by_complain_id</a></li>
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
                    <h2>Advance searching</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.php">Noor Admin</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Advance searching</a></li>
                        <li class="breadcrumb-item active">Search by Complain ID</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="Noor-color-card">
                    <div class="header">
                        <h6 style="text-align: center;"> ADVANCE SEARCH </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Category head -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card noor_card">
                    <div class="header">
                        <h5 class="noor_h5"> SEARCH BY COMPLAIN ID </h5>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> 
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="demo-google-material-icon"> <i class="material-icons">settings</i></div>
                                    </div> 
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Create</a></li>
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Category head -->
        <!-- Start Product color Picker-->
                        <div class="row clearfix">
                            <div class="col-md-1"> <b>All Type</b>
                                <input type="checkbox" id="md_checkbox_37" class="filled-in chk-col-brown" checked />
                                <label for="md_checkbox_37">:</label>
                            </div>
                            <div class="col-md-1"> <b>Picture</b>
                                    <input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-yellow" checked />
                                    <label for="md_checkbox_33">:</label>
                            </div>
                            <div class="col-md-1"> <b>Product ID</b>
                                    <input type="checkbox" id="md_checkbox_34" class="filled-in chk-col-amber" checked />
                                    <label for="md_checkbox_34">:</label>
                            </div>
                            <div class="col-md-1"> <b>Name</b>
                                    <input type="checkbox" id="md_checkbox_36" class="filled-in chk-col-deep-orange" checked />
                                    <label for="md_checkbox_36">:</label>
                            </div>
                            <div class="col-md-1"> <b>Brand</b>
                                    <input type="checkbox" id="md_checkbox_38" class="filled-in chk-col-grey" checked />
                                <label for="md_checkbox_38">:</label>
                            </div>
                            <div class="col-md-1"> <b>Size</b>
                                    <input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-teal" checked />
                                    <label for="md_checkbox_29">:</label>
                            </div>
                            <div class="col-md-1"> <b>Color</b>
                                <input type="checkbox" id="md_checkbox_32" class="filled-in chk-col-lime" checked />
                                <label for="md_checkbox_32">:</label>
                            </div>
                            <div class="col-md-1"> <b>Rating</b>
                                <input type="checkbox" id="md_checkbox_31" class="filled-in chk-col-light-green" checked />
                                <label for="md_checkbox_31">:</label>
                            </div>
                            <div class="col-md-1"> <b>Service</b>
                                <input type="checkbox" id="md_checkbox_26" class="filled-in chk-col-blue" checked />
                                <label for="md_checkbox_26">:</label>
                            </div>
                            <div class="col-md-1"> <b>Delivery</b>
                                <input type="checkbox" id="md_checkbox_35" class="filled-in chk-col-orange" checked />
                                <label for="md_checkbox_35">:</label>
                            </div>
                            <div class="col-md-1"> <b>P.Quality</b>
                                <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink" checked />
                                <label for="md_checkbox_22">:</label>
                            </div>
                            <div class="col-md-2"> <b>Delay Response</b>
                                <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-purple" checked />
                                <label for="md_checkbox_23">:</label>
                            </div>
                            <div class="col-md-2"> <b>Profetionalism</b>
                                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" checked />
                                <label for="md_checkbox_21">:</label>
                            </div>
                            <div class="col-md-2"> <b>Others</b>
                                <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-deep-purple" checked />
                                <label for="md_checkbox_24">:</label>
                            </div>
                        </div>
        <!-- end Product color Picker-->
        <!-- Start Prodict ID -->
        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="sub category"><h6 class="noor_h6"><span class="noor_span">*</span> Complain ID</h6></label>
                                        <input type="text" class="form-control" placeholder="Enter Complain ID" />
                                    </div>
                                </div>
                            </div>
                            <!-- end Prodict ID -->
                            <!-- Start search button -->
                            <div class="col-sm-6">
                                <div class="button-demo">
                                    <button style="position: absolute; top: 40px; left: 150px;" type="button" class="btn btn-raised btn-primary waves-effect">SEARCH</button>
                                </div>
                            </div>
         <!-- end search button -->
         </div>
          <!-- Start table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card noor_card">
                    <div class="header">
                        <h5 class="noor_h5"> COMPLAIN ID WISE SEARCH RESULT </h5>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <div class="demo-google-material-icon"> <i class="material-icons">settings</i></div>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Create</a></li>
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable ">
                            <thead>
                                <tr>
                                    <th>Picture</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Rating</th>
                                    <th>Service</th>
                                    <th>Delivery</th>
                                    <th>P.Quality</th>
                                    <th>Delay Response</th>
                                    <th>Profetionalism</th>
                                    <th>Others</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Picture</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Rating</th>
                                    <th>Service</th>
                                    <th>Delivery</th>
                                    <th>P.Quality</th>
                                    <th>Delay Response</th>
                                    <th>Profetionalism</th>
                                    <th>Others</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Brand</td>
                                    <td>Size</td>
                                    <td>Color</td>
                                    <td>Rating</td>
                                    <td>Service</td>
                                    <td>Delivery</td>
                                    <td>P.Quality</td>
                                    <td>Delay Response</td>
                                    <td>Profetionalism</td>
                                    <td>Others</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->
</div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->

<script src="assets/js/pages/tables/jquery-datatable.js"></script>

</body>
</html>
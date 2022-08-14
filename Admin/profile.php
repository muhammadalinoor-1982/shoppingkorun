<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>NOOR Enterprise</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!--WaitMe Css-->
<link href="assets/plugins/waitme/waitMe.css" rel="stylesheet" />
<!-- Bootstrap Select Css -->
<link  rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css">
<!-- Font Awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="assets/noor/css/noor.css" /> <!-- noor Css -->
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
            <div class="name" data-toggle="dropdown">Muhammad Ali Noor</div>
            <div class="email">aupuchowdhury@live.com</div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
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
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>NOOR Admin</span></a>
                <ul class="ml-menu">
                    <li><a href="sign-in.php">sign-in</a> </li>
                    <li><a href="locked.php">Locked User</a></li>
                    <li><a href="forgot-password.php">Forgot Password</a></li>
                </ul>
            </li>
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">supervisor_account</i> <span class="icon-name">User Account</span></a>
                <ul class="ml-menu">
                    <li><a href="new-account.php">New Account</a></li>
                    <li><a href="account-list.php">Account List</a></li>
                    <li class="active"><a href="profile.php">User Profile</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><div class="demo-google-material-icon"><i class="material-icons">add_shopping_cart</i></div><span>Products</span> </a>
                <ul class="ml-menu">
                    <li><a href="form-product_entry.php">New product</a></li>
                    <li><a href="product-list.php">Product List</a></li>
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

<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Profile</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.php">NOOR Admin</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            <div class="profile-image"> <img src="assets/images/random-avatar1.jpg" alt=""> </div>
                            <h4 class="mb-0" style="color: #0091f9;"><strong>Ali</strong> Noor</h4>
                            <span class="text-muted">Web Developer</span>
                            <p class="social-icon">
                                <a title="Twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a title="Facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a title="Google-plus" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a title="Dribbble" href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                <a title="Behance" href="#"><i class="zmdi zmdi-behance"></i></a>
                                <a title="Instagram" href="#"><i class="zmdi zmdi-instagram "></i></a>
                                <a title="Pinterest" href="#"><i class="zmdi zmdi-pinterest "></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="profile-sub-header">
                        <div class="box-list">
                            <ul class="text-center">
                                <li> <a href="#" class=""><i class="fas fa-tasks"></i>
                                    <p>Performance</p>
                                    </a> </li>
                                <li> <a href="#" class=""><i class="fas fa-trophy"></i>
                                    <p>Awards and Achievements</p>
                                    </a> </li>
                                <li> <a href="#"><i class="fas fa-certificate"></i>
                                    <p>Certificates</p>
                                    </a> </li>
                                <li> <a href="#"><i class="fas fa-paperclip"></i>
                                    <p>Curriculum Vitae</p>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card noor_card_bg">
                    <div class="header">
                        <h2 style="color: #0091f9;">About Me</h2>
                    </div>
                    <div class="body">
                        <p class="text-default" style="color: #fff;">Lorem Ipsum ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <blockquote>
                            <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small style="color: #fff;">Designer <cite title="Source Title" style="color: #fff;">Source Title</cite></small> </blockquote>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body bg-light-blue"> Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra. 
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card text-center">
                                        <div class="body">
                                            <input type="text" class="knob" data-linecap="round" value="48" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#00BCD4">
                                        </div>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card top-report">
                        <div class="body">
                            <h3 class="m-t-0">1,600</h3>
                            <p class="text-muted">Total Feedbacks</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                            </div>
                            <small>10% higher than last month</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body bg-light-green"> Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card text-center">
                                    <div class="body">
                                        <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"readonly>
                                    </div>
                                </div>                
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body bg-amber"> Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card text-center">
                                    <div class="body">
                                        <input type="text" class="knob" value="93" data-width="120" data-height="120" data-thickness="0.12" data-fgColor="#9C27B0">
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card top-report">
                        <div class="body">
                            <h3 class="m-t-0">26.8%</h3>
                            <p class="text-muted">Server Load</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                            </div>
                            <small>4% higher than last month</small>
                        </div>
                    </div>
                </div>
        </div>
            <div class="col-lg-8 col-md-1">
                <div class="card noor_card_bg">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">Pictures</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Job Description</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Profile</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="mypost">
                                <div class="wrap-reset">
                                    <div class="mypost-form">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            </div>
                                        </div>
                                        <div class="post-toolbar-b">
                                            <a href="#" tooltip="Add File" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-attachment"></i></a>
                                            <a href="#" tooltip="Add Image" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-camera"></i></a>
                                            <a href="#" tooltip="Post it!" class="float-right btn btn-raised btn-success btn-sm">Post</a>
                                        </div>
                                    </div>
                                    <div class="mypost-list">
                                        <div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 3 minutes ago</span>
                                            <div class="post-img"><img src="assets/images/1.jpg" class="img-responsive" alt /></div>
                                            <div>
                                                <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                <p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 23 minutes ago</span>
                                            <div class="post-img"><img src="assets/images/2.jpg" class="img-responsive" alt /></div>
                                            <div>
                                                <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                <p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 45 minutes ago</span>
                                            <div class="post-img"><img src="assets/images/3.jpg" class="img-responsive" alt /></div>
                                            <div>
                                                <h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                <p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text-center"> <a href="#" class="btn btn-raised btn-default btn-sm">Load More …</a> </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="timeline">
                                <div class="timeline-body">
                                    <dt>What is Lorem Ipsum?</dt>
                                    <dd>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
                                    when an unknown printer took a galley<br/>   
                                    </dd>
                                    <dt>What is Lorem Ipsum?</dt>
                                    <dd>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
                                    when an unknown printer took a galley<br/>   
                                    </dd>
                                    <dt>What is Lorem Ipsum?</dt>
                                    <dd>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
                                    when an unknown printer took a galley<br/>   
                                    </dd>
                                    <dt>What is Lorem Ipsum?</dt>
                                    <dd>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
                                    when an unknown printer took a galley<br/>   
                                    </dd>
                                    <dt>What is Lorem Ipsum?</dt>
                                    <dd>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
                                    when an unknown printer took a galley<br/>   
                                    </dd>
                                    <dt>What is Lorem Ipsum?</dt>
                                    <dd>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
                                    when an unknown printer took a galley<br/>   
                                    </dd>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="usersettings">
                                <h2 class="card-inside-title" style="color: #0091f9">Profile Settings</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control" placeholder="Current Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control" placeholder="New Password">
                                            </div>
                                        </div>
                                        <button class="btn btn-raised btn-success btn-sm">Save Changes</button>
                                    </div>
                                </div>
                                <h2 class="card-inside-title" style="color: #0091f9">Account Settings</h2>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="User ID">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-purple dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Access Level <span class="caret"></span> </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0);">Admin</a></li>
                                                    <li><a href="javascript:void(0);">Supervisor</a></li>
                                                    <li><a href="javascript:void(0);">Operator</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="uf">
                                                <h6 class="noor_h6"><span class="noor_span">*</span> Status: </h6></label>
                                                    <input name="group5" type="radio" id="radio_36" class="with-gap radio-col-light-blue" checked/>
                                                    <label for="radio_36">Active</label>
                                                    <input name="group5" type="radio" id="radio_45" class="with-gap radio-col-deep-orange"/>
                                                    <label for="radio_45">Inactive</label>
                                        </div>
                                    </div>
                                    <!-- Start Created at -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="date"><h6 class="noor_h6"><span class="noor_span">*</span> Created at</h6></label>
                                                <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Created at -->
                                    <!-- Start Updated at -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="date"><h6 class="noor_h6"><span class="noor_span">*</span> Updated at</h6></label>
                                                <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Updated at -->
                                    <div class="col-lg-6 col-md-12">
                                        <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                            <div class="dz-message">
                                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                                <h3>Pic-5</h3>
                                            </div>
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-raised btn-success">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="assets/plugins/waitme/waitMe.js"></script> <!-- Wait Me Plugin Js --> 
<script src="assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.js"></script> <!-- Sparkline Chart Plugin Js --> 
<script src="assets/js/pages/widgets/infobox/infobox-1.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->

<script src="assets/js/pages/charts/jquery-knob.js"></script>
<script src="assets/js/pages/charts/sparkline.js"></script>
<script src="assets/js/pages/cards/basic.js"></script> <!-- Custom Js --> 
<script src="assets/js/pages/forms/basic-form-elements.js"></script> 


</body>
</html>
﻿<?php
 session_start();
 include("class/DbConnection.php");
 $obj = new DbConnection();

  if(empty($_SESSION['user_id'])){
     header("Location:sign-in.php");
     exit();
  }

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>NOOR Enterprise</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="assets/noor/css/noor.css" /> <!-- noor Css -->
</head>

<body class="theme-red">
<?php include("includes/top-nav.php"); ?>
<!-- Left Sidebar -->
<?php include("includes/left-nav.php"); ?>
<!-- Right Sidebar -->
<?php include("includes/right-nav.php"); ?>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>NOOR Admin</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.php">NOOR Admin</a></li>
                        <li class="breadcrumb-item active">Home <i class="zmdi zmdi-home"></i></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-cyan">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Sales</span>
                                <span class="value">1,305</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 13%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-amber">
                                <i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Visitors </span>
                                <span class="value">2,105</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 18%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-blue">
                                <i class="zmdi zmdi-label zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Pageviews</span>
                                <span class="value">4,054</span>
                            </div>
                        </div>
                        <p class="media-footer text-danger"><i class="zmdi zmdi-trending-down"></i> 12%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-green">
                                <i class="zmdi zmdi-money zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Revenue</span>
                                <span class="value">$63.23M</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 21%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Visitors Statistics</h2>
                    </div>
                    <div class="body visitors-map">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div id="world-map-markers" class="jvector-map"></div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">America</div>
                                        <div class="description">visitor from america</div>
                                    </div>
                                    <div class="status float-right"> <span>40</span>% </div>                                    
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Canada</div>
                                        <div class="description">visitor from Canada</div>
                                    </div>
                                    <div class="status float-right"> <span>38</span>% </div>                                    
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 31%"> <span class="sr-only">38%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Asia</div>
                                        <div class="description">visitor from asia</div>
                                    </div>
                                    <div class="status float-right"> <span>12</span>% </div>                                    
                                    <div class="progress">
                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 22%"> <span class="sr-only">12%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Germany</div>
                                        <div class="description">visitor from Germany</div>
                                    </div>
                                    <div class="status float-right"> <span>7</span>% </div>                                    
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 19%"> <span class="sr-only">7%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">France</div>
                                        <div class="description">visitor from France</div>
                                    </div>
                                    <div class="status float-right"> <span>6</span>% </div>                                    
                                    <div class="progress">
                                        <div class="progress-bar bg-lime" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 15%"> <span class="sr-only">6%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Other</div>
                                        <div class="description">visitor from other</div>
                                    </div>
                                    <div class="status float-right"> <span>6</span>% </div>                                    
                                    <div class="progress">
                                        <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 6%"> <span class="sr-only">6%</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card" >
                    <div class="header">
                        <h2>Sales Report</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                    data-offset="90" data-width="100%" data-height="80px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                    data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Annual Revenue</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                    data-offset="90" data-width="100%" data-height="80px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                    data-fill-Color="rgba(120, 184, 62, 0.3)">2,4,3,5,6,5,4,3,2,4,5,4,2</div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card cpu-usage">
                    <div class="header">
                        <h2>CPU USAGE (%)</h2>                        
                    </div>
                    <div class="body">
                        <div class="switch panel-switch-btn"> <span class="m-r-10 font-12">REAL TIME</span>
                            <label>OFF
                                <input type="checkbox" id="realtime" checked>
                                <span class="lever switch-col-cyan"></span>ON</label>
                        </div>
                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">50.5 Gb</h3>
                        <p class="text-muted">Traffic this month</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>4% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">$ 14,500</h3>
                        <p class="text-muted">Total Sale</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>15% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
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
        </div>        
        <div class="row clearfix">
            <div class="col-sm-12 col-md-8">
                <div class="card" >
                    <div class="header">
                        <h2>Latest orders</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless m-b-5">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Product</th>
                                    <th class="number">Price</th>
                                    <th style="width:20%;">Date</th>
                                    <th style="width:20%;">State</th>
                                    <th style="width:5%;" class="actions"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    <td>Sony Xperia M4</td>
                                    <td class="number">$149</td>
                                    <td>Aug 23, 2016</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Apple iPhone 6</td>
                                    <td class="number">$535</td>
                                    <td>Aug 20, 2016</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S7</td>
                                    <td class="number">$583</td>
                                    <td>Aug 18, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>HTC One M9</td>
                                    <td class="number">$350</td>
                                    <td>Aug 15, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Sony Xperia Z5</td>
                                    <td class="number">$495</td>
                                    <td>Aug 13, 2016</td>
                                    <td class="text-danger">Cancelled</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S9</td>
                                    <td class="number">$583</td>
                                    <td>Aug 18, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>HTC One M13</td>
                                    <td class="number">$350</td>
                                    <td>Aug 15, 2016</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card" data-aos-duration="400" data-aos-delay="200" data-aos="fade-up">
                    <div class="header">
                        <h2>INBOX</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="inbox-widget list-unstyled clearfix">
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="100" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar3.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="200" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar2.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="300" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar4.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="400" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar3.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                             <li class="inbox-inner" data-aos-duration="400" data-aos-delay="500" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar4.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRajar-Char-High-School-383955501654374%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1895169494096892" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>                
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>CHAT</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="chat-widget">
                            <ul class="chat-scroll-list">
                                <li class="left float-left"> <img src="assets/images/random-avatar4.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, adipiscing elit </span> </div>
                                </li>
                                <li class="right"> <img src="assets/images/random-avatar2.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
                                </li>
                                <li class="left float-left"> <img src="assets/images/random-avatar5.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
                                </li>
                                <li class="right"> <img src="assets/images/random-avatar1.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
                                </li>
                            </ul>
                        </div>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter Text">
                            </div>
                            <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card activities">
                    <div class="header">
                        <h2>Activities</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="streamline b-l b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="javascript:void(0);" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">11:30</div>
                                    <p><a href="javascript:void(0);">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p>Call to customer <a href="javascript:void(0);" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p><a href="javascript:void(0);" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p>Call to customer <a href="javascript:void(0);" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p>Call to customer <a href="javascript:void(0);" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>
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
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/authentication.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="assets/noor/css/noor.css">
</head>

<body class="theme-red">
<div class="authentication">
	<div class="container-fluid">
		<div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 noorbg">
              <div class="l-detail">
                    <?php include("includes/aboutNoor.php"); ?>
                </div>  
            </div>
			<div class="col-lg-4 col-md-12 col-sm-12 noorright">
				<div class="card noor_card_bg">
                    <h4 class="l-login m-b-20" style="color: #0091f9">Locked</h4>
                    <div class="locked">
                        <div class="thumb">
                            <img class="media-object img-circle img-fluid img-thumbnail" width="80px" src="assets/images/random-avatar1.jpg" alt="">
                        </div>
                        <h4 class="media-heading">Aupu<strong>Chowdhury</strong></h4>
                    </div>
                    <form method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <a href="index.php" class="btn btn-primary waves-effect bg-red">Login</a>
                        </div>
                        <div class="col-12"> <a href="sign-in.php">Sign In!</a> 
                            <div class="l-detail">                          
                                    <ul class="list-unstyled l-social">
                                        <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>                                
                                        <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>                       
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div> 
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>
</html>

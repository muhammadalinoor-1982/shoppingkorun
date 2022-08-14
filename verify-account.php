<?php include("includes/settings.php"); ?>

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

<body class="login-page">
<!-- Mobile Menu -->
<?php include("includes/mobile_menu.php"); ?>
<div id="page"> 
  <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- end header --> 
  
  <!-- Navigation -->
  
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="account-login">
        
        <fieldset class="col2-set">
          
          <form action="frontcontroller/loginProcess.php" method="post">
          <div class="col-2 registered-users"><strong>&nbsp;</strong>
            <div class="content">
              <p>If you have an account with us, please log in.</p>
              <?php
              
              if(isset($_GET['key'])){
                  
                  $token = explode('@_', base64_decode(base64_decode(base64_decode($_GET['key'])))); 
                  
                  $obj->updateData("UPDATE customer SET status=1 WHERE customer_id='".$token[0]."'");
                  
                  
              }
              
              ?>
              <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; } ?>
              <ul class="form-list">
                <li>
                  <label for="email">Email Address <span class="required">*</span></label>
                  <input type="email" title="Email Address" class="input-text required-entry" id="email" value="" name="email" required>
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="password" required>
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2" name="send" type="submit" class="button login"><span>Login</span></button>
                <a class="forgot-word" href="forgot-password.php">Forgot Your Password?</a> </div>
            </div>
          </div>
          </form>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
  
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
<?php unset($_SESSION['message']); ?>
</html>
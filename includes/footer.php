<footer>
    <div class="footer-inner">
      <div class="news-letter">
        <div class="container">
          <div class="heading text-center">
            <h2>Just Subscribe Now!</h2>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere.</span> </div>
            <div class="alert alert-success message" style="display: none;"></div>
          <form class="news-subscribe" method="post" action="#">
            <input style="color: #000;" type="email" placeholder="Enter your email address" required>
            <button type="submit">Send me</button>
          </form>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <h4>About</h4>
            <div class="contacts-info">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              <address>
              <i class="fa fa-location-arrow"></i> <span><?php echo $setting[0]['site_address']; ?></span>
              </address>
              <div class="phone-footer"><i class="fa fa-phone"></i><?php echo $setting[0]['site_phone']; ?></div>
              <div class="email-footer"><i class="fa fa-envelope"></i> <a href="mailto:support@example.com"><?php echo $setting[0]['site_email']; ?></a> </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-6 col-xs-12">
            <h4>Helpful Links</h4>
            <ul class="links">
              <li><a href="#">Products</a></li>
              <li><a href="#">Find a Store</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="sitemap.html">Site Map</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-6 col-xs-12">
            <h4>Shop</h4>
            <ul class="links">
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="#">Shipping Methods</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Retailer</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-lg-3 col-md-4 col-sm-6">
            <div class="social">
              <h4>Follow Us</h4>
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
              </ul>
            </div>
            <div class="payment-accept">
              <h4>Secure Payment</h4>
              <div class="payment-icon"><img src="images/paypal.png" alt="paypal"> <img src="images/visa.png" alt="visa"> <img src="images/american-exp.png" alt="american express"> <img src="images/mastercard.png" alt="mastercard"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 coppyright text-center">© 2018 Fabulous, All rights reserved.</div>
        </div>
      </div>
    </div>
  </footer>

  <!-- start Modal for add to cart -->
            <div class="modal fade" id="cartModal" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content" style="position: relative; top: 80px; left: -180px; width: 1000px; height: 350px;">
                  <div style="background-color: #910136; text-align: center; color: #fff;" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Successfully Added to your Shopping Cart</h4>
                  </div>

                  <div style="background-color: #fff;" class="modal-body" id="cart_modal">
                    <!-- product property get from main js "ADD TO CART" portion -->
                  </div>

                  <div style="width: 998px; height: 50px; background-color: #910136;" class="modal-footer"><br>                
                          <a href="checkout.php" style="position: relative; left: -480px; top: -25px; width: 200px; color: #fff; background: #292a2b; border: #292a2b; border-radius: 5px;" class="btn btn-default">Checkout</a><br>
                          <button type="button" style="position: relative; left: -275px; top: -56px; width: 200px; color: #fff; background: #292a2b; border: #292a2b; border-radius: 5px;"" class="btn btn-default" data-dismiss="modal" onclick="window.location.href='index.php'">Continue Shoping</button><br>
                  </div>
                </div>
                
              </div>
            </div>
  <!-- End Modal for add to cart -->

  <!-- start Modal for add to wish--> 
            <div class="modal fade" id="wishModal" role="dialog">
              <div class="modal-dialog">
              
                 Modal content
                <div class="modal-content" style="position: relative; top: 50px; left: -180px; width: 1000px; height: 350px;">
                  <div style="background-color: #910136; text-align: center; color: #fff;" class="modal-header">
                     
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Successfully Added to your Wish List</h4>
                  </div>

                  <div style="background-color: #9cbef4; height: 280px;" class="modal-body">
                    
                      <div style="position: relative; width: 250px; height: 220px; background-color: orange;" id="w-image"></div>
                        
                        <ul style="position: relative; left: 250px; top: -180px; list-style-type: none;"><br>               
                          <li><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="w-name"></span></strong></li><br>
                          <li><strong>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span id="w-price"></span></strong></li><br>
                        </ul>
                        
                        
                        <div style="position: relative; left: 700px; top: -280px;">
                          <ul style="position: relative; left: -30px; list-style-type: none;"><br><br>
                          <br> 
                          <li><button style="width: 200px; " class="button btn-cart" type="button" onclick="window.location.href='wishlist.php'"><span><i class="fa fa-heart"></i> My wishes</span></button></li><br>
                          <li><button type="button" style="width: 200px; " class="btn btn-default" data-dismiss="modal" onclick="window.location.href='index.php'"><strong>Continue Shoping</strong></button></li><br>
                        </ul>
                        </div>
                      </div>
                        <div style="background-color: #1c1e3d;" class="modal-footer">
                          <h4 style="text-align: center; color: #fff;">Thanks for being withus</h4>
                        </div>
                  </div>
                </div>
              </div>
            <!-- end Modal for add to wish-->

            <?php $Hot_Deal = $obj->getData("SELECT count_down FROM count_down WHERE count_status=1 AND count_name='Test'"); ?>
            <?php foreach ($Hot_Deal as $hotDeal) { ?>
            <input type="hidden" name="" id="getCount" value="<?php echo $hotDeal['count_down']; ?>" />
            <?php } ?>
  <!-- End Modal for add to wish -->
  <!-- Start google live chat -->
  <script type="text/javascript">function add_chatinline(){var hccid=82468898;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline(); 
  </script>
  <!-- End google live chat -->
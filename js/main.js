jQuery(document).ready(function() {
    "use strict";

    /******************************************
      Newsletter popup
    ******************************************/

    jQuery('#myModal').appendTo("body");

    function show_modal() {
        jQuery('#myModal').modal('show');
    }

    jQuery('#myModal').modal({
        keyboard: false,
        backdrop: false
    });
    /******************************************
      Navigation
    ******************************************/

    jQuery('.mega-menu-title').on('click', function() {
        if (jQuery('.mega-menu-category').is(':visible')) {
            jQuery('.mega-menu-category').slideUp();
        } else {
            jQuery('.mega-menu-category').slideDown();
        }
    });


    jQuery('.mega-menu-category .nav > li').hover(function() {
        jQuery(this).addClass("active");
        jQuery(this).find('.popup').stop(true, true).fadeIn('slow');
    }, function() {
        jQuery(this).removeClass("active");
        jQuery(this).find('.popup').stop(true, true).fadeOut('slow');
    });


    jQuery('.mega-menu-category .nav > li.view-more-cat').on('click', function(e) {
        if (jQuery('.mega-menu-category .nav > li.more-menu').is(':visible')) {
            jQuery('.mega-menu-category .nav > li.more-menu').stop().slideUp();
            jQuery(this).find('a').text('More');
        } else {
            jQuery('.mega-menu-category .nav > li.more-menu').stop().slideDown();
            jQuery(this).find('a').text('Close menu');
            jQuery(this).find('a').addClass('menu-hide');

        }
        e.preventDefault();
    });
    /******************************************
      Featured Slider
    ******************************************/
    jQuery("#featured-slider .slider-items").owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [640, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /******************************************
      Trending Slider
    ******************************************/
    jQuery("#trending-slider .slider-items").owlCarousel({
        items: 5, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [640, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /******************************************
      Top Products Slider
    ******************************************/
    jQuery("#top-products-slider .slider-items").owlCarousel({
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1024, 1], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });

    /******************************************
      Brand Logo Slider
    ******************************************/
    jQuery("#jtv-brand-logo-slider .slider-items").owlCarousel({
        autoPlay: true,
        items: 5, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [640, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: false,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /******************************************
      Category Banner Slider
    ******************************************/
    jQuery("#category-desc-slider .slider-items").owlCarousel({
        autoplay: true,
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1024, 1], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /******************************************
      Related Products Slider
    ******************************************/
    jQuery("#jtv-related-products-slider .slider-items").owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [640, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /******************************************
      Upsell Products Slider
    ******************************************/
    jQuery("#jtv-upsell-products-slider .slider-items").owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [640, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });

    /******************************************
      Mobile Menu
    ******************************************/
    jQuery(document).ready(function(jQuery) {
        jQuery("#jtv-mobile-menu").mobileMenu({
            MenuWidth: 250,
            SlideSpeed: 300,
            WindowsMaxWidth: 767,
            PagePush: true,
            FromLeft: true,
            Overlay: true,
            CollapseMenu: true,
            ClassName: "jtv-mobile-menu"
        });
    });




});


/******************************************
    PRICE FILTER
******************************************/

jQuery('.slider-range-price').each(function() {
    var min = jQuery(this).data('min');
    var max = jQuery(this).data('max');
    var unit = jQuery(this).data('unit');
    var value_min = jQuery(this).data('value-min');
    var value_max = jQuery(this).data('value-max');
    var label_reasult = jQuery(this).data('label-reasult');
    var t = jQuery(this);
    jQuery(this).slider({
        range: true,
        min: min,
        max: max,
        values: [value_min, value_max],
        slide: function(event, ui) {
            var result = label_reasult + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
            console.log(t);
            t.closest('.slider-range').find('.amount-range-price').html(result);
        }
    });
})

var isTouchDevice = ('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0);
jQuery(window).on("load", function() {
    jQuery().UItoTop();


});
/*-------------------------------------------------------------
 Counter up min js
---------------------------------------------------------------*/
(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);

/*----------------------------
     cart-plus-minus-button
------------------------------ */
    jQuery(".cart-plus-minus")
    jQuery(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        jQuerybutton.parent().find("input").val(newVal);
    });
	jQuery('.acc-toggle').on('click', function(){
		if (jQuery('.acc-toggle input').is(':checked')) {
			jQuery('.create-acc-body').slideDown();
		}else{
			jQuery('.create-acc-body').slideUp();
		}
	});
		
	jQuery('.ship-toggle').on('click', function(){
		if (jQuery('.ship-toggle input').is(':checked')) {
			jQuery('.ship-acc-body').slideDown();
		}else{
			jQuery('.ship-acc-body').slideUp();
		}
	});

/******************************************
    ToTop
******************************************/
(function(jQuery) {
    jQuery.fn.UItoTop = function(options) {

        var defaults = {
            text: '',
            min: 200,
            inDelay: 600,
            outDelay: 400,
            containerID: 'toTop',
            containerHoverID: 'toTopHover',
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        var settings = $.extend(defaults, options);
        var containerIDhash = '#' + settings.containerID;
        var containerHoverIDHash = '#' + settings.containerHoverID;

        jQuery('body').append('<a href="#" id="' + settings.containerID + '">' + settings.text + '</a>');
        jQuery(containerIDhash).hide().click(function() {
                jQuery('html, body').animate({
                    scrollTop: 0
                }, settings.scrollSpeed, settings.easingType);
                jQuery('#' + settings.containerHoverID, this).stop().animate({
                    'opacity': 0
                }, settings.inDelay, settings.easingType);
                return false;
            })
            .prepend('<span id="' + settings.containerHoverID + '"></span>')
            .hover(function() {
                jQuery(containerHoverIDHash, this).stop().animate({
                    'opacity': 1
                }, 600, 'linear');
            }, function() {
                jQuery(containerHoverIDHash, this).stop().animate({
                    'opacity': 0
                }, 700, 'linear');
            });

        jQuery(window).scroll(function() {
            var sd = $(window).scrollTop();
            if (typeof document.body.style.maxHeight === "undefined") {
                jQuery(containerIDhash).css({
                    'position': 'absolute',
                    'top': $(window).scrollTop() + $(window).height() - 50
                });
            }
            if (sd > settings.min)
                jQuery(containerIDhash).fadeIn(settings.inDelay);
            else
                jQuery(containerIDhash).fadeOut(settings.Outdelay);
        });

/******************************************
    start Size
******************************************/
        jQuery("#size").change(function (){

            var value = "size=" + $(this).val();

            $.ajax({

                url:"ajax/getSizeTag.php",
                data: value,
                type: 'POST',
                success: function(response){

                   $(".size-tag").html("<img src='Admin/uploads/size/" +response+ "' />");
                }
            });
            
        });

/******************************************
    start Color
******************************************/
        jQuery("#color").change(function (){

            var value = "color=" + $(this).val();

            $.ajax({

                url:"ajax/getColorTag.php",
                data: value,
                type: 'POST',
                success: function(response){

                   $(".color-tag").html("<img src='Admin/uploads/color/" +response+ "' />");
                }
            });
            
        });

/******************************************
    Add to cart
******************************************/
        jQuery(".btn-cart_add").click(function (){

            var id = $(this).attr("data-id");
            var name = $(this).attr("data-name");
            var image = $(this).attr("data-image");
            var price = $(this).attr("data-price");
            var qnt = $("#qty").val();
            var color = $("#color").val();
            var size = $("#size").val();
                if (color==0) {
                                alert("Please Mention Your Color");
                                return false;
                                }
                if (size==0) {
                                alert("Please Mention Your Size");
                                return false;
                                }

            total_price = price * qnt;
            var value = "id=" + id + "&name=" + name + "&image=" + image + "&price=" + price + "&total_price=" + total_price + "&qnt=" + qnt + "&color=" + color + "&size=" + size;
            $.ajax({

                url:"ajax/addToCart.php",
                data: value,
                type: 'POST',
                success: function(response){

                  var data = JSON.parse(response);
                  var item_num = data.item;
                  var item = data.cart_item;
                  var list = '';
                  $(".item-count").html(data.item);
                  $(".price").html(data.total);

                for(let i in item){
                  list += '<li class="item"><div class="item-inner"><a class="product-image" title="product tilte is here" href="product-detail.php?id='+ i +'"><img alt="product tilte is here" src="Admin/uploads/products/'+ item[i].image +'"></a><div class="product-details"><div class="access"><a class="btn-remove1 remove-cart" id="" title="Remove This Item" href="javascript:void(0)" data-id="'+ i +'">Remove</a> </div><p class="product-name"><a href="product-detail.php?id='+ i +'">'+ item[i].name +'</a></p><strong>'+ item[i].quantity +'</strong> x <span class="price">'+ item[i].price +'</span><p class="color-tag"><span class="color-tag"><img alt="product tilte is here" src="Admin/uploads/color/'+ item[i].option.color_tag +'"></span></p><p class="size-tag"><span class="size-tag"><img alt="product tilte is here" src="Admin/uploads/size/'+ item[i].option.size_tag +'"></span></p></div></div></li>' ;
            }
                    jQuery('#cart-sidebar').html(list);
                    var modal_item = '';
                    for(let i in item){
                    modal_item += '<div style="position: relative; top: 25px; left: 20px; width: 250px; height: 300px;"><img alt="product tilte is here" src="Admin/uploads/products/'+ item[i].image +'"><ul style="position: relative; top: -250px; left: 200px; list-style-type: none;"><br><li><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'+ item[i].name +'</strong></li><br><li><strong>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</strong><img alt="product tilte is here" src="Admin/uploads/size/'+ item[i].option.size_tag +'"></li><br><li><strong>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</strong><img alt="product tilte is here" src="Admin/uploads/color/'+ item[i].option.color_tag +'"></li><br><li><strong>Quantity&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'+ item[i].quantity +'</strong></li><br></ul><div style="position: relative; width: 1px; height: 220px; background-color: black; left: 580px; top: -465px;"></div><div style="position: relative; left: 350px; top: -453px;"><ul style="position: relative; top: -220px; left: 220px; list-style-type: none;"><br><br><br><li><strong>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;'+ item[i].price +'</strong></li><br><li><strong>Total Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'+ item[i].total_price +'</strong></li><br></ul></div></div>';
                    break;
            }       
                    jQuery('#cart_modal').html(modal_item); 
                    jQuery('#cartModal').modal('show');
                }
            });
            
        });

/******************************************
    Delete to cart
******************************************/
        jQuery("body").on('click', '.btn-remove1', function(e){
            e.preventDefault();

            var id = $(this).attr("data-id");
            
            var value = "id=" + id;

            $.ajax({

                url:"ajax/deleteToCart.php",
                data: value,
                type: 'POST',
                success: function(response){

                  var data = JSON.parse(response);
                  $(".item-count").html(data.item);
                  $(".price").html(data.total);
                }
            });

            $(this).parent().parent().parent().parent().hide();
            
        });

/******************************************
    send email for password reset
******************************************/

    jQuery("#send2").click(function (){
        
        var data = "email=" + $("#email").val();
        
        $.ajax({
            url: "ajax/resetPassword.php",
            data: data,
            type: 'POST',
            success: function (response){
                $(".message").html(response);
            }
            
        });
        
    });

/******************************************
    add to wish
******************************************/    

   jQuery(".add-to-wish").click(function (){


            var id = $(this).attr("data-id");
            var name = $(this).attr("data-name");
            var image = $(this).attr("data-image");
            var price = $(this).attr("data-price");
       
            
            var value = "id=" + id + "&name=" + name + "&image=" + image + "&price=" + price;
            $.ajax({

                url:"ajax/addToWish.php",
                data: value,
                type: 'POST',
                success: function(response){

                    var data = JSON.parse(response);
                    
                    if (data.status==3) {
                        window.location = 'login.php';
                    }
                    else{
                         $("#w-image").html("<img src='Admin/uploads/products/"+data.image+"' />");
                         $("#w-name").html(data.name);
                         $("#w-price").html(data.price);
                        jQuery('#wishModal').modal('show');
                        
                    }
                }
            });
            
        });
/******************************************
    remove wish
******************************************/
        jQuery("body").on('click', '.remove-wish', function(e){
            e.preventDefault();

            var id = $(this).attr("data-id");
            
            var value = "id=" + id;

            $.ajax({

                url:"ajax/deleteWish.php",
                data: value,
                type: 'POST',
                success: function(response){

                }
            });

            $(this).parent().parent().hide();
            
        });

/******************************************
    subscribe
******************************************/

jQuery(".news-subscribe").submit(function (event){

            var value = 'email='+event.currentTarget[0].value;

            $.ajax({

                url:"ajax/subscribe.php",
                data: value,
                type: 'POST',
                success: function(response){
                    jQuery('.message').show('slow');
                    if (response=='Success') {
                        jQuery('.message').html('Thank you for being with us!.');
                    }
                    else{
                        jQuery('.message').html('Some thing going wrong, Sorry for that!.');
                    }
                }
            });

            return false;
            
        });

/******************************************
    password reset
******************************************/
      jQuery("#save_password").click(function (){
        
        var data = "password=" + $("#new_password_save").val() + "&id=" + $("#customer_id").val();
        
        $.ajax({
            url: "ajax/newPassword.php",
            data: data,
            type: 'POST',
            success: function (response){
                $(".message").html(response);
            }
            
        });
        
    });

/******************************************
    password validation
******************************************/

    jQuery("#registration").submit(function (event){

        var lowerCaseLetters = /[a-z]/g;
        var password = $('#npassword').val();
        if(password.match(lowerCaseLetters)) 
            {  
               
            } 
                else 
                    {
                        $(".message").show("slow");
                        $(".message").html("Atlest one lower case letter");
                        return false;
                    }

        var upperCaseLetters = /[A-Z]/g;
        if(password.match(upperCaseLetters)) 
            {  
                
            } 
                else 
                    {
                        $(".message").show("slow");
                        $(".message").html("Atlest one upper case letter");
                        return false;
                    }

        var numbers = /[0-9]/g;
        if(password.match(numbers)) 
            {  
                
            } 
                else 
                    {
                        $(".message").show("slow");
                        $(".message").html("Atlest one number");
                        return false;
                    }

        if(password.length >= 8 && password.length <=20) 
            {  
                
            } 
                else 
                    {
                        $(".message").show("slow");
                        $(".message").html("Lenth must be within 8 to 20 charecters");
                        return false;
                    }

    });
/******************************************
    phone validation
******************************************/
jQuery("#registration").submit(function (event){

   var phone = /[0-9]/g;
   var digit = $('#phone').val();
        if(digit.match(phone)) 
            {  
                
            } 
                else 
                    {
                        $(".msg").show("slow");
                        $(".msg").html("Invalid Phone Number");
                        return false;
                    } 

});


/******************************************
    end
******************************************/        

    };
})(jQuery);
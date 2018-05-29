// js Document

  // Project:        inobiz -  Business & Agency Template.
  // Version:        1.0
  // Last change:    23/02/2018.
  // Designed:       Template_mr
  // Developed:      Template_mr


(function($) {
    "use strict";
    
    
    jQuery(document).on('ready', function ($){
        
        // -------------------- Navigation Scroll
        jQuery(window).scroll(function($) {    
          var sticky = jQuery('.theme-menu-wrapper'),
          scroll = jQuery(window).scrollTop();
          if (scroll >= 190) sticky.addClass('fixed');
          else sticky.removeClass('fixed');

        });


        // ------------------------------- WOW Animation 
        var wow = new WOW({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       80,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
          });
          wow.init();


        
        // -------------------- Remove Placeholder When Focus Or Click
        jQuery("input,textarea").each( function(){
            jQuery(this).data('holder',jQuery(this).attr('placeholder'));
            jQuery(this).on('focusin', function() {
                jQuery(this).attr('placeholder','');
            });
            jQuery(this).on('focusout', function() {
                jQuery(this).attr('placeholder',jQuery(this).data('holder'));
            });     
        });
        
        // -------------------- From Bottom to Top Button
            //Check to see if the window is top if not then display button
        jQuery(window).on('scroll', function ($){
          if (jQuery(this).scrollTop() > 200) {
            jQuery('.scroll-top').fadeIn();
          } else {
            jQuery('.scroll-top').fadeOut();
          }
        });
            //Click event to scroll to top
        jQuery('.scroll-top').on('click', function() {
          jQuery('html, body').animate({scrollTop : 0},1500);
          return false;
        });



        // --------------------------- Theme Main Banner Slider One
        var banner = jQuery("#theme-main-banner");
        if (banner.length) {
          banner.camera({ //here I declared some settings, the height and the presence of the thumbnails 
            height: '680px',
            pagination: false,
            navigation: false,
            thumbnails: false,
            playPause: false,
            pauseOnClick: false,
            autoPlay:true,
            hover: false,
            overlayer: true,
            loader: 'none',
            minHeight: '400px',
            time: 4000,
          });
        };



        // ------------------------------- Testimonial Slider
        var tSlider = jQuery(".client-slider");
        if(tSlider.length) {
            tSlider.owlCarousel({
              loop:true,
              nav:false,
              dots:false,
              autoplay:true,
              autoplayTimeout:4000,
              autoplayHoverPause:true,
              smartSpeed:1200,
              lazyLoad:true,
              items:1
          })
        }


        // ------------------------------- Testimonial Slider Two
        var tSlider = jQuery(".sidebar-partner-slider");
        if(tSlider.length) {
            tSlider.owlCarousel({
              loop:true,
              nav:false,
              dots:false,
              autoplay:true,
              autoplayTimeout:4000,
              autoplayHoverPause:true,
              smartSpeed:1200,
              lazyLoad:true,
              items:1,
          })
        }


        // -------------------------------  Related Project Slider
        var pSlider = jQuery(".related-product-slider");
          if(pSlider.length) {
              pSlider.owlCarousel({
                loop:true,
                nav:false,
                dots:false,
                autoplay:true,
                autoplayTimeout:4000,
                autoplaySpeed:1000,
                lazyLoad:true,
                smartSpeed:1000,
                responsive:{
                    0:{
                        items:1
                    },
                    550:{
                        items:2
                    },
                    1200:{
                        items:3
                    }
                }
            })
          }



          // --------------------------------- Contact Form Validation
          if(jQuery('.form-validation').length){
            jQuery('.form-validation').validate({ // initialize the plugin
              rules: {
                name: {
                  required: true
                },
                email: {
                  required: true,
                  email: true
                },
                sub: {
                  required: true
                },
                message: {
                  required: true
                }
              },
            submitHandler: function(form) {
              $(form).ajaxSubmit({
                success: function() {
                  jQuery('.form-validation :input').attr('disabled', 'disabled');
                  jQuery('.form-validation').fadeTo( "slow", 1, function() {
                      jQuery(this).find(':input').attr('disabled', 'disabled');
                      jQuery(this).find('label').css('cursor','default');
                      jQuery('#alert-success').fadeIn();
                    });
                  },
                  error: function() {
                    jQuery('.form-validation').fadeTo( "slow", 1, function() {
                      jQuery('#alert-error').fadeIn();
                    });
                  }
                });
              }
            });
          }


          // ---------------------------------- Validation Alert
          var closeButton = jQuery(".closeAlert");
            if(closeButton.length) {
                closeButton.on('click', function(){
                  jQuery(".alert-wrapper").fadeOut();
                });
                closeButton.on('click', function(){
                  jQuery(".alert-wrapper").fadeOut();
                })
            }


          // -------------------------------- Accordion Panel
          if (jQuery('.theme-accordion > .panel').length) {
            jQuery('.theme-accordion > .panel').on('show.bs.collapse', function (e) {
                  var heading = jQuery(this).find('.panel-heading');
                  heading.addClass("active-panel");
                  
            });
            jQuery('.theme-accordion > .panel').on('hidden.bs.collapse', function (e) {
                var heading = jQuery(this).find('.panel-heading');
                  heading.removeClass("active-panel");
                  //setProgressBar(heading.get(0).id);
            });
            jQuery('.panel-heading a').on('click',function(e){
                if(jQuery(this).parents('.panel').children('.panel-collapse').hasClass('in')){
                    e.stopPropagation();
                }
            });
          };


          // ----------------------------- Shop Page Quantity Function
          var inputVal = jQuery("#product-value");
          if(inputVal.length) {
            jQuery("#value-decrease").on ('click', function (){
                var v= inputVal.val()-1;
                if(v>=inputVal.attr('min'))
                inputVal.val(v)
              });

              jQuery("#value-increase").on('click', function (){
              var v= inputVal.val()*1+1;
              if(v<=inputVal.attr('max'))
              inputVal.val(v)
            });
          }
        

        
    });
    
    jQuery(window).on ('load', function ($){ // makes sure the whole site is loaded

        // -------------------- Site Preloader
        jQuery('#loader').fadeOut(); // will first fade out the loading animation
        jQuery('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        jQuery('body').delay(350).css({'overflow':'visible'});
    })
    
})(jQuery)
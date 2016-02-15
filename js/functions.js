// If JavaScript is enabled remove 'no-js' class and give 'js' class
jQuery('html').removeClass('no-js').addClass('js');

// Add .osx class to html if on Os/x
if ( navigator.appVersion.indexOf("Mac")!=-1 ) 
	jQuery('html').addClass('osx');

// When DOM is fully loaded
jQuery(document).ready(function($) {
  "use strict";


/* --------------------------------------------------------	
	 External Links
   --------------------------------------------------------	*/	

	  $(window).load(function() {
			$('a[rel=external]').attr('target','_blank');	
		});

/* --------------------------------------------------------	
	 Tooltips
   --------------------------------------------------------	*/	

    $('body').tooltip({
        delay: { show: 300, hide: 0 },
        selector: '[data-toggle=tooltip]:not([disabled])'
    });
    
/* --------------------------------------------------------	
	 Back To Top
   --------------------------------------------------------	*/	
    
		$('.back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		}); 
          
/* --------------------------------------------------------	
	 Dynamic Progress Bar
   --------------------------------------------------------	*/

    $(window).load(function(){    
      $('.progress-bar').css('width',  function(){ return ($(this).attr('data-percentage')+'%')});
    });

/* --------------------------------------------------------	
	 Back To Top Button
   --------------------------------------------------------	*/	

	(function() {   
  		$('<a id="back-to-top"></a>').appendTo($('body'));

			$(window).scroll(function() {
				if($(this).scrollTop() != 0) {
					$('#back-to-top').fadeIn();	
				} else {
					$('#back-to-top').fadeOut();
				}
			});
			
			$('#back-to-top').click(function() {
				$('body,html').animate({scrollTop:0},800);
			});


      $('.goes-to').click(function(){
        var elName = $(this).attr('href');
        var elOffset = $(elName).offset();
        console.log('TOP to ===>'+elOffset.top);
        $('body,html').animate({scrollTop:elOffset.top},900);
        return 0;
      });
	})();  

/* --------------------------------------------------------	
	 TinyNav
   --------------------------------------------------------	*/	
 
  $(function () {
    $("#nav").tinyNav();
  });

  $('html').addClass('js');

/* --------------------------------------------------------	
	 Magnific Popup
   --------------------------------------------------------	*/ 

  $('.image-link').magnificPopup({type:'image'});

	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
          
/* --------------------------------------------------------	
	 Portfolio 
   --------------------------------------------------------	*/	
  
  (function() {
   
    $(window).load(function(){
    	// container
    	var $container = $('#portfolio-items');
    	function filter_projects(tag)
    	{
    	  // filter projects
    	  $container.isotope({ filter: tag });
    	  // clear active class
    	  $('li.act').removeClass('act');
    	  // add active class to filter selector
    	  $('#portfolio-filter').find("[data-filter='" + tag + "']").parent().addClass('act');
    	}
    	if ($container.length) {
    		// conver data-tags to classes
    		$('.project').each(function(){
    			var $this = $(this);
    			var tags = $this.data('tags');
    			if (tags) {
    				var classes = tags.split(',');
    				for (var i = classes.length - 1; i >= 0; i--) {
    					$this.addClass(classes[i]);
    				};
    			}
    		})
    		// initialize isotope
    		$container.isotope({
    		  // options...
    		  itemSelector : '.project',
    		  layoutMode   : 'fitRows'
    		});
    		// filter items
    		$('#portfolio-filter li a').click(function(){
    			var selector = $(this).attr('data-filter');
    			filter_projects(selector);
    			return false;
    		});
    		// filter tags if location.has is available. e.g. http://example.com/work.html#design will filter projects within this category
    		if (window.location.hash!='')
    		{
    			filter_projects( '.' + window.location.hash.replace('#','') );
    		}
    	}
      
    })

	})();     
  
/* --------------------------------------------------------	
	 Parallax
   --------------------------------------------------------	*/	

  var detectmob = false;	
  if(navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {							
      detectmob = true;
  }
  
  if (detectmob === true) {
    $( '.parallax' ).each(function(){
  			$(this).addClass('parallax-mobile');
  	});
  }
  else {
      $( '#parallax-one' ).parallax();
      $( '#parallax-two' ).parallax();
      $( '#parallax-three' ).parallax();
      $( '#parallax-four' ).parallax();
      $( '#parallax-five' ).parallax();
  }  

/* --------------------------------------------------------	
	 Flex Initialize
   --------------------------------------------------------	*/	

  $(window).load(function() {
  
    $('.flex-1').flexslider({
      animation: "slide",
      slideshow: false,
      useCSS : false,
      animationLoop: true 	
    });
   
    jQuery('.flex-1 .flex-direction-nav .flex-next').html('<i class="fa fa-angle-right"></i>');
    jQuery('.flex-1 .flex-direction-nav .flex-prev').html('<i class="fa fa-angle-left"></i>'); 
   
    $('.flex-2').flexslider({
      animationLoop: false,
  		animation: 'slide',
      useCSS : false
  	 });     
  
    $('.flex-3').flexslider({
      animation: "slide",
      slideshow: false,
      useCSS : false,
      animationLoop: false 	
    });
   
    jQuery('.flex-3 .flex-direction-nav .flex-next').html('<i class="fa fa-angle-right"></i>');
    jQuery('.flex-3 .flex-direction-nav .flex-prev').html('<i class="fa fa-angle-left"></i>'); 
  
    $('.flex-4').flexslider({
      animationLoop: false,
  		animation: 'slide',
      slideshow: false,
      useCSS : false
  	 }); 
  
  }); 

/* --------------------------------------------------------	
	 Fitvids
   --------------------------------------------------------	*/	

  $(window).load(function() {
    $("body").fitVids();
  });

/* --------------------------------------------------------	
	 LayerSlider
   --------------------------------------------------------	*/

  // Running the code when the document is ready
  $(document).ready(function(){
  
    // Calling LayerSlider on the target element
    $('#layerslider').layerSlider({

            firstLayer: 1,
            skin: 'v5',
            skinsPath: 'layerslider/skins/'

    });
  });
        
/* --------------------------------------------------------	
	 Contact Form
   --------------------------------------------------------	*/
	
	$('#send').click(function(){ // when the button is clicked the code executes
		$('.error').fadeOut('slow'); // reset the error messages (hides them)

		var error = false; // we will set this true if the form isn't valid

		var name = $('input#name2').val(); // get the value of the input field
		if(name == "" || name == " " || name == "Name") {
    $('#err-name').show(500);
    $('#err-name').delay(4000);
    $('#err-name').animate({
      height: 'toggle'  
    }, 500, function() {
      // Animation complete.
    }); 
      error = true; // change the error state to true
		}

		var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
		var email = $('input#email2').val().toLowerCase(); // get the value of the input field
		if (email == "" || email == " " || email == "E-mail") { // check if the field is empty
			$('#err-email').fadeIn('slow'); // error - empty
			error = true;
		}else if (!email_compare.test(email)) { // if it's not empty check the format against our email_compare variable

    $('#err-emailvld').show(500);
    $('#err-emailvld').delay(4000);
    $('#err-emailvld').animate({
      height: 'toggle'  
    }, 500, function() {
      // Animation complete.
    });         
			error = true;
		}
    
		var message = $('textarea#message2').val(); // get the value of the input field
		if(message == "" || message == " " || message == "Message") {

      
    $('#err-message').show(500);
    $('#err-message').delay(4000);
    $('#err-message').animate({
      height: 'toggle'  
    }, 500, function() {
      // Animation complete.
    });            
			error = true; // change the error state to true
		} 

		if(error == true) {

    $('#err-form').show(500);
    $('#err-form').delay(4000);
    $('#err-form').animate({
      height: 'toggle'  
    }, 500, function() {
      // Animation complete.
    });         
			return false;
		}

		var data_string = $('#ajax-form').serialize(); // Collect data from form
		//alert(data_string);

		$.ajax({
			type: "POST",
			url: $('#ajax-form').attr('action'),
			data: data_string,
			timeout: 6000,
			error: function(request,error) {
				if (error == "timeout") {
					$('#err-timedout').slideDown('slow');
				}
				else {
					$('#err-state').slideDown('slow');
					$("#err-state").html('An error occurred: ' + error + '');
				}
			},
			success: function() {
                    
    $('#ajaxsuccess').show(500);
    $('#ajaxsuccess').delay(4000);
    $('#ajaxsuccess').animate({
      height: 'toggle'  
    }, 500, function() {
    });           

        $("#name").val('');
        $("#email").val('');
        $("#message").val('');
			}
		});

		return false; // stops user browser being directed to the php file
	}); // end click function
  
  


});
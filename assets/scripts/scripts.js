jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function($){// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery('.accordion p:empty, .orbit p:empty').remove();// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){if(jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5){jQuery(this).wrap("<div class='widescreen responsive-embed'/>");}else{jQuery(this).wrap("<div class='responsive-embed'/>");}});

	/*  target _blank bei externen Links */

	$("section a[href^='http://'], section a[href^='https://']").not("[href*='"+location.host+"']").attr("target","_blank");
	
	// zusätzlich noch Icon: .addClass('linkIcon type_external')

	/* link Icons */
		
	$("section a").each(function(){
	  var match = this.href.match(/\.([a-zA-Z0-9]{2,4})([#;?]|$)/);
	  if(match){
	      $(this).addClass("linkIcon type_" + match[1]).attr("target","_blank");
	  }
	});	
	
	/* scroll to anchor */
	$('.nav a[href^="#"]').on('click',function (e) {
	//  e.preventDefault();
	
	  var target = this.hash;
	  var $target = $(target);
	
	  $('html, body').stop().animate({
	      'scrollTop': $target.offset().top
	  }, 900, 'swing', function () {
	      window.location.hash = target;
	  });
	});
	
	/* to top */
	
	var amountScrolled = 300;
	
	$(window).scroll(function() {
	    if ( $(window).scrollTop() > amountScrolled ) {
	        $('a.to-top').fadeIn('slow');
	    } else {
	        $('a.to-top').fadeOut('slow');
	    }
	});
	
	$('a.to-top').click(function() {
	    $('html, body').animate({
	        scrollTop: 0
	    }, 700);
	    return false;
	});
	
	/* mobile Trigger */
	
	$(".mobileMenuTrigger").click(function(){
		$(".mobileMenu").slideToggle();
	});

});




"use strict";



jQuery( document ).ready(function( $ ) {
	$.noConflict();

/* Naviagation*/
  var o = document.getElementsByName("buttonNav");
  $("#navbarbutton").click(function() {
    console.log("Clicked Button");

        $(".navbar-collapse").toggleClass("customNavbar");
        $(".navbar-collapse").toggleClass("buttonNavbar");
  });

  $("navbar-collapse ul li").click(function() {
        $("navbar-collapse ul li").slideUp();
        $(this).find('navbar-collapse ul li a').slideToggle();
  });

  $(window).resize(function() {
        if($(window).width() > 768) {
              $("navbar-collapse ul").removeAttr('style');
        }
  });

	/*** Auto height function ***/
	var setElementHeight = function () {
		var height = $(window).height();
		var width = $(window).width();
		var tabletWidth = 768 +1 ;

/* Index fullsize video */
		if(width < tabletWidth){
				$('.autoheight').css('min-height', (height/1.5));
		} else {
				$('.autoheight').css('min-height', (height));
		}

    /* Navbar */
    		if(width < tabletWidth){
    			  $("#navLogoDiv").addClass("col-sm-offset-3");
            $("#navMenuDiv").addClass("col-sm-offset-3");

    		} else {
          $("#navLogoDiv").removeClass("col-sm-offset-3");
    			  //$(".navbar-collapse").toggleClass("customNavbar");
    		}


	};

	$(window).on("resize", function () {
		setElementHeight();
	}).resize();

});

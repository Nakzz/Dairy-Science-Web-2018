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
						//$("#navLogoDiv").addClass("col-xs-offset-2");
            //$("#navMenuDiv").addClass("col-sm-offset-3");

    		} else {
          $("#navLogoDiv").removeClass("col-sm-offset-3");
					//$("#navLogoDiv").removeClass("col-xs-offset-2");
    			  //$(".navbar-collapse").toggleClass("customNavbar");
    		}

				/* Webnote */
		    		if(width < tabletWidth){
							$("#contactWebnote").removeClass("col-sm-5");
		    			  $("#contactWebnote").addClass(" col-sm-12");
								//$("#navLogoDiv").addClass("col-xs-offset-2");
		            //$("#navMenuDiv").addClass("col-sm-offset-3");

		    		} else {
								$("#contactWebnote").removeClass(" col-sm-12");
							$("#contactWebnote").addClass("col-sm-5");

							//$("#navLogoDiv").removeClass("col-xs-offset-2");
		    			  //$(".navbar-collapse").toggleClass("customNavbar");
		    		}

	};

	$(window).on("resize", function () {
		setElementHeight();
	}).resize();


	// Show video on tools page.
  $('div.media-body .link').click(function (event) {
    var media_body = $(event.target).parents('div.media-body');
    var a = $(media_body).find('a.video_link');
    var video_link = $(a).attr('href');
    var iframe = $(media_body).find('iframe.video');
    if ($(iframe).attr('src') == '') {
      $(iframe).attr('src', video_link);
      $(iframe).wrap('<div class="flex-video widescreen"></div>');
    }
    if (!$(iframe).is(':visible')) {
      iframe.show();
      $(iframe).parent().show();
    } else {
      $(iframe).hide();
      $(iframe).parent().hide();
    }
  });

	$('#link').click(function () {
	  var src = 'http://www.youtube.com/embed/PX1alKkHObQ?rel=0';
	  $('#feedval').modal('show');
	  $('#feedval iframe').attr('src', src);
	});

	$('#feedval button').click(function () {
	  $('#feedval iframe').removeAttr('src');
	});



});

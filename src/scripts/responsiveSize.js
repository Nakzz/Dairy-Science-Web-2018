"use strict";



jQuery(document).ready(function ($) {
	$.noConflict();

	echo.init({
		offset: 100,
		throttle: 250,
		unload: false,
		callback: function (element, op) {
			if (DEBUG == 1) {
				console.log(element, 'has been', op + 'ed')
			}

		}
	});
	/* Naviagation*/

	var srcArray = [];

	jQuery('.stellarnav').stellarNav({
		theme: 'transparentAJ'

	});

	var o = document.getElementsByName("buttonNav");
	$("#navbarbutton").click(function () {
		console.log("Clicked Button");

		$(".navbar-collapse").toggleClass("customNavbar");
		$(".navbar-collapse").toggleClass("buttonNavbar");
	});

	$("navbar-collapse ul li").click(function () {
		$("navbar-collapse ul li").slideUp();
		$(this).find('navbar-collapse ul li a').slideToggle();
	});

	$(window).resize(function () {
		if ($(window).width() > 768) {
			$("navbar-collapse ul").removeAttr('style');
		}
	});

	/*** Auto height function ***/
	var setElementHeight = function () {
		var height = $(window).height();
		var width = $(window).width();
		var tabletWidth = 768 + 1;
		var smallPhoneWidth = 426 + 1;

		//profile pic padding
		var pad = ($("#features").height() - $("#profilePic").height())/2.3;


		/* Index fullsize video */
		if (width < tabletWidth) {
			// $('.autoheight').css('min-height', (height/1.5));
			$('.autoheight').css('min-height', (height));
			$('#Video1').css('left', ("-40%"));
			$("#profilePic").css("padding-top",  "60px");

		} else {
			$('.autoheight').css('min-height', (height));
			$('#Video1').css('left', ("0"));
			$("#profilePic").css("padding-top", pad + "px");


		}

		/* Navbar */
		if (width < tabletWidth) {
			$("#navLogoDiv").addClass("col-sm-offset-3");

		} else {
			$("#navLogoDiv").removeClass("col-sm-offset-3");
		}

		if (width < smallPhoneWidth) {
			$("#navLogoDiv").addClass("col-xs-offset-1");




		} else {
			$("#navLogoDiv").removeClass("col-xs-offset-1");

		}

		/* Webnote */
		if (width < tabletWidth) {
			$("#contactWebnote").removeClass("col-sm-5");
			$("#contactWebnote").addClass(" col-sm-12");

		} else {
			$("#contactWebnote").removeClass(" col-sm-12");
			$("#contactWebnote").addClass("col-sm-5");
		}

	};


	// This function switches videos according to size of the screen.
	var responsiveVideo = function () {
		var height = $(window).height();
		var width = $(window).width();
		var tabletWidth = 768 + 1;
		var smallPhoneWidth = 426 + 1;

		/* fullsize video file name */
		if (width < smallPhoneWidth) {
			//from large screen to mobile device



			$("#sec_1").css("display", "none");
			$("#sec_2").css("display", "block");

			console.log("#sec_1 hidden");
			// var currSrc = "";

			// if (srcArray.length == 0) {
			// 	currSrc = $('#Video1').find('Source:first').attr('src');
			// 	srcArray.unshift(currSrc);
			// } else {
			// 	currSrc = srcArray[0];
			// }

			// var x = currSrc.search("smaller/");

			// if (x < 0) {
			// var n = currSrc.search("full_screen_video/");
			// 	var firstPart = currSrc.substring(0, n + 17) + "/smaller";
			// 	var secondPart = currSrc.substring(n + 17, currSrc.length)

			// 	// console.log(firstPart)
			// 	// console.log(secondPart)
			// 	var newSrc = firstPart + secondPart;
			// // console.log(newSrc);
			// } else {
			// 	newSrc = currSrc;
			// }	
			// $('#Video1').attr('src', newSrc);
			// $('#Video1').get(0).load();

		} else {
			//from mobile device to large screen
	var currSrc = "";

$("#sec_1").css("display", "block");
$("#sec_2").css("display", "none");

console.log("#sec_2 hidden");
	// if (srcArray.length == 0) {
	// 	currSrc = $('#Video1').find('Source:first').attr('src');
	// 	srcArray.unshift(currSrc);
	// } else {
	// 	currSrc = srcArray[0];
	// }

	// var n = currSrc.search("smaller/");

	// // console.log(currSrc)
	// // console.log(n)

	// if (n < 0) {
	// 	// console.log("Already in large screen mode!")
	// 	newSrc = currSrc;
	// } else {
	// 	var firstPart = currSrc.substring(0, n) + "";
	// 	var secondPart = currSrc.substring(n + 8, currSrc.length)

	// 	// console.log(firstPart)
	// 	// console.log(secondPart)
	// 	var newSrc = firstPart + secondPart;
	// }

	// // console.log(newSrc);

	// $('#Video1').attr('src', newSrc);
	// $('#Video1').get(0).load();


		}

	};


	//Change images based on size of the window
	var responsiveSlider = function () {
		var height = $(window).height();
		var width = $(window).width();
		var tabletWidth = 768 + 1;
		var smallPhoneWidth = 426 + 1;

		/* fullsize video file name */
		if (width < smallPhoneWidth) {
			//from large screen to mobile device

			liList = $('#slippry-slide').find('li');

			for (var i = 0; i < liList.length; i++) {

				var currSrc = $(liList[i]).find('img').attr("src");
				// console.log(currSrc);

				var n = currSrc.search("slider/");
				var x = currSrc.search("phones");
				if (x < 0) {
					var firstPart = currSrc.substring(0, n) + "slider/phones";
					var secondPart = currSrc.substring(n + 6, currSrc.length)

					var newSrc = firstPart + secondPart;
				} else {
					// console.log("x: ", x, " Already in small res");
				}
				// console.log(newSrc);

				$(liList[i]).find('img').attr('src', newSrc);

			}

		} else {
			//from mobile device to large screen
			liList = $('#slippry-slide').find('li');

			for (var i = 0; i < liList.length; i++) {

			  var currSrc = $(liList[i]).find('img').attr("src");
			//   console.log(currSrc);

			  var n = currSrc.search("phones/");

			  if(n > 0){
			    var firstPart = currSrc.substring(0, n);
			    var secondPart = currSrc.substring(n+7, currSrc.length )

			    var newSrc = firstPart + secondPart;
			  } else {
			    // console.log("n: ", n, " Already big res");

			  }

			//       console.log(newSrc);

			 $(liList[i]).find('img').attr('src', newSrc);

			}

		}

	};

	$(window).on("resize", function () {
		setElementHeight();

		if (typeof pageName !== 'undefined') {
			// the variable is defined
			if (pageName == "Home") {
				responsiveVideo();
			} 
			if (pageName == "Slider") {
				responsiveSlider();
			}
		}

		
		
	}).resize();


	// Show video on tools page.
	$('div.media').click(function (event) {
		var media_body = $(event.target).parents('div.media');
		var a = $(media_body).find('a.video_link');
		var video_link = $(a).attr('href');

		var iframe = $(media_body).find('iframe.video');

		if (!$(iframe).is(':visible')) {
			iframe.show();
			$(iframe).parent().show();
		} else {
			$(iframe).hide();
			//$(iframe).parent().hide();
		}

		if ($(iframe).attr('src') == '') {
			$(iframe).attr('src', video_link);
			$(iframe).wrap('<div class="flex-video row"><div class="col-sm-10 offset-sm-1"></div></div>');
			iframe.show();
			$(iframe).parent().show();
		}


	});




});

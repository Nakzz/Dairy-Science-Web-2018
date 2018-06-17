/*PrettyPhoto*/
$(document).ready(function(){
$("area[data-hez^='prettyPhoto']").prettyPhoto({hook:'data-hez'});
$(".gallery:first a[data-hez^='prettyPhoto']").prettyPhoto({hook:'data-hez',animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
//$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({hook:'data-hez',animation_speed:'fast',slideshow:10000, hideflash: true});

//$("area[rel^='prettyPhoto']").prettyPhoto();

$(function() {
    $("img.lazy").lazyload();
});

});




			
// /*LIGHT BOX 1*/
// $(function() {$(".gallery a[data-rel^='hezebox']").lightbox(); });
// /*LIGHT BOX 2*/
// $(function() {$(".gallery a[data-rel^='hezebox']").lightbox(); });


//  $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
//  event.preventDefault();
// return $(this).ekkoLightbox({
// onShown: function() {
//  if (window.console) {
//     return console.log('Checking our the events huh?');
//    }
//  }
//   });
// });
/*SLIDER*/
 $(window).load(function() {
	 if($('.flexslider').length)
    $('.flexslider').flexslider();
  });


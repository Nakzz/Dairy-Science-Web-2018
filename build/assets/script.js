function toggleShow(){document.getElementById("SlideOnClick").classList.toggle("hideDiv")}function vidplay(){var e=document.getElementById("Video1");e.paused?e.play():e.pause()}
"use strict";jQuery(document).ready(function(n){n.noConflict();document.getElementsByName("buttonNav");n("#navbarbutton").click(function(){console.log("Clicked Button"),n(".navbar-collapse").toggleClass("customNavbar"),n(".navbar-collapse").toggleClass("buttonNavbar")}),n("navbar-collapse ul li").click(function(){n("navbar-collapse ul li").slideUp(),n(this).find("navbar-collapse ul li a").slideToggle()}),n(window).resize(function(){768<n(window).width()&&n("navbar-collapse ul").removeAttr("style")});n(window).on("resize",function(){var e,o;e=n(window).height(),(o=n(window).width())<769?n(".autoheight").css("min-height",e/1.5):n(".autoheight").css("min-height",e),o<769?n("#navLogoDiv").addClass("col-sm-offset-3"):n("#navLogoDiv").removeClass("col-sm-offset-3"),o<769?(n("#contactWebnote").removeClass("col-sm-5"),n("#contactWebnote").addClass(" col-sm-12")):(n("#contactWebnote").removeClass(" col-sm-12"),n("#contactWebnote").addClass("col-sm-5"))}).resize(),n("div.media-body .link").click(function(e){var o=n(e.target).parents("div.media-body"),a=n(o).find("a.video_link"),t=n(a).attr("href"),i=n(o).find("iframe.video");""==n(i).attr("src")&&(n(i).attr("src",t),n(i).wrap('<div class="flex-video widescreen"></div>')),n(i).is(":visible")?(n(i).hide(),n(i).parent().hide()):(i.show(),n(i).parent().show())})});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsInJlc3BvbnNpdmVTaXplLmpzIl0sIm5hbWVzIjpbInRvZ2dsZVNob3ciLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwidmlkcGxheSIsInZpZGVvIiwicGF1c2VkIiwicGxheSIsInBhdXNlIiwialF1ZXJ5IiwicmVhZHkiLCIkIiwibm9Db25mbGljdCIsImdldEVsZW1lbnRzQnlOYW1lIiwiY2xpY2siLCJjb25zb2xlIiwibG9nIiwidG9nZ2xlQ2xhc3MiLCJzbGlkZVVwIiwidGhpcyIsImZpbmQiLCJzbGlkZVRvZ2dsZSIsIndpbmRvdyIsInJlc2l6ZSIsIndpZHRoIiwicmVtb3ZlQXR0ciIsIm9uIiwiaGVpZ2h0IiwiY3NzIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImV2ZW50IiwibWVkaWFfYm9keSIsInRhcmdldCIsInBhcmVudHMiLCJhIiwidmlkZW9fbGluayIsImF0dHIiLCJpZnJhbWUiLCJ3cmFwIiwiaXMiLCJoaWRlIiwicGFyZW50Iiwic2hvdyJdLCJtYXBwaW5ncyI6IkFBQUEsU0FBU0EsYUFDUUMsU0FBU0MsZUFBZSxnQkFFNUJDLFVBQVVDLE9BQU8sV0FJeEIsU0FBU0MsVUFDTixJQUFJQyxFQUFRTCxTQUFTQyxlQUFlLFVBRWhDSSxFQUFNQyxPQUNQRCxFQUFNRSxPQUVORixFQUFNRztBQ2JsQixhQUlBQyxPQUFRVCxVQUFXVSxNQUFNLFNBQVVDLEdBQ2xDQSxFQUFFQyxhQUdPWixTQUFTYSxrQkFBa0IsYUFDbkNGLEVBQUUsaUJBQWlCRyxNQUFNLFdBQ3ZCQyxRQUFRQyxJQUFJLGtCQUVSTCxFQUFFLG9CQUFvQk0sWUFBWSxnQkFDbENOLEVBQUUsb0JBQW9CTSxZQUFZLGtCQUd4Q04sRUFBRSx5QkFBeUJHLE1BQU0sV0FDM0JILEVBQUUseUJBQXlCTyxVQUMzQlAsRUFBRVEsTUFBTUMsS0FBSywyQkFBMkJDLGdCQUc5Q1YsRUFBRVcsUUFBUUMsT0FBTyxXQUNZLElBQXBCWixFQUFFVyxRQUFRRSxTQUNQYixFQUFFLHNCQUFzQmMsV0FBVyxXQThDaERkLEVBQUVXLFFBQVFJLEdBQUcsU0FBVSxXQXpDQSxJQUNsQkMsRUFDQUgsRUFEQUcsRUFBU2hCLEVBQUVXLFFBQVFLLFVBQ25CSCxFQUFRYixFQUFFVyxRQUFRRSxTQUNKLElBSWhCYixFQUFFLGVBQWVpQixJQUFJLGFBQWVELEVBQU8sS0FFM0NoQixFQUFFLGVBQWVpQixJQUFJLGFBQWMsR0FJOUJKLEVBVlcsSUFXWGIsRUFBRSxlQUFla0IsU0FBUyxtQkFLekJsQixFQUFFLGVBQWVtQixZQUFZLG1CQU01Qk4sRUF0QlMsS0F1QmJiLEVBQUUsbUJBQW1CbUIsWUFBWSxZQUM3Qm5CLEVBQUUsbUJBQW1Ca0IsU0FBUyxnQkFLakNsQixFQUFFLG1CQUFtQm1CLFlBQVksY0FDbENuQixFQUFFLG1CQUFtQmtCLFNBQVMsZUFVakNOLFNBSUZaLEVBQUUsd0JBQXdCRyxNQUFNLFNBQVVpQixHQUN4QyxJQUFJQyxFQUFhckIsRUFBRW9CLEVBQU1FLFFBQVFDLFFBQVEsa0JBQ3JDQyxFQUFJeEIsRUFBRXFCLEdBQVlaLEtBQUssZ0JBQ3ZCZ0IsRUFBYXpCLEVBQUV3QixHQUFHRSxLQUFLLFFBQ3ZCQyxFQUFTM0IsRUFBRXFCLEdBQVlaLEtBQUssZ0JBQ0gsSUFBekJULEVBQUUyQixHQUFRRCxLQUFLLFNBQ2pCMUIsRUFBRTJCLEdBQVFELEtBQUssTUFBT0QsR0FDdEJ6QixFQUFFMkIsR0FBUUMsS0FBSyw4Q0FFWjVCLEVBQUUyQixHQUFRRSxHQUFHLGFBSWhCN0IsRUFBRTJCLEdBQVFHLE9BQ1Y5QixFQUFFMkIsR0FBUUksU0FBU0QsU0FKbkJILEVBQU9LLE9BQ1BoQyxFQUFFMkIsR0FBUUksU0FBU0MiLCJmaWxlIjoic2NyaXB0LmpzIiwic291cmNlc0NvbnRlbnQiOlsiZnVuY3Rpb24gdG9nZ2xlU2hvdygpe1xyXG4gIHZhciB0YWdldERpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiU2xpZGVPbkNsaWNrXCIpO1xyXG5cclxuICAgIHRhZ2V0RGl2LmNsYXNzTGlzdC50b2dnbGUoXCJoaWRlRGl2XCIpO1xyXG59XHJcblxyXG5cclxuICAgICAgZnVuY3Rpb24gdmlkcGxheSgpIHtcclxuICAgICAgICAgdmFyIHZpZGVvID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJWaWRlbzFcIik7XHJcblxyXG4gICAgICAgICBpZiAodmlkZW8ucGF1c2VkKSB7XHJcbiAgICAgICAgICAgIHZpZGVvLnBsYXkoKTtcclxuICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgdmlkZW8ucGF1c2UoKTtcclxuICAgICAgICAgfVxyXG4gICAgICB9XHJcbiIsIlwidXNlIHN0cmljdFwiO1xyXG5cclxuXHJcblxyXG5qUXVlcnkoIGRvY3VtZW50ICkucmVhZHkoZnVuY3Rpb24oICQgKSB7XHJcblx0JC5ub0NvbmZsaWN0KCk7XHJcblxyXG4vKiBOYXZpYWdhdGlvbiovXHJcbiAgdmFyIG8gPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5TmFtZShcImJ1dHRvbk5hdlwiKTtcclxuICAkKFwiI25hdmJhcmJ1dHRvblwiKS5jbGljayhmdW5jdGlvbigpIHtcclxuICAgIGNvbnNvbGUubG9nKFwiQ2xpY2tlZCBCdXR0b25cIik7XHJcblxyXG4gICAgICAgICQoXCIubmF2YmFyLWNvbGxhcHNlXCIpLnRvZ2dsZUNsYXNzKFwiY3VzdG9tTmF2YmFyXCIpO1xyXG4gICAgICAgICQoXCIubmF2YmFyLWNvbGxhcHNlXCIpLnRvZ2dsZUNsYXNzKFwiYnV0dG9uTmF2YmFyXCIpO1xyXG4gIH0pO1xyXG5cclxuICAkKFwibmF2YmFyLWNvbGxhcHNlIHVsIGxpXCIpLmNsaWNrKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICQoXCJuYXZiYXItY29sbGFwc2UgdWwgbGlcIikuc2xpZGVVcCgpO1xyXG4gICAgICAgICQodGhpcykuZmluZCgnbmF2YmFyLWNvbGxhcHNlIHVsIGxpIGEnKS5zbGlkZVRvZ2dsZSgpO1xyXG4gIH0pO1xyXG5cclxuICAkKHdpbmRvdykucmVzaXplKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGlmKCQod2luZG93KS53aWR0aCgpID4gNzY4KSB7XHJcbiAgICAgICAgICAgICAgJChcIm5hdmJhci1jb2xsYXBzZSB1bFwiKS5yZW1vdmVBdHRyKCdzdHlsZScpO1xyXG4gICAgICAgIH1cclxuICB9KTtcclxuXHJcblx0LyoqKiBBdXRvIGhlaWdodCBmdW5jdGlvbiAqKiovXHJcblx0dmFyIHNldEVsZW1lbnRIZWlnaHQgPSBmdW5jdGlvbiAoKSB7XHJcblx0XHR2YXIgaGVpZ2h0ID0gJCh3aW5kb3cpLmhlaWdodCgpO1xyXG5cdFx0dmFyIHdpZHRoID0gJCh3aW5kb3cpLndpZHRoKCk7XHJcblx0XHR2YXIgdGFibGV0V2lkdGggPSA3NjggKzEgO1xyXG5cclxuLyogSW5kZXggZnVsbHNpemUgdmlkZW8gKi9cclxuXHRcdGlmKHdpZHRoIDwgdGFibGV0V2lkdGgpe1xyXG5cdFx0XHRcdCQoJy5hdXRvaGVpZ2h0JykuY3NzKCdtaW4taGVpZ2h0JywgKGhlaWdodC8xLjUpKTtcclxuXHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0JCgnLmF1dG9oZWlnaHQnKS5jc3MoJ21pbi1oZWlnaHQnLCAoaGVpZ2h0KSk7XHJcblx0XHR9XHJcblxyXG4gICAgLyogTmF2YmFyICovXHJcbiAgICBcdFx0aWYod2lkdGggPCB0YWJsZXRXaWR0aCl7XHJcbiAgICBcdFx0XHQgICQoXCIjbmF2TG9nb0RpdlwiKS5hZGRDbGFzcyhcImNvbC1zbS1vZmZzZXQtM1wiKTtcclxuXHRcdFx0XHRcdFx0Ly8kKFwiI25hdkxvZ29EaXZcIikuYWRkQ2xhc3MoXCJjb2wteHMtb2Zmc2V0LTJcIik7XHJcbiAgICAgICAgICAgIC8vJChcIiNuYXZNZW51RGl2XCIpLmFkZENsYXNzKFwiY29sLXNtLW9mZnNldC0zXCIpO1xyXG5cclxuICAgIFx0XHR9IGVsc2Uge1xyXG4gICAgICAgICAgJChcIiNuYXZMb2dvRGl2XCIpLnJlbW92ZUNsYXNzKFwiY29sLXNtLW9mZnNldC0zXCIpO1xyXG5cdFx0XHRcdFx0Ly8kKFwiI25hdkxvZ29EaXZcIikucmVtb3ZlQ2xhc3MoXCJjb2wteHMtb2Zmc2V0LTJcIik7XHJcbiAgICBcdFx0XHQgIC8vJChcIi5uYXZiYXItY29sbGFwc2VcIikudG9nZ2xlQ2xhc3MoXCJjdXN0b21OYXZiYXJcIik7XHJcbiAgICBcdFx0fVxyXG5cclxuXHRcdFx0XHQvKiBXZWJub3RlICovXHJcblx0XHQgICAgXHRcdGlmKHdpZHRoIDwgdGFibGV0V2lkdGgpe1xyXG5cdFx0XHRcdFx0XHRcdCQoXCIjY29udGFjdFdlYm5vdGVcIikucmVtb3ZlQ2xhc3MoXCJjb2wtc20tNVwiKTtcclxuXHRcdCAgICBcdFx0XHQgICQoXCIjY29udGFjdFdlYm5vdGVcIikuYWRkQ2xhc3MoXCIgY29sLXNtLTEyXCIpO1xyXG5cdFx0XHRcdFx0XHRcdFx0Ly8kKFwiI25hdkxvZ29EaXZcIikuYWRkQ2xhc3MoXCJjb2wteHMtb2Zmc2V0LTJcIik7XHJcblx0XHQgICAgICAgICAgICAvLyQoXCIjbmF2TWVudURpdlwiKS5hZGRDbGFzcyhcImNvbC1zbS1vZmZzZXQtM1wiKTtcclxuXHJcblx0XHQgICAgXHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0XHRcdFx0XHQkKFwiI2NvbnRhY3RXZWJub3RlXCIpLnJlbW92ZUNsYXNzKFwiIGNvbC1zbS0xMlwiKTtcclxuXHRcdFx0XHRcdFx0XHQkKFwiI2NvbnRhY3RXZWJub3RlXCIpLmFkZENsYXNzKFwiY29sLXNtLTVcIik7XHJcblxyXG5cdFx0XHRcdFx0XHRcdC8vJChcIiNuYXZMb2dvRGl2XCIpLnJlbW92ZUNsYXNzKFwiY29sLXhzLW9mZnNldC0yXCIpO1xyXG5cdFx0ICAgIFx0XHRcdCAgLy8kKFwiLm5hdmJhci1jb2xsYXBzZVwiKS50b2dnbGVDbGFzcyhcImN1c3RvbU5hdmJhclwiKTtcclxuXHRcdCAgICBcdFx0fVxyXG5cclxuXHR9O1xyXG5cclxuXHQkKHdpbmRvdykub24oXCJyZXNpemVcIiwgZnVuY3Rpb24gKCkge1xyXG5cdFx0c2V0RWxlbWVudEhlaWdodCgpO1xyXG5cdH0pLnJlc2l6ZSgpO1xyXG5cclxuXHJcblx0Ly8gU2hvdyB2aWRlbyBvbiB0b29scyBwYWdlLlxyXG4gICQoJ2Rpdi5tZWRpYS1ib2R5IC5saW5rJykuY2xpY2soZnVuY3Rpb24gKGV2ZW50KSB7XHJcbiAgICB2YXIgbWVkaWFfYm9keSA9ICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCdkaXYubWVkaWEtYm9keScpO1xyXG4gICAgdmFyIGEgPSAkKG1lZGlhX2JvZHkpLmZpbmQoJ2EudmlkZW9fbGluaycpO1xyXG4gICAgdmFyIHZpZGVvX2xpbmsgPSAkKGEpLmF0dHIoJ2hyZWYnKTtcclxuICAgIHZhciBpZnJhbWUgPSAkKG1lZGlhX2JvZHkpLmZpbmQoJ2lmcmFtZS52aWRlbycpO1xyXG4gICAgaWYgKCQoaWZyYW1lKS5hdHRyKCdzcmMnKSA9PSAnJykge1xyXG4gICAgICAkKGlmcmFtZSkuYXR0cignc3JjJywgdmlkZW9fbGluayk7XHJcbiAgICAgICQoaWZyYW1lKS53cmFwKCc8ZGl2IGNsYXNzPVwiZmxleC12aWRlbyB3aWRlc2NyZWVuXCI+PC9kaXY+Jyk7XHJcbiAgICB9XHJcbiAgICBpZiAoISQoaWZyYW1lKS5pcygnOnZpc2libGUnKSkge1xyXG4gICAgICBpZnJhbWUuc2hvdygpO1xyXG4gICAgICAkKGlmcmFtZSkucGFyZW50KCkuc2hvdygpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgJChpZnJhbWUpLmhpZGUoKTtcclxuICAgICAgJChpZnJhbWUpLnBhcmVudCgpLmhpZGUoKTtcclxuICAgIH1cclxuICB9KTtcclxuXHJcbn0pO1xyXG4iXX0=

function toggleShow(){document.getElementById("SlideOnClick").classList.toggle("hideDiv")}function vidplay(){var e=document.getElementById("Video1");e.paused?e.play():e.pause()}
"use strict";jQuery(document).ready(function(a){a.noConflict();document.getElementsByName("buttonNav");a("#navbarbutton").click(function(){console.log("Clicked Button"),a(".navbar-collapse").toggleClass("customNavbar"),a(".navbar-collapse").toggleClass("buttonNavbar")}),a("navbar-collapse ul li").click(function(){a("navbar-collapse ul li").slideUp(),a(this).find("navbar-collapse ul li a").slideToggle()}),a(window).resize(function(){768<a(window).width()&&a("navbar-collapse ul").removeAttr("style")});a(window).on("resize",function(){var o,e;o=a(window).height(),(e=a(window).width())<769?a(".autoheight").css("min-height",o/1.5):a(".autoheight").css("min-height",o),e<769?(a("#navLogoDiv").addClass("col-sm-offset-3"),a("#navMenuDiv").addClass("col-sm-offset-3")):a("#navLogoDiv").removeClass("col-sm-offset-3")}).resize()});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsInJlc3BvbnNpdmVTaXplLmpzIl0sIm5hbWVzIjpbInRvZ2dsZVNob3ciLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwidmlkcGxheSIsInZpZGVvIiwicGF1c2VkIiwicGxheSIsInBhdXNlIiwialF1ZXJ5IiwicmVhZHkiLCIkIiwibm9Db25mbGljdCIsImdldEVsZW1lbnRzQnlOYW1lIiwiY2xpY2siLCJjb25zb2xlIiwibG9nIiwidG9nZ2xlQ2xhc3MiLCJzbGlkZVVwIiwidGhpcyIsImZpbmQiLCJzbGlkZVRvZ2dsZSIsIndpbmRvdyIsInJlc2l6ZSIsIndpZHRoIiwicmVtb3ZlQXR0ciIsIm9uIiwiaGVpZ2h0IiwiY3NzIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyJdLCJtYXBwaW5ncyI6IkFBQUEsU0FBU0EsYUFDUUMsU0FBU0MsZUFBZSxnQkFFNUJDLFVBQVVDLE9BQU8sV0FJeEIsU0FBU0MsVUFDTixJQUFJQyxFQUFRTCxTQUFTQyxlQUFlLFVBRWhDSSxFQUFNQyxPQUNQRCxFQUFNRSxPQUVORixFQUFNRztBQ2JsQixhQUlBQyxPQUFRVCxVQUFXVSxNQUFNLFNBQVVDLEdBQ2xDQSxFQUFFQyxhQUdPWixTQUFTYSxrQkFBa0IsYUFDbkNGLEVBQUUsaUJBQWlCRyxNQUFNLFdBQ3ZCQyxRQUFRQyxJQUFJLGtCQUVSTCxFQUFFLG9CQUFvQk0sWUFBWSxnQkFDbENOLEVBQUUsb0JBQW9CTSxZQUFZLGtCQUd4Q04sRUFBRSx5QkFBeUJHLE1BQU0sV0FDM0JILEVBQUUseUJBQXlCTyxVQUMzQlAsRUFBRVEsTUFBTUMsS0FBSywyQkFBMkJDLGdCQUc5Q1YsRUFBRVcsUUFBUUMsT0FBTyxXQUNZLElBQXBCWixFQUFFVyxRQUFRRSxTQUNQYixFQUFFLHNCQUFzQmMsV0FBVyxXQThCaERkLEVBQUVXLFFBQVFJLEdBQUcsU0FBVSxXQXpCQSxJQUNsQkMsRUFDQUgsRUFEQUcsRUFBU2hCLEVBQUVXLFFBQVFLLFVBQ25CSCxFQUFRYixFQUFFVyxRQUFRRSxTQUNKLElBSWhCYixFQUFFLGVBQWVpQixJQUFJLGFBQWVELEVBQU8sS0FFM0NoQixFQUFFLGVBQWVpQixJQUFJLGFBQWMsR0FJOUJKLEVBVlcsS0FXWGIsRUFBRSxlQUFla0IsU0FBUyxtQkFDdkJsQixFQUFFLGVBQWVrQixTQUFTLG9CQUc1QmxCLEVBQUUsZUFBZW1CLFlBQVkscUJBU25DUCIsImZpbGUiOiJzY3JpcHQuanMiLCJzb3VyY2VzQ29udGVudCI6WyJmdW5jdGlvbiB0b2dnbGVTaG93KCl7XHJcbiAgdmFyIHRhZ2V0RGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJTbGlkZU9uQ2xpY2tcIik7XHJcblxyXG4gICAgdGFnZXREaXYuY2xhc3NMaXN0LnRvZ2dsZShcImhpZGVEaXZcIik7XHJcbn1cclxuXHJcblxyXG4gICAgICBmdW5jdGlvbiB2aWRwbGF5KCkge1xyXG4gICAgICAgICB2YXIgdmlkZW8gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIlZpZGVvMVwiKTtcclxuXHJcbiAgICAgICAgIGlmICh2aWRlby5wYXVzZWQpIHtcclxuICAgICAgICAgICAgdmlkZW8ucGxheSgpO1xyXG4gICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICB2aWRlby5wYXVzZSgpO1xyXG4gICAgICAgICB9XHJcbiAgICAgIH1cclxuIiwiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG5cclxuXHJcbmpRdWVyeSggZG9jdW1lbnQgKS5yZWFkeShmdW5jdGlvbiggJCApIHtcclxuXHQkLm5vQ29uZmxpY3QoKTtcclxuXHJcbi8qIE5hdmlhZ2F0aW9uKi9cclxuICB2YXIgbyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlOYW1lKFwiYnV0dG9uTmF2XCIpO1xyXG4gICQoXCIjbmF2YmFyYnV0dG9uXCIpLmNsaWNrKGZ1bmN0aW9uKCkge1xyXG4gICAgY29uc29sZS5sb2coXCJDbGlja2VkIEJ1dHRvblwiKTtcclxuXHJcbiAgICAgICAgJChcIi5uYXZiYXItY29sbGFwc2VcIikudG9nZ2xlQ2xhc3MoXCJjdXN0b21OYXZiYXJcIik7XHJcbiAgICAgICAgJChcIi5uYXZiYXItY29sbGFwc2VcIikudG9nZ2xlQ2xhc3MoXCJidXR0b25OYXZiYXJcIik7XHJcbiAgfSk7XHJcblxyXG4gICQoXCJuYXZiYXItY29sbGFwc2UgdWwgbGlcIikuY2xpY2soZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJChcIm5hdmJhci1jb2xsYXBzZSB1bCBsaVwiKS5zbGlkZVVwKCk7XHJcbiAgICAgICAgJCh0aGlzKS5maW5kKCduYXZiYXItY29sbGFwc2UgdWwgbGkgYScpLnNsaWRlVG9nZ2xlKCk7XHJcbiAgfSk7XHJcblxyXG4gICQod2luZG93KS5yZXNpemUoZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgaWYoJCh3aW5kb3cpLndpZHRoKCkgPiA3NjgpIHtcclxuICAgICAgICAgICAgICAkKFwibmF2YmFyLWNvbGxhcHNlIHVsXCIpLnJlbW92ZUF0dHIoJ3N0eWxlJyk7XHJcbiAgICAgICAgfVxyXG4gIH0pO1xyXG5cclxuXHQvKioqIEF1dG8gaGVpZ2h0IGZ1bmN0aW9uICoqKi9cclxuXHR2YXIgc2V0RWxlbWVudEhlaWdodCA9IGZ1bmN0aW9uICgpIHtcclxuXHRcdHZhciBoZWlnaHQgPSAkKHdpbmRvdykuaGVpZ2h0KCk7XHJcblx0XHR2YXIgd2lkdGggPSAkKHdpbmRvdykud2lkdGgoKTtcclxuXHRcdHZhciB0YWJsZXRXaWR0aCA9IDc2OCArMSA7XHJcblxyXG4vKiBJbmRleCBmdWxsc2l6ZSB2aWRlbyAqL1xyXG5cdFx0aWYod2lkdGggPCB0YWJsZXRXaWR0aCl7XHJcblx0XHRcdFx0JCgnLmF1dG9oZWlnaHQnKS5jc3MoJ21pbi1oZWlnaHQnLCAoaGVpZ2h0LzEuNSkpO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0XHQkKCcuYXV0b2hlaWdodCcpLmNzcygnbWluLWhlaWdodCcsIChoZWlnaHQpKTtcclxuXHRcdH1cclxuXHJcbiAgICAvKiBOYXZiYXIgKi9cclxuICAgIFx0XHRpZih3aWR0aCA8IHRhYmxldFdpZHRoKXtcclxuICAgIFx0XHRcdCAgJChcIiNuYXZMb2dvRGl2XCIpLmFkZENsYXNzKFwiY29sLXNtLW9mZnNldC0zXCIpO1xyXG4gICAgICAgICAgICAkKFwiI25hdk1lbnVEaXZcIikuYWRkQ2xhc3MoXCJjb2wtc20tb2Zmc2V0LTNcIik7XHJcblxyXG4gICAgXHRcdH0gZWxzZSB7XHJcbiAgICAgICAgICAkKFwiI25hdkxvZ29EaXZcIikucmVtb3ZlQ2xhc3MoXCJjb2wtc20tb2Zmc2V0LTNcIik7XHJcbiAgICBcdFx0XHQgIC8vJChcIi5uYXZiYXItY29sbGFwc2VcIikudG9nZ2xlQ2xhc3MoXCJjdXN0b21OYXZiYXJcIik7XHJcbiAgICBcdFx0fVxyXG5cclxuXHJcblx0fTtcclxuXHJcblx0JCh3aW5kb3cpLm9uKFwicmVzaXplXCIsIGZ1bmN0aW9uICgpIHtcclxuXHRcdHNldEVsZW1lbnRIZWlnaHQoKTtcclxuXHR9KS5yZXNpemUoKTtcclxuXHJcbn0pO1xyXG4iXX0=

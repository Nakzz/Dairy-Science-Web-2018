/*$(".hidepanel").on("click", function() {
    $("#panel3").parent().hide();
});*/
<!--POST FORM-->	
  $(document).ready(function()
{	
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip();
	});


    $('#msgSend').on('submit', function(e)
    {
        e.preventDefault();
        $('#msgButton').attr('disabled', '');
        $("#output").html('<div><i class="fa fa-spinner fa-spin fa-2x"></i> Processing...</div>');
        $(this).ajaxSubmit({
        target: '#output',
        success:  afterSuccess
        });
    });
});
 
function afterSuccess()
{
    $('#msgButton').removeAttr('disabled'); //enable submit button
} 




 $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        }
                    });
                });
				
				
				
$(document).ready(function(){
	$(".listmenus h3").click(function(){
		$(".listmenus ul ul").slideUp();
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})


<!--NOTIFICATION JS-->
$(function(){$.miniNotification=function(e,t){var n,r,i,s,o,u,a=this;this.defaults={position:"top",show:true,effect:"slide",opacity:.95,time:4e3,showSpeed:600,hideSpeed:450,showEasing:"",hideEasing:"",innerDivClass:"inner",closeButton:false,closeButtonText:"close",closeButtonClass:"close",hideOnClick:true,onLoad:function(){},onVisible:function(){},onHide:function(){},onHidden:function(){}};o="";this.settings={};this.$element=$(e);s=function(e){return o=e};r=function(){var e,t;t=a.getSetting("effect")==="slide"?0-a.$element.outerHeight():0;e={};if(a.getSetting("position")==="bottom"){e["bottom"]=t}else{e["top"]=t}if(a.getSetting("effect")==="fade"){e["opacity"]=0}return e};i=function(){var e;e={opacity:a.getSetting("opacity")};if(a.getSetting("position")==="bottom"){e["bottom"]=0}else{e["top"]=0}return e};u=function(){a.$elementInner=$("<div />",{"class":a.getSetting("innerDivClass")});return a.$element.wrapInner(a.$elementInner)};n=function(){var e;e=$("<a />",{"class":a.getSetting("closeButtonClass"),html:a.getSetting("closeButtonText")});a.$element.children().append(e);return e.bind("click",function(){return a.hide()})};this.getState=function(){return o};this.getSetting=function(e){return this.settings[e]};this.callSettingFunction=function(t){return this.settings[t](e)};this.init=function(){var e=this;s("hidden");this.settings=$.extend({},this.defaults,t);if(this.$element.length){u();if(this.getSetting("closeButton")){n()}this.$element.css(r()).css({display:"inline"});if(this.getSetting("show")){this.show()}if(this.getSetting("hideOnClick")){return this.$element.bind("click",function(){if(e.getState()!=="hiding"){return e.hide()}})}}};this.show=function(){var e=this;if(this.getState()!=="showing"&&this.getState()!=="visible"){s("showing");this.callSettingFunction("onLoad");return this.$element.animate(i(),this.getSetting("showSpeed"),this.getSetting("showEasing"),function(){s("visible");e.callSettingFunction("onVisible");return setTimeout(function(){return e.hide()},e.settings.time)})}};this.hide=function(){var e=this;if(this.getState()!=="hiding"&&this.getState()!=="hidden"){s("hiding");this.callSettingFunction("onHide");return this.$element.animate(r(),this.getSetting("hideSpeed"),this.getSetting("hideEasing"),function(){s("hidden");return e.callSettingFunction("onHidden")})}};this.init();return this};return $.fn.miniNotification=function(e){return this.each(function(){var t;t=$(this).data("miniNotification");if(t===void 0){t=new $.miniNotification(this,e);return $(this).data("miniNotification",t)}else{return t.show()}})}})

<!--CALL NOTIFICATION-->
		 $(function() {
        $('.heze-notify').miniNotification({closeButton: true, closeButtonText: '<i class="fa fa-times"></i>'});
      });
	  
		/*HTML DATA TABLE*/
		$(function () {
			$('table').footable();
        });

		
		<!--MOBILE MENU-->
			var menuLeft = document.getElementById( 'heze-mobilemenu-s1' ),
				body = document.body;
			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'heze-mobilemenu-open' );
				disableOther( 'showLeft' );
			};
			
		/*ACCORDION*/	
		$(document).ready(function() {
			var accordion_head = $('.heze-accordion > li > a'),
				accordion_body = $('.heze-accordion li > .sub-menu');
			accordion_head.first().addClass('active').next().slideDown('normal');
			accordion_head.on('click', function(event) {
				event.preventDefault();
				if ($(this).attr('class') != 'active'){
					accordion_body.slideUp('normal');
					$(this).next().stop(true,true).slideToggle('normal');
					accordion_head.removeClass('active');
					$(this).addClass('active');
				}

			});

		});
		
		/*TOOL TIP*/
	$(document).ready(function() {
    $(".tip").tooltip();
	});
	
	/*SCROLLER*/	
	$(function(){
      $('.divscroll').slimscroll({
        width: '250px',
        height: '98%'
      });
    });
	
	
	//Date picker
	$(function(){
			window.prettyPrint && prettyPrint();
			$('.datepicker').datepicker({
				format: 'yyyy-mm-dd'
			});
			
		});

//MODAL BOX
$(document).ready(function() {
	$('a[data-confirm]').click(function(ev) {
		var href = $(this).attr('href');
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-primary" id="dataConfirmOK">Yes</a></div></div></div></div>');
		} 
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});


//MULTI FIELDS
var startingNo = -1;
	var $node = "";
	for(varCount=0;varCount<=startingNo;varCount++){
		var displayCount = varCount+1;
		$node += '<span><input type="file" name="gfile[]" id="gfile[]" class="styler" style="padding:0px;"><span class="removeVar btn btn-xs btn-danger">Remove</span></span>';
	}
	$('form').prepend($node);
	$('form').on('click', '.removeVar', function(){
		$(this).parent().remove();
		//varCount--; to show numbers '+varCount+'
	});
	$('#addVar').on('click', function(){
		varCount++;
		$node = '<span> <input type="file" name="gfile[]" id="gfile[]" class="styler" style="padding:0px; width:220px; margin-top:-10px;"><span class="removeVar btn btn-xs btn-danger " style="margin-left:220px; margin-top:-50px;">Remove</span></span>';
		$(this).parent().before($node);
	});
	
	//LIGHTBOX	
	 $(function() {
    $(".gallery a[data-rel^='hezebox']").lightbox(); 
  });
  
  
    /*Form*/
  $(document).ready(function() { 
			$('#hezecomform').on('submit',function() {
				
				$("#output").html('<i class="fa fa-refresh fa-spin fa-2x"></i> Processing...');
				$(this).ajaxSubmit({
					target: '#output',
				});
			});
        }); 

	
	//Chosen
	 var config = {
      '.choz': {no_results_text:'No Search Results!'},
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
	
	//ontype slug
		$("#page_title").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z]+/g,'-');
        $("#page_slug").val(Text);        
});

//Jump Menu
function CatFilter(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
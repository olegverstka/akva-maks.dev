var options = {
  offset: 100
}
var header = new Headhesive('.navigation', options);
$(window).load(function(){
	$('.main-menu').liLanding({
		speedFactor: 0.5
	});
})
$(document).ready(function(){
	$('.bxslider').bxSlider({
		pagerCustom : '.product-slider-pager',
		controls    : false
	});

	$(".of_slider").bxSlider();
	
	$("select").selecter();

	$('input[type="radio"], input[type="checkbox"]').styler();

	$(".phone_mask").inputmask({"mask": "+7 (999) 999-9999"});

	$(".order, .order-red, .link").fancybox({
		'scrolling' : 'no',
		'titleShow' : false,
		'onClosed'  : function() {
			$(".order").hide();
		}
	});

	$(".product-slider-pager a").click(function(event) {
		
	});

	$(".fancySlider").fancybox({
		'padding' : '0'
	});

	$(".fancy").click(function() {
		var linkFancy = $(this).hasClass("noFancy");
		console.log(linkFancy);
		if(linkFancy == true) {
			var hrefAttr = $(this).attr("href");
			var wrapDiv = $(this).parents(".product-slider-wrap").children(".product-slider");
			$(wrapDiv).find(".first img").attr("src", hrefAttr);
			$(wrapDiv).find(".firstzz").attr("href", hrefAttr);
		} else {
			$('.fancy').fancybox({
				'padding' : '0'
			});
		}
	});

	$('.fancybox-media').attr('rel', 'media-gallery').fancybox({              
		padding    : '0',
		openEffect : 'none',
		closeEffect : 'none',
		prevEffect : 'none',
		nextEffect : 'none',
		width: 940,
		height: 528,

		arrows : false,
		helpers : {
			media : {},
			buttons : {}
		}
	});

	$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("active");
	});

	$(".toggle_mnu").on('click', function() {
		if ($(".main-menu").is(":visible")) {
			$(".main-menu").fadeOut(600);
			$(".main-menu li a").removeClass("fadeInUp animated");
		} else {
			$(".main-menu").fadeIn(600);
			$(".main-menu li a").addClass("fadeInUp animated");
		};
	});

	$(".main-menu li a").click(function(){
		if($('.toggle_mnu').is(":visible")){
			$(".main-menu").css("display", "none");
			$(".sandwich").removeClass("active");
		}
	});

	$( "#tabs" ).tabs();
});
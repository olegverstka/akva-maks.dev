var options = {
  offset: 100
}
var header = new Headhesive('.navigation', options);
$(window).load(function(){
	$('.main-menu').liLanding();
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

	$(".order, .order-red, .btn").fancybox({
		'scrolling' : 'no',
		'titleShow' : false,
		'onClosed'  : function() {
			$(".order").hide();
		}
	});

	$('.fancy').fancybox({
		'padding' : '0'
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
});
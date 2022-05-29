$(document).ready(function() {
        	$("#slider").bxSlider({
			  auto: true,
			  minSlides: 2,
			  maxSlides: 2,
			  slideWidth: 450,
			  slideMargin: 10,
			  randomStart:true,
			  moveSlides: 1,
			  mode: 'fade',
      auto: ($(".bxslider li").length > 1) ? true : false,
      pager: ($(".bxslider li").length > 1) ? true : false,
       
       pause: 3000
	
			});
			/*if(slider.settings.randomStart) slider.settings.startSlide = Math.floor(Math.random() * slider.children.length);*/
    	});
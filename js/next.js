
// sp gnavi ================
$(function(){
$(".sp_menu").on("click", function() {
$(this).next().slideToggle();
$(this).toggleClass("active");//追加部分
});
});


// top: mainvisual ============
$(document).ready(function () {
//initialize swiper when document ready
    var mySwiper = new Swiper ('.main-swiper-container', {
    	autoplay: {
		    delay: 5000,
		  },
    	effect: 'fade',
	})
});

// top: GALLERY ============
$(document).ready(function () {
//initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
    	autoplay: {
		    delay: 2000,
		  },
		loop: true,
		speed: 1000,
		slidesPerView: 2,
	  	spaceBetween: 20,
	  	centeredSlides : true,
		breakpoints: {
			767: {
				slidesPerView: 2,
				spaceBetween: 10,
				centeredSlides : true,
			}
		}
	})
});
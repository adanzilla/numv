jQuery(document).ready(function($) {


	try{

	    var swiper = new Swiper(".mySwiper", {
	        slidesPerView: 2,
	        spaceBetween: 20,
	        centeredSlides: false,

	        loop: true,
	        navigation: {
	            nextEl: ".swiper-button-next",
	            prevEl: ".swiper-button-prev",
	        },        
	        breakpoints: {
	        	// 780: {
	        	// 	slidesPerView: 2
	        	// },
	        }        
	    });

	}
	catch(error) {
		console.log(error)
	}

});
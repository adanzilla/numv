jQuery(document).ready(function($) {

	jQuery('#scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html,body').animate({
		    scrollTop: 0
		},'slow');
	});

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
	        	780: {
	        		slidesPerView: 1
	        	},

	        	980: {
	        		slidesPerView: 2
	        	},

	        	1500: {
	        		slidesPerView: 3
	        	},
	        }        
	    });

	}
	catch(error) {
		console.log(error)
	}

		if ( jQuery('form#contacto').length ) {
	        jQuery('form#contacto').validate({
	            rules: {
	                'name': { required : true },
	                'email'    : { required : true, email : true }
	            },
	            submitHandler: function(form) {
	                jQuery('button[type="submit"]').attr({
	                    disabled: true,
	                    text: "Enviando..."
	                });
	                
	              
	            }
	        });
	    }

	    jQuery.extend(jQuery.validator.messages, {
        required: "Es requerido",
        number: "Debe ser un número",
        email: "Debe ser un email válido",
        digits: "Inserta solo dígitos",
        lettersonly: "Inserta solo caracteres",
        minlength: "Ingresa mínimo 10 caracteres",
        maxlength: "Ingresa máximo 10 caracteres"
    });

});
jQuery(document).ready(function($) {


	

	if( jQuery('#pie-chat') ){
		const data = {
		  labels: [
		    "Velocidad",
		    "Alcohol",
		    "Sin conductor"
		  ],
		  datasets: [{
		    label: '',
		    data: [20,25,40],
		    backgroundColor: [
		      '#8596E7',
		      '#EEA43B',
		      '#91D7A7'
		    ],
		    hoverOffset: 4
		  }]
		};

		const config = {
			type: 'pie',
			data: data,
			options: {
				responsive: true,
		        plugins: {
		            legend : {
		            	align: 'start',
		            	labels : {
		            		color: '#000000',
		            		padding : 10,
		            		usePointStyle: true,
		            		font: {
		            			size: 12
		            		},
		            		boxHeight: 100
		            	}
		            }
		        }
		    }
		};

		 const myChart = new Chart( 
			 document.getElementById('pie-chart'),
			 config 
		);	
	}

	if ( jQuery('#top10-estados-mas-incidentes') ) {
		const data = {
			labels: [
			'CDMX',
		  	'EdoMex',
		  	'Nayarit',
		  	'Michoacán',
		  	'Guanajuato',
		  	'Jalisco',
		  	'Durango',
		  	'Sinaloa',
		  	'Puebla',
		  	'Queretaro'
		  	],
		  	datasets: [
		  		{
			  		label: [
			  			"Peatones"
			  		],
			  		data: [
			  			2,3,4,5,6,7,3,4,2,3
			  		],
			  		backgroundColor: '#FFCC14'
			  	},
			  	{
			  		label: [
			  			"Motociclistas"
			  		],
			  		data: [
			  			1,2,3,1,2,3,1,2,3,1
			  		],
			  		backgroundColor: '#64D3C3'
			  	},
			  	{
			  		label: [
			  			"Ciclistas"
			  		],
			  		data: [
			  			1,4,2,6,2,7,2,5,2,1
			  		],
			  		backgroundColor: '#A073C3'
			  	},
			]
		};

		const config = {
			type: 'bar',
			data: data,
			options: {
				
				plugins: {
					legend : {
						align: 'start',
						labels : {
							boxHeight: 50,
							color: '#000000',
							padding : 10,
							usePointStyle: true,
							font: {
								size: 12
							},
							boxHeight: 100
						}
					}
				},
			    
				responsive: true,
				legend: {
					position: 'right' 
				},
				scales: {
					x: {
				        stacked: true,
				        ticks: {
                            font: {
                                size: 10
                            }
                        }
                    },
                    y: {
				      	stacked: true,
  					        ticks: {
  	                            font: {
  	                                size: 10
  	                            }
  	                        }
  	                    }
				    }
			}
		};

		 const myChart = new Chart( 
			 document.getElementById('top10-estados-mas-incidentes'),
			 config 
		);	
	}

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

	        	320: {
	        		slidesPerView: 1
	        	},

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
                    disabled: true
                }).html("Enviando...");

                console.log( form );
            }
        });
    }

    jQuery('#menu-primary').on('click', '.nav-link', function(event) {
    	event.preventDefault();
    	var destination = jQuery(this).attr('href');
    	console.log(destination);

    	$('html,body').animate({
		    scrollTop: jQuery( destination ).offset().top
		},'slow');

    });

    jQuery('form#contacto').on('click', 'label.btn', function(event) {
    	event.preventDefault();
    	jQuery('form#contacto').find('label').each(function(index, el) {
    		if( jQuery( el ).hasClass('active') ){
    			jQuery( el ).find('input').attr({ "checked" : false });
    		}else{
    			jQuery( el ).find('input').attr({ "checked" : true });
    		}
    	});
    });

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
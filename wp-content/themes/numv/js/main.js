jQuery(document).ready(function($) {


	var dinamic_bars_chart;
	

	if( jQuery('#pie-chart-iii').length ){
		const data = {
		  labels: [
		    "Fugado",
		    "No identificado",
		    "Detenido"
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
			 document.getElementById('pie-chart-iii'),
			 config 
		);	
	}

	if( jQuery('#pie-chart-ii').length ){
		const data = {
		  labels: [
		    "Hombre",
		    "Mujer"
		  ],
		  datasets: [{
		    label: '',
		    data: [20,25],
		    backgroundColor: [
		      '#8596E7',
		      '#EEA43B'
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
			 document.getElementById('pie-chart-ii'),
			 config 
		);	
	}

	if( jQuery('#pie-chart').length ){
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

	if ( jQuery('#top10-estados-mas-incidentes').length ) {
		const data = {
			labels: [
			'Edomex',
			'Veracruz',
			'Guanajuato',
			'Sinaloa',
			'Jalisco',
			'Chihuahua',
			'Puebla',
			'CdMx',
			'Tamaulipas',
			'Nuevo León',
		  	],
		  	datasets: [
		  		{
			  		label: [
			  			"Peatones"
			  		],
			  		data: [
			  			112,94,81,74,81,99,70,69,83,95
			  		],
			  		backgroundColor: '#FFCC14'
			  	},
			  	{
			  		label: [
			  			"Motociclistas"
			  		],
			  		data: [
			  			107,89,77,73,42,27,48,60,24,19
			  		],
			  		backgroundColor: '#64D3C3'
			  	},
			  	{
			  		label: [
			  			"Ciclistas"
			  		],
			  		data: [
			  			22,12,37,23,17,11,19,8,22,6
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

	if ( jQuery('#bars-chart').length ) {
		const data = {
			labels: [
			'Edomex',
			'Veracruz',
			'Guanajuato',
			'Sinaloa',
			'Jalisco',
			'Chihuahua',
			'Puebla',
			'CdMx',
			'Tamaulipas',
			'Nuevo León',
		  	],
		  	datasets: [
		  		{
			  		label: [
			  			"Peatones"
			  		],
			  		data: [
			  			112,94,81,74,81,99,70,69,83,95
			  		],
			  		backgroundColor: '#FFCC14'
			  	},
			  	{
			  		label: [
			  			"Motociclistas"
			  		],
			  		data: [
			  			107,89,77,73,42,27,48,60,24,19
			  		],
			  		backgroundColor: '#64D3C3'
			  	},
			  	{
			  		label: [
			  			"Ciclistas"
			  		],
			  		data: [
			  			22,12,37,23,17,11,19,8,22,6
			  		],
			  		backgroundColor: '#A073C3'
			  	},
			]
		};

		const config = {
			type: 'bar',
			data: data,
			options: {
				responsive: true,
				    //maintainAspectRatio: false,
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

		dinamic_bars_chart = new Chart( 
			 document.getElementById('bars-chart'),
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

	try{

	    var swiper = new Swiper(".mySwiperTeam", {
	        slidesPerView: 5,
	        spaceBetween: 10,
	        centeredSlides: false,

	        loop: false,
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
	        		slidesPerView: 3
	        	},

	        	1024: {
	        		slidesPerView: 5
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

    jQuery('form#filters').validate({
        rules: {
            
        },
        submitHandler: function(form) {

        	var formulario = jQuery(form);
            var data = formulario.serialize();

            jQuery.ajax({
                type : "POST",
                dataType : "json",
                url: numv_ajax.ajax_url,
                data : { action: "grafica_dinamica", data },
                success: function(json) {
                    if( json.result ){

                    	if( json.grafica == 'por-municipio' ){
                    		const new_data = {
	                        	labels: json.labels,
	                          	datasets: [
	                          		{
	                        	  		label: [
	                        	  			"Peatones"
	                        	  		],
	                        	  		data: [
	                        	  			json.Peatones

	                        	  		],
	                        	  		backgroundColor: '#FFCC14'
	                        	  	},
	                        	  	{
	                        	  		label: [
	                        	  			"Motociclistas"
	                        	  		],
	                        	  		data: [
	                        	  			json.Motociclistas
	                        	  		],
	                        	  		backgroundColor: '#64D3C3'
	                        	  	},
	                        	  	{
	                        	  		label: [
	                        	  			"Ciclistas"
	                        	  		],
	                        	  		data: [
	                        	  			json.Ciclistas
	                        	  		],
	                        	  		backgroundColor: '#A073C3'
	                        	  	},
	                        	]
                        	};

	                		const new_config = {
	                			type: 'bar',
	                			data: new_data,
	                			options: {
	                				responsive: true,
	                				    //maintainAspectRatio: false,
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

	                		jQuery('#muertes-totales').html( json.totales );
	                		jQuery('#peatones').html( json.Peatones );
	                		jQuery('#ciclistas').html( json.Ciclistas );
	                		jQuery('#motociclistas').html( json.Motociclistas );

	                		dinamic_bars_chart.destroy();

	                		dinamic_bars_chart = new Chart( 
	                			 document.getElementById('bars-chart'),
	                			 new_config 
	                		);	
	                    }
                        
                        
                    }
                }
            });

            
           
            
        }
    });	


});
jQuery(document).ready(function($) {

	jQuery('.collapse').on('click', '.easy-scroll', function(event) {
        event.preventDefault();
        console.log('hiding');
        jQuery('.collapse').collapse('toggle');
    });

	var dinamic_bars_chart;

	var pie_por_genero;

	$.fn.digits = function(){ 
	    return this.each(function(){ 
	        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
	    })
	}

	jQuery('.cifras em').digits();
	

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

		 pie_por_genero = new Chart( 
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

	jQuery('.scroll-top').on('click', function(event) {
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

	        	1000: {
	        		slidesPerView: 3
	        	},

	        	1100: {
	        		slidesPerView: 3
	        	},

	        	1200: {
	        		slidesPerView: 4
	        	},

	        	1300: {
	        		slidesPerView: 5
	        	},

	        	1700: {
	        		slidesPerView: 6
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

                var formulario = jQuery(form);
                var data = formulario.serialize();
                jQuery.ajax({
                    type : "POST",
                    dataType : "json",
                    url: numv_ajax.ajax_url,
                    data : { action: "form_submit", data },
                    success: function(json) {
                        if( json.result ){
                            jQuery('p.mensaje').removeClass('d-none');
                            jQuery('form#contacto').addClass('d-none');
                        }
                    }
                });
            }
        });
    }

    jQuery('#menu-primary').on('click', '.nav-link.easy-scroll', function(event) {
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

        	jQuery('button[type="submit"]').html("filtrando...").prop('disabled',true);

        	var formulario = jQuery(form);
            var data = formulario.serialize();

            redibujar_grafica_dinamica(data);

            
           
            
        }
    });	


    function redibujar_grafica_dinamica( data ){
    	            jQuery.ajax({
    	                type : "POST",
    	                dataType : "json",
    	                url: numv_ajax.ajax_url,
    	                data : { action: "grafica_dinamica", data },
    	                success: function(json) {
    	                    if( json.result ){

    	                    	jQuery('button[type="submit"]').html("Filtrar").prop('disabled',false);


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

    		                		jQuery('#muertes-totales').html( numeral(json.totales).format('0,0') );
    		                		jQuery('#peatones').html( numeral(json.Peatones).format('0,0') );
    		                		jQuery('#ciclistas').html( numeral(json.Ciclistas).format('0,0') );
    		                		jQuery('#motociclistas').html( numeral(json.Motociclistas).format('0,0') );

    		                		dinamic_bars_chart.destroy();

    		                		dinamic_bars_chart = new Chart( 
    		                			 document.getElementById('bars-chart'),
    		                			 new_config 
    		                		);	
    		                    }

    		                    if( json.grafica == 'por-estado' ){
    	                    		const new_data_estado = {
    		                        	labels: json.labels,
    		                          	datasets: [
    		                          		{
    		                        	  		label: [
    		                        	  			"Peatones"
    		                        	  		],
    		                        	  		data: json.datasetPeatones,
    		                        	  		backgroundColor: '#FFCC14'
    		                        	  	},
    		                        	  	{
    		                        	  		label: [
    		                        	  			"Motociclistas"
    		                        	  		],
    		                        	  		data: json.datasetMotociclistas,
    		                        	  		backgroundColor: '#64D3C3'
    		                        	  	},
    		                        	  	{
    		                        	  		label: [
    		                        	  			"Ciclistas"
    		                        	  		],
    		                        	  		data: json.datasetCiclistas,
    		                        	  		backgroundColor: '#A073C3'
    		                        	  	},
    		                        	]
    	                        	};

    		                		const new_config = {
    		                			type: 'bar',
    		                			data: new_data_estado,
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



    		                		jQuery('#muertes-totales').html( numeral(json.totales).format('0,0') );
    		                		jQuery('#peatones').html( numeral(json.Peatones).format('0,0') );
    		                		jQuery('#ciclistas').html( numeral(json.Ciclistas).format('0,0') );
    		                		jQuery('#motociclistas').html( numeral(json.Motociclistas).format('0,0') );

    		                		dinamic_bars_chart.destroy();

    		                		dinamic_bars_chart = new Chart( 
    		                			 document.getElementById('bars-chart'),
    		                			 new_config 
    		                		);	
    		                    }

    		                    if( json.grafica == 'por-ano' || json.grafica == 'todos' ){
    	                    		const new_data_ano = {
    		                        	labels: json.labels,
    		                          	datasets: [
    		                          		{
    		                        	  		label: [
    		                        	  			"Peatones"
    		                        	  		],
    		                        	  		data: json.datasetPeatones,
    		                        	  		backgroundColor: '#FFCC14'
    		                        	  	},
    		                        	  	{
    		                        	  		label: [
    		                        	  			"Motociclistas"
    		                        	  		],
    		                        	  		data: json.datasetMotociclistas,
    		                        	  		backgroundColor: '#64D3C3'
    		                        	  	},
    		                        	  	{
    		                        	  		label: [
    		                        	  			"Ciclistas"
    		                        	  		],
    		                        	  		data: json.datasetCiclistas,
    		                        	  		backgroundColor: '#A073C3'
    		                        	  	},
    		                        	]
    	                        	};

    		                		const new_config = {
    		                			type: 'bar',
    		                			data: new_data_ano,
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

    		                		

    		                		jQuery('#muertes-totales').html( numeral(json.totales).format('0,0') );
    		                		jQuery('#peatones').html( numeral(json.Peatones).format('0,0') );
    		                		jQuery('#ciclistas').html( numeral(json.Ciclistas).format('0,0') );
    		                		jQuery('#motociclistas').html( numeral(json.Motociclistas).format('0,0') );

    		                		dinamic_bars_chart.destroy();

    		                		dinamic_bars_chart = new Chart( 
    		                			 document.getElementById('bars-chart'),
    		                			 new_config 
    		                		);	
    		                    }

    		                    const data_por_genero = {
    		                      labels: [
    		                        "Hombre",
    		                        "Mujer"
    		                      ],
    		                      datasets: [{
    		                        label: '',
    		                        data: [json.h,json.m],
    		                        backgroundColor: [
    		                          '#8596E7',
    		                          '#EEA43B'
    		                        ],
    		                        hoverOffset: 4
    		                      }]
    		                    };

    		                    const config_por_genero = {
    		                    	type: 'pie',
    		                    	data: data_por_genero,
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

    		                    pie_por_genero.destroy();

    		                    pie_por_genero = new Chart( 
    		                    	 document.getElementById('pie-chart-ii'),
    		                    	 config_por_genero 
    		                    );
    	                        
    	                        
    	                    }
    	                }
    	            });
    }

    var getUrlParameter = function getUrlParameter(sParam) {
	    var sPageURL = window.location.search.substring(1),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

	        if( sParameterName[1] != undefined && sParameterName[1] != "" ){
	        	
	        	if( jQuery('#'+ sParameterName[0] ).length ){

		        	var option = jQuery('<option>')
		        		.attr({ "value" : decodeURIComponent(sParameterName[1]), "selected" : true }).text( decodeURIComponent(sParameterName[1]) );
		        	jQuery('#'+ sParameterName[0] ).append(option);

	        	}

	        }
	       

	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
	        }
	    }
	    return false;
	};

	getUrlParameter();

	if( getUrlParameter('share') ){
		console.log('submiting');

		var data = jQuery('form#filters').serialize();
		console.log(data);
		redibujar_grafica_dinamica(data);
	}


});
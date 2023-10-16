let map;
var gmarkers1 = [];

function initMap() {


	if( jQuery('#map').length ){

		var infowindow = new google.maps.InfoWindow({
			maxWidth: 180
		});

		var center = {'lat': 19.420661988762575, 'lng': -99.16635995382978};

		const numv_style = new google.maps.StyledMapType( [{"featureType": "landscape.man_made","elementType": "geometry.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "landscape.man_made","elementType": "geometry.stroke","stylers": [{"color": "#ffffff"}]},{"featureType": "landscape.natural","elementType": "geometry.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "poi.attraction","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.business","stylers": [{"visibility": "off"}]},{"featureType": "poi.business","elementType": "geometry.fill","stylers": [{"color": "#3399cc"}]},{"featureType": "poi.business","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.government","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "poi.government","elementType": "geometry.stroke","stylers": [{"visibility": "off"}]},{"featureType": "poi.government","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "poi.government","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"},{"visibility": "off"}]},{"featureType": "poi.medical","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "poi.medical","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.park","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "poi.park","elementType": "geometry.stroke","stylers": [{"visibility": "on"}]},{"featureType": "poi.park","elementType": "labels.text","stylers": [{"visibility": "on"}]},{"featureType": "poi.park","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.place_of_worship","elementType": "labels.text.fill","stylers": [{"color": "#d8d8d8"}]},{"featureType": "poi.school","elementType": "labels.text.fill","stylers": [{"color": "#d8d8d8"}]},{"featureType": "poi.sports_complex","elementType": "labels.text.fill","stylers": [{"color": "#d8d8d8"}]},{"featureType": "road.arterial","elementType": "geometry.fill","stylers": [{"color": "#e8e8e8"}]},{"featureType": "road.arterial","elementType": "geometry.stroke","stylers": [{"color": "#d0d0d0"}]},{"featureType": "road.arterial","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "road.arterial","elementType": "labels.text.stroke","stylers": [{"color": "#e8e8e8"},{"weight": 1.5}]},{"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"color": "#e8e8e8"},{"visibility": "simplified"}]},{"featureType": "road.highway","elementType": "geometry.stroke","stylers": [{"color": "#d0d0d0"}]},{"featureType": "road.highway.controlled_access","elementType": "geometry.fill","stylers": [{"color": "#ff006f"}]},{"featureType": "transit.station","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "geometry.fill","stylers": [{"color": "#c8d6d4"}]},{"featureType": "water","elementType": "geometry.stroke","stylers": [{"color": "#c8d6d4"}]}],{ name: "NUMV" } );


		const map = new google.maps.Map(document.getElementById("map"), {
			//zoom: 9,
			zoom: 9,
			center: center,
			mapTypeControlOptions: {
				mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain", "NUMV"],
			},
		});

		var numv = {
			template : 'http://numv.local/maqueta/',
			locations : [
				{
					'images': "2350",
					'images_src': "",
					'latitud': 19.4159322,
					'leyenda': "Leyenda",
					'longitud': -99.1581775,
					'nombre': "Nombre",
					'pin': "http://numv.local/maqueta/img/pin-amarillo.svg",
					'icon': "http://numv.local/maqueta/img/icon-amarillo.svg",
					'tipo': "Peatón",
				},
				{
					"images": "2351",
					"images_src": "",
					"latitud": 19.4079963,
					"leyenda": "Casa Cleo",
					"longitud": -99.173461,
					"nombre": "Casa Cleo",
					"pin": "http://numv.local/maqueta/img/pin-morado.svg",
					"icon": "http://numv.local/maqueta/img/icon-morado.svg",
					"tipo": "Ciclista",
				},
				{
					"images": "2352",
					"images_src": "",
					"latitud": 19.411151,
					"leyenda": "The Amsterdam",
					"longitud": -99.17399,
					"nombre": "The Amsterdam",
					"pin": "http://numv.local/maqueta/img/pin-verde.svg",
					"icon": "http://numv.local/maqueta/img/icon-verde.svg",
					"tipo": "Motociclista",
				}
			]
		};



		for (let i = 0; i < googlemap_data.locations.length; i++) {


			const location = googlemap_data.locations[i];
			
			if( location.latitud != 0 ){
				var category = googlemap_data.locations[i].submodo;
				
				var args = {
					"position": { lat: location['latitud'], lng: location['longitud'] },
					"icon": googlemap_data.template + location['pin'],
					map,
					"category": category,
					"title": "",
					
					"optimized": false,
				}
				


				const marker = new google.maps.Marker( args );

				gmarkers1.push(marker);

				const contentString = '<div class="row no-gutters info-window">'+
									    '<div class="col-12">'+
									        '<p class="title"><img src="'+ googlemap_data.template+location['icon'] +'"> <span style="font-weight: 600;">'+ category +'</span></p>'+
									        '<p><span style="font-weight: 600;">Usuario:</span> Conductor</p>'+
									        '<p><span style="font-weight: 600;">Sexo:</span> '+ location['genero'] +'</p>'+
									        '<p><span style="font-weight: 600;">Edad:</span> '+ location['edad'] +' años</p>'+
									        '<p><span style="font-weight: 600;">Vehículo:</span> </p>'+
									        '<hr>'+
									        '<p><span style="font-weight: 600;">Cuándo</span></p>'+
									        '<p><span style="font-weight: 600;">Fecha:</span> '+ location['fecha'] +'</p>'+
									        '<p><span style="font-weight: 600;">Hora:</span> '+ location['hora'] +'</p>'+
									        '<hr>'+
									        '<p><span style="font-weight: 600;">Dónde</span></p>'+
									        '<p><span style="font-weight: 600;">Ciudad:</span> '+ location['municipio'] +'</p>'+
									        '<p><span style="font-weight: 600;">Estado:</span> '+ location['estado'] +'</p>'+
									        '<p><span style="font-weight: 600;">Municipio:</span> '+ location['conurbacion'] +'</p>'+
									        '<p><span style="font-weight: 600;">Entorno:</span> '+ location['entorno'] +'</p>'+
									        '<p><span style="font-weight: 600;">Tipo de calle:</span> Autopista</p>'+
									    '</div>'+
									'</div>';


				marker.addListener("click", () => {
					
					infowindow.setOptions({
				        content: contentString,
				        maxWidth:300
				    });
				    

					infowindow.open({
						anchor: marker,
						map,
						shouldFocus: true,
					});

				});
			}
			


			


			// marker.addListener("click", () => {

			// });
		}



		

		map.mapTypes.set("NUMV", numv_style);
		map.setMapTypeId("NUMV");
	}

	



}

jQuery('#map-filters').on('change', 'form', function(event) {
	event.preventDefault();

	var filter = [];
	
	jQuery.each( jQuery(this).serializeArray(), function(i, field) {
		var input = jQuery('input[name='+field.name+']');
		field.value = jQuery.trim(field.value);

		filter.push( field.value );



	});

	

	for (i = 0; i < gmarkers1.length; i++) {
        marker = gmarkers1[i];

        if ( jQuery.inArray( marker.category, filter) >= 0 ) {
            marker.setVisible(true);
        }
        else {
            marker.setVisible(false);
        }
    }

});


		



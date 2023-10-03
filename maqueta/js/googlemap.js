let map;

function initMap() {

	var infowindow = new google.maps.InfoWindow({
		maxWidth: 180
	});

	var center = {'lat': 19.420661988762575, 'lng': -99.16635995382978};

	const numv_style = new google.maps.StyledMapType( [{"featureType": "landscape.man_made","elementType": "geometry.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "landscape.man_made","elementType": "geometry.stroke","stylers": [{"color": "#ffffff"}]},{"featureType": "landscape.natural","elementType": "geometry.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "poi.attraction","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.business","stylers": [{"visibility": "off"}]},{"featureType": "poi.business","elementType": "geometry.fill","stylers": [{"color": "#3399cc"}]},{"featureType": "poi.business","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.government","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "poi.government","elementType": "geometry.stroke","stylers": [{"visibility": "off"}]},{"featureType": "poi.government","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "poi.government","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"},{"visibility": "off"}]},{"featureType": "poi.medical","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "poi.medical","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.park","elementType": "geometry.fill","stylers": [{"visibility": "on"}]},{"featureType": "poi.park","elementType": "geometry.stroke","stylers": [{"visibility": "on"}]},{"featureType": "poi.park","elementType": "labels.text","stylers": [{"visibility": "on"}]},{"featureType": "poi.park","elementType": "labels.text.fill","stylers": [{"color": "#6f7781"}]},{"featureType": "poi.place_of_worship","elementType": "labels.text.fill","stylers": [{"color": "#d8d8d8"}]},{"featureType": "poi.school","elementType": "labels.text.fill","stylers": [{"color": "#d8d8d8"}]},{"featureType": "poi.sports_complex","elementType": "labels.text.fill","stylers": [{"color": "#d8d8d8"}]},{"featureType": "road.arterial","elementType": "geometry.fill","stylers": [{"color": "#e8e8e8"}]},{"featureType": "road.arterial","elementType": "geometry.stroke","stylers": [{"color": "#d0d0d0"}]},{"featureType": "road.arterial","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "road.arterial","elementType": "labels.text.stroke","stylers": [{"color": "#e8e8e8"},{"weight": 1.5}]},{"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"color": "#e8e8e8"},{"visibility": "simplified"}]},{"featureType": "road.highway","elementType": "geometry.stroke","stylers": [{"color": "#d0d0d0"}]},{"featureType": "road.highway.controlled_access","elementType": "geometry.fill","stylers": [{"color": "#ff006f"}]},{"featureType": "transit.station","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "geometry.fill","stylers": [{"color": "#c8d6d4"}]},{"featureType": "water","elementType": "geometry.stroke","stylers": [{"color": "#c8d6d4"}]}],{ name: "NUMV" } );


	const map = new google.maps.Map(document.getElementById("map"), {
		zoom: 6,
		center: center,
		mapTypeControlOptions: {
			mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain", "NUMV"],
		},
	});

	

	map.mapTypes.set("NUMV", numv_style);
	map.setMapTypeId("NUMV");

}

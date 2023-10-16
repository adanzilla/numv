jQuery(document).ready(function($) {
	
	console.log('Ready!');

	jQuery('form#filters').on('change', '#filtro-fecha', function(event) {
		event.preventDefault();
		
		var select = jQuery(this);
		var value = select.val();

		if( value == "" ){

			jQuery('.badge-fecha').remove();
			clear_badges();

		}else{

			jQuery('.badge-fecha').remove();
			var image = jQuery('<img>');
				image.prop('src', googlemap_data.template+'/img/btn-tache.svg');

			var badge = jQuery('<a>');
				badge.addClass('badge badge-pill badge-fecha badge-primary px-3 py-1 mr-1 mb-1')
				badge.prop('href', 'javascript:void(0);')
				badge.html( value );
				badge.append( image ).on('click', function(event) {
					event.preventDefault();
					jQuery(this).remove();
					clear_badges();
					select.val("");
				});

			jQuery('.dashboard.badges p').append( badge );	
			jQuery('.dashboard.badges').removeClass('d-none');	

		}

		

	});


	jQuery('form#filters').on('change', '#filtro-estado', function(event) {
		event.preventDefault();
		var select = jQuery(this);
		var value = select.val();

		if( value == '' ){

			jQuery('.badge-estado').remove();
			clear_badges();

		}else{

			jQuery('.badge-municipio').remove();
			jQuery('.badge-estado').remove();
			var image = jQuery('<img>');
				image.prop('src', googlemap_data.template+'/img/btn-tache.svg');

			var badge = jQuery('<a>');
				badge.addClass('badge badge-pill badge-estado badge-primary px-3 py-1 mr-1 mb-1')
				badge.prop('href', 'javascript:void(0);')
				badge.html( value );
				badge.append( image ).on('click', function(event) {
					event.preventDefault();
					jQuery(this).remove();
					clear_badges();
					select.val("");

		        	jQuery('#filtro-municipio').html("");

	        		var option = jQuery('<option>');
	        	        	option.prop({
	        	        		'value' : "",
	        	        		'selected' : true
	        	        	}).html( "Municipio" );
	        		jQuery('#filtro-municipio').append(option);
	        		jQuery('.badge-municipio').remove();

				});

			jQuery.ajax({
			    type : "POST",
			    dataType : "json",
			    url: numv_ajax.ajax_url,
			    data : { action: "municipios", estado : value },
			    beforeSend: function() {
			    	var option = jQuery('<option>');
			            	option.prop({
			            		'value' : ""
			            	}).html( "Municipio" );
			    	jQuery('#filtro-municipio').append(option);
			    },
			    success: function(json) {
			        if( json.municipios ){

			        	jQuery('#filtro-municipio').html("");

		        		var option = jQuery('<option>');
		        	        	option.prop({
		        	        		'value' : "",
		        	        		'selected' : true
		        	        	}).html( "Municipio" );
		        		jQuery('#filtro-municipio').append(option);
			            
			            jQuery( json.municipios ).each(function(index, el) {
			            	var option = jQuery('<option>');
			            	option.prop({
			            		'value' : el.municipio
			            	}).html( el.municipio );

			            	jQuery('#filtro-municipio').append( option );

			            });
			        }
			    }
			});

			jQuery('.dashboard.badges p').append( badge );
			jQuery('.dashboard.badges').removeClass('d-none');

		}

		

	});

	jQuery('form#filters').on('change', '#filtro-municipio', function(event) {
		event.preventDefault();
		var select = jQuery(this);
		var value = select.val();

		if( value == "" ){

			jQuery('.badge-municipio').remove();
			clear_badges();

		}else{
			jQuery('.badge-municipio').remove();

			var image = jQuery('<img>');
				image.prop('src', googlemap_data.template+'/img/btn-tache.svg');

			var badge = jQuery('<a>');
				badge.addClass('badge badge-pill badge-municipio badge-primary px-3 py-1 mr-1 mb-1')
				badge.prop('href', 'javascript:void(0);')
				badge.html( value );
				badge.append( image ).on('click', function(event) {
					event.preventDefault();
					jQuery(this).remove();
					clear_badges();
					select.val("");
				});



			jQuery('.dashboard.badges p').append( badge );
			jQuery('.dashboard.badges').removeClass('d-none');
		}

		

	});

	jQuery('form#filters').on('change', '#filtro-vialidad', function(event) {
		event.preventDefault();
		var select = jQuery(this);
		var value = select.val();

		if( value == "" ){

			jQuery('.badge-vialidad').remove();
			clear_badges();

		}else{
			jQuery('.badge-vialidad').remove();

			var image = jQuery('<img>');
				image.prop('src', googlemap_data.template+'/img/btn-tache.svg');

			var badge = jQuery('<a>');
				badge.addClass('badge badge-pill badge-vialidad badge-primary px-3 py-1 mr-1 mb-1')
				badge.prop('href', 'javascript:void(0);')
				badge.html( value );
				badge.append( image ).on('click', function(event) {
					event.preventDefault();
					jQuery(this).remove();
					clear_badges();
					select.val("");
				});



			jQuery('.dashboard.badges p').append( badge );
			jQuery('.dashboard.badges').removeClass('d-none');
		}

		

	});

	jQuery('form#filters').on('change', '#filtro-edad', function(event) {
		event.preventDefault();
		var select = jQuery(this);
		var value = select.val();

		if( value == "" ){

			jQuery('.badge-edad').remove();
			clear_badges();

		}else{
			jQuery('.badge-edad').remove();

			var image = jQuery('<img>');
				image.prop('src', googlemap_data.template+'/img/btn-tache.svg');

			var badge = jQuery('<a>');
				badge.addClass('badge badge-pill badge-edad badge-primary px-3 py-1 mr-1 mb-1')
				badge.prop('href', 'javascript:void(0);')
				badge.html( value );
				badge.append( image ).on('click', function(event) {
					event.preventDefault();
					jQuery(this).remove();
					clear_badges();
					select.val("");
				});



			jQuery('.dashboard.badges p').append( badge );
			jQuery('.dashboard.badges').removeClass('d-none');
		}

		

	});

	function clear_badges(){

		if( jQuery('.dashboard.badges p').children().length == 1 ){

			jQuery('.dashboard.badges').addClass('d-none');

		}

	}


});
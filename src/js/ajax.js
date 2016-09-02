jQuery(document).ready(function($) {


	$( '#urlScrape' ).submit( function( evt ) {

		evt.preventDefault();
		$( 'loading' ).fadeToggle();

		var urlData = $( '#getUrl' ).val();

		$( '#pageTitle' ).empty();
		$( '#metaDesc' ).empty();
		$( '#metaKeys' ).empty();

		$( '.message' ).fadeIn().addClass('is-working');

		$.ajax({
				url: 'src/getSeo.php',
				type: 'GET',
				dataType: 'json',
				data: { getUrl: urlData },
			})
			.done(function(data) {
				if( data.pageTitle ) {
					$( '#pageTitle' ).html( data.pageTitle );
				}

				if( data.metaDesc ) {
					$( '#metaDesc' ).html( data.metaDesc );
				}

				if( data.metaDesc ) {
					$( '#metaKeys' ).html( data.metaKeys );
				}
			})
			.fail(function(data) {
				console.log("error");
				$( '.message' ).removeClass('is-working').addClass('has-error');
			})
			.always(function(data) {
				console.log("complete");
			})
			.success(function(data) {
				$( '.message' ).fadeOut().removeClass('is-working');
			});

	});

});

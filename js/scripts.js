(function() {
	/* ==========================================================================
	Slide open navigation on mobile
	========================================================================== */
	$( "#toggle-mobile-nav" ).click(function() {
		if ( $( "#mobile-site-navigation" ).is( ":hidden" ) ) {
			$( "#mobile-site-navigation" ).slideDown( "slow" );
		} else {
			$( "#mobile-site-navigation" ).slideUp();
		}
	});

})();
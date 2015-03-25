jQuery(document).ready(function($) {

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	$(function(){
		$('.navbar-nav').slicknav({
			label: '',
			duration: 500,
			closeOnClick: true
		});
	});
});

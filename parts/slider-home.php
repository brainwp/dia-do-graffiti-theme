<?php
/* Template: Slider Home */
?>
<?php if ( $code = get_theme_mod( 'slider_home' ) ) : ?>

	<section id="slider-home" class="col-sm-12 nopadding">
		<div class="slider">
			<?php echo do_shortcode( html_entity_decode( $code ) ); ?>
		</div><!-- .slider -->
	</section><!-- #slider-home -->

<?php endif; ?>
	

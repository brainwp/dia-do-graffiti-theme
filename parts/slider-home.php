<?php
/* Template: Slider home */
?>
<?php if ( $code = get_theme_mod( 'slider_home', true ) ) : ?>

	<section id="slider-home" class="col-sm-12 nopadding">
		<div class="slider">
			<?php echo apply_filters( 'the_content', '[brasa_slider name="Home"]' ); ?>
		</div><!-- .slider -->
	</section><!-- #slider-home -->

<?php endif; ?>
	

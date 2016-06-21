<?php
/* Template name: Slider home */
?>
<section id="slider-home" class="col-md-12">
	
	<div class="slider">
		<?php if ( $code = kirki_get_option( 'slider_home' ) ) : ?>
			<?php echo apply_filters( 'the_content', $code ); ?>
		<?php endif; ?>
	</div><!-- .slider -->

</section><!-- #slider-home -->

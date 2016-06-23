<?php
/* Template name: Embed Map Home */
?>
<section id="map-home" class="col-sm-4 links-rapidos">
	<?php if ( $map = kirki_get_option( 'embed_map' ) ) : ?>
		<?php echo apply_filters( 'the_content', $map ); ?>
	<?php endif; ?>
</section><!-- #map-home -->

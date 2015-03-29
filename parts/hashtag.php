<?php
	/* Template name: Hashtag */
	$options = get_option( 'geral_cfg' );
	$hashtag_url = ( !empty( $options['hashtag_url'] ) ? $options['hashtag_url'] : '');
?>
<section id="hashtag" class="col-md-12">
	<a class="barra bg-cor col-md-12" href="<?php echo esc_url( $hashtag_url );?>">
		<h3>
			<?php _e( 'Acompanhe o dia do graffiti nas redes sociais','odin' );?>
			<span>&#9658;</span>
		</h3>
	</a><!-- .barra -->
	<div class="clear col-md-12"></div><!-- .clear -->
</section><!-- #hashtag.col-md-12 -->

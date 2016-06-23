<?php
/* Template name: Links home */
?>
<section id="links-home" class="col-sm-4 links-rapidos">
	<?php if( $title = kirki_get_option( 'fast_link_1_title' ) ) : ?>
		<a class="bg-cor" href="<?php echo esc_url( kirki_get_option( 'fast_link_1' ) ); ?>">
			<?php echo esc_textarea( $title );?>
		</a>
	<?php endif;?>
	<?php if( $title = kirki_get_option( 'fast_link_2_title' ) ) : ?>
		<a class="bg-cor" href="<?php echo esc_url( kirki_get_option( 'fast_link_2' ) ); ?>">
			<?php echo esc_textarea( $title );?>
		</a>
	<?php endif;?>
	<?php if( $title = kirki_get_option( 'fast_link_3_title' ) ) : ?>
		<a class="bg-cor" href="<?php echo esc_url( kirki_get_option( 'fast_link_3' ) ); ?>">
			<?php echo esc_textarea( $title );?>
		</a>
	<?php endif;?>
</section><!-- #links-home -->

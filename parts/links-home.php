<?php
/* Template name: Links Home */
?>
<section id="links-home" class="col-sm-3 links-rapidos">
	<?php if( $title = get_theme_mod( 'fast_link_1_title' ) ) : ?>
		<a class="bg-cor" href="<?php echo esc_url( get_theme_mod( 'fast_link_1' ) ); ?>">
			<?php echo esc_textarea( $title ); ?>
		</a>
	<?php endif; ?>
	<?php if( $title = get_theme_mod( 'fast_link_2_title' ) ) : ?>
		<a class="bg-cor" href="<?php echo esc_url( get_theme_mod( 'fast_link_2' ) ); ?>">
			<?php echo esc_textarea( $title ); ?>
		</a>
	<?php endif; ?>
	<?php if( $title = get_theme_mod( 'fast_link_3_title' ) ) : ?>
		<a class="bg-cor" href="<?php echo esc_url( get_theme_mod( 'fast_link_3' ) ); ?>">
			<?php echo esc_textarea( $title ); ?>
		</a>
	<?php endif; ?>
</section><!-- #links-home -->

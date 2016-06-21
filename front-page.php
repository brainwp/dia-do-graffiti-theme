<?php
/* Template name: Home */
get_header( 'home' );
?>


<?php get_template_part('/parts/infos-home'); ?>
<?php /* Acidionar o Slider aqui


<div class="col-sm-12 slider">
<?php if( $code = kirki_get_option( 'slider_home' ) ) : ?>
	<?php echo apply_filters( 'the_content', $code ); ?>
<?php endif; ?>
</div><!-- .slider -->


 */ ?>
<?php get_template_part('/parts/noticias-home'); ?>
<?php get_template_part('/parts/barra-newsletter'); ?>
<div class="margin-footer"></div>
<?php
get_footer();
?>

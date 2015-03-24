<?php
/**
 * The template for archive staff
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
$options = get_option('geral_cfg');
$title = (!empty($options['equipe_title'])) ? $options['equipe_title'] : __('Equipe','odin');
?>
<article id="page-single" <?php post_class(); ?>>
	<div class="barra-title">
		<div class="container">
			<div class="row">
				<h1><?php echo esc_textarea($title);?></h1>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .barra-title -->
	<div class="container">
		<div class="row">
		    <?php // Start the Loop. ?>
			<?php while ( have_posts() ) : the_post(); ?>

			   <?php // Include the page content template. ?>
			   <?php get_template_part( 'content', 'team' ); ?>

			<?php endwhile; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</article><!-- #post-## -->

<?php get_template_part('/parts/barra-newsletter'); ?>
<div class="margin-footer"></div>
<?php get_footer(); ?>

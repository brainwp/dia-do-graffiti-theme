<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>
<section id="noticias-home" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 clear"></div><!-- .col-md-12 clear -->
			<?php get_template_part('parts/noticias-header');?>
			<?php
			if ( have_posts() ):
				while ( have_posts() ): the_post();
				   get_template_part('content','noticias');
				endwhile;
			endif;
			?>
			<div class="col-md-12 noticias-pagination">
				<?php odin_paging_nav();?>
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #noticias-home -->
<?php
get_footer();

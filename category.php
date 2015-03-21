<?php
/**
 * The template for displaying Category pages.
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
<div class="margin-footer"></div>
<?php
get_footer();

<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="page-single" <?php post_class(); ?>>
	<div class="barra-title">
		<div class="container">
			<div class="row">
				<h1><?php the_title();?></h1>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .barra-title -->
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php the_content();?>
			</div><!-- .col-md-8 -->
			<?php get_sidebar('post');?>
		</div><!-- .row -->
	</div><!-- .container -->
</article><!-- #post-## -->

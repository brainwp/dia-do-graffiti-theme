<?php
/* Template name: Homenageado */

get_header(); ?>
<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();
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
					<?php the_content();?>
				</div><!-- .row -->
			</div><!-- .container -->
		</article><!-- #post-## -->

	<?php
	endwhile;
?>

<?php get_footer();


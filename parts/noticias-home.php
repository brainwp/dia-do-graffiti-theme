<?php
/* Template name: Query de noticias na home */
$options = get_option('home_cfg');
?>
<section id="noticias-home" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12 clear"></div><!-- .col-md-12 clear -->
			<?php get_template_part('parts/noticias-header');?>
			<?php
			// WP_Query argument
			$args = array (
				'post_type'              => 'post',
				'posts_per_page'         => get_option('posts_per_page'),
			);
		    // The Query
			$query = new WP_Query( $args );
			if ( $query->have_posts() ):
				while ( $query->have_posts() ): $query->the_post();
				   get_template_part('content','noticias');
				endwhile;
			endif;
			// Restore original Post Data
			wp_reset_postdata();
			?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #noticias-home -->

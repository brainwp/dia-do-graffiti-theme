<?php
/* Template name: Query de noticias na home */
$options = get_option('home_cfg');
?>
<section id="noticias-home" class="col-md-12">
	<div class="container">
		<div class="row">
			<h3 class="col-md-4 section-title pull-left"><?php _e('Notícias','odin');?></h3>
			<div class="col-md-5 pull-right categories">
				<?php $categories = get_categories( array('parent' => 0) ); ?>
				<?php foreach($categories as $cat): ?>
				    <a href="<?php echo get_category_link($cat->term_id);?>">
				    	<?php echo $cat->name;?>
				    </a>
			    <?php endforeach; ?>
			</div><!-- .col-md-9 pull-right categories -->
			<div class="col-md-12 clear"></div><!-- .col-md-12 clear -->
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

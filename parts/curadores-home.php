<?php
/* Template name: Curadores home */
?>
<section id="curadores-home" class="col-sm-9">
	<?php
		/**
		 * The WordPress Query class.
		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
		 *
		 */
		$args = array(
			
			//Type & Status Parameters
			'post_type'   => 'curadores',
			'post_status' => 'publish',
			
			//Order & Orderby Parameters
			'order'               => 'DESC',
			'orderby'             => 'rand',
			
			//Pagination Parameters
			'posts_per_page'         => -1,
			'paged'                  => get_query_var('paged'),
	
		);
		
		$curadores = new WP_Query( $args );

		if ( $curadores->have_posts() ) : while ( $curadores->have_posts()) : $curadores->the_post();

			get_template_part( 'content', 'team' );

			endwhile;

		endif;
		
	?>
	

</section><!-- #curadores-home -->

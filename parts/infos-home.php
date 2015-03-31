<?php
/* Template name: Infos home */
$options = get_option('home_cfg');
?>
<section id="infos-home" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-5 site-description">
				<h3 class="css-cor"><?php echo esc_textarea($options['content_title']);?></h3>
				<p><?php echo esc_textarea( $options['content_text'] );?></p>
			</div><!-- .col-md-4 site-description -->
			<div class="col-md-3 links-rapidos">
				<a class="bg-cor" href="<?php echo esc_url($options['link_1_url']);?>">
					<?php echo esc_textarea( $options['link_1_title'] );?>
				</a>
				<a class="bg-cor" href="<?php echo esc_url($options['link_2_url']);?>">
					<?php echo esc_textarea( $options['link_2_title'] );?>
				</a>
				<a class="bg-cor" href="<?php echo esc_url($options['link_3_url']);?>">
					<?php echo esc_textarea( $options['link_3_title'] );?>
				</a>
			</div><!-- .col-md-4 links-rapidos -->
			<div class="col-md-4 agenda">
				<header class="col-md-12">
					<h3 class=""><?php _e('Agenda de Ações','odin');?></h3>
					<a class="link-agenda pull-right bg-cor"><?php _e('Todas','odin');?></a>
				</header>
				<div class="agenda-content col-md-12">

					<?php
						// WP_Query argument
					    $current = current_time('Ymd');
						$args = array (
							'post_type'              => 'agenda',
							'posts_per_page'         => '3',
							'orderby'                => 'meta_value',
							'meta_key'               => 'data_inicio',
							'order'                  => 'DESC',
							'meta_query' => array(
								array(
								'key' => 'data_inicio',
								'compare' => '>=',
								'value' => $current
								),
							),
						);
						// The Query
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) :

							while ( $query->have_posts() ): $query->the_post();
						       get_template_part( 'content','agenda' );
						    endwhile;

						else :
							echo '<span class="no-event">';
							_e( 'No registered event', 'odin' );
							echo '<span>';
					    endif;
					    // Restore original Post Data
					    wp_reset_postdata();
				    ?>

				</div><!-- .agenda-content -->
			</div><!-- .col-md-4 agenda -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #infos-home -->

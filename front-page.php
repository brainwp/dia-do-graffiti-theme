<?php
/* Template name: Home */
get_header('home');
$options = get_option('home_cfg');
?>
<section id="infos-home" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-4 site-description">
				<h3 class="css-cor"><?php echo esc_textarea($options['content_title']);?></h3>
				<p><?php echo esc_textarea($options['content_text']);?></p>
			</div><!-- .col-md-4 site-description -->
			<div class="col-md-4 links-rapidos">
				<a class="bg-cor" href="<?php echo esc_url($options['link_1_url']);?>">
					<?php echo esc_textarea($options['link_1_title']);?>
				</a>
				<a class="bg-cor" href="<?php echo esc_url($options['link_2_url']);?>">
					<?php echo esc_textarea($options['link_2_title']);?>
				</a>
				<a class="bg-cor" href="<?php echo esc_url($options['link_3_url']);?>">
					<?php echo esc_textarea($options['link_3_title']);?>
				</a>
			</div><!-- .col-md-4 links-rapidos -->
			<div class="col-md-4 agenda">
				<header class="col-md-12">
					<h3 class="col-md-8 pull-left"><?php _e('Agenda de Ações','odin');?></h3>
					<a class="link-agenda pull-right bg-cor"><?php _e('Todas','odin');?></a>
				</header>
				<div class="agenda-content col-md-12">
					<?php
					// WP_Query argument
					$args = array (
						'post_type'              => 'agenda',
						'posts_per_page'         => '3',
						'orderby'                => 'meta_value',
						'meta_key'               => 'data_inicio',
						'order'                  => 'DESC'
					);
					// The Query
					$query = new WP_Query( $args );
					if ( $query->have_posts() ):
						while ( $query->have_posts() ): $query->the_post();
					       get_template_part('content','agenda');
					    endwhile;
				    endif;
				    // Restore original Post Data
				    wp_reset_postdata();
				    ?>
				</div><!-- .agenda-content -->
			</div><!-- .col-md-4 agenda -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #infos-home -->
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
<?php
get_footer('home');
?>

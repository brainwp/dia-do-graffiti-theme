<?php
/*Template name: Content Loop Noticias */
?>
<a href="<?php the_permalink(); ?>" class="col-md-4 content-noticias">
	<div class="img-container">
		<?php if(has_post_thumbnail()): ?>
		    <?php the_post_thumbnail('medium');?>
		<?php else:?>
		    <img src="<?php bloginfo('template_url');?>/assets/images/default-thumb.jpg">
		<?php endif;?>
	</div><!-- .img-container -->
	<div class="text">
		<h3 class="css-cor"><?php the_title();?></h3>
		<?php the_excerpt();?>
	</div><!-- .col-md-12 text -->
</a><!-- .col-md-4 content-noticias -->

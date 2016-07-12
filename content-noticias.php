<?php
/*Template name: Content Loop Noticias */
?>
<a href="<?php the_permalink(); ?>" class="content-noticias">
	<div class="col-md-4 wrap-each">

		<span class="more bg-cor">
			<div class="bg"></div>
		</span><!-- more -->

		<div class="img-container">
			<?php if ( has_post_thumbnail() ): ?>
			    <?php echo odin_thumbnail( 400, 250, get_the_title(), true, 'thumb-content-noticias', true ); ?>
			<?php else: ?>
			    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/default-thumb.jpg">
			<?php endif; ?>
		</div><!-- .img-container -->

		<div class="text">
			<div class="fade-item"></div>
			<h3 class="css-cor"><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
		</div><!-- .col-md-12 text -->

	</div><!-- .col-md-4 -->
</a><!-- content-noticias -->

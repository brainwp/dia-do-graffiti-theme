<?php
/*
* Content equipe
*/
global $post;
$thumb_src = null;
if ( has_post_thumbnail($post->ID) ) {
	$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
	$thumb_src = $src[0];
}
?>
	<article class="col-sm-12 profile">
		<div class="col-md-4 profile-header">
			<?php if ( $thumb_src ): ?>
			<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>" class="img-circle">
			<?php endif; ?>
		</div>

		<div class="col-md-8 profile-content">
			<h3><?php the_title(); ?></h3>
			<p class="lead position"><?php the_field('team_position'); ?></p>
			<?php the_content(); ?>
			<?php if ( $link = get_field('team_link') ): ?>
			<a class="blog-link css-cor" href="<?php echo esc_url($link); ?>">
				<?php echo esc_url($link);?>
			</a>
			<?php endif; ?>
		</div>
	</article>

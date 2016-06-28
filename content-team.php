<?php
/*
* Content equipe
*/
global $post;
$thumb_src = null;
if ( has_post_thumbnail( $post->ID ) ) {
	$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
	$thumb_odin = odin_thumbnail( 250, 250, get_the_title(), true, 'img-circle', true );
	$thumb_src = $src[0];
}

if ( is_home() || is_front_page() ) : ?>

	<figure class="col-sm-3 profile-header">
		<?php if ( $thumb_odin ): ?>
			<a href="<?php the_permalink(); ?>">
				<?php echo $thumb_odin; ?>
			</a>
		<?php endif; ?>
	</figure><!-- profile-header -->

<?php else : ?>

	<article class="col-sm-12 profile">
		<div class="col-sm-4 profile-header">
			<?php if ( $thumb_src ): ?>
				<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>" class="img-circle">
			<?php endif; ?>
		</div><!-- profile-header -->

		<div class="col-sm-8 profile-content">
			<h3><?php the_title(); ?></h3>
			<p class="lead position"><?php the_field( 'team_position' ); ?></p>
			<?php the_content(); ?>
			<?php if ( $link = get_field('team_link') ): ?>
				<a class="blog-link css-cor" href="<?php echo esc_url( $link ); ?>">
					<?php echo esc_url( $link );?>
				</a><!-- profile-content -->
			<?php endif; ?>
		</div>
	</article><!-- profile -->

<?php endif; ?>
	

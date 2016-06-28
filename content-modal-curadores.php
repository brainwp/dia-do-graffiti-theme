<?php $options = get_option('geral_cfg'); ?>
<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="container-fluid modal-curadores">
		<div class="row">
			<div class="col-sm-2">
				<div class="thumb">
					<?php echo odin_thumbnail( 300, 300, get_the_title(), true, '' ); ?>
				</div><!-- thumb -->
				<?php if ( $link = get_field( 'team_link' ) ): ?>
					<a class="link bg-slider" href="<?php echo esc_url( $link ); ?>"></a>
				<?php endif ?>
			</div><!-- .col-sm-2 -->
			<div class="col-sm-10">
				<h1 class="post-title-reveal css-cor"><?php the_title(); ?></h1><!-- .post-title-reveal -->
				<div class="content">
					<?php the_content(); ?>
				</div><!-- content -->
			</div><!-- .col-sm-10 -->
		</div><!-- .row -->
	</div><!-- .container-fluid .modal-curadores -->

<?php endwhile; ?>
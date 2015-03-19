<?php
/*Template name: Reveal Modal Agenda */
$options = get_option('geral_cfg');
?>
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<?php echo wp_get_attachment_image($options['logo'],'full');?>
			</div><!-- .col-md-2 -->
			<div class="col-md-10 pull-right">
				<h1 class="post-title-reveal css-cor"><?php the_title();?></h1><!-- .post-title-reveal -->
			</div><!-- .col-md-8 pull-right -->
		</div><!-- .row -->
	</div><!-- .container -->
	<div class="col-md-12 clear"></div><!-- .col-md-12 clear -->
	<div class="col-md-12 barra-reveal bg-cor">
		<div class="container">
			<div class="row">
				<?php $data_inicio = DateTime::createFromFormat('Ymd',get_post_meta( get_the_ID(), 'data_inicio', true ));?>
				<h2 class="col-md-3 reveal-data">
					<?php echo $data_inicio->format('d/m/Y');?>
				</h2><!-- .reveal-data -->
				<h4 class="col-md-3 reveal-hora">
					<?php echo esc_textarea(get_post_meta( get_the_ID(),'horario', true ));?>
				</h4><!-- .reveal-hora -->
				<h4 class="col-md-4 reveal-hora">
					<?php echo esc_textarea(get_post_meta( get_the_ID(),'local', true ));?>
				</h4><!-- .reveal-hora -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .col-md-12 barra-reveal bg-cor -->
	<div class="container reveal-container-content">
		<div class="row">
			<div class="col-md-3 img-container">
				<?php the_post_thumbnail('full'); ?>
			</div><!-- .col-md-5 -->
			<div class="col-md-9 reveal-content">
				<?php the_content();?>
				<span class="price bg-cor">
					<?php echo esc_textarea(get_post_meta( get_the_ID(),'valor', true ));?>
				</span>
			</div><!-- .col-md-7 reveal-content -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php endwhile; ?>
<?php endif; ?>

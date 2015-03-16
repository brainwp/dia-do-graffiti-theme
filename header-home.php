<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
$options = get_option('home_cfg');
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav id="menu-top" class="col-md-12">
		<div class="container">
			<div class="row">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => 'nav navbar-nav',
						'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
						'walker'         => new Odin_Bootstrap_Nav_Walker()
					)
				);
				?>
			</div><!-- .row -->
		</div><!-- .container -->
	</nav><!-- #menu-top.col-md-12 -->
	<section id="slider-home" class="col-md-12">
		<?php $style = wp_get_attachment_image_src($options['slider_bg'],'large');?>
		<?php $style = 'background-image:url('.$style[0].');'?>
		<div class="container" style="<?php echo esc_attr($style);?>">
			<div class="row">
				<div class="col-md-4 pull-left">
					<div class="col-md-10 col-md-offset-2">
						<?php echo wp_get_attachment_image($options['logo'],'full');?>
					</div><!-- .col-md-10 col-md-offset-2 -->
				</div><!-- .col-md-4 pull-left -->
				<div class="col-md-7 pull-right">
					<?php echo do_shortcode('[brasa_slider name="Slider Home" size="large"]');?>
				</div><!-- .col-md-8 pull-right -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- #slider-home.col-md-12 -->

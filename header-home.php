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

	<div class="bg-slider" style="<?php echo esc_attr( $style );?>">

	<nav id="menu-top" class="col-md-12 barra-bg">
		<div class="container">
			<div class="row">
				<?php if ( has_nav_menu( 'main-menu' ) ) : ?>
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
				<?php else : ?>
					<?php if ( is_user_logged_in() && current_user_can( 'administrator' ) ) : ?>
						<a class="css-cor" href="<?php echo admin_url( 'nav-menus.php' ); ?>"><?php _e( 'Create your first menu', 'odin' ); ?></a>
					<?php else : ?>
						<ul class="default-menu">
							<?php echo wp_list_pages( 'title_li=' ); ?>
						</ul><!-- default-menu -->
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</nav><!-- #menu-top.col-md-12 -->

	<section id="slider-home" class="col-md-12">
		<div class="container" style="">
			<div class="row">
				<div class="col-md-4 col-sm-12 pull-left wrap-logo">
					<div class="col-md-10 logo">
						<?php if( $logo = kirki_get_option( 'logo' ) ) : ?>
							<img src="<?php echo esc_url( $logo );?>" alt="<?php bloginfo( 'name' );?>" />
						<?php endif;?>
					</div><!-- .col-md-10 logo -->
				</div><!-- .col-sm-4 pull-left -->
				<div class="col-md-8 col-sm-12 pull-right slider">
					<?php if( $code = kirki_get_option( 'slider_home' ) ) : ?>
						<?php echo apply_filters( 'the_content', $code ); ?>
					<?php endif;?>
				</div><!-- .col-md-8 pull-right -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- #slider-home.col-md-12 -->

<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}
/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since  2.2.0
	 *
	 * @return void
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Set image sizes default in activation theme.
		 */
		if ( isset( $_GET['activated'] ) && is_admin() ) {
			
			/* Thumbnail */
			update_option( 'thumbnail_size_w',	400 );
			update_option( 'thumbnail_size_h',	400 );
			update_option( 'thumbnail_crop', 	1 );
			
			/* Medium */
			update_option( 'medium_size_w',		720 );
			update_option( 'medium_size_h',		720 );
			update_option( 'medium_crop',		1 );
			
			/* Large */
			update_option( 'large_size_w',		1280 );
			update_option( 'large_size_h',		720 );
			update_option( 'large_crop',		1 );
		}

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin Stylesheets.
	wp_enqueue_style( 'source-sans-pro-odin', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic', array(), null, 'all' );
	wp_enqueue_style( 'slicknav-style', $template_url . '/assets/css/slicknav.css', array(), null, 'all' );
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );
	
	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Slicknav.
	wp_enqueue_script( 'slicknav', $template_url . '/assets/js/libs/jquery.slicknav.min.js', array(), null, true );

	// Fancybox.
	wp_enqueue_script( 'fancybox', $template_url . '/assets/js/libs/fancybox/jquery.fancybox-1.3.4.pack.js', array(), null, true );
	wp_enqueue_style( 'fancybox-style', $template_url . '/assets/js/libs/fancybox/jquery.fancybox-1.3.4.css', array(), null, 'all' );

	// Main jQuery.
	wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}
/*Add options */
require get_template_directory() . '/inc/options.php';
/* Advanced Custom fields */
require get_template_directory() . '/inc/advanced-custom-fields/acf.php';
require get_template_directory() . '/inc/fields.php';
/*custom post types */
require get_template_directory() . '/inc/cpt.php';
/*class active plugins */
require get_template_directory() . '/inc/class-active-plugins.php';
global $plugins;
$plugins = new Brasa_Active_Plugins(
	array(
		'brasa-slider/brasa-slider.php' => array(
				'name' => 'Brasa Slider',
				'url'  => 'https://github.com/brasadesign/brasa-slider'
		),
		'tagregator/bootstrap.php' => array(
			'name' => 'Tagregator',
			'url'  => 'https://wordpress.org/plugins/tagregator'
		),
		'alo-easymail/alo-easymail.php' => array(
			'name' => 'ALO EasyMail Newsletter',
			'url'  => 'http://wordpress.org/plugins/alo-easymail'
		),
	)
);
function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Page Slug Class
function add_body_class( $classes = "" ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_body_class' );

add_action( 'pre_get_posts', 'change_query_curadores' );

function change_query_curadores( $query ) {
	
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'curadores' ) ) {
		$query->set( 'posts_per_page', '-1' );
		$query->set( 'orderby', 'rand' );
	}

}

// Include the Google Analytics Tracking Code (ga.js)
function google_analytics_tracking_code() {
	$options = get_option('geral_cfg');
	$propertyID = $options['code_analytics'];

	if ( ! empty( $propertyID ) ) :
?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', '<?php echo $propertyID; ?>', 'auto');
	  ga('send', 'pageview');
	</script>

<?php
	endif;
}

add_action('wp_head', 'google_analytics_tracking_code');


/**
 * @author Trevor Scott <trevor@trevor.net>
 * @version 1.0 2010-12-07
 *
 * Grab the subdomain portion of the URL. If there is no sub-domain, the root
 * domain is passed back. By default, this function *returns* the value as a
 * string. Calling the function with echo = true prints the response directly to
 * the screen.
 *
 * @param bool $echo
 */
function arrested_subdomain($echo = false) {
	$hostAddress = explode ( '.', $_SERVER ["HTTP_HOST"] );
	if (is_array ( $hostAddress )) {
		if (eregi ( "^www$", $hostAddress [0] )) {
			$passBack = 1;
		} else {
			$passBack = 0;
		}
		if ($echo == false) {
			return ($hostAddress [$passBack]);
		} else {
			echo ($hostAddress [$passBack]);
		}
	} else {
		return (false);
	}
}

function do_not_filter_anything( $value ) {
 return $value;
}
<?php
/**
 * GrowthSpark functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GrowthSpark
 */

if ( ! function_exists( 'growthspark_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function growthspark_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on GrowthSpark, use a find and replace
	 * to change 'growthspark' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'growthspark', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'growthspark' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

}
endif; // growthspark_setup
add_action( 'after_setup_theme', 'growthspark_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function growthspark_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'growthspark_content_width', 640 );
}
add_action( 'after_setup_theme', 'growthspark_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function growthspark_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'growthspark' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Main CTA', 'growthspark' ),
		'id'            => 'main_cta',
		'description'   => esc_html__( 'Text widget only, A Header and a Sub-heading.', 'growthspark' ),
		'before_widget' => '<section class="site-description">',
		'after_widget'  => '</section>',
		'before_title'  => '<span class="hidden hide">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'growthspark' ),
		'id'            => 'first_footer',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<div id="first-footer" class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'growthspark' ),
		'id'            => 'second_footer',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<div id="second-footer" class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'growthspark' ),
		'id'            => 'third_footer',
		'description'   => esc_html__( 'Add widgets here.', 'growthspark' ),
		'before_widget' => '<div id="third-footer" class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Bottom Slide Out', 'growthspark' ),
		'id'            => 'bottom_slideout',
		'description'   => esc_html__( 'Add Content Here.', 'growthspark' ),
		'before_widget' => '<div id="slidebox"><a class="close">X</a>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'growthspark_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function growthspark_scripts() {

	wp_enqueue_style( 'growthspark-style', get_stylesheet_uri() );

	wp_enqueue_script( 'growthspark-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'growthspark-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/inc/animate.min.css', array(), '20170502', false );

	wp_enqueue_script( 'animated-modal', get_template_directory_uri() . '/inc/animatedModal/animatedModal.min.js', array(), '20170502', true );

	wp_enqueue_script('jquery');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'growthspark_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Titan Framework plugin checker
 */
require get_template_directory() . '/titan-framework-checker.php';

/**
 * Load Titan Framework options
 */
require get_template_directory() . '/titan-options.php';




/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme GrowthSpark for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'growthspark_register_required_plugins' );

function growthspark_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => __('Page Builder Sandwich (Free Page builder with premium Features)', 'growthspark' ),
			'slug'      => 'page-builder-sandwich',
			'required'  => false,
		),
		array(
			'name'      => __('Black Studio TinyMCE Widget (Adds easy content editor to the widget area)', 'growthspark' ),
			'slug'      => 'black-studio-tinymce-widget',
			'required'  => false,
		),

		array(
			'name'      => __('Contact Form 7 (Simple and Reliable Forms)', 'growthspark' ),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => __('Wordence (Incredible security)', 'growthspark' ),
			'slug'      => 'wordfence',
			'required'  => false,
		),
		array(
			'name'      => __('WP Super Cache (After you\'re all ready to launch, speeds up the site)', 'growthspark' ),
			'slug'      => 'wp-super-cache',
			'required'  => false,
		),
		array(
			'name'      => __('Smush (Easily optimize your uploaded images in bulk)', 'growthspark' ),
			'slug'      => 'wp-smushit',
			'required'  => false,
		),
		array(
			'name'      => __('Yoast SEO (Extremely popular SEO plugin)', 'growthspark' ),
			'slug'      => 'wordpress-seo',
			'required'  => false,
		),

		array(
			'name'      => __('Titan Framework (Required for theme options)', 'growthspark' ),
			'slug'      => 'titan-framework',
			'required'  => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'growthspark',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}











//============================================================================================
// Moving gh-head code to utilize wp_head functionality
//============================================================================================

function g_head() {

	if ( class_exists( 'TitanFramework' ) ) {
  $titan = TitanFramework::getInstance( 'growthspark' );

  $typo = $titan->getOption( 'typo' );
	$head_code = $titan->getOption( 'custom_head_code' );
	$main_nav_left_or_right = $titan->getOption( 'main_nav_left_or_right' );

	if ($typo == "f_oswald") { ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
	<style>
	/*
	Mr Oswald
	*/

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: 'Oswald', sans-serif;
		text-transform: uppercase;

	}

	body,
	button,
	input,
	select,
	textarea {
		font-family: 'Montserrat', sans-serif;
		text-transform: none;
	}
	</style>
	<?php } elseif ($typo == "f_libre_r") { ?>
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto:900" rel="stylesheet">
	<style>
	/*
	Libre Roboto
	*/
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: 'Roboto', sans-serif;
		text-transform: none;
	}

	body,
	button,
	input,
	select,
	textarea {
		font-family: 'Libre Baskerville', serif;
		text-transform: none;
	}
	</style>
	<?php } elseif ($typo == "f_julius") { ?>
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Julius+Sans+One|Source+Sans+Pro" rel="stylesheet">
	<style>
	/*
	Julius Archivo
	*/
	h1,
	h3,
	h5,{
		font-family: 'Julius Sans One', sans-serif;
		text-transform: uppercase;
		text-transform: none;
	}
	h2,
	h4,
	h6 {
		font-family: 'Archivo Narrow', sans-serif;
		text-transform: uppercase;
	}
	body{
		font-family: 'Source Sans Pro', sans-serif;
		text-transform: none;
	}
	</style>
	<?php } elseif ($typo == "f_hound") { ?>
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
	<style>
	/*
	Hound of the Baskerville
	*/
	h1,
	h3,
	h5,
	body,
	button,
	input,
	select,
	textarea {
		font-family: 'Libre Baskerville', serif;
		text-transform: none;
	}
	h2,
	h4,
	h6 {
		font-family: 'Libre Baskerville', serif;
		text-transform: uppercase;
	}
	</style>
	<?php } elseif ($typo == "f_open") { ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
	<style>
	/*
	So Open
	*/
	h1,
	h3,
	h5,
	body,
	button,
	input,
	select,
	textarea {
		font-family: 'Open Sans', sans-serif;
		text-transform: none;
	}
	h2,
	h4,
	h6 {
		font-family: 'Open Sans', sans-serif;
		text-transform: uppercase;
	}
	</style>
	<?php } elseif ($typo == "f_domo") { ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<style>

	/*
	Domo
	*/
	h1,
	h3,
	h5,
	h2,
	h4,
	h6,
	body,
	button,
	input,
	select,
	textarea {
		font-family: 'Roboto Condensed', sans-serif;
		text-transform: none;
	}

	</style>
	<?php } else { ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<style>
	/*
	Open Default
	*/
	h1,
	h3,
	h5,
	body,
	button,
	input,
	select,
	textarea {
		font-family: 'Open Sans', sans-serif;
		text-transform: none;
	}
	h2,
	h4,
	h6 {
		font-family: 'Open Sans', sans-serif;
		text-transform: uppercase;
	}
	</style>
	<?php } ?>



	<style>


	<?php if ($main_nav_left_or_right == true  ) { ?>
	.main-navigation li {
		float: right !important;
		position: relative;
	}
	<?php } else { ?>
	.main-navigation li {
		float: left;
		position: relative;
	}
	<?php } ?>


	/*
	Sidebar and Comment area options
	*/
	<?php if ($sb_style == 'sb_shadow'  ) { ?>
	.widget {
	    padding: 12px;
	    box-shadow: #333 0 0 4px 0;
	}
	#comments {
	    padding: 20px;
	    box-shadow: #333 0 0 4px 0;
	}
	<?php } elseif ($sb_style == 'sb_gray'  ) { ?>
	.widget {
	    padding: 12px;
	    background: #efefef;
	}
	#comments {
	    padding: 20px;
	    background: #efefef;
	}
	<?php } elseif ($sb_style == 'sb_border'  ) { ?>
	.widget {
	    padding: 12px;
	    border: 2px solid #333;
	}
	#comments {
	    padding: 20px;
	    border: 2px solid #333;
	}
	<?php } ?>


	</style>

	<?php if( $head_code ) : ?>
	<!-- Head code from theme options -->
	<?php echo $head_code ; ?>
	<!-- END Head code from theme options -->
	<?php endif;
	}
}

add_action('wp_head','g_head');

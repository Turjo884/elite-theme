<?php
/**
 * Elite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elite
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function elite_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Elite, use a find and replace
		* to change 'elite' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'elite', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'elite' ),
			'footer' => esc_html__( 'Footer Menu', 'elite' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'elite_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'elite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elite_content_width', 640 );
}
add_action( 'after_setup_theme', 'elite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elite_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'elite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'elite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright', 'elite' ),
			'id'            => 'copyright-content',
			'description'   => esc_html__( 'Add Footer Copyright Content here.', 'elite' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<p>',
			'after_title'   => '</p>',
		)
	);
}
add_action( 'widgets_init', 'elite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function elite_scripts() {
	// wp_enqueue_style( 'elite-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');

	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

	wp_enqueue_style( 'owl-carousel-the-edefault', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

	wp_enqueue_style( 'fancy-box', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');

	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_style( 'theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css');


	wp_enqueue_style( 'elite-style', get_stylesheet_uri());
	// wp_style_add_data( 'elite-style', 'rtl', 'replace' );


	// script file links
	// wp_enqueue_script( 'elite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js');

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');

	wp_enqueue_script( 'isotop', get_template_directory_uri() . '/assets/js/isotop.min.js');

	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js');
	
	wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.js');

	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/waypoints.min.js');

	wp_enqueue_script( 'counterup-min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js');

	wp_enqueue_script( 'bluechip-external', get_template_directory_uri() . '/assets/js/main.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


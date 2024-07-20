<?php
/**
 * security-BSD functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package security-BSD
 */
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

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
function security_bsd_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on security-BSD, use a find and replace
		* to change 'security-bsd' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'security-bsd', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'security-bsd' ),
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
			'security_bsd_custom_background_args',
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
add_action( 'after_setup_theme', 'security_bsd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function security_bsd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'security_bsd_content_width', 640 );
}
add_action( 'after_setup_theme', 'security_bsd_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function security_bsd_scripts() {
	wp_enqueue_style( 'security-bsd-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'security-bsd-style-main', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );


	wp_enqueue_script( 'security-bsd-navigation', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), _S_VERSION, true );


}
add_action( 'wp_enqueue_scripts', 'security_bsd_scripts' );

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
 * Carbon
 */

require get_template_directory() . '/inc/carbon.php';

/**
 * Custom post types
 */

require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Custom post types
 */

require get_template_directory() . '/inc/custom-login.php';

/**
 * Translation
 */

require get_template_directory() . '/inc/poly-translation.php';

/**
 * Constants
 */
define( 'SITE_URL', get_site_url() );
define( 'SITE_LOCALE', get_locale() );
define( 'THEME_PATH', get_template_directory_uri() );

/**
 * Form integration
 */

add_action( 'admin_post_nopriv_form_integration', 'form_integration_callback' );
add_action( 'admin_post_form_integration', 'form_integration_callback' );

function form_integration_callback(){

	function clearData($data) {
		return addslashes(strip_tags(trim($data)));
	}

	$name = clearData($_POST['name']);
	$phone = clearData($_POST['phone']);
	$email = clearData($_POST['email']);

	$home_url = clearData($_POST['home-url']);
	$lang = clearData($_POST['form-lang']);

	$utmSource = clearData($_POST['utm_source']);
	$utmMedium = clearData($_POST['utm_medium']);
	$utmCampaign = clearData($_POST['utm_campaign']);
	$utmTerm = clearData($_POST['utm_term']);
	$utmContent = clearData($_POST['utm_content']);

	$thxPage = '/dyakuyemo';

	if ( $lang == 'en-GB'){
		$thxPage = '/thank-you';
	}

	//OneBox source

	$login = '';
	$password = '';

	$date = new DateTime();
	$data = $date->getTimestamp();
	$rand = rand(0, 9);
	$data = $data - 1000000000;
	$orderCode = $data . "-" . $rand;

	$curlSession = curl_init();
	curl_setopt($curlSession, CURLOPT_URL, "https://sitename.1b.app/api/orders/add/?login={$login}&password={$password}&ordercode={$orderCode}&clientphone={$phone}&clientemail={$email}&clientnamefirst={$name}&ordername=&workflowid=2&statusid=5&utm_source={$utmSource}&utm_medium={$utmMedium}&utm_campaign={$utmCampaign}&utm_content={$utmContent}&utm_term={$utmTerm}&order_managerid=");
	curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

	$jsonData = json_decode(curl_exec($curlSession));
	curl_close($curlSession);

	$openBoxResult = json_encode($jsonData);

	//

	header('Location:'.$home_url.$thxPage);

	$_POST = array();

	exit;
}


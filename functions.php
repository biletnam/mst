<?php
/**
 * Default Required Files
 */
require get_template_directory() . '/inc/required_plugins.php';
require get_template_directory() . '/inc/customizer-kirki.php';
require get_template_directory() . '/inc/custom_post_type.php';
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
require get_template_directory() . '/inc/woocommerce/integrations.php';

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';

/**
 * MST functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MST
 */

if ( ! function_exists( 'mst_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mst_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MST, use a find and replace
	 * to change 'mst' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mst', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 *
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'store_icon', 120, 113, true );
	add_image_size( 'event_logo', 62, 62, true );
	add_image_size( 'product_img_size', 870, 536, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'mst' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mst_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Woocommerce Support
	add_theme_support( 'woocommerce' );

	// Shortcode Support 
	add_filter('widget_text','do_shortcode');
}
endif;
add_action( 'after_setup_theme', 'mst_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mst_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mst_content_width', 640 );
}
add_action( 'after_setup_theme', 'mst_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mst_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mst' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mst' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mst_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mst_scripts() {
	/**
	 * Enqueue styles.
	 */
	wp_enqueue_style('Open-Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800', array(), false, 'all');
	wp_enqueue_style('ionicons', 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), false, 'all');
	wp_enqueue_style('all-fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), false, 'all');
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('remodal-popup', get_template_directory_uri() . '/css/remodal.css', array(), false, 'all');
	wp_enqueue_style('remodal-popup-default', get_template_directory_uri() . '/css/remodal-default-theme.css', array(), false, 'all');
	wp_enqueue_style('mststyle', get_template_directory_uri() . '/css/mst_style.css', array(), false, 'all');
	wp_enqueue_style( 'mst-style', get_stylesheet_uri() );

	/**
	 * Enqueue scripts.
	 */
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('remodal-popup', get_template_directory_uri() . '/js/remodal.min.js', array(), false, true);
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/dd0a078572.js', array(), false, true);
	wp_enqueue_script('settings', get_template_directory_uri() . '/js/settings.js', array(), false, true);

	wp_enqueue_script( 'mst-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'mst-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mst_scripts' );

/**
 * MST Social Media 
 */
function social_media() {
	$social_media = get_theme_mod( 'mst_social' );

	if($social_media){
		echo '<ul class="social-media list-inline">';
		foreach($social_media as $social) { ?>
			<li><a href="<?php echo $social['link'] ?>" target="_blank"><i class="fa <?php echo $social['icon'] ?>"></i></a></li>
		<?php }

		echo '</ul>';
	}
}


/* get store taxonomy custom fields values */
function getTaxField( $field, $id=NULL) {
	if( is_tax()){ 
		$store_term = get_queried_object();
		return get_field($field, $store_term);
	} else {
	// } elseif (is_singular('events')) {
		$store_terms = get_the_terms($id, 'stores');
		return get_field($field, $store_terms[0]);
	}
	// } else {
	// 	$default_color = get_theme_mod( 'mst_default_color' ); 
	// 	return $default_color['default_color'];
	// }
}


/* get available seats number */
function getAvailableSeats($eventid, $seatid) {

	//get total seats
	$seating = get_field('seating', $eventid);
	$seat_ids = wp_list_pluck($seating, 'seat_id');
	$number_of_seats = wp_list_pluck($seating, 'number_of_seats');
	$event_seats = array_combine($seat_ids, $number_of_seats);

	// get sold seats
	$sold_seats = get_post_meta($eventid, 'sold_seats', true);

	$available_seats = isset( $sold_seats[$seatid] ) ? $event_seats[$seatid] - $sold_seats[$seatid] : $event_seats[$seatid];

	return $available_seats;

}


/* process ticket ajax */
function processTickets_func(){
	global $woocommerce;
	$quantity = $_POST['quantity'];
	$eventid = $_POST['eventid'];
	$seatid = $_POST['seatid'];
	$store_color = getTaxField('store_color', $eventid);
	$checkouturl = $woocommerce->cart->get_checkout_url();
	$available_seats = getAvailableSeats($eventid, $seatid);

	$status = 'FAILED';
	$title = 'Sorry!';

	if($available_seats <= 0 ) {
		$message = 'Seats for this event isn\'t available';
	} elseif ( $available_seats < $quantity ) {
		$message = 'Only ' . $available_seats . ' seats available';
	} else {
		$added_to_cart = $woocommerce->cart->add_to_cart($seatid, $quantity);
		if($added_to_cart) {
			$sold_seats = get_post_meta($eventid, 'sold_seats', true);
			$sold_seats = is_array($sold_seats) ? $sold_seats : array();
			$sold_seats[$seatid] = $sold_seats[$seatid] ? $sold_seats[$seatid] : 0;
			$sold_seats[$seatid] += $quantity;
			// DON'T UPDATE ANY STOCK UNTIL TRISTAN NEED A CART FUNCTION
			// update_post_meta($eventid, 'sold_seats', $sold_seats);
			$title = 'Thanks';
			$message = 'Your tickets have been added to cart!';
			$status = 'SUCCESS';
		} else {
			$message = 'Error in purchasing ticket!';
		}
	}

	echo json_encode(array( 'status' => $status, 'title' => $title, 'message' => $message, 'storecolor' => $store_color, 'checkouturl' => $checkouturl, 'availableseats' => getAvailableSeats($eventid, $seatid) ));
	die();

}
add_action('wp_ajax_processTickets', 'processTickets_func');
add_action('wp_ajax_nopriv_processTickets', 'processTickets_func');

/* update event meta after publish */
// add_action('publish_post', 'update_event_meta', 10, 2);
// function update_event_meta( $ID, $post ) {
//     $event_seats = get_post_meta($ID, 'event_seats', true);
//     if( get_post_type('events') ) {
//     	$seating = get_field('seating', $ID);
// 	 	$seat_ids = wp_list_pluck($seating, 'seat_id');
// 	 	$number_of_seats = wp_list_pluck($seating, 'number_of_seats');
// 	 	$event_seats = array_combine($seat_ids, $number_of_seats);
//         update_post_meta($ID, 'event_seats', $event_seats);
//     }
// }


// Custom css
function acf_template_radio_css() {
    echo '<style type="text/css">
			.acf-field.acf-field-radio.acf-field-58bbd87cfd701 .acf-radio-list li label {
				display: flex;
    			align-items: center;
    			justify-content: center;
    			flex-direction: column-reverse;
			}
			.acf-field.acf-field-radio.acf-field-58bbd87cfd701 .acf-radio-list li label img {
				border: 2px solid transparent;
			}
			.acf-field.acf-field-radio.acf-field-58bbd87cfd701 .acf-radio-list li label.selected img {
				border-color: #C5C5C5;
			}
			.acf-field.acf-field-radio.acf-field-58bbd87cfd701 .acf-radio-list li span {
				font-weight: 500;
				padding: 0 0 5px;
			}
			.acf-field.acf-field-radio.acf-field-58bbd87cfd701 .acf-radio-list li input[type="radio"] {
				margin: 15px 0 0;
			}
		</style>';
}
add_action('admin_head', 'acf_template_radio_css');

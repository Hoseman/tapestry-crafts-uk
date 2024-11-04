<?php
/**
 * Tapestry Crafts UK functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tapestry_Crafts_UK
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
function tapestry_crafts_uk_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Tapestry Crafts UK, use a find and replace
		* to change 'tapestry-crafts-uk' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tapestry-crafts-uk', get_template_directory() . '/languages' );

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
			'header_menu'  => esc_html__('Header Menu', 'ah-wordpress-boilerplate'),
			'top_menu_new'  => esc_html__('Top Menu New', 'ah-wordpress-boilerplate'),
			'flycart'  => esc_html__('Fly Cart', 'ah-wordpress-boilerplate'),
			'footer_menu_1'  => esc_html__('Footer Menu 1', 'ah-wordpress-boilerplate'),
			'footer_menu_2'  => esc_html__('Footer Menu 2', 'ah-wordpress-boilerplate'),
			'footer_menu_3'  => esc_html__('Footer Menu 3', 'ah-wordpress-boilerplate')
		)
	);



	function wp_boilerplate_header_menu()
	{
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'header_menu',
				'depth'          => 2,
				'fallback_cb'    => false,
				'walker'         => new Wp_Boilerplate_Header_Menu_Walker(),
			)
		);
	}

	function wp_boilerplate_top_menu_new()
	{
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'top__menu-new',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'top_menu_new',
				'depth'          => 1,
				'fallback_cb'    => false,
				//'walker'         => new Wp_Boilerplate_Header_Menu_Walker(),
			)
		);
	}

	function wp_boilerplate_flycart()
	{
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'fly-cart',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'flycart',
				'depth'          => 1,
				'fallback_cb'    => false,
				//'walker'         => new Wp_Boilerplate_Header_Menu_Walker(),
			)
		);
	}

	function wp_boilerplate_footer_menu_1()
	{
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'footer__menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'footer_menu_1',
				'depth'          => 1,
				'fallback_cb'    => false,
				//'walker'         => new Wp_Boilerplate_Footer_Menu_Walker(),
			)
		);
	}

	function wp_boilerplate_footer_menu_2()
	{
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'footer__menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'footer_menu_2',
				'depth'          => 1,
				'fallback_cb'    => false,
				//'walker'         => new Wp_Boilerplate_Footer_Menu_Walker(),
			)
		);
	}

	function wp_boilerplate_footer_menu_3()
	{
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'footer__menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'footer_menu_3',
				'depth'          => 1,
				'fallback_cb'    => false,
				//'walker'         => new Wp_Boilerplate_Footer_Menu_Walker(),
			)
		);
	}


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
			'tapestry_crafts_uk_custom_background_args',
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
add_action( 'after_setup_theme', 'tapestry_crafts_uk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tapestry_crafts_uk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tapestry_crafts_uk_content_width', 640 );
}
add_action( 'after_setup_theme', 'tapestry_crafts_uk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tapestry_crafts_uk_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tapestry-crafts-uk' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tapestry-crafts-uk' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tapestry_crafts_uk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tapestry_crafts_uk_scripts() {

	// Enqueue Font Awesome
	wp_register_style('font-awesome-free', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
	wp_enqueue_style('font-awesome-free');

	// Enqueue Owl Carousel
	wp_register_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	wp_enqueue_style('owl-css');
	wp_register_style('owl-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
	wp_enqueue_style('owl-theme-css');

	// Enqueue our main stylesheet.
	wp_register_style('main', get_template_directory_uri() . '/dist/stylesheets/main.css', [], null, 'all');
	wp_enqueue_style('main');

	wp_enqueue_style( 'tapestry-crafts-uk-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tapestry-crafts-uk-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tapestry-crafts-uk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


	    // Enqueue owl JavaScript.
		wp_register_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [], false, true);
		wp_enqueue_script('owl-js');
	 
		 // Enqueue our bundled JavaScript.
		 wp_register_script('bundle', get_template_directory_uri() . '/dist/scripts/bundle.min.js', [], false, true);
		 wp_enqueue_script('bundle');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tapestry_crafts_uk_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}




/* Owl Carousel Small (for use on inner pages) */
//require get_template_directory() . '/inc/owl-carousel-small.php';
require get_template_directory() . '/inc/owl-carousel-shop.php';
/* Owl Carousel Small (for use on inner pages) */

/* Nav walker class */
require get_template_directory() . '/inc/classes/class-fluidpress-menu-walker.php';
/* Nav walker class */



/* remove widget sidebar from woocommerce product page */
add_action('wp', 'remove_sidebar_from_product_page');
function remove_sidebar_from_product_page() {
    if (is_product()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}
/* remove widget sidebar from woocommerce product page */


/* custom related products heading for product page */

function custom_related_products_heading($heading) {
    global $product;

    $related_products = wc_get_related_products($product->get_id());
    $count = count($related_products);

    return 'Related Products';
}
add_filter('woocommerce_product_related_products_heading', 'custom_related_products_heading');


function custom_related_products_args($args) {
    $args['posts_per_page'] = 4; // Number of related products
    return $args;
}
add_filter('woocommerce_output_related_products_args', 'custom_related_products_args');


remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);


function custom_star_rating_position() {
    // Display star rating only if it exists for the product
    if (function_exists('woocommerce_template_loop_rating')) {
        woocommerce_template_loop_rating();
    }
}
add_action('woocommerce_after_shop_loop_item', 'custom_star_rating_position', 20);


/* custom related products heading for product page */


/* Shop page custom heading */

add_filter('woocommerce_page_title', 'custom_shop_page_title', 10, 2);

function custom_shop_page_title($title) {
    // Check if we're on the shop page
    if (is_shop()) {
        // Get the total number of products
        $product_count = wc_get_loop_prop('total');
        
        // Modify the title to include the product count
        $title = sprintf(__('Showing all %d results for Shop', 'woocommerce'), $product_count);
    }

    return $title;
}

/* Shop page custom heading */



/* Category page custom heading */
add_filter('woocommerce_page_title', 'custom_category_page_title', 10);

function custom_category_page_title($title) {

    if (is_product_category()) {

        $product_count = wc_get_loop_prop('total');
        
        $category = get_queried_object();
        $category_name = str_replace('-', ' ', ucfirst($category->name));
        
        $title = sprintf(__('Showing all %d results for %s', 'woocommerce'), $product_count, $category_name);
    }

    return $title;
}
/* Category page custom heading */


/* Number of products shown on the shop page */
function custom_products_per_page($cols) {
    return 12;
}
add_filter('loop_shop_per_page', 'custom_products_per_page', 20);
/* Number of products shown on the shop page */


/* add a view products button to the shop page */
add_action( 'woocommerce_after_shop_loop_item', 'add_view_product_button', 10 );

function add_view_product_button() {
    global $product;

    $view_product_url = $product->get_permalink();

    echo '<a href="' . esc_url($view_product_url) . '" class="button view-product-button">View Product</a>';
}
/* add a view products button to the shop page */

/* change heading on cart page */
add_action('wp', 'customize_page_title');

function customize_page_title() {
    // Check if we're on the cart page
    if (is_cart()) {
        add_filter('the_title', function($title, $id) {
            // Ensure this is the main title, not sidebar or widget titles
            if (get_the_ID() === $id) {
                return 'Review Your Cart';
            }
            return $title;
        }, 10, 2);
    }
}

/* change heading on cart page */


/* Remove download link from my account page */
add_filter( 'woocommerce_account_menu_items', 'remove_downloads_link_from_account_nav', 10, 1 );

function remove_downloads_link_from_account_nav( $items ) {
    if ( isset( $items['downloads'] ) ) {
        unset( $items['downloads'] );
    }
    if ( isset( $items['payment-methods'] ) ) {
        unset( $items['payment-methods'] );
    }
    return $items;
}
/* Remove download link from my account page */


/* Add plus minus to product qty input field */
add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );
 
function bbloomer_display_quantity_minus() {
   if ( ! is_product() ) return;
   echo '<button type="button" class="minus" >-</button>';
}
 
add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );
 
function bbloomer_display_quantity_plus() {
   if ( ! is_product() ) return;
   echo '<button type="button" class="plus" >+</button>';
}
 
add_action( 'woocommerce_before_single_product', 'bbloomer_add_cart_quantity_plus_minus' );
 
function bbloomer_add_cart_quantity_plus_minus() {
   wc_enqueue_js( "
      $('form.cart').on( 'click', 'button.plus, button.minus', function() {
            var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } else {
                  qty.val( val + step );
               }
            } else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } else if ( val > 1 ) {
                  qty.val( val - step );
               }
            }
         });
   " );
}

/* Add plus minus to product qty input field */





// add_action( 'woocommerce_after_cart_table', 'add_gift_wrap_to_cart' );
 
// function add_gift_wrap_to_cart() {
// 	$output = '<div class="gift-wrap"><h4 class="gift-wrap__heading">Why not add that personal touch?</h4><p class="gift-wrap__content">Make your gift extra special by adding gift wrapping to your order for £2.00</p><a class="gift-wrap__btn button" href="/gift-wrap/">Add Gift Wrap</a></div>';
// 	echo  $output;
// }




add_action( 'wp_head', 'hide_quantity_field_with_css' );

function hide_quantity_field_with_css() {
    if ( is_product() && get_the_ID() == 633 || is_product() && get_the_ID() == 648 ) {
        ?>
        <style>
        .quantity {
            display: none !important;
        }
        </style>
        <?php
    }
}







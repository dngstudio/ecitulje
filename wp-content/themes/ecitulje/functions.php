<?php
/**
 * ecitulje functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ecitulje
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ecitulje_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ecitulje_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ecitulje, use a find and replace
		 * to change 'ecitulje' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ecitulje', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Bootstrap menu', 'ecitulje' ),
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
				'ecitulje_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'ecitulje_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecitulje_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ecitulje_content_width', 640 );
}
add_action( 'after_setup_theme', 'ecitulje_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecitulje_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ecitulje' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ecitulje' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ecitulje_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ecitulje_scripts() {

	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/bootstrap.min.css', array(), 1.1 );
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.min.css', array(), 1.1 );
	
	wp_enqueue_style( 'sass', get_stylesheet_directory_uri() . '/main.css', array(), 1.1 );

	wp_enqueue_style( 'ecitulje-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ecitulje-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ecitulje-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


	wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.6.0.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'masonry','https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'steps', get_template_directory_uri() . '/js/jquery.steps.min.js', array( 'jquery' ),'',true );

	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/scripts.js', array( 'jquery' ),'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ecitulje_scripts' );

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


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond&family=Roboto+Condensed:wght@700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );



// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
// Umrlice Post Type
function create_posttype() {
 
    register_post_type( 'objave',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Objave' ),
                'singular_name' => __( 'Objava' ),
				'add_new'             => __( 'Dodaj novu'),
				'edit_item'           => __( 'Uredi objavu'),
				'all_items'           => __( 'Sve objave'),
				'featured_image'      => __( 'Slika pokojnika'),
				'set_featured_image'  => __( 'Dodaj sliku'),
            ),
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'comments'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'objave'),
            'show_in_rest' => true,
			'taxonomies'          => array( 'tipovi', 'mesta' ),
        	'hierarchical'        => true,
			'menu_icon'           => 'dashicons-plus',
			'show_in_admin_bar'   => true,
 
        )
    );
}

add_theme_support( 'post-thumbnails' );
add_image_size( 'full-img', 220, 180 ); // Soft Crop Mode


add_action( 'init', 'custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function custom_taxonomy() {
 
  $labelsTipovi = array(
    'name' => _x( 'Tipovi', 'taxonomy general name' ),
    'singular_name' => _x( 'Tip', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'Svi tipovi' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Uredi tip' ), 
    'update_item' => __( 'Ažuriraj tip' ),
    'add_new_item' => __( 'Dodaj novi tip' ),
    'new_item_name' => __( 'Novi tip' ),
    'menu_name' => __( 'Tipovi' ),
  ); 	
 
  register_taxonomy('tipovi',array('objave'), array(
    'hierarchical' => true,
    'labels' => $labelsTipovi,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tip' ),
  ));


   
  $labelsMesto = array(
    'name' => _x( 'Mesta', 'taxonomy general name' ),
    'singular_name' => _x( 'Mesto', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'Sva mesta' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Uredi mesto' ), 
    'update_item' => __( 'Ažuriraj mesto' ),
    'add_new_item' => __( 'Dodaj novo mesto' ),
    'new_item_name' => __( 'Novo mesto' ),
    'menu_name' => __( 'Mesta' ),
  ); 	
 
  register_taxonomy('mesto',array('objave'), array(
    'hierarchical' => true,
    'labels' => $labelsMesto,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'mesto' ),
  ));
}


function comment_terms($arg) {
   
	$arg['comment_notes_after'] = "<p class='comment-policy'>Ovo polje služi isključivo za objavljivanje saučešća i poruke podrške porodici preminulog. Komentari moraju da budu u skladu sa našim <a href='pravila-i-uslovi-koriscenja'>uslovima korišćenja</a>.</p>";
    $arg['submit_button'] = '<button class="btn btn-primary">Pošaljite izjavu</button>';
    $arg['title_reply'] = 'Izjavite saučešće';
	return $arg;
}
add_filter('comment_form_defaults', 'comment_terms');
  

add_filter( 'comment_form_fields', 'custom_comment_field' );
function custom_comment_field( $fields ) {
	$comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];

    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['comment']);
    unset($fields['cookies']);
 
    $fields['author'] = '<p class="comment-form-author"><label for="author"></span></label><input type="text" id="author" name="author" require="required" placeholder="Ime i prezime"></p>';
    $fields['comment'] = '<p class="comment-form-comment"><label for="comment"></span></label><textarea id="comment" name="comment" required="required" placeholder="Vaša izjava" style="width:100%" rows=3></textarea></p>';
    return $fields;

}

// The shortcode function
function publish_form() { 

	get_template_part( 'template-parts/content', 'publish' );

	 
	}
	// Register shortcode
add_shortcode('publish_form', 'publish_form'); 





function filter_projects() {
	$mytax = $_POST['tipovi'];
  
	$ajaxposts = new WP_Query([
	  'post_type' => 'objava',
	  'posts_per_page' => -1,
	  'category_name' => $mytax,
	  'orderby' => 'menu_order', 
	  'order' => 'desc',
	]);
	$response = '';
  
	if($ajaxposts->have_posts()) {
	  while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$response .= get_template_part('templates/_components/project-list-item');
	  endwhile;
	} else {
	  $response = 'empty';
	}
  
	echo $response;
	exit;
  }
  add_action('wp_ajax_filter_projects', 'filter_projects');
  add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');
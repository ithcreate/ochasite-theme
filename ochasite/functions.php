<?php    
/**
 * ochasite functions and definitions
 *
 * @package ochasite
 */
 
if ( ! function_exists( 'ochasite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ochasite_setup() {
	global $content_width; 
    if ( ! isset( $content_width ) )
		$content_width = 855; /* pixels */
		
	load_theme_textdomain( 'ochasite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 255,
		'flex-height' => true,
	) );
	add_theme_support( 'title-tag' );		
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ochasite' ),
		'footer' => 'フッターメニュー',
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // ochasite_setup
add_action( 'after_setup_theme', 'ochasite_setup' );


function ochasite_widgets_init() { 
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'ochasite' ),
		'description'   => __( 'Appears on blog page sidebar', 'ochasite' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside>',	
		'after_widget'  => '</aside>',	
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Widget', 'ochasite' ),
		'description'   => __( 'Appears on header of site', 'ochasite' ),
		'id'            => 'header-widget',
		'before_widget' => '<div class="headerarea">',	
		'after_widget'  => '</div>',	
		'before_title'  => '<h3 class="hdrtitle">',
		'after_title'   => '</h3>',		
	) );	
	
}
add_action( 'widgets_init', 'ochasite_widgets_init' );


function ochasite_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Roboto, trsnalate this to off, do not
		* translate into your own language.
		*/
		$roboto = _x('on','roboto:on or off','ochasite');	
		
		if('off' !== $roboto ){
			$font_family = array();			
			if('off' !== $roboto){
				$font_family[] = 'Roboto:300,400,600,700,800,900';
			}						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}

function ochasite_scripts() {
//	wp_enqueue_style( 'ochasite-font', ochasite_font_url(), array());
	wp_enqueue_style( 'ochasite-basic-style', get_stylesheet_uri() );	
//	wp_enqueue_style( 'ochasite-responsive', get_template_directory_uri().'/css/responsive.css');		
//	wp_enqueue_style( 'ochasite-default', get_template_directory_uri().'/css/default.css');
//	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
//	wp_enqueue_script( 'ochasite-custom', get_template_directory_uri() . '/js/custom.js' );
	wp_enqueue_style( 'oshasite-reset', get_template_directory_uri().'/css/reset.css');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ochasite_scripts' );

function ochasite_ie_stylesheet(){
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('ochasite-ie', get_template_directory_uri().'/css/ie.css', array( 'ochasite-style' ), '20161109' );
	wp_style_add_data('ochasite-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'ochasite-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'ochasite-style' ), '20161109' );
	wp_style_add_data( 'ochasite-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'ochasite-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'ochasite-style' ), '20161109' );
	wp_style_add_data( 'ochasite-ie7', 'conditional', 'lt IE 8' );
	}
add_action('wp_enqueue_scripts','ochasite_ie_stylesheet');

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * remove <div class=“textwidget”> from text-widget
 */

add_action( 'widgets_init', 'register_my_widgets' );


function register_my_widgets() {
    register_widget( 'My_Text_Widget' );
}

class My_Text_Widget extends WP_Widget_Text {
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
        $text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
        echo $before_widget;
        if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } ?>
            <?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?>
        <?php
        echo $after_widget;
    }
}




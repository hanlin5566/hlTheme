<?php
/**
 * huhanlin functions and definitions
 */

/**
 * Table of Functions:
 *
 * 
 */
//	Set the content width
//	=================================================================

	if ( ! isset( $content_width ) ) {
		$content_width = 640; /* pixels */
	}

//	Enable WordPress features.
//	=================================================================

	if ( ! function_exists( 'huhanlin_setup' ) ) :

	function huhanlin_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'huhanlin', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Title tag
		add_theme_support( 'title-tag' );

		//Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		
		// default thumb size
		set_post_thumbnail_size(125, 125, true);
		
		// Thumbnail sizes
		add_image_size( 'post-thumb-1170', 1170, 9999, true );
		add_image_size( 'post-thumb-750', 750, 9999, true );
		add_image_size( 'post-thumb-450', 450, 9999, true );
		add_image_size( 'post-thumb-290', 290, 9999, true );
		add_image_size( 'post-thumb-200', 200, 9999, true );
		add_image_size( 'post-thumb-100', 100, 9999, true );
		

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'huhanlin' ),
		) );
		
		// This theme uses wp_nav_menu() in Footer location.
		register_nav_menus( array(
			'footer' => __( 'Footer Menu', 'huhanlin' ),
		) );

		// html5 comment support
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		// Enable support for Post Formats.
		
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'huhanlin_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
	endif; // huhanlin_setup
	add_action( 'after_setup_theme', 'huhanlin_setup' );

//	Register widget area.
//	=================================================================

	function huhanlin_widgets_init() {
		
		register_sidebar( array(
			'name'          => __( 'Sidebar Primary', 'huhanlin' ),
			'id'            => 'sidebar-primary',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
		register_sidebar( array(
			'name'          => __( 'Sidebar Right', 'huhanlin' ),
			'id'            => 'sidebar-right',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
		register_sidebar( array(
			'name'          => __( 'Footer One', 'huhanlin' ),
			'id'            => 'footer-01',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
		register_sidebar( array(
			'name'          => __( 'Footer Two', 'huhanlin' ),
			'id'            => 'footer-02',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
		register_sidebar( array(
			'name'          => __( 'Footer Three', 'huhanlin' ),
			'id'            => 'footer-03',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}

	add_action( 'widgets_init', 'huhanlin_widgets_init' );

//	Enqueue scripts and styles.
//	=================================================================
	
	require get_template_directory() . '/libs/scripts.php';


//	Implement the Custom Header feature.
//	=================================================================

	// require get_template_directory() . '/libs/custom-header.php';

//	Custom template tags for this theme.
//	=================================================================

	require get_template_directory() . '/libs/template-tags.php';

//	Custom functions that act independently of the theme templates.
//	=================================================================

	require get_template_directory() . '/libs/extras.php';

//	Customizer additions.
//	=================================================================

	require get_template_directory() . '/libs/customizer.php';

//	Load Jetpack compatibility file.
//	=================================================================

	require get_template_directory() . '/libs/jetpack.php';


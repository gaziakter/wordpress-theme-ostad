<?php 

// harry theme support 
function harry_theme_support(){

    /**  thumbnail */
    add_theme_support( 'post-thumbnails' );

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );


    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );


    add_theme_support( 'post-formats', array( 
        'image', 
        'video', 
        'audio', 
        'gallery', 
        'quote' 
    ));

    register_nav_menus(
        array(
            'main-menu' => __('Main Menu','harry'),
            'side-menu' => __('Side Menu','harry'),
            'footer-menu' => __('Footer Menu','harry'),
        )
    );


    remove_theme_support( 'widgets-block-editor' );


}

add_action('after_setup_theme','harry_theme_support');


// harry_widgets
function harry_widgets(){

    register_sidebar( array(
		'name'          => __( 'Footer Widget 01', 'harry' ),
		'id'            => 'footer-widget-01',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Widget 02', 'harry' ),
		'id'            => 'footer-widget-02',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Widget 03', 'harry' ),
		'id'            => 'footer-widget-03',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Widget 04', 'harry' ),
		'id'            => 'footer-widget-04',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'harry_widgets' );






// nec files 
include_once('inc/common/scripts.php');

if ( class_exists( 'Kirki' ) ) {
    include_once('inc/harry-kirki.php');
}

include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
include_once('inc/breadcrumb.php');
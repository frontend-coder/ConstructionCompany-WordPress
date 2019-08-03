<?php


function construction_scripts() {
	wp_enqueue_style( 'construction-style', get_stylesheet_uri() );
wp_enqueue_style( 'construction-libsmincsss', get_template_directory_uri() . '/assets/css/libs.min.css');
wp_enqueue_style( 'construction-calculatemincss', get_template_directory_uri() . '/assets/css/calculate.min.css');


	wp_deregister_script( 'jquery');
wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),'',true);
wp_enqueue_script( 'jquery');
wp_enqueue_script( 'construction-mainjs', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), '', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'construction_scripts' );

?>
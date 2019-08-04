<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function construction_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'construction' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Активируйте здесь виджеты.', 'construction' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Подвал №4', 'construction' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Активируйте здесь виджеты.', 'construction' ),
		'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer_title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Подвал №3', 'construction' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Активируйте здесь виджеты.', 'construction' ),
		'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer_title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Подвал №2', 'construction' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Активируйте здесь виджеты.', 'construction' ),
		'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer_title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Подвал №1', 'construction' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Активируйте здесь виджеты.', 'construction' ),
		'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer_title">',
		'after_title'   => '</h3>',
	) );









}
add_action( 'widgets_init', 'construction_widgets_init' );
























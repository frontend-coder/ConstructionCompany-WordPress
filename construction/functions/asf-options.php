<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));


acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки страницы 404',
		'menu_title'	=> '404',
		'parent_slug'	=> 'theme-general-settings',
	));


}
?>
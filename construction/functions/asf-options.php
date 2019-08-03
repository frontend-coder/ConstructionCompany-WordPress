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
		'page_title' 	=> 'Настройки шапки',
		'menu_title'	=> 'Шапка',
		'parent_slug'	=> 'theme-general-settings',
	));


	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки блока О нас',
		'menu_title'	=> 'О нас',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки блока Наша команда',
		'menu_title'	=> 'Наша команда',
		'parent_slug'	=> 'theme-general-settings',
	));

acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки блока Наши услуги',
		'menu_title'	=> 'Наши услуги',
		'parent_slug'	=> 'theme-general-settings',
	));

acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки блока Наши клиенты',
		'menu_title'	=> 'Наши клиенты',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки блока Наши работы',
		'menu_title'	=> 'Наши работы',
		'parent_slug'	=> 'theme-general-settings',
	));

acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки блока Отзывы о работе',
		'menu_title'	=> 'Отзывы',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки блока Контакты',
		'menu_title'	=> 'Контакты',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Подвал',
		'parent_slug'	=> 'theme-general-settings',
	));


}
?>
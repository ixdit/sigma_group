<?php
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'custom_theme_settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Настройка страницы Дома',
		'menu_title' => 'Настройка Дома',
		'parent_slug' => 'custom_theme_settings',
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Настройка страницы Бани',
		'menu_title' => 'Настройка Бани',
		'parent_slug' => 'custom_theme_settings',
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Настройка страницы Дома из бревна',
		'menu_title' => 'Настройка Дома из бревна',
		'parent_slug' => 'custom_theme_settings',
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Настройка страницы Авторские проекты',
		'menu_title' => 'Настройка Авторские проекты',
		'parent_slug' => 'custom_theme_settings',
	));
	acf_add_options_sub_page(array(
		'page_title' => 'Настройка AMO CRM',
		'menu_title' => 'Настройка AMO CRM',
		'parent_slug' => 'custom_theme_settings',
	));
//
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Базовая стоимость',
		'menu_title'	=> 'Базовая стоимость',
		'menu_slug'   => 'base_price_settings',
		'parent_slug' => 'edit.php?post_type=projects',
	));
//    acf_add_options_sub_page(array(
//        'page_title' 	=> 'Корректировка цен для бань и домов из бруса',
//        'menu_title'	=> 'Корректировка цен',
//        'parent_slug'	=> 'price_correction',
//        'parent_slug' => 'edit.php?post_type=projects',
//    ));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Инженерные коммуникации',
		'menu_title'	=> 'Инженерные коммуникации',
		'menu_slug'   => 'communications_settings',
		'parent_slug' => 'edit.php?post_type=projects',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Отделка фасада',
		'menu_title'	=> 'Отделка фасада',
		'menu_slug'   => 'exterior_finish_settings',
		'parent_slug' => 'edit.php?post_type=projects',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Внутренняя отделка стен',
		'menu_title'	=> 'Внутренняя отделка стен',
		'menu_slug'   => 'interior_finish_settings',
		'parent_slug' => 'edit.php?post_type=projects',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Дополнительные услуги',
		'menu_title'	=> 'Дополнительные услуги',
		'parent_slug'	=> 'additional_services_settings',
		'parent_slug' => 'edit.php?post_type=projects',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Комплектации',
		'menu_title'	=> 'Комплектации',
		'parent_slug'	=> 'additional_services_settings',
		'parent_slug' => 'edit.php?post_type=projects',
	));

}

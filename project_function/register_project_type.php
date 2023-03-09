<?php

add_action( 'init', 'register_projects_post_type' );
function register_projects_post_type() {

    register_taxonomy( 'catalog', [ 'projects' ], [
        'label'                 => 'Раздел проектов', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы проектов',
            'singular_name'     => 'Раздел проекта',
            'search_items'      => 'Искать Раздел проекта',
            'all_items'         => 'Все Разделы проектов',
            'parent_item'       => 'Родит. раздел проекта',
            'parent_item_colon' => 'Родит. раздел проекта:',
            'edit_item'         => 'Ред. Раздел проекта',
            'update_item'       => 'Обновить Раздел проекта',
            'add_new_item'      => 'Добавить Раздел проекта',
            'new_item_name'     => 'Новый Раздел проекта',
            'menu_name'         => 'Разделы проектов',
        ),
//        'description'           => 'Рубрики для раздела вопросов', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'show_in_rest'        => true,
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'projects', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ] );

    // тип записи - вопросы - faq
    register_post_type( 'projects', [
        'label'               => 'Проекты',
        'labels'              => array(
            'name'          => 'Проекты',
            'singular_name' => 'Проект',
            'menu_name'     => 'Проекты',
            'all_items'     => 'Все проекты',
            'add_new'       => 'Добавить проект',
            'add_new_item'  => 'Добавить новый проект',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать проект',
            'new_item'      => 'Новый проект',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_rest'        => true,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'             => array( 'slug'=>'projects/%catalog%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
        'has_archive'         => false,
        'query_var'           => true,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'taxonomies'          => array( 'catalog' ),
        'menu_position' => 4,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/protect_icon.png'
    ] );

}

## Отфильтруем ЧПУ произвольного типа
// фильтр: apply_filters( 'post_type_link', $post_link, $post, $leavename, $sample );
add_filter( 'post_type_link', 'catalog_permalink', 1, 2 );
function catalog_permalink( $permalink, $post ){

    // выходим если это не наш тип записи: без холдера %faqcat%
    if( strpos( $permalink, '%catalog%' ) === false )
        return $permalink;

    // Получаем элементы таксы
    $terms = get_the_terms( $post, 'catalog' );
    // если есть элемент заменим холдер
    if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) )
        $term_slug = array_pop( $terms )->slug;
    // элемента нет, а должен быть...
    else
        $term_slug = 'no-catalog';

    return str_replace( '%catalog%', $term_slug, $permalink );
}

// if( function_exists('acf_add_local_field_group') ):

// acf_add_local_field_group(array(
// 	'key' => 'group_62735f83d0440',
// 	'title' => 'Цены авторский проект',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_62736594f3fda',
// 			'label' => 'Тип проекта',
// 			'name' => 'project_type',
// 			'type' => 'select',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				'А' => 'А',
// 				'Б' => 'Б',
// 				'В' => 'В',
// 				'Г' => 'Г',
// 				'Д' => 'Д',
// 				'Е' => 'Е',
// 				'Ж' => 'Ж',
// 				'З' => 'З',
// 				'И' => 'И',
// 				'Авторский' => 'Авторский',
// 			),
// 			'default_value' => false,
// 			'allow_null' => 0,
// 			'multiple' => 0,
// 			'ui' => 0,
// 			'return_format' => 'value',
// 			'ajax' => 0,
// 			'placeholder' => '',
// 		),
// 		array(
// 			'key' => 'field_62735f83e3c71',
// 			'label' => 'Газоблок',
// 			'name' => 'project_price_gazoblok',
// 			'type' => 'number',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'min' => '',
// 			'max' => '',
// 			'step' => '',
// 		),
// 		array(
// 			'key' => 'field_62735f83e7744',
// 			'label' => 'Керамоблок',
// 			'name' => 'project_price_keramoblok',
// 			'type' => 'number',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'min' => '',
// 			'max' => '',
// 			'step' => '',
// 		),
// 		array(
// 			'key' => 'field_62735f83eb199',
// 			'label' => 'Кирпич',
// 			'name' => 'project_price_kirpich',
// 			'type' => 'number',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'min' => '',
// 			'max' => '',
// 			'step' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'projects',
// 			),
// 			array(
// 				'param' => 'post_taxonomy',
// 				'operator' => '==',
// 				'value' => 'catalog:authors_project',
// 			),
// 		),
// 	),
// 	'menu_order' => 1,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// 	'show_in_rest' => 0,
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_62735f8e2dc61',
// 	'title' => 'Цены авторский проект (старая цена)',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_62735f8e408f3',
// 			'label' => 'Газоблок',
// 			'name' => 'project_old_price_gazoblok',
// 			'type' => 'number',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'min' => '',
// 			'max' => '',
// 			'step' => '',
// 		),
// 		array(
// 			'key' => 'field_62735f8e443c3',
// 			'label' => 'Керамоблок',
// 			'name' => 'project_old_price_keramoblok',
// 			'type' => 'number',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'min' => '',
// 			'max' => '',
// 			'step' => '',
// 		),
// 		array(
// 			'key' => 'field_62735f8e47e61',
// 			'label' => 'Кирпич',
// 			'name' => 'project_old_price_kirpich',
// 			'type' => 'number',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'min' => '',
// 			'max' => '',
// 			'step' => '',
// 		),
// 		array(
// 			'key' => 'field_62735f8e4b998',
// 			'label' => 'Процент для лейбла',
// 			'name' => 'project_old_price_label_percent',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_62735f8e4f444',
// 			'label' => 'отключить скидку и старую цену',
// 			'name' => 'project_old_price_view',
// 			'type' => 'true_false',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '20',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'message' => '',
// 			'default_value' => 0,
// 			'ui' => 1,
// 			'ui_on_text' => '',
// 			'ui_off_text' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'projects',
// 			),
// 			array(
// 				'param' => 'post_taxonomy',
// 				'operator' => '==',
// 				'value' => 'catalog:authors_project',
// 			),
// 		),
// 	),
// 	'menu_order' => 2,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// 	'show_in_rest' => 0,
// ));

// endif;		
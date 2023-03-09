<?php

add_action( 'init', 'register_work_online_post_type' );
function register_work_online_post_type() {

    register_taxonomy( 'work_online_year', [ 'work_online' ], [
        'label'                 => 'Раздел стройка онлайн', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы стройка онлайн',
            'singular_name'     => 'Раздел стройка онлайн',
            'search_items'      => 'Искать Раздел стройка онлайн',
            'all_items'         => 'Все Разделы стройка онлайн',
            'parent_item'       => 'Родит. раздел стройка онлайн',
            'parent_item_colon' => 'Родит. раздел стройка онлайн:',
            'edit_item'         => 'Ред. Раздел стройка онлайн',
            'update_item'       => 'Обновить Раздел стройка онлайн',
            'add_new_item'      => 'Добавить Раздел стройка онлайн',
            'new_item_name'     => 'Новый Раздел стройка онлайн',
            'menu_name'         => 'Разделы стройка онлайн',
        ),
//        'description'           => 'Рубрики для раздела вопросов', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'show_in_rest'        => true,
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'work_online', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ] );

    // тип записи - стройка онлайн
    register_post_type( 'work_online', [
        'label'               => 'Стройка онлайн',
        'labels'              => array(
            'name'          => 'Стройка онлайн',
            'singular_name' => 'Стройка онлайн',
            'menu_name'     => 'Стройка онлайн',
            'all_items'     => 'Все записи',
            'add_new'       => 'Добавить запись',
            'add_new_item'  => 'Добавить новую запись',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать запись',
            'new_item'      => 'Новая запись',
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
        'rewrite'             => array( 'slug'=>'work_online/%work_online_year%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
        'has_archive'         => 'work_online_year',
        'query_var'           => true,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'taxonomies'          => array( 'work_online_year' ),
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/protect_icon.png'
    ] );

}

## Отфильтруем ЧПУ произвольного типа
// фильтр: apply_filters( 'post_type_link', $post_link, $post, $leavename, $sample );
add_filter( 'post_type_link', 'work_online_year_permalink', 1, 2 );
function work_online_year_permalink( $permalink, $post ){

    // выходим если это не наш тип записи: без холдера %faqcat%
    if( strpos( $permalink, '%work_online_year%' ) === false )
        return $permalink;

    // Получаем элементы таксы
    $terms = get_the_terms( $post, 'work_online_year' );
    // если есть элемент заменим холдер
    if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) )
        $term_slug = array_pop( $terms )->slug;
    // элемента нет, а должен быть...
    else
        $term_slug = 'no-posts';

    return str_replace( '%work_online_year%', $term_slug, $permalink );
}

add_action( 'pre_get_posts', 'work_online' );
function work_online( $query ) {

    if( !is_admin() && $query->is_main_query() && $query->is_tax('work_online_year') ){
        $query->set( 'posts_per_page', -1 );
//        $query->set( 'meta_key', 'project_s_doma' );
//        $query->set( 'orderby', 'meta_value_num' );
    }
}

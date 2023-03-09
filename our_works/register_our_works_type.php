<?php

add_action( 'init', 'register_our_works_post_type' );
function register_our_works_post_type() {

    register_taxonomy( 'our_works_year', [ 'our_works' ], [
        'label'                 => 'Раздел наши работы', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы наши работы',
            'singular_name'     => 'Раздел наши работы',
            'search_items'      => 'Искать Раздел наши работы',
            'all_items'         => 'Все Разделы наши работы',
            'parent_item'       => 'Родит. раздел наши работы',
            'parent_item_colon' => 'Родит. раздел наши работы:',
            'edit_item'         => 'Ред. Раздел наши работы',
            'update_item'       => 'Обновить Раздел наши работы',
            'add_new_item'      => 'Добавить Раздел наши работы',
            'new_item_name'     => 'Новый Раздел наши работы',
            'menu_name'         => 'Разделы наши работы',
        ),
//        'description'           => 'Рубрики для раздела вопросов', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'show_in_rest'        => true,
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'our_works', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ] );

    // тип записи - вопросы - faq
    register_post_type( 'our_works', [
        'label'               => 'Наши работы',
        'labels'              => array(
            'name'          => 'Наши работы',
            'singular_name' => 'Наша работа',
            'menu_name'     => 'Наши работы',
            'all_items'     => 'Все работы',
            'add_new'       => 'Добавить работу',
            'add_new_item'  => 'Добавить новую работу',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать работу',
            'new_item'      => 'Новая наша работа',
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
        'rewrite'             => array( 'slug'=>'our_works/%our_works_year%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
        'has_archive'         => 'our_works',
        'query_var'           => true,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'taxonomies'          => array( 'our_works_year' ),
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/protect_icon.png'
    ] );

}

## Отфильтруем ЧПУ произвольного типа
// фильтр: apply_filters( 'post_type_link', $post_link, $post, $leavename, $sample );
add_filter( 'post_type_link', 'our_works_year_permalink', 1, 2 );
function our_works_year_permalink( $permalink, $post ){

    // выходим если это не наш тип записи: без холдера %faqcat%
    if( strpos( $permalink, '%our_works_year%' ) === false )
        return $permalink;

    // Получаем элементы таксы
    $terms = get_the_terms( $post, 'our_works_year' );
    // если есть элемент заменим холдер
    if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) )
        $term_slug = array_pop( $terms )->slug;
    // элемента нет, а должен быть...
    else
        $term_slug = 'no-posts';

    return str_replace( '%our_works_year%', $term_slug, $permalink );
}

add_action( 'pre_get_posts', 'our_works' );
function our_works( $query ) {

    if( !is_admin() && $query->is_main_query() && $query->is_tax('our_works_year') ){
        $query->set( 'posts_per_page', -1 );
//        $query->set( 'meta_key', 'project_s_doma' );
//        $query->set( 'orderby', 'meta_value_num' );
    }
}

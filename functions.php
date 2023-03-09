<?php
/**
 * sg-2site functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sg-2site
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ix_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sg-2site, use a find and replace
		* to change 'ix' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ix', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		[
			'menu_top' => esc_html__( 'Топ меню', 'ix' ),
		]
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ix_custom_background_args',
			[
				'default-color' => 'ffffff',
				'default-image' => '',
			]
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		[
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		]
	);
}

add_action( 'after_setup_theme', 'ix_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ix_widgets_init() {
	register_sidebar(
		[
			'name'          => esc_html__( 'Sidebar', 'ix' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ix' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}

add_action( 'widgets_init', 'ix_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue_scripts.php';

/**
 * Register posts types
 * проекты
 * наши работы
 * стройка онлайн
 */
require get_template_directory() . '/project_function/register_project_type.php';
require get_template_directory() . '/our_works/register_our_works_type.php';
require get_template_directory() . '/work_online/register_work_online_type.php';

/**
 * Функции обработки проектов
 */
require get_template_directory() . '/project_function/project_function.php';

/**
 * Функции темы
 * главная
 */
require get_template_directory() . '/inc/home_page_function.php';

/**
 * доп функции темы
 */
require get_template_directory() . '/inc/admin/custom_theme_settings.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * удаление автогенерируемых svg
 */
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

/**
 * Доп функции темы
 * отладка
 * ревизии
 * отключаем создание миниатюр файлов для указанных размеров
 * транслитерация
 * переносим админбар вниз
 */

function pre( $str ) {
	echo '<pre>';
	print_r( $str );
	echo '</pre>';
}

function ix_revisions_to_keep( $revisions ) {
	return 3;
}

add_filter( 'wp_revisions_to_keep', 'ix_revisions_to_keep' );

function delete_intermediate_image_sizes( $sizes ) {
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}

add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );

function rus2translit( $string ) {
	$converter = [
		'а' => 'a', 'б' => 'b', 'в' => 'v',
		'г' => 'g', 'д' => 'd', 'е' => 'e',
		'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
		'и' => 'i', 'й' => 'y', 'к' => 'k',
		'л' => 'l', 'м' => 'm', 'н' => 'n',
		'о' => 'o', 'п' => 'p', 'р' => 'r',
		'с' => 's', 'т' => 't', 'у' => 'u',
		'ф' => 'f', 'х' => 'h', 'ц' => 'c',
		'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
		'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
		'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

		'А' => 'a', 'Б' => 'b', 'В' => 'v',
		'Г' => 'g', 'Д' => 'd', 'Е' => 'e',
		'Ё' => 'e', 'Ж' => 'zh', 'З' => 'z',
		'И' => 'i', 'Й' => 'y', 'К' => 'k',
		'Л' => 'l', 'М' => 'm', 'Н' => 'n',
		'О' => 'o', 'П' => 'p', 'Р' => 'r',
		'С' => 's', 'Т' => 't', 'У' => 'u',
		'Ф' => 'f', 'Х' => 'h', 'Ц' => 'c',
		'Ч' => 'ch', 'Ш' => 'sh', 'Щ' => 'sch',
		'Ь' => '\'', 'Ы' => 'y', 'Ъ' => '\'',
		'Э' => 'e', 'Ю' => 'yu', 'Я' => 'ya',
		' ' => '_', ' + ' => '_', '  ' => '_', '-' => '_', '+' => '',
	];

	return strtr( $string, $converter );
}

//Отключение стандартных CSS в HTML-коде
function ix_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'ix_filter_head');

//CSS для прилепления админки к нижнему краю страницы
function ix_move_admin_bar() {
	echo '
	<style type="text/css">
	html{margin-bottom:32px !important}
	* html body{margin-bottom:32px !important}
	#wpadminbar{top:auto !important;bottom:0}
	#wpadminbar .menupop .ab-sub-wrapper{bottom:32px;-moz-box-shadow:2px -2px 5px rgba(0,0,0,.2);-webkit-box-shadow:2px -2px 5px rgba(0,0,0,.2);box-shadow:2px -2px 5px rgba(0,0,0,.2)}
	@media screen and ( max-width:782px ){
		html{margin-bottom:46px !important}
		* html body{margin-bottom:46px !important}
		#wpadminbar{position:fixed}
		#wpadminbar .menupop .ab-sub-wrapper{bottom:46px}
	}
	</style>
	';
}

//add_action( 'admin_head', 'ix_move_admin_bar' ); // в админке
if (current_user_can('manage_options')) {
//    show_admin_bar(false);
	add_action( 'wp_head', 'ix_move_admin_bar' ); // на сайте
}

//if (is_user_logged_in()){
//    add_action( 'wp_head', 'ix_move_admin_bar' ); // на сайте
//}

// конец Доп функции темы

/**
 * Обрезка изображений
 */
function ix_get_img( $img_url, $w = '', $h = '', $crop = 'center' ) {

	$args = array(
		'src' => $img_url,
		'w' => $w,
		'h' => $h,
		'crop' => $crop,
	);
	$images_url = kama_thumb_src( $args );

	return $images_url;
}

function ix_get_img_url_for_id( $img_id, $w = '', $h = '', $crop = 'center' ) {

	$size = 'full';
	$img_url = wp_get_attachment_image_url( $img_id, $size );

	$args = array(
		'src' => $img_url,
		'w' => $w,
		'h' => $h,
		'crop' => $crop,
	);
	$images_url = kama_thumb_src( $args );

	return $images_url;
}

function ix_get_the_img( $url, $w, $h, $crop ) {
	echo ix_get_img( $url, $w, $h, $crop );
}

/**
 * Ограничение выбора опубликованными для acf
 */
// выборка только опубликованных записей
//add_filter( 'acf/fields/relationship/query', 'my_acf_fields_relationship_query', 10, 3 );
//function my_acf_fields_relationship_query( $args, $field, $post_id ) {
//
//	$args['post_status'] = 'publish';
//	$args['order']       = 'DESC';
//	$args['orderby']     = 'date';
//
//	return $args;
//}

// индивидуальные шаблоны для single страниц только для постов в таксе категории
add_filter( 'single_template', 'ix_single_template' );
function ix_single_template( $single ) {
	global $wp_query, $post;
	foreach ( (array) get_the_category() as $cat ) {
		if ( file_exists( get_template_directory() . '/single-' . $cat->slug . '.php' ) ) {
			return get_template_directory() . '/single-' . $cat->slug . '.php';
		} elseif ( file_exists( '/single-' . $cat->term_id . '.php' ) ) {
			return get_template_directory() . '/single-' . $cat->term_id . '.php';
		}
	}

	return $single;
}

/**
 * Правки в вид хлебных крошек
 */
add_filter( 'kama_breadcrumbs_args', function($args){
	return [
		       'sep'             => '  /  ', // ▸
	       ]
	       + $args;
} );

// данные для отладки крошек
//add_filter( 'kama_breadcrumbs_filter_elements', 'kama_breadcrumbs_filter_elms', 11, 3 );
//function kama_breadcrumbs_filter_elms( $elms, $class, $ptype ){
//	die( pre( $elms ) );
//}
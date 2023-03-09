<?php

/**
 * Enqueue scripts and styles.
 */

function ix_scripts() {

    //wp_enqueue_style( 'ix-font_Montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', array(), '1.0.0');

	wp_enqueue_style( 'ix-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array());
	wp_enqueue_style( 'ix-slick', get_template_directory_uri() . '/css/slick.css', array());
	wp_enqueue_style( 'ix-dropzon', get_template_directory_uri() . '/css/dropzon.css', array());
	wp_enqueue_style( 'ix-select2', get_template_directory_uri() . '/css/select2.css', array());
	wp_enqueue_style( 'ix-modal', get_template_directory_uri() . '/css/modal.css', array());
	wp_enqueue_style( 'ix-nouislider', get_template_directory_uri() . '/css/nouislider.css', array());
	wp_enqueue_style( 'ix-fancybox', get_template_directory_uri() . '/css/fancybox.css', array());
	wp_enqueue_style( 'ix-nice-select', get_template_directory_uri() . '/css/nice-select.css', array());
	wp_enqueue_style( 'ix-theme_style', get_template_directory_uri() . '/css/style.css', array());

    wp_enqueue_style( 'ix-style', get_stylesheet_uri(), array(), time() ); // мои стили

	if (! is_admin() ) {}
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'ix-nouislider', get_template_directory_uri() . '/js/nouislider.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-image-uploader', get_template_directory_uri() . '/js/image-uploader.min.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-wNumb', get_template_directory_uri() . '/js/wNumb.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-fancybox', get_template_directory_uri() . '/js/fancybox.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-slick', get_template_directory_uri() . '/js/slick.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-grid', get_template_directory_uri() . '/js/grid.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-jquery_validate', get_template_directory_uri() . '/js/jquery.validate.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-modal', get_template_directory_uri() . '/js/modal.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-mask_phone', get_template_directory_uri() . '/js/mask-phone.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-jquery_nice_select', get_template_directory_uri() . '/js/jquery.nice-select.js', array('jquery'),'1.0.0', true );
	wp_enqueue_script( 'ix-main', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.0.0', true );

	//wp_enqueue_script( 'ix-script', get_template_directory_uri() . '/js/script.js', array('jquery'),'1.0.0', true ); // мои скрипты


    wp_enqueue_script(
        'ix_loadmore',
        get_stylesheet_directory_uri() . '/js/loadmore.js',
        array( 'jquery' ),
        time() // не кэшируем файл, убираем эту строчку после завершение разработки
    );

    wp_localize_script(
        'ix_loadmore',
        'ix',
        array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
    );

    wp_localize_script(
        'ix-send',
        'send_object',
        array(
            'url'   => admin_url( 'admin-ajax.php' ),
//            'nonce' => wp_create_nonce( 'nonce_send_form' ),
//            'action' => 'send_form',
        )
    );


}
add_action( 'wp_enqueue_scripts', 'ix_scripts' );

add_action( 'admin_enqueue_scripts', function(){
    wp_enqueue_style( 'ix_wp_admin', get_template_directory_uri() .'/css/wp_admin.css','',time() );
}, 99 );
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sg-2site
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php the_field( 'custom_code_after_head', 'option' ); ?>
</head>
<?php the_field( 'custom_code_after_body', 'option' ); ?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php the_field( 'custom_code_before_body', 'option' ); ?>

<header class="site-header">
    <div class="container">
        <div class="site-header__top">
            <a href="<?php network_site_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" class="logo is-desktop">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-short.svg" alt="" class="logo is-mobile">
            </a>
            <div class="site-header__rating rating">
                <div class="rating__star">
                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="46" viewBox="0 0 49 46" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M24.505 0L16.4232 14.4416L0 17.5693L11.4244 29.6275L9.359 46L24.505 39.0105L39.641 46L37.5856 29.6275L49 17.5693L32.5869 14.4416L24.505 0Z"
                              fill="#EBD981"/>
                    </svg>
                    <span>
                        4.6
                    </span>
                </div>
                Рейтинг компании <br>
                на площадке Яндекс
            </div>
            <a href="#order-payment" rel="modal:open" class="site-header__calc">
                Отправить проект на просчет

                <span>
                    <svg class="icon" width="25" height="25">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#house"></use>
                    </svg>
                </span>
            </a>
            <div class="site-header__callback">
                <div class="site-header__online">
                    Пишите, мы онлайн
                </div>
                <div class="site-header__feedback">
                    <div class="site-header__social">
                        <a href="">
                            <svg width="27" height="27">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#telegram"></use>
                            </svg>
                        </a>

                        <a href="">
                            <svg width="27" height="27">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#whatsapp"></use>
                            </svg>
                        </a>
                    </div>
                    <a href="#callback-modal" rel="modal:open" class="btn btn-xs btn-border">
                        Заказать звонок
                    </a>
                </div>
            </div>
            <div class="site-header__right">
                <a href="tel:+78162150015" class="site-header__phone">8 (8162) 15-00-15</a>
                <a href="#?" class="site-header__city js-toggle-city-modal">
                    Великий Новгород
                </a>

                <div class="site-header__modal-city js-city-modal">
                    <p>Ваш город Великий Новгород?</p>

                    <div class="bottom">
                        <a href="">Да, верно</a>
                        <a href="#select-city" rel="modal:open">Выбрать другой</a>
                    </div>
                </div>
            </div>

            <div class="site-header__burger js-show-menu">
                <svg width="40" height="20">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#burger"></use>
                </svg>
            </div>
        </div>
        <div class="site-header__bottom">
            <div class="site-header__menu">
	            <?php
	            wp_nav_menu(
		            array(
			            'theme_location' => 'menu_top',
			            'menu_id'        => 'menu_top',
			            'container' => false
		            )
	            );
	            ?>
            </div>
            <a href="<?php the_field( 'ipoteka_page_link', 'option' ); ?>" class="site-header__badge">ИПОТЕКА/ГОСПОДДЕРЖКА</a>
            <form action="" class="site-header__search">
                <input type="text" placeholder="Поиск">
                <button type="submit">
                    <svg class="icon" width="14" height="14">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#search"></use>
                    </svg>
                </button>
            </form>
<!--            <a href="" class="site-header__account">-->
<!--                <span>-->
<!--                    <svg class="icon" width="20" height="20">-->
<!--                        <use xlink:href="images/svg-sprite.svg#user"></use>-->
<!--                    </svg>-->
<!--                </span>-->
<!--                <span class="text">Личный кабинет</span>-->
<!--            </a>-->
        </div>
    </div>
</header>

<div class="site-header-short js-header">
    <div class="container">
        <div class="site-header-short__row">
            <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-short.svg" alt="">
            </a>
            <div class="site-header__menu">
	            <?php
	            wp_nav_menu(
		            array(
			            'theme_location' => 'menu_top',
			            'menu_id'        => 'menu_top',
			            'container' => false
		            )
	            );
	            ?>
            </div>
            <a href="<?php the_field( 'ipoteka_page_link', 'option' ); ?>" class="site-header__badge">ИПОТЕКА/ГОСПОДДЕРЖКА</a>
            <form action="" class="site-header__search">
                <input type="text" placeholder="Поиск">
                <button type="submit">
                    <svg class="icon" width="14" height="14">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#search"></use>
                    </svg>
                </button>
            </form>
<!--            <a href="" class="site-header__account">-->
<!--                <svg class="icon" width="20" height="20">-->
<!--                    <use xlink:href="--><?php //echo get_template_directory_uri(); ?><!--/images/svg-sprite.svg#user"></use>-->
<!--                </svg>-->
<!--                Личный кабинет-->
<!--            </a>-->
        </div>
    </div>
</div>

<div class="site-mobile-bar js-menu">
    <div>
        <button type="button" class="js-show-menu">
            <svg width="25" height="25">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#close"></use>
            </svg>
        </button>
    </div>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu_top',
			'menu_id'        => 'menu_top',
			'container' => false
		)
	);
	?>
</div>
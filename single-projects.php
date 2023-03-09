<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ix
 */

get_header();

$project_price_gazoblok   = number_format_i18n( get_field( 'project_price_gazoblok' ), $decimals = 0 );
$project_price_keramoblok = number_format_i18n( get_field( 'project_price_keramoblok' ), $decimals = 0 );
$project_price_kirpich    = number_format_i18n( get_field( 'project_price_kirpich' ), $decimals = 0 );

$project_s_doma        = get_field( 'project_s_doma' );
$project_s_zastrojki   = get_field( 'project_s_zastrojki' );
$project_s_fasada      = get_field( 'project_s_fasada' );
$project_number_floors = get_field( 'project_number_floors' );
if ( $project_number_floors == 1.5 ) {
	$project_number_floors = 15;
}
$project_number_bedrooms = get_field( 'project_number_bedrooms' );
$project_number_bathrooms = get_field( 'project_number_bathrooms' );

//$args_s_project = [
//	'project_s_zastrojki' => $project_s_zastrojki,
//	'project_s_fasada'    => $project_s_fasada,
//];

//старая цена и принудительное отключение

//старая цена
if ( get_field( 'project_old_price_gazoblok' ) ):
	$project_old_price_gazoblok = number_format_i18n( (float) get_field( 'project_old_price_gazoblok' ) );
endif;
if ( get_field( 'project_old_price_keramoblok' ) ):
	$project_old_price_keramoblok = number_format_i18n( (float) get_field( 'project_old_price_keramoblok' ) );
endif;
if ( get_field( 'project_old_price_kirpich' ) ):
	$project_old_price_kirpich = number_format_i18n( (float) get_field( 'project_old_price_kirpich' ) );
endif;

//процент для лейбла
$old_price_label_percent = get_field( 'project_old_price_label_percent', );

//триггер
$project_old_price_view = get_field( 'project_old_price_view' );

if ( ! $project_old_price_view && $old_price_label_percent && ( $project_old_price_gazoblok || $project_old_price_keramoblok || $project_old_price_kirpich ) ) {

	$sale_label_text = get_field( 'sale_label_text', 'option' );
	$sale_label      = '<div class="portfolio-category__title">' . $sale_label_text . ' ' . $old_price_label_percent . ' %</div>';
} else {
	$sale_label = '';
}

$blok_garantii     = get_field( 'blok_garantii_house', 'option' );
$blok_izgotovlenie = get_field( 'blok_izgotovlenie_house', 'option' );
$blok_strahovka    = get_field( 'blok_strahovka_house', 'option' );

$gb_kit = get_field( 'gb_kit', 'option' );
$kb_kit = get_field( 'kb_kit', 'option' );
$krp_kit = get_field( 'krp_kit', 'option' );


?>

    <main class="site-main">

        <div class="page single-lg">
            <div class="container">
                <div class="page-breadcrumb">
	                <?php do_action( 'echo_kama_breadcrumbs' ) ?>
                </div>

                <div class="page-head">
                    <h1 class="page-title h3"><?php the_title(); ?></h1>
                </div>

                <div class="single-lg__wrap mb-70">

                    <?php //get_the_project_info(); ?>

                    <div class="single-lg__picture">
                        <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="">
                            <img src="<?php echo kama_thumb_src( 'w=1000 &h=575 &crop=center' ); ?>" alt="" width="1000" height="575">

	                        <?php
                            // скидка
                                if ( $sale_label ) :
                                    echo $sale_label;
                                endif;
	                        ?>

                            <span class="project-full__save">
                            <svg width="19" height="15">
                              <use xlink:href="<?php echo get_template_directory_uri();  ?>/images/svg-sprite.svg#saves"></use>
                            </svg>
                        </span>
                        </a>
                    </div>

                    <div class="single-lg__aside">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="title">Характеристики:</div>
                                <div class="list">
                                    <?php if ($project_s_doma) : ?>
                                    <div class="item">
                                        <span>Площадь</span>
                                        <div class="item__wrap">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/icons/single-prop/1-black.svg" alt="">
                                            <span>Площадь</span>
                                        </span>
                                            <span><?php echo  $project_s_doma; ?>м<sup>2</sup></span>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <?php if ($project_number_floors) : ?>
                                    <div class="item">
                                        <span>Этажность</span>
                                        <div class="item__wrap">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/icons/single-prop/2-black.svg" alt="">
                                            <span>Этажность</span>
                                        </span>
                                            <span><?php echo $project_number_floors; ?> эт.</span>
                                        </div>
                                    </div>
                                    <?php endif; ?>

	                                <?php if ($project_number_bedrooms) : ?>
                                    <div class="item">
                                        <span>Количество спален</span>
                                        <div class="item__wrap">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/icons/single-prop/3-black.svg" alt="">
                                            <span>Количество спален</span>
                                        </span>
                                            <span><?php echo $project_number_bedrooms; ?> шт.</span>
                                        </div>
                                    </div>
                                    <?php endif; ?>

		                            <?php if ($project_number_bathrooms) : ?>
                                    <div class="item">
                                        <span>Количество санузлов</span>
                                        <div class="item__wrap">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/icons/single-prop/4-black.svg" alt="">
                                            <span>Количество санузлов</span>
                                        </span>
                                            <span><?php echo $project_number_bathrooms; ?> шт.</span>
                                        </div>
                                    </div>
		                            <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="badge-items">
                                    <div class="badge-item">Гарантия 5 лет</div>
                                    <div class="badge-item">Срок изготовления от 5 мес.</div>
                                </div>

                                <div class="title">
                                    Цена строительства:
                                </div>

                                <div class="categories">

                                    <div>
                                        <input type="radio" name="category" id="category-1" checked>
                                        <label for="category-1">
                                            Газоблок
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/category.png" alt="">
                                            <span class="price"><?php echo $project_price_gazoblok; ?> руб.</span>
                                            <?php if(get_field( 'project_old_price_gazoblok')) : ?>
                                                <span class="price-sm"><?php echo $project_old_price_gazoblok; ?> руб.</span>
                                            <?php endif; ?>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" name="category" id="category-2">
                                        <label for="category-2">
                                            Керамоблок
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/category.png" alt="">
                                            <span class="price"><?php echo $project_price_keramoblok; ?> руб.</span>
	                                        <?php if(get_field( 'project_old_price_keramoblok')) : ?>
                                                <span class="price-sm"><?php echo $project_old_price_keramoblok; ?> руб.</span>
	                                        <?php endif; ?>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" name="category" id="category-3">
                                        <label for="category-3">
                                            Кирпич
                                            <img src="<?php echo get_template_directory_uri();  ?>/images/category.png" alt="">
                                            <span class="price"><?php echo $project_price_kirpich; ?> руб.</span>
	                                        <?php if(get_field( 'project_old_price_kirpich')) : ?>
                                                <span class="price-sm"><?php echo $project_old_price_kirpich; ?> руб.</span>
	                                        <?php endif; ?>
                                        </label>
                                    </div>

                                </div>

                                <a href="" class="btn btn-blue btn-block">ПОЛУЧИТЬ СМЕТУ</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Планировки и фасады</b></h2>
                    </div>

                    <div class="row gy-20">

                        <?php get_the_project_gallery(); ?>

                    </div>
                </div>

                <div class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Комплектация</b></h2>
                    </div>

                    <div class="mb-3">
                        <ul class="js-tab-controls single-lg__price-tabs" data-tabs="price">
                            <li>
                                <a href="#price-1" class="active">
                                    Газоблок
                                    <span><?php echo $project_price_gazoblok; ?> руб.</span>
                                </a>
                            </li>

                            <li>
                                <a href="#price-2" class="">
                                    Керамоблок
                                    <span><?php echo $project_price_keramoblok; ?> руб.</span>
                                </a>
                            </li>

                            <li>
                                <a href="#price-3" class="">
                                    Кирпич
                                    <span><?php echo $project_price_kirpich; ?> руб.</span>
                                </a>
                            </li>

                        </ul>

                        <div class="mb-3" id="price">

                            <div id="price-1" class="tab-panel active">
	                            <?php get_the_kit_item( 'gb'  ); ?>
                            </div>

                            <div id="price-2" class="tab-panel ">
	                            <?php get_the_kit_item( 'kb'  ); ?>
                            </div>

                            <div id="price-3" class="tab-panel ">
	                            <?php get_the_kit_item( 'krp'  ); ?>
                            </div>

                        </div>

                        <div class="home-question__row is-big">
                            <div class="home-question__left is-big">
                                <div class="questions-title">Дополнительные опции</div>


                                <div class="question">
                                    <div class="question__head active">
                                        <span>Инженерные коммуникации 1</span>

                                        <svg width="25" height="12">
                                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/images/svg-sprite.svg#arrow-down"></use>
                                        </svg>
                                    </div>
                                    <div class="question__content" style="display: block">
                                        <table>
                                            <thead>
                                            <th>Наименование</th>
                                            <th>Виды материалов и работ</th>
                                            <th>Стоимость</th>
                                            <th>Добавить</th>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-1" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-2" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-3" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-4" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="question">
                                    <div class="question__head ">
                                        <span>Инженерные коммуникации 2</span>

                                        <svg width="25" height="12">
                                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/images/svg-sprite.svg#arrow-down"></use>
                                        </svg>
                                    </div>
                                    <div class="question__content" style="display: ">
                                        <table>
                                            <thead>
                                            <th>Наименование</th>
                                            <th>Виды материалов и работ</th>
                                            <th>Стоимость</th>
                                            <th>Добавить</th>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-1" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-2" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-3" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-4" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="question">
                                    <div class="question__head ">
                                        <span>Инженерные коммуникации 3</span>

                                        <svg width="25" height="12">
                                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/images/svg-sprite.svg#arrow-down"></use>
                                        </svg>
                                    </div>
                                    <div class="question__content" style="display: ">
                                        <table>
                                            <thead>
                                            <th>Наименование</th>
                                            <th>Виды материалов и работ</th>
                                            <th>Стоимость</th>
                                            <th>Добавить</th>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-1" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-2" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-3" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-4" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="question">
                                    <div class="question__head ">
                                        <span>Инженерные коммуникации 4</span>

                                        <svg width="25" height="12">
                                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/images/svg-sprite.svg#arrow-down"></use>
                                        </svg>
                                    </div>
                                    <div class="question__content" style="display: ">
                                        <table>
                                            <thead>
                                            <th>Наименование</th>
                                            <th>Виды материалов и работ</th>
                                            <th>Стоимость</th>
                                            <th>Добавить</th>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-1" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-2" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-3" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="https://picsum.photos/200/200" alt="">
                                                </td>
                                                <td>
                                                    <p>
                                                        <b>Электроснабжение</b>
                                                    </p>
                                                    <ul>
                                                        <li>- Сертифицированный медный
                                                            кабель ВВГнг ГОСТ (сечения 3*2,5
                                                            ;
                                                            3*1,5)
                                                        </li>
                                                        <li>- Штробление;</li>
                                                        <li>- Укладка и монтаж кабеля в
                                                            кабель-канала до точек
                                                            подключения;
                                                        </li>
                                                        <li>- Вывод точек под розетки,
                                                            выключатели, светильники;
                                                        </li>
                                                        <li>- Монтаж и подключение
                                                            электрощита, автоматов;
                                                        </li>
                                                        <li>- Заземление.</li>
                                                    </ul>
                                                </td>
                                                <td><b class="price">396 000 руб.</b></td>
                                                <td>
                                                    <a class="add btn-table js-check__add" href="" data-price="20020"
                                                       data-prop="prop-4" data-title="Канализация" style="">
                                                        Добавить
                                                    </a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="home-question__right is-big">
                                <div class="consultation">
                                    <div class="consultation-title">Получить бесплатную консультацию</div>
                                    <div class="consultation-text">
                                        Наш менеджер ответит на Ваши любые вопросы. Обращайтесь!
                                    </div>

                                    <div class="site-header__online consultation-online">
                                        Сотрудник онлайн
                                    </div>

                                    <img src="https://picsum.photos/250/250" alt="" class="consultation-image">

                                    <div class="consultation-name">Андрей Петров</div>

                                    <div class="consultation-value">Менеджер по проектам</div>

                                    <a href="tel:+78162150015" class="consultation-phone">
                                        <svg width="16" height="16">
                                            <use xlink:href="images/svg-sprite.svg#phone"></use>
                                        </svg>
                                        8 (8162) 15-00-15
                                    </a>

                                    <form action="" class="js-phone-feedback-form">
                                        <div>
                                            <input type="text" class="consultation-input js-phone-mask" required
                                                   name="name"
                                                   placeholder="+7 (___) ___-__-__">
                                        </div>

                                        <button type="submit" class="btn btn-lg btn-blue btn-block">Получить
                                            консультацию
                                        </button>
                                    </form>
                                </div>

                                <div class="result-calculator">
                                    <div class="consultation-name">Дом по проекту Х-16</div>

                                    <form class="panel product-check js-check">
                        <span class="d-block mb-25">
                            Комплектация:
                            <span class="js-check__main-name">Газоблок</span>
                            <input type="hidden" class="project_material" name="project_set_material" value="Газоблок">
                        </span>
                                        <div class="gy-20 js-check__prices">
                                            <div class="col-item">
                                                Стоимость: <b class="js-check__main-price">2 445 751 </b> руб.
                                            </div>
                                            <div class="col-item js-check__props none">Дополнения:
                                                <ul></ul>
                                            </div>
                                            <div class="col-item">
                                                Итого:
                                                <b class="js-check__price" data-price="2445751">
                                                    2&nbsp;445&nbsp;751 </b>
                                                руб.
                                            </div>
                                            <div class="col-item">
                                                <a class="btn btn-block btn-blue js-check__show-form" href="">
                                                    Получить смету
                                                </a>
                                            </div>
                                        </div>
                                        <div class="none js-check__form">
                                            <div class="gy-20">
                                                <div class="col-item">
                                                    <input name="contact_name" class="form-input" type="text"
                                                           placeholder="Ваше имя *"/>
                                                </div>
                                                <div class="col-item">
                                                    <input name="contact_phone" class="form-input" type="text"
                                                           placeholder="Ваш телефон* "/>
                                                </div>
                                                <div class="col-item">
                                                    <input name="contact_mail" class="form-input" type="text"
                                                           placeholder="Ваш E-mail"/>
                                                </div>
                                                <div class="col-item">
                                                    <input name="project_place" class="form-input" type="text"
                                                           placeholder="Место строительства"/>
                                                </div>

                                                <div class="mb-25">
                                                    <label class="d-flex align-items-center">
                                                        <input name="whatsapp" class="mr-2" type="checkbox"/><span>Продублировать в WhatsApp</span>
                                                    </label>
                                                </div>

                                                <input class="js-check__message" type="hidden"/>
                                            </div>

                                            <div class="gy-20">
                                                <div>
                                                    <button type="submit" class="btn btn-blue btn-block btn_submit"
                                                            value="Отправить">Отправить
                                                    </button>
                                                </div>
                                                <div>
                                                    <button type="reset"
                                                            class="btn btn-green btn-block js-check__show-prices"
                                                            value="Отмена">Отмена
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feedback-container mb-70 home-question__feedback is-big">
                <div class="container">
                    <div class="feedback-user">
                        <div class="content">
                            <div class="title h3">
                                <b>Получить консультацию специалиста</b>
                            </div>

                            <form action="" class="form js-phone-feedback-mobile">
                                <div class="form-group">
                                    <input type="text" placeholder="Ваше имя" class="form-input-solid">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="+7 (___) ___-__-__"
                                           class="form-input-solid js-phone-mask">
                                </div>
                                <button type="submit" class="btn btn-green btn-block">Получить консультацию</button>
                            </form>
                        </div>
                        <div class="img">
                            <img src="images/feedback.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-70 single-lg__why">
                <div class="container">
                    <div class="mb-25">
                        <h2 class="h3"><b>Что вы можете сделать уже сейчас:</b></h2>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="item">
                                Заказать строительство
                                <div>
                                    <svg width="16" height="27" viewBox="0 0 16 27" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1401 14.89L2.02002 27L0 24.98L12.1201 12.87H14.1401V14.89ZM14.1401 12.87L15.1499 13.88L14.1401 14.89V12.87ZM2.22998 0.950012L14.1401 12.87L12.1201 14.89L0.209961 2.96997L2.22998 0.950012Z"
                                              fill="#41556C"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="item">
                                Заказать строительство
                                <div>
                                    <svg width="16" height="27" viewBox="0 0 16 27" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1401 14.89L2.02002 27L0 24.98L12.1201 12.87H14.1401V14.89ZM14.1401 12.87L15.1499 13.88L14.1401 14.89V12.87ZM2.22998 0.950012L14.1401 12.87L12.1201 14.89L0.209961 2.96997L2.22998 0.950012Z"
                                              fill="#41556C"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="item">
                                Заказать строительство
                                <div>
                                    <svg width="16" height="27" viewBox="0 0 16 27" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1401 14.89L2.02002 27L0 24.98L12.1201 12.87H14.1401V14.89ZM14.1401 12.87L15.1499 13.88L14.1401 14.89V12.87ZM2.22998 0.950012L14.1401 12.87L12.1201 14.89L0.209961 2.96997L2.22998 0.950012Z"
                                              fill="#41556C"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="item">
                                Заказать строительство
                                <div>
                                    <svg width="16" height="27" viewBox="0 0 16 27" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1401 14.89L2.02002 27L0 24.98L12.1201 12.87H14.1401V14.89ZM14.1401 12.87L15.1499 13.88L14.1401 14.89V12.87ZM2.22998 0.950012L14.1401 12.87L12.1201 14.89L0.209961 2.96997L2.22998 0.950012Z"
                                              fill="#41556C"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Похожие проекты</b></h2>
                    </div>

                    <div class="js-project-mobile-3">

                        <div class="item">
                            <div class="project-full">

                                <a href="" class="project-full-thumb">
                                    <img src="https://picsum.photos/600/600" alt="">

                                    <span class="project-full__save">
            <svg width="19" height="15">
              <use xlink:href="images/svg-sprite.svg#saves"></use>
            </svg>
        </span>
                                </a>
                                <div class="project-full-content">
                                    <a href="" class="project-full-title">Проект «Юрма»</a>
                                    <div class="project-full-props">

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-1.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-2.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-3.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-4.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                    </div>
                                    <div class="project-full-bottom">
                                        <div class="project-full-price">
                                            <span>от</span> 4 723 020 <span>руб.</span>
                                        </div>
                                        <a href="" class="btn btn-blue btn-md">Подробнее</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="project-full">

                                <a href="" class="project-full-thumb">
                                    <img src="https://picsum.photos/600/600" alt="">

                                    <span class="project-full__save">
            <svg width="19" height="15">
              <use xlink:href="images/svg-sprite.svg#saves"></use>
            </svg>
        </span>
                                </a>
                                <div class="project-full-content">
                                    <a href="" class="project-full-title">Проект «Юрма»</a>
                                    <div class="project-full-props">

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-1.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-2.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-3.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-4.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                    </div>
                                    <div class="project-full-bottom">
                                        <div class="project-full-price">
                                            <span>от</span> 4 723 020 <span>руб.</span>
                                        </div>
                                        <a href="" class="btn btn-blue btn-md">Подробнее</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="project-full">

                                <a href="" class="project-full-thumb">
                                    <img src="https://picsum.photos/600/600" alt="">

                                    <span class="project-full__save">
            <svg width="19" height="15">
              <use xlink:href="images/svg-sprite.svg#saves"></use>
            </svg>
        </span>
                                </a>
                                <div class="project-full-content">
                                    <a href="" class="project-full-title">Проект «Юрма»</a>
                                    <div class="project-full-props">

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-1.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-2.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-3.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                        <div class="project-full-prop">
                    <span>
                        <img src="images/icons/project-prop-4.svg" alt="">
                        Площадь
                    </span>
                                            <span>120 м2</span>
                                        </div>

                                    </div>
                                    <div class="project-full-bottom">
                                        <div class="project-full-price">
                                            <span>от</span> 4 723 020 <span>руб.</span>
                                        </div>
                                        <a href="" class="btn btn-blue btn-md">Подробнее</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="single-lg__map">
                <div class="container">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Карта построенных объектов</b></h2>
                        <span class="text-md">
                        Вы можете посетить любую нашу стройплощадку. Выберите объект на карте и оставьте заявку на посещение.
                    </span>
                    </div>
                </div>
                <div style="position:relative;overflow:hidden;">
                    <a href="https://yandex.ru/maps/10262/yerevan/?utm_medium=mapframe&utm_source=maps"
                       style="color:#eee;font-size:12px;position:absolute;top:0px;">Ереван</a><a
                            href="https://yandex.ru/maps/10262/yerevan/?ll=44.512546%2C40.177628&utm_medium=mapframe&utm_source=maps&z=10"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Ереван — Яндекс Карты</a>
                    <iframe src="https://yandex.ru/map-widget/v1/?ll=44.512546%2C40.177628&z=10" width="560"
                            height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                </div>
            </div>
        </div>

    </main>

<?php
get_footer();

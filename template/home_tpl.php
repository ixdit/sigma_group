<?php
/**
 * Template Name: Шаблон главной страницы
 * Template Post Type: page
 */
get_header();

$size = 'full';
?>

    <main class="site-main">
	    <?php $home_banner_img = get_field( 'home_banner_img' ); ?>
	    <?php  ?>
        <div class="jumbotron" style="background-image: url(<?php echo wp_get_attachment_image_url( $home_banner_img, $size ); ?>)">
            <div class="container">
                <div class="jumbotron__content">
                    <div class="jumbotron__top">
                        <div class="jumbotron__head">
                            <h1>
	                            <?php the_field( 'home_banner_title' ); ?>
                            </h1>

                            <p><?php the_field( 'home_banner_desc' ); ?></p>
                        </div>
                        <div class="jumbotron__feedback">
                            <div class="jumbotron__feedback-title">Получить бесплатную консультацию</div>
                            <div class="jumbotron__feedback-text">Наш менеджер свяжется с вами в течение 5 минут</div>

                            <form action="" class="js-phone-form">
                                <div>
                                    <input type="text" placeholder="+7 (___) ___-__-__" class="js-phone-mask" required
                                           name="phone">
                                </div>
                                <button type="submit" class="btn btn-sm btn-blue-white">Получить консультацию</button>
                            </form>
                        </div>
                    </div>
                    <div class="jumbotron__image">
                        <a href="#callback-modal" rel="modal:open" class="jumbotron__button-mobile">
                            Получить консультацию бесплатно
                        </a>
                        <img src="images/uploads/jumbotron.jpg" alt="">
                    </div>

                    <div class="jumbotron__bottom">
                        <?php get_the_accents(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-projects">
            <div class="container">
                <div class="mb-3">
                    <div class="h3 mb-3 color-blue">#ПРОЕКТЫ</div>
                    <div class="h2 color-blue">Построим Ваш идеальный дом</div>
                    <p class="text-lg">с учетом всех особенностей</p>
                </div>

                <div class="filter">
                    <div class="filter-title">Поиск проекта</div>
                    <div class="filter-content">
                        <div class="filter-wrapper">
                            <div class="row">
                                <form class="col-xl-8">
                                    <div class="filter-mobile-text">Либо воспользуйтесь фильтром</div>
                                    <div class="row gy-20">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="filter-box">
                                                <div class="filter-box__title">Площадь</div>

                                                <div class="filter-box__form">
                                                    <input type="text" class="range1-input1">
                                                    <input type="text" class="range1-input2">
                                                </div>

                                                <div id="range-1"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="filter-box">
                                                <div class="filter-box__title">Цена, млн. руб</div>

                                                <div class="filter-box__form">
                                                    <input type="text" class="range2-input1">
                                                    <input type="text" class="range2-input2">
                                                </div>

                                                <div id="range-2"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row gy-20">
                                                <div class="col-md-12 col-sm-6 first">
                                                    <div class="dropdown-select">
                                                        <div class="dropdown-select__top">Материал</div>

                                                        <div class="dropdown-select__bottom">
                                                            <div>
                                                                <input type="checkbox" id="1-1">
                                                                <label for="1-1">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="1-2">
                                                                <label for="1-2">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="1-3">
                                                                <label for="1-3">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="1-4">
                                                                <label for="1-4">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="1-5">
                                                                <label for="1-5">Керамоблок</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6 first">
                                                    <div class="dropdown-select">
                                                        <div class="dropdown-select__top">Материал</div>

                                                        <div class="dropdown-select__bottom">
                                                            <div>
                                                                <input type="checkbox" id="2-1">
                                                                <label for="2-1">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="2-2">
                                                                <label for="2-2">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="2-3">
                                                                <label for="2-3">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="2-4">
                                                                <label for="2-4">Керамоблок</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" id="2-5">
                                                                <label for="2-5">Керамоблок</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <button type="submit" class="btn btn-blue btn-sm btn-block">
                                                        Смотреть проекты
                                                    </button>
                                                </div>
                                                <div class="col-md-12 col-sm-6">
                                                    <a href="" class="filter-clear">
                                                        <svg width="9" height="9">
                                                            <use xlink:href="images/svg-sprite.svg#clear"></use>
                                                        </svg>
                                                        Очистить фильтр
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-xl-4">
                                    <div class="filter-right">
                                    <span>
                                        Уже знаете, что хотите и ищите конкретный проект?
                                        Введите его название
                                    </span>
                                        <form action="" class="filter-search">
                                            <svg width="14" height="14">
                                                <use xlink:href="images/svg-sprite.svg#search"></use>
                                            </svg>
                                            <input type="text" placeholder="Поиск проекта">
                                            <button type="submit" class="btn btn-sm btn-blue">Поиск</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-20">
                    <?php get_the_blocks_after_search(); ?>
                </div>
            </div>
        </div>

        <div class="home-projects-full">
            <div class="container">
                <div class="mb-3">
                    <div class="h2 color-blue">Популярные проекты домов</div>
                    <p class="text-lg">
                        вы можете выбрать одно из 800+ готовых решений <br>
                        или заказать индивидуальный проект
                    </p>
                </div>

                <div class="row gy-20 grid">

                    <?php get_the_popular_projects(); ?>

                </div>

                <?php  ?>

                <div class="js-project-mobile slider">
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

                <div class="home-projects-full__bottom">
                    <a href="" class="btn btn-default">Показать ещё</a>
                </div>
            </div>
        </div>

        <div class="home-feedback">
            <div class="feedback">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 feedback__col">
                            <div class="feedback__head">
                                <div class="h2">
                                    Скачайте 8 самых популярных
                                    проектов 2022 года
                                </div>
                                <p class="text-lg">
                                    с полным и детальным расчетом стоимости
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-8">
                                    <form class="row gy-20">
                                        <div class="col-xl-4">
                                            <input type="text" placeholder="Ваше Имя" class="form-input-solid">
                                        </div>
                                        <div class="col-xl-4">
                                            <input type="text" placeholder="+7 (___) ___-__-__"
                                                   class="form-input-solid js-phone-mask">
                                        </div>
                                        <div class="col-xl-4">
                                            <input type="text" placeholder="Ваш E-mail" class="form-input-solid">
                                        </div>
                                        <div class="col-xl-4 feedback__button">
                                            <button type="submit" class="btn btn-green btn-block">Получить проекты
                                            </button>
                                        </div>

                                        <div>
                                            <button class="feedback__button-mobile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="17"
                                                     viewBox="0 0 25 17" fill="none">
                                                    <path d="M0 8.5H24M24 8.5L18 1M24 8.5L18 16" stroke="#43638A"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo get_template_directory_uri();?>/images/book.png" class="feedback__image" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-work">

            <div class="container">
                <div class="mb-3">
                    <div class="h3 mb-3 color-blue">#КАК МЫ РАБОТАЕМ</div>
                    <div class="h2 color-blue">
                        Чтобы быть спокойным и уверенным в
                        качественном доме - вам нужен надежный
                        подрядчик
                    </div>
                </div>

                <div class="row home-work__row grid">
                    <div class="col-xl-4 col-md-6">
                        <div class="work">
                            <div class="work__number">1</div>

                            <div class="work__image"><img src="<?php echo get_template_directory_uri();?>/images/work-icon/1.svg" alt="">
                            </div>

                            <div class="work__title">Разработка проекта включает</div>

                            <ul>
                                <li>Архитектура</li>
                                <li>Конструктив</li>
                                <li>Инженерные сети</li>
                                <li>Визуализация</li>
                                <li>3D-модель</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="work">
                            <div class="work__number">2</div>

                            <div class="work__image"><img src="<?php echo get_template_directory_uri();?>/images/work-icon/2.svg" alt="">
                            </div>

                            <div class="work__title">В строительстве дома участвуют</div>

                            <ul>
                                <li>Прораб</li>
                                <li>Архитектор</li>
                                <li>Конструктор</li>
                                <li>Снабженец</li>
                                <li>Логист</li>
                                <li>Менеджер проекта</li>
                                <li>Тех. надзор</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="work">
                            <div class="work__number">3</div>

                            <div class="work__image"><img src="<?php echo get_template_directory_uri();?>/images/work-icon/3.svg" alt="">
                            </div>

                            <div class="work__title">Дом строят профессионалы в своей специальности</div>

                            <ul>
                                <li>Бетонщики</li>
                                <li>Каменщики</li>
                                <li>Плотники</li>
                                <li>Электрики</li>
                                <li>Сантехники</li>
                                <li>Отделочники</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="work">
                            <div class="work__number">4</div>

                            <div class="work__image"><img src="<?php echo get_template_directory_uri();?>/images/work-icon/4.svg" alt="">
                            </div>

                            <div class="work__title">Все работы выполняются по договору</div>

                            <ul>
                                <li>Проект</li>
                                <li>Смета</li>
                                <li>График платежей</li>
                                <li>Гарантия</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="work">
                            <div class="work__number">5</div>

                            <div class="work__image"><img src="<?php echo get_template_directory_uri();?>/images/work-icon/5.svg" alt="">
                            </div>

                            <div class="work__title">Поэтапный, гибкий график платежей</div>

                            <ul>
                                <li>Оплата по результату</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="work">
                            <div class="work__number">6</div>

                            <div class="work__image"><img src="<?php echo get_template_directory_uri();?>/images/work-icon/6.svg" alt="">
                            </div>

                            <div class="work__title">Выполняем весь комплекс работ под ключ</div>

                            <ul>
                                <li>От юридического согласования постройки и геологии до ландшафтного и интерьерного
                                    дизайна
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="slider js-work-slider">
                    <div class="item">
                        <div class="work">
                            <div class="work__number">1</div>
                            <div class="work__image">
                                <img src="<?php echo get_template_directory_uri();?>/images/work-icon/1.svg" alt="">
                            </div>
                            <div class="work__title">Разработка проекта включает</div>
                            <ul>
                                <li>Архитектура</li>
                                <li>Конструктив</li>
                                <li>Инженерные сети</li>
                                <li>Визуализация</li>
                                <li>3D-модель</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="work__number">2</div>
                            <div class="work__image">
                                <img src="<?php echo get_template_directory_uri();?>/images/work-icon/2.svg" alt="">
                            </div>
                            <div class="work__title">В строительстве дома участвуют</div>
                            <ul>
                                <li>Прораб</li>
                                <li>Архитектор</li>
                                <li>Конструктор</li>
                                <li>Снабженец</li>
                                <li>Логист</li>
                                <li>Менеджер проекта</li>
                                <li>Тех. надзор</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="work__number">3</div>
                            <div class="work__image">
                                <img src="<?php echo get_template_directory_uri();?>/images/work-icon/3.svg" alt="">
                            </div>
                            <div class="work__title">Дом строят профессионалы в своей специальности</div>
                            <ul>
                                <li>Бетонщики</li>
                                <li>Каменщики</li>
                                <li>Плотники</li>
                                <li>Электрики</li>
                                <li>Сантехники</li>
                                <li>Отделочники</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="work__number">4</div>
                            <div class="work__image">
                                <img src="<?php echo get_template_directory_uri();?>/images/work-icon/4.svg" alt="">
                            </div>
                            <div class="work__title">Все работы выполняются по договору</div>
                            <ul>
                                <li>Проект</li>
                                <li>Смета</li>
                                <li>График платежей</li>
                                <li>Гарантия</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="work__number">5</div>
                            <div class="work__image">
                                <img src="<?php echo get_template_directory_uri();?>/images/work-icon/5.svg" alt="">
                            </div>
                            <div class="work__title">Поэтапный, гибкий график платежей</div>
                            <ul>
                                <li>Оплата по результату</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="work__number">6</div>
                            <div class="work__image">
                                <img src="<?php echo get_template_directory_uri();?>/images/work-icon/6.svg" alt="">
                            </div>
                            <div class="work__title">Выполняем весь комплекс работ под ключ</div>
                            <ul>
                                <li>От юридического согласования постройки и геологии до ландшафтного и интерьерного
                                    дизайна
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-reviews">
            <div class="container">
                <div class="mb-3">
                    <div class="h3 mb-3 color-blue">#ОТЗЫВЫ</div>
                    <div class="h2 color-blue">
	                    <?php the_field( 'home_reviews_across_desc', 'option' ); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="js-video-slider">
	                    <?php do_action( 'video_reviews_across' , 'get_the_video_reviews_across'); ?>
                    </div>
                </div>

                <div class="home-certificates">
                    <div class="js-certificates-slider">
	                    <?php do_action( 'images_reviews_across' , 'get_the_img_reviews_across'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-question">
            <div class="container">
                <div class="mb-3">
                    <div class="h3 mb-3 color-blue">#ВОПРОСЫ И ОТВЕТЫ</div>
                </div>

                <div class="home-question__text mb-3">
                    <p>
                        Компания «СИГМА» специализируется на строительстве домов под ключ из газобетона, кирпича и
                        керамоблока в
                        Великом Новгороде и Новгородской области. В нашей компании работают узкие
                        специалисты-профессионалы
                        всех
                        направлений, задействованных при строительстве и проектировании Вашего дома. У нас есть все
                        необходимое,
                        чтобы квалифицированно реализовать проект любой степени сложности! Для строительства
                        используются
                        только
                        высококачественные стройматериалы и успешные современные технологии.
                    </p>
                    <p>
                        Компания «СИГМА» специализируется на строительстве домов под ключ из газобетона, кирпича и
                        керамоблока в
                        Великом Новгороде и Новгородской области. В нашей компании работают узкие
                        специалисты-профессионалы
                        всех
                        направлений, задействованных при строительстве и проектировании Вашего дома. У нас есть все
                        необходимое,
                        чтобы квалифицированно реализовать проект любой степени сложности! Для строительства
                        используются
                        только
                        высококачественные стройматериалы и успешные современные технологии.
                    </p>
                </div>

                <button type="button" class="home-question__link js-question-text">Читать полностью</button>

                <div class="home-question__row">
                    <div class="home-question__left">
                        <div class="question">
                            <div class="question__head">
                                <span>С чего начинается строительство?</span>

                                <svg width="25" height="12">
                                    <use xlink:href="images/svg-sprite.svg#arrow-down"></use>
                                </svg>
                            </div>
                            <div class="question__content">
                                <p>
                                    Стоимость дома зависит от нескольких факторов.
                                </p>
                                1) Используемых материалов в строительстве. <br>
                                2) Вида фундамента. <br>
                                3) Площади дома, схемой несущих конструкций, этажности. <br>
                                4) Наличия или отсутствия подвала, цокольного и мансардного этажей, а также <br>
                                балконов и террас. <br>
                                5) Формы и материала кровли. <br>
                                6) Состава и сложности инженерного раздела. <br>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question__head">
                                <span>С чего начинается строительство?</span>

                                <svg width="25" height="12">
                                    <use xlink:href="images/svg-sprite.svg#arrow-down"></use>
                                </svg>
                            </div>
                            <div class="question__content">
                                <p>
                                    Стоимость дома зависит от нескольких факторов.
                                </p>
                                1) Используемых материалов в строительстве. <br>
                                2) Вида фундамента. <br>
                                3) Площади дома, схемой несущих конструкций, этажности. <br>
                                4) Наличия или отсутствия подвала, цокольного и мансардного этажей, а также <br>
                                балконов и террас. <br>
                                5) Формы и материала кровли. <br>
                                6) Состава и сложности инженерного раздела. <br>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question__head">
                                <span>С чего начинается строительство?</span>

                                <svg width="25" height="12">
                                    <use xlink:href="images/svg-sprite.svg#arrow-down"></use>
                                </svg>
                            </div>
                            <div class="question__content">
                                <p>
                                    Стоимость дома зависит от нескольких факторов.
                                </p>
                                1) Используемых материалов в строительстве. <br>
                                2) Вида фундамента. <br>
                                3) Площади дома, схемой несущих конструкций, этажности. <br>
                                4) Наличия или отсутствия подвала, цокольного и мансардного этажей, а также <br>
                                балконов и террас. <br>
                                5) Формы и материала кровли. <br>
                                6) Состава и сложности инженерного раздела. <br>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question__head">
                                <span>С чего начинается строительство?</span>

                                <svg width="25" height="12">
                                    <use xlink:href="images/svg-sprite.svg#arrow-down"></use>
                                </svg>
                            </div>
                            <div class="question__content">
                                <p>
                                    Стоимость дома зависит от нескольких факторов.
                                </p>
                                1) Используемых материалов в строительстве. <br>
                                2) Вида фундамента. <br>
                                3) Площади дома, схемой несущих конструкций, этажности. <br>
                                4) Наличия или отсутствия подвала, цокольного и мансардного этажей, а также <br>
                                балконов и террас. <br>
                                5) Формы и материала кровли. <br>
                                6) Состава и сложности инженерного раздела. <br>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question__head">
                                <span>С чего начинается строительство?</span>

                                <svg width="25" height="12">
                                    <use xlink:href="images/svg-sprite.svg#arrow-down"></use>
                                </svg>
                            </div>
                            <div class="question__content">
                                <p>
                                    Стоимость дома зависит от нескольких факторов.
                                </p>
                                1) Используемых материалов в строительстве. <br>
                                2) Вида фундамента. <br>
                                3) Площади дома, схемой несущих конструкций, этажности. <br>
                                4) Наличия или отсутствия подвала, цокольного и мансардного этажей, а также <br>
                                балконов и террас. <br>
                                5) Формы и материала кровли. <br>
                                6) Состава и сложности инженерного раздела. <br>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question__head">
                                <span>С чего начинается строительство?</span>

                                <svg width="25" height="12">
                                    <use xlink:href="images/svg-sprite.svg#arrow-down"></use>
                                </svg>
                            </div>
                            <div class="question__content">
                                <p>
                                    Стоимость дома зависит от нескольких факторов.
                                </p>
                                1) Используемых материалов в строительстве. <br>
                                2) Вида фундамента. <br>
                                3) Площади дома, схемой несущих конструкций, этажности. <br>
                                4) Наличия или отсутствия подвала, цокольного и мансардного этажей, а также <br>
                                балконов и террас. <br>
                                5) Формы и материала кровли. <br>
                                6) Состава и сложности инженерного раздела. <br>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question__head">
                                <span>С чего начинается строительство?</span>

                                <svg width="25" height="12">
                                    <use xlink:href="images/svg-sprite.svg#arrow-down"></use>
                                </svg>
                            </div>
                            <div class="question__content">
                                <p>
                                    Стоимость дома зависит от нескольких факторов.
                                </p>
                                1) Используемых материалов в строительстве. <br>
                                2) Вида фундамента. <br>
                                3) Площади дома, схемой несущих конструкций, этажности. <br>
                                4) Наличия или отсутствия подвала, цокольного и мансардного этажей, а также <br>
                                балконов и террас. <br>
                                5) Формы и материала кровли. <br>
                                6) Состава и сложности инженерного раздела. <br>
                            </div>
                        </div>
                    </div>
                    <div class="home-question__right">
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
                                    <input type="text" class="consultation-input js-phone-mask" required name="name"
                                           placeholder="Ваш номер телефона">
                                </div>

                                <button type="submit" class="btn btn-lg btn-blue btn-block">Получить консультацию
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feedback-container home-question__feedback">
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
        </div>

        <div class="home-feedback pt-0">
            <div class="feedback">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 feedback__col">
                            <div class="feedback__head">
                                <div class="h2">
                                    Предлагаем Вам записаться <br> на бесплатную экскурсию
                                </div>
                                <p class="text-lg">
                                    по строящимся объектам
                                </p>
                            </div>

                            <ul class="feedback__list">
                                <li>
                                    <b>Познакомьтесь</b> с технологией строительства
                                </li>
                                <li>
                                    <b>Оцените</b> качество материалов на стройплощадке
                                </li>
                                <li>
                                    <b>Зададите</b> вопросы руководителю строительства
                                </li>
                                <li>
                                    <b>Пообщаетесь</b> с прорабом
                                    и строителями
                                </li>
                            </ul>

                            <form class="row gy-20">
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Ваше Имя" class="form-input-solid">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Телефон для связи"
                                           class="form-input-solid js-phone-mask">
                                </div>
                                <div class="col-xl-6">
                                    <button type="submit" class="btn btn-green btn-block">Записаться</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 feedback__steps">
                            <div>
                                <div>
                                    <svg width="25" height="12">
                                        <use xlink:href="images/svg-sprite.svg#arrow-down-white"></use>
                                    </svg>
                                </div>
                                <div>
                                    <b>Познакомьтесь</b> с технологией строительства
                                </div>
                            </div>
                            <div>
                                <div>
                                    <svg width="25" height="12">
                                        <use xlink:href="images/svg-sprite.svg#arrow-down-white"></use>
                                    </svg>
                                </div>
                                <div>
                                    <b>Оцените</b> качество материалов на стройплощадке
                                </div>
                            </div>
                            <div>
                                <div>
                                    <svg width="25" height="12">
                                        <use xlink:href="images/svg-sprite.svg#arrow-down-white"></use>
                                    </svg>
                                </div>
                                <div>
                                    <b>Зададите</b> вопросы руководителю строительства
                                </div>
                            </div>
                            <div>
                                <div>
                                    <svg width="25" height="12">
                                        <use xlink:href="images/svg-sprite.svg#arrow-down-white"></use>
                                    </svg>
                                </div>
                                <div>
                                    <b>Пообщаетесь</b> с прорабом и строителями
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-contacts">
            <div class="container">
                <div class="mb-3">
                    <div class="h3">#МЫ НАХОДИМСЯ</div>
                </div>
            </div>

            <div class="home-contacts__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-9 col-lg-8">
                            <div class="home-contacts__map">
                                <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d97545.62156934674!2d44.5054976!3d40.18012159999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1673688839388!5m2!1sru!2s"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                                <div class="home-contacts__list">
                                    <div class="home-contacts__list-title">Контакты</div>

                                    <ul>
                                        <li>
                                            <a href="">
                                                <svg width="16" height="16">
                                                    <use xlink:href="images/svg-sprite.svg#phone-solid"></use>
                                                </svg>
                                                8 (8162) 15-00-15
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <svg width="17" height="13">
                                                    <use xlink:href="images/svg-sprite.svg#mail-solid"></use>
                                                </svg>
                                                info@sigma53.ru
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <svg width="17" height="21">
                                                    <use xlink:href="images/svg-sprite.svg#location-solid"></use>
                                                </svg>
                                                Великий Новгород, Панковская, 11А
                                            </a>
                                        </li>
                                        <li>
                                            <svg width="18" height="21">
                                                <use xlink:href="images/svg-sprite.svg#list-solid"></use>
                                            </svg>
                                            <div>
                                                ОГРН: 1175321003241 <br>
                                                ИНН: 5321188748 <br>
                                                КПП: 532101001
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4">
                            <div class="save-web">
                                <div class="save-web__title">Добавьте сайт в избранное</div>
                                <p>
                                    Обратившись к нам, Вы получите ни только лучшую цену на строительство, но и
                                    внимательный
                                    подход ко всем деталям
                                </p>

                                <div class="save-web__button">
                                    Добавить сайт в избранное
                                </div>

                                <p>
                                    Либо используйте <br> сочетание клавиш
                                    <span> CTRL + D</span>
                                </p>

                                <span>Доверьте свой дом профессионалам!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-contacts__mobile">
                <div class="container">
                    <div class="item">
                        <svg width="17" height="21">
                            <use xlink:href="images/svg-sprite.svg#location"></use>
                        </svg>
                        Великий Новгород, Панковская, 11А
                    </div>
                    <div class="items">
                        <div class="item">
                            <svg width="16" height="16">
                                <use xlink:href="images/svg-sprite.svg#phone-2"></use>
                            </svg>
                            8 (8162) 15-00-15
                        </div>
                        <div class="item">
                            <svg width="17" height="13">
                                <use xlink:href="images/svg-sprite.svg#mail"></use>
                            </svg>
                            info@sigma53.ru
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="float-search" style="display: none">
            <div class="container">
                <button class="float-search__close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                        <path d="M2.37437 2.37417L27.1231 27.1229M2.37437 27.1229L27.1231 2.37417" stroke="white"
                              stroke-width="4"/>
                    </svg>
                </button>

                <form action="https://novmetset.ru/" class="search-wrap hide-md search-form" role="search" method="get"
                      id="searchform">
                    <input type="text" class="search-form__input" name="s" id="s" autocomplete="off"
                           placeholder="Поиск">

                    <ul class="ajax-search" style="">
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                        <li class="ajax-search__item">
                            <a href="https://novmetset.ru/catalog/metalloprokat/kovannye-elementy/vitaya-truba/"
                               class="ajax-search__link">
                                <div class="flex-item">
                                    <img src="https://picsum.photos/130/80" alt="">

                                    <div>
                                        <div class="title"><b>Проект «Юрма»</b> от <b>4 723 020</b> руб.</div>
                                        <p>Площадь 120 м2, Этажность: 2, Количество спален: 2, Количество санузлов:
                                            2</p>
                                    </div>
                                </div>
                                <div class="btn btn-blue btn-md">Подробнее</div>
                            </a>
                        </li>
                    </ul>

                    <div class="float-search__bottom">
                        <a href="" class="btn btn-default">Посмотреть все результаты</a>
                    </div>
                </form>
            </div>
        </div>

    </main>

<?php
get_footer();
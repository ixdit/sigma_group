<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ix
 */

get_header();
?>

    <main class="site-main">

        <div class="page-item">
            <div class="container">
                <div class="page-breadcrumb">
	                <?php do_action( 'echo_kama_breadcrumbs' ) ?>
                </div>

                <div class="page-head">
                    <h1 class="page-title h3">Серийные проекты</h1>
                    <div class="page-text">
                        <?php the_archive_description(); ?>
                    </div>
                </div>

                <form class="page-filter">
                    <div class="row gy-20">
                        <div class="col-xl-2 col-sm-6">
                            <div class="filter-box">
                                <div class="filter-box__title">Площадь</div>

                                <div class="filter-box__form">
                                    <input type="text" class="range1-input1">
                                    <input type="text" class="range1-input2">
                                </div>

                                <div id="range-1"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="filter-box">
                                <div class="filter-box__title">Цена, млн. руб</div>

                                <div class="filter-box__form">
                                    <input type="text" class="range2-input1">
                                    <input type="text" class="range2-input2">
                                </div>

                                <div id="range-2"></div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-sm-6">
                            <div class="row gy-20">

                                <div class="col-md-12 col-sm-6 first">
                                    <div class="dropdown-select">
                                        <div class="dropdown-select__top">Материал</div>

                                        <div class="dropdown-select__bottom">

                                            <div>
                                                <input type="checkbox" id="1-1-1">
                                                <label for="1-1-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-2-1">
                                                <label for="1-2-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-3-1">
                                                <label for="1-3-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-4-1">
                                                <label for="1-4-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-5-1">
                                                <label for="1-5-1">Керамоблок</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6 first">
                                    <div class="dropdown-select">
                                        <div class="dropdown-select__top">Материал</div>

                                        <div class="dropdown-select__bottom">

                                            <div>
                                                <input type="checkbox" id="2-1-1">
                                                <label for="2-1-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-2-1">
                                                <label for="2-2-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-3-1">
                                                <label for="2-3-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-4-1">
                                                <label for="2-4-1">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-5-1">
                                                <label for="2-5-1">Керамоблок</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-2 col-sm-6">
                            <div class="row gy-20">

                                <div class="col-md-12 col-sm-6 first">
                                    <div class="dropdown-select">
                                        <div class="dropdown-select__top">Материал</div>

                                        <div class="dropdown-select__bottom">

                                            <div>
                                                <input type="checkbox" id="1-1-2">
                                                <label for="1-1-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-2-2">
                                                <label for="1-2-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-3-2">
                                                <label for="1-3-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-4-2">
                                                <label for="1-4-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="1-5-2">
                                                <label for="1-5-2">Керамоблок</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6 first">
                                    <div class="dropdown-select">
                                        <div class="dropdown-select__top">Материал</div>

                                        <div class="dropdown-select__bottom">

                                            <div>
                                                <input type="checkbox" id="2-1-2">
                                                <label for="2-1-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-2-2">
                                                <label for="2-2-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-3-2">
                                                <label for="2-3-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-4-2">
                                                <label for="2-4-2">Керамоблок</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" id="2-5-2">
                                                <label for="2-5-2">Керамоблок</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-2">
                            <div class="filter-sorting">
                                <div class="filter-box__title">Сортировать</div>

                                <div>

                                    <div>
                                        по площади

                                        <div class="checks">

                                            <div class="check">
                                                <input type="radio" name="по площади" id="size-по площади-1">
                                                <label for="size-по площади-1">

                                                    <svg width="16" height="9" viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L8 8L15 1"/>
                                                    </svg>

                                                </label>
                                            </div>

                                            <div class="check">
                                                <input type="radio" name="по площади" id="size-по площади-2">
                                                <label for="size-по площади-2">

                                                    <svg width="16" height="9" viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 8L8 1L1 8"/>
                                                    </svg>

                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        по популярности

                                        <div class="checks">

                                            <div class="check">
                                                <input type="radio" name="по популярности" id="size-по популярности-1">
                                                <label for="size-по популярности-1">

                                                    <svg width="16" height="9" viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L8 8L15 1"/>
                                                    </svg>

                                                </label>
                                            </div>

                                            <div class="check">
                                                <input type="radio" name="по популярности" id="size-по популярности-2">
                                                <label for="size-по популярности-2">

                                                    <svg width="16" height="9" viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 8L8 1L1 8"/>
                                                    </svg>

                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="row gy-20">
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

                <?php if ( have_posts() ) : ?>

                    <div class="row gy-20">

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'archive_project_doma' );

                        endwhile;

//                        the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>


                    </div>

            </div>
        </div>

    </main>

<?php
get_footer();

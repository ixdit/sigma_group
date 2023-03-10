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
                    <h1 class="page-title h3"><?php the_archive_title(); ?></h1>
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
	            <?php
	            global $wp_query;

	            // текущая страница
	            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	            // максимум страниц
	            $max_pages = $wp_query->max_num_pages;

	            $cur_filter_param = $_GET;
	            $data_cur_filter = '';

	            foreach ($cur_filter_param as $key => $value ){
		            $data_cur_filter .= ' data-'.$key.'="'.$value.'"';
	            }

	            //            echo '$paged - '.$paged;


	            // если текущая страница меньше, чем максимум страниц, то выводим кнопку
	            if( $paged < $max_pages ) {
                    ?>

                    <?php
		            echo '<div id="loadmore" style="text-align:center;" class="loadmore_btn_block">
                        <a href="#" data-cat = "doma" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '" class="" '.$data_cur_filter.'>
                            <div class="preloader">
                                <svg class="preloader__image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                          d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
                                    </path>
                                </svg>
                            </div>    
                        </a>
                    </div>';
	            }
	            ?>
            </div>
        </div>

    </main>

<?php
get_footer();

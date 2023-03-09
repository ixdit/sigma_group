<?php
/**
 * Template Name: Шаблон Контакты
 * Template Post Type: page
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
                    <h1 class="page-title"><?php the_title() ?></h1>
                </div>

                <div class="mb-70">
                    <div class="contacts-list">
	                    <?php
	                    the_content();
	                    ?>
<!--                        <div>-->
<!--                            <svg width="17" height="21">-->
<!--                                <use xlink:href="images/svg-sprite.svg#location-solid"></use>-->
<!--                            </svg>-->
<!--                            Офис: Великий Новгород, Панковская, 11А-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <svg width="16" height="16">-->
<!--                                <use xlink:href="images/svg-sprite.svg#phone-solid"></use>-->
<!--                            </svg>-->
<!--                            <span>Телефон: <a href="">8 (8162) 15-00-15</a></span>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <svg width="16" height="16">-->
<!--                                <use xlink:href="images/svg-sprite.svg#envelope-solid"></use>-->
<!--                            </svg>-->
<!--                            <span>E-mail: <a href="">info@sigma53.ru</a></span>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            Режим работы: понедельник — пятница, с 9-00 до 18-00-->
<!--                        </div>-->
                    </div>
                </div>

                <div class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Команда</b></h2>
                        <div class="text-md">
	                        <?php the_field( 'staff_desc' ); ?>
                        </div>
                    </div>

                    <div class="team-short js-team-short">
                        <div class="row gy-20">
	                        <?php
	                        $staffs = get_field('staff');

	                        foreach ( $staffs as $staff ) {
//                                        pre($staff);
		                        ?>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="team">
                                        <div class="team__picture">
                                            <img src="<?php echo $staff['staff_img']; ?>" alt="">
                                        </div>
                                        <div class="team__name">
	                                        <?php echo $staff['staff_position']; ?> <br>
	                                        <?php echo $staff['staff_fio']; ?>
                                        </div>
                                        <div class="team__contact">
	                                        <?php
	                                        if ($staff['staff_phone']) :
		                                        ?>
                                                <span> Тел.: <a href="tel:<?php echo $staff['staff_phone']; ?>"><?php echo $staff['staff_phone']; ?></a></span>
	                                        <?php
	                                        endif;
	                                        ?>
	                                        <?php
	                                        if ($staff['staff_email']) :
		                                        ?>
                                                <span>E-mail: <a href="mailto:<?php echo $staff['staff_email']; ?>"> <?php echo $staff['staff_email']; ?></a></span>
	                                        <?php
	                                        endif;
	                                        ?>
                                        </div>
                                    </div>
                                </div>
		                        <?php
	                        }
	                        ?>

                        </div>

                        <div class="team-short__button">
                            <div class="row justify-content-center">
                                <div class="col-md-3 col-8">
                                    <button type="button" class="btn btn-default btn-block js-team-short__show">Показать еще</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Карта проезда</b></h2>
                    </div>

                    <div style="position:relative;overflow:hidden;">
	                    <?php
	                    the_yandex_map('contact_page_map');
	                    ?>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php
get_footer();

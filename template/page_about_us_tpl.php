<?php
/**
 * Template Name: Шаблон О компании
 * Template Post Type: page
 */
get_header();

$size = 'full';
$all_img = get_field( 'aboutus_all_img' );
?>

    <main class="site-main">

        <div class="page-item">
            <div class="container">
                <div class="page-breadcrumb">
	                <?php do_action( 'echo_kama_breadcrumbs' ) ?>
                </div>

                <div class="page-head">
	                <?php if (get_field('aboutus_custom_h1')) {
		                echo '<h1 class="page-title">'.get_field( 'aboutus_custom_h1' ).'</h1>';
	                } else {
		                echo '<h1 class="page-title">'.get_the_title().'</h1>';
	                }?>
                </div>

                <div class="about-section mb-70">
                    <div class="row">
                        <div class="col-lg-6 about-section__col">
                            <div class="about-section__left">
                                <div class="about-section__text">
	                                <?php the_content(); ?>
                                </div>
	                            <?php if ( have_rows( 'aboutus_block_signature' ) ) : ?>
		                            <?php while ( have_rows( 'aboutus_block_signature' ) ) : the_row(); ?>
			                            <?php $signature_img = get_sub_field( 'signature_img' ); ?>
                                        <div class="about-section__author">
                                            <div>
                                                <img src="<?php echo wp_get_attachment_image_url( $signature_img, $size ); ?>" alt="">
                                            </div>
                                            <div>
					                            <?php the_sub_field( 'signature_text' ); ?>
                                            </div>
                                        </div>
		                            <?php endwhile; ?>
	                            <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo wp_get_attachment_image_url( $all_img, $size ); ?>" data-fancybox="">
                                <img src="<?php echo wp_get_attachment_image_url( $all_img, $size ); ?>" alt="" class="about-section__image">
                            </a>
                        </div>
                    </div>
                </div>

	            <?php if ( have_rows( 'about_why_are_we' ) ) : ?>
                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Группа компаний “Сигма”, это: </b></h2>
                    </div>
                    <div class="row gy-20">

	                    <?php while ( have_rows( 'about_why_are_we' ) ) : the_row(); ?>

		                    <?php $img = get_sub_field( 'img' ); ?>
		                    <?php $size = 'full'; ?>
                            <div class="col-xl-4 col-md-6">
                                <div class="about-advantage">
	                                <?php the_sub_field( 'title' ); ?>
                                    <img src="<?php echo wp_get_attachment_image_url( $img, $size ); ?>" alt="">
                                </div>
                            </div>
	                    <?php endwhile; ?>


                    </div>

                </section>
	            <?php endif; ?>

                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Команда</b></h2>
                        <div class="text-md">
	                        <?php the_field( 'about_staff_desc' ); ?>
                        </div>
                    </div>

	                <?php if ( ! wp_is_mobile() ) : ?>

                        <div class="d-none d-lg-block">
                            <div class="team-short js-team-short">
                                <div class="row gy-20">
					                <?php
					                $staffs = get_field('staff', get_field('id_contact_page'));

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

	                <?php else: ?>

                        <div class="d-lg-none">
                            <div class="js-team-slider">
				                <?php
				                $staffs = get_field('staff', get_field('id_contact_page'));

				                foreach ( $staffs as $staff ) {
					                //                                        pre($staff);
					                ?>
                                    <div class="item">
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
                        </div>

	                <?php endif; ?>
                </section>

	            <?php if ( have_rows( 'documents' ) ) : ?>
                    <section class="mb-70">
                        <div class="mb-25">
                            <h2 class="h3 color-blue"><b><?php the_field( 'documents_desc_title' ); ?></b></h2>
                        </div>
                        <div class="mb-25">
                            <p class="text-md">
	                            <?php the_field( 'documents_desc' ); ?>
                            </p>
                        </div>

                        <div class="home-certificates">
                            <div class="js-certificates-slider">
	                            <?php while ( have_rows( 'documents' ) ) : the_row(); ?>
		                            <?php $img_id = get_sub_field( 'img' ); ?>
		                            <?php $size = 'full'; ?>
                                    <div class="item">
                                        <a data-fancybox href="<?php echo wp_get_attachment_image_url( $img_id, $size ); ?>">
                                            <img src="<?php echo wp_get_attachment_image_url( $img_id, $size ); ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
	                            <?php endwhile; ?>

                            </div>
                        </div>
                    </section>

	            <?php else : ?>
		            <?php // No rows found ?>
	            <?php endif; ?>



                <?php
                //TODO  сделать выборки из раздела отзывов отдельно видео и катринки
                if(true) :

                ?>
                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Отзывы</b></h2>
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
                </section>
                <?php endif; ?>
            </div>

	        <?php do_action('through_feedback_bottom_form' ); ?>
        </div>

    </main>

<?php
get_footer();

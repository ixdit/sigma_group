<?php
/**
 * Template Name: Шаблон Отделка фасада
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
                    <?php if(get_field('offers_block_h1')) : ?>
                        <h1 class="page-title"><?php the_field( 'offers_block_h1' ); ?></h1>
                    <?php else : ?>
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php endif; ?>

                    <div class="page-text">
	                    <?php the_field( 'offers_desc' ); ?>
	                    <?php the_content(); ?>
                    </div>
                </div>

	            <?php if ( get_field( 'offers_header_fon_img' ) ) : ?>
                    <section class="mb-70">
                        <a href="<?php the_field( 'offers_header_fon_img' ); ?>" data-fancybox="">
                            <img src="<?php the_field( 'offers_header_fon_img' ); ?>" alt="" class="img-responsive">
                        </a>
                    </section>
	            <?php endif ?>



                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b><?php the_field( 'offers_block_section_title' ); ?></b></h2>
                    </div>

                    <div class="js-offers">
	                    <?php
	                    $offers_single_blocks = get_field( 'offers_single_blocks' );

	                    if ($offers_single_blocks) {
                            ob_start();
		                    foreach ( $offers_single_blocks as $single_block) {
                                // $single_block['offers_single_img']; // есть изображение
			                    ?>
                                <div class="item">
                                    <div class="offer">
                                        <div class="offer__head">
                                            <span><?php echo $single_block['offers_single_name'] ?></span>
                                        </div>
                                        <div class="offer__content">
                                            <span><?php echo $single_block['offers_single_desc'] ?></span>
                                            <div class="tariff__price">от <?php echo $single_block['offers_single_price'] ?> ₽/м2</div>
                                            <a href="#callback-modal" rel="modal:open" class="btn btn-blue">Отправить запрос</a>
                                        </div>
                                    </div>
                                </div>

			                    <?php
		                    }
                            echo ob_get_clean();
	                    }
	                    ?>

                    </div>
                </section>

                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b><?php the_field( 'offers_porfolio_section_title' ); ?></b></h2>
                    </div>

                    <div class="center-slider">
                        <div class="js-three-slider">
	                        <?php
	                        $offers_porfolio_section_galery = get_field( 'offers_porfolio_section_galery' );

	                        $i = 1;
	                        if ( $offers_porfolio_section_galery ) {
		                        foreach ( $offers_porfolio_section_galery as $offers_porfolio_single_img ) {
			                        ?>
                                    <div class="item">
                                        <a href="<?php echo $offers_porfolio_single_img; ?>" data-fancybox="">
                                            <img src="<?php echo ix_get_img($offers_porfolio_single_img, 420, 280) ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
			                        <?php
			                        $i++;
		                        }
	                        }
	                        $i = 0;
	                        ?>

                        </div>
                    </div>
                </section>
            </div>

            <?php do_action('through_feedback_bottom_form' ); ?>



        </div>

    </main>


<?php
get_footer();

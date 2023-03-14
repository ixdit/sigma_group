<?php
/**
 * Template Name: Шаблон Производство срубов
 * Template Post Type: page
 */
get_header();

$data_manufacturing = get_field('manufacturing');

?>

    <main class="site-main">

        <div class="page-item">
            <div class="container">
                <div class="page-breadcrumb">
		            <?php do_action( 'echo_kama_breadcrumbs' ) ?>
                </div>

                <div class="page-head">
                    <h1 class="page-title"><?php the_title() ?></h1>
                    <div class="page-text">
			            <?php the_content(); ?>
                    </div>
                </div>

                <section class="mb-70">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="">
                        <img src="<?php echo kama_thumb_src( 'w=1480 &crop=center' ); ?>" alt="" class="img-responsive">
                    </a>
                </section>

                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b><?php the_field( 'manufacturing_title' ); ?></b></h2>
                    </div>

                    <div class="row gy-20">
                        <div class="col-lg-3">
                            <ul class="tab-inline js-tab-controls" data-tabs="tabs">

                                <?php
                                if ($data_manufacturing) {
                                    $i = 1;
                                    foreach ($data_manufacturing as $item){
                                        ?>
                                        <li><a href="#tab-<?php echo $item['manufacturing_god'] ?>" class="<?php echo $i == 1 ? 'active' : '' ?>"><?php echo $item['manufacturing_god'] ?></a></li>
                                        <?php
                                        $i++;
                                    }
                                }
                                unset($i);
                                ?>

                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div id="tabs">
	                            <?php
	                            if ($data_manufacturing) {
		                            $ig = 1;
		                            foreach ($data_manufacturing as $gallery){
			                            ?>
                                        <div class="tab-panel <?php echo $ig == 1 ? 'active' : '' ?>" id="tab-<?php echo $gallery['manufacturing_god'] ?>">
                                            <div class="js-portfolio-slider">

                                                <?php foreach ($gallery['manufacturing_gallery'] as $img_id) {
                                                    ?>
                                                    <div class="item">
	                                                    <?php $img_url = wp_get_attachment_image_url( $img_id, 'full' ); ?>
                                                        <a href="<?php echo $img_url; ?>" data-fancybox="">
                                                            <img src="<?php echo ix_get_img_url_for_id( $img_id, 355, 340); ?>" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <?php
                                                } ?>

                                            </div>

                                            <div class="portfolio-arrows">
                                                <button class="slick-prev slick-arrow-center prev">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                                        <circle cx="22.5" cy="22.5" r="22.5" transform="rotate(-180 22.5 22.5)" fill="#8D8D8D" fill-opacity="0.8"/>
                                                        <path d="M18 32L28 22L18 12" stroke="white" stroke-width="2"/>
                                                    </svg>
                                                </button>

                                                <button class="slick-next slick-arrow-center next">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                                        <circle cx="22.5" cy="22.5" r="22.5" transform="rotate(-180 22.5 22.5)" fill="#8D8D8D" fill-opacity="0.8"/>
                                                        <path d="M18 32L28 22L18 12" stroke="white" stroke-width="2"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
			                            <?php
			                            $ig++;
		                            }
	                            }
	                            unset($ig);
	                            ?>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

	        <?php do_action('through_feedback_bottom_form' ); ?>

        </div>

    </main>

    <main class="site-main">

        <div class="page-item">
            <div class="container">
                <div class="page-breadcrumb">
		            <?php do_action( 'echo_kama_breadcrumbs' ) ?>
                </div>

                <div class="page-head">
                    <h1 class="page-title"><?php the_title() ?></h1>
                    <div class="page-text">
			            <?php the_content(); ?>
                    </div>
                </div>

                <section class="mb-70">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="">
                        <img src="<?php echo kama_thumb_src( 'w=1480 &crop=center' ); ?>" alt="" class="img-responsive">
                    </a>
                </section>



	                <?php if ( have_rows( 'base_installation' ) ) : ?>
		                <?php while ( have_rows( 'base_installation' ) ) : the_row(); ?>
                            <section class="mb-70">
                                <div class="mb-25">
                                    <h2 class="h3 color-blue"><b><?php the_sub_field( 'title' ); ?></b></h2>
                                </div>
				                <?php if ( have_rows( 'base_installation_item' ) ) : ?>
					                <?php $i = 1; ?>
					                <?php while ( have_rows( 'base_installation_item' ) ) : the_row(); ?>
                                        <div class="offer-service">
                                            <div class="offer-service__head">
                                                <div><?php the_sub_field( 'type' ); ?></div>
                                            </div>

                                            <ul class="offer-service__tabs sm js-tab-controls" data-tabs="tabs-<?php echo $i; ?>">

                                                <li>
									                <?php if ( have_rows( 'type_items_1' ) ) : ?>
										                <?php while ( have_rows( 'type_items_1' ) ) : the_row(); ?>
                                                            <a href="#tab-1-<?php echo $i; ?>"
                                                               class="active">
	                                                            <?php the_sub_field( 'title' ); ?> - от <?php the_sub_field( 'price' ); ?> ₽/м3
                                                            </a>
										                <?php endwhile; ?>
									                <?php endif; ?>
                                                </li>

                                                <li>
									                <?php if ( have_rows( 'type_items_2' ) ) : ?>
										                <?php while ( have_rows( 'type_items_2' ) ) : the_row(); ?>
                                                            <a href="#tab-2-<?php echo $i; ?>"
                                                               class="">
												                <?php the_sub_field( 'title' ); ?> - от <?php the_sub_field( 'price' ); ?> ₽/м3
                                                            </a>
										                <?php endwhile; ?>
									                <?php endif; ?>
                                                </li>

                                            </ul>

                                            <div class="offer-service__content">
                                                <div id="tabs-<?php echo $i; ?>">

                                                    <div id="tab-1-<?php echo $i; ?>"
                                                         class="tab-panel active">
                                                        <div class="row gy-20">
											                <?php if ( have_rows( 'type_items_1' ) ) : ?>
												                <?php while ( have_rows( 'type_items_1' ) ) : the_row(); ?>
													                <?php $img = get_sub_field( 'img' ); ?>
													                <?php $size = 'full'; ?>
                                                                    <div class="col-lg-6">
                                                                        <a href="<?php echo wp_get_attachment_image_url( $img, $size ); ?>" data-fancybox="">
                                                                            <img src="<?php echo wp_get_attachment_image_url( $img, $size ); ?>" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-6">
														                <?php if ( get_sub_field('desc')) : ?>
                                                                            <div class="panel">
																                <?php the_sub_field( 'desc' ); ?>
                                                                            </div>
														                <?php endif; ?>
                                                                    </div>


												                <?php endwhile; ?>
											                <?php endif; ?>
                                                        </div>
                                                        <a href="#callback-modal" rel="modal:open" class="btn btn-blue">Заказать</a>
                                                    </div>
                                                    <div id="tab-2-<?php echo $i; ?>"
                                                         class="tab-panel">
                                                        <div class="row gy-20">
											                <?php if ( have_rows( 'type_items_2' ) ) : ?>
												                <?php while ( have_rows( 'type_items_2' ) ) : the_row(); ?>
													                <?php $img = get_sub_field( 'img' ); ?>
													                <?php $size = 'full'; ?>
                                                                    <div class="col-lg-6">
                                                                        <a href="<?php echo wp_get_attachment_image_url( $img, $size ); ?>" data-fancybox="">
                                                                            <img src="<?php echo wp_get_attachment_image_url( $img, $size ); ?>" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-6">
														                <?php if ( get_sub_field('desc')) : ?>
                                                                            <div class="panel">
																                <?php the_sub_field( 'desc' ); ?>
                                                                            </div>
														                <?php endif; ?>
                                                                    </div>


												                <?php endwhile; ?>
											                <?php endif; ?>
                                                        </div>
                                                        <a href="#callback-modal" rel="modal:open" class="btn btn-blue">Заказать</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
						                <?php $i++; ?>
					                <?php endwhile; ?>
				                <?php else : ?>
					                <?php // No rows found ?>
				                <?php endif; ?>
                            </section>
		                <?php endwhile; ?>
	                <?php endif; ?>


	            <?php $bases_gallery_ids = get_field( 'base_gallery' ); ?>
	            <?php $size = 'full'; ?>
	            <?php if ( $bases_gallery_ids ) :  ?>
                    <section class="mb-70">
                        <div class="mb-25">
                            <h2 class="h3 color-blue"><b>Наши работы</b></h2>
                        </div>

                        <div class="center-slider">
                            <div class="js-three-slider">

					            <?php foreach ( $bases_gallery_ids as $bases_gallery_id ): ?>
                                    <div class="item">
							            <?php $img_url = wp_get_attachment_image_url( $bases_gallery_id, $size ); ?>
                                        <a href="<?php echo $img_url; ?>" data-fancybox="">
                                            <img src="<?php echo ix_get_img_url_for_id( $bases_gallery_id, 420, 280); ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
					            <?php endforeach; ?>

                            </div>
                        </div>
                    </section>

	            <?php endif; ?>

            </div>

	        <?php do_action('through_feedback_bottom_form' ); ?>

        </div>

    </main>

    <main class="site-main">

        <div class="page-item">
            <div class="container">









            </div>



        </div>

    </main>

<?php
get_footer();

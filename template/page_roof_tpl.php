<?php
/**
 * Template Name: Шаблон Кровля
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
                    <div class="page-text">
	                    <?php the_content(); ?>
                    </div>
                </div>

                <section class="mb-70">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="">
                        <img src="<?php echo kama_thumb_src( 'w=1480 &crop=center' ); ?>" alt="" class="img-responsive">
                    </a>
                </section>



	                <?php if ( have_rows( 'roof_installation' ) ) : ?>
		                <?php while ( have_rows( 'roof_installation' ) ) : the_row(); ?>
                            <section class="mb-70">
                                <div class="mb-25">
                                    <h2 class="h3 color-blue"><b><?php the_sub_field( 'title' ); ?></b></h2>
                                </div>
	                            <?php pre( get_sub_field('roof_installation')); ?>
                                <?php if ( have_rows( 'roof_installation_item' ) ) : ?>
                                <?php $i = 1; ?>
                                    <?php while ( have_rows( 'roof_installation_item' ) ) : the_row(); ?>
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
	                                                            <?php the_sub_field( 'title' ); ?><br>
	                                                            <?php the_sub_field( 'price' ); ?> ₽/м2
                                                            </a>
		                                                <?php endwhile; ?>
	                                                <?php endif; ?>
                                                </li>

                                                <li>
	                                                <?php if ( have_rows( 'type_items_2' ) ) : ?>
		                                                <?php while ( have_rows( 'type_items_2' ) ) : the_row(); ?>
                                                            <a href="#tab-2-<?php echo $i; ?>"
                                                               class="">
				                                                <?php the_sub_field( 'title' ); ?><br>
				                                                <?php the_sub_field( 'price' ); ?> ₽/м2
                                                            </a>
		                                                <?php endwhile; ?>
	                                                <?php endif; ?>
                                                </li>

                                                <li>
	                                                <?php if ( have_rows( 'type_items_3' ) ) : ?>
		                                                <?php while ( have_rows( 'type_items_3' ) ) : the_row(); ?>
                                                            <a href="#tab-3-<?php echo $i; ?>"
                                                               class="">
				                                                <?php the_sub_field( 'title' ); ?><br>
				                                                <?php the_sub_field( 'price' ); ?> ₽/м2
                                                            </a>
		                                                <?php endwhile; ?>
	                                                <?php endif; ?>
                                                </li>

                                                <li>
	                                                <?php if ( have_rows( 'type_items_4' ) ) : ?>
		                                                <?php while ( have_rows( 'type_items_4' ) ) : the_row(); ?>
                                                            <a href="#tab-4-<?php echo $i; ?>"
                                                               class="">
				                                                <?php the_sub_field( 'title' ); ?><br>
				                                                <?php the_sub_field( 'price' ); ?> ₽/м2
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
                                                    <div id="tab-3-<?php echo $i; ?>"
                                                         class="tab-panel">
                                                        <div class="row gy-20">
			                                                <?php if ( have_rows( 'type_items_3' ) ) : ?>
				                                                <?php while ( have_rows( 'type_items_3' ) ) : the_row(); ?>
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
                                                    <div id="tab-4-<?php echo $i; ?>"
                                                         class="tab-panel">
                                                        <div class="row gy-20">
			                                                <?php if ( have_rows( 'type_items_4' ) ) : ?>
				                                                <?php while ( have_rows( 'type_items_4' ) ) : the_row(); ?>
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

	            <?php $roofs_gallery_ids = get_field( 'roofs_gallery' ); ?>
	            <?php $size = 'full'; ?>
	            <?php if ( $roofs_gallery_ids ) :  ?>
                    <section class="mb-70">
                        <div class="mb-25">
                            <h2 class="h3 color-blue"><b>Наши работы</b></h2>
                        </div>

                        <div class="center-slider">
                            <div class="js-three-slider">

	                            <?php foreach ( $roofs_gallery_ids as $roofs_gallery_id ): ?>
                                    <div class="item">
                                        <?php $img_url = wp_get_attachment_image_url( $roofs_gallery_id, $size ); ?>
                                        <a href="<?php echo $img_url; ?>" data-fancybox="">
                                            <img src="<?php echo ix_get_img_url_for_id( $roofs_gallery_id, 420, 280); ?>" alt="" class="img-responsive">
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

<?php
get_footer();

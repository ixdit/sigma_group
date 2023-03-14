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


<?php
get_footer();

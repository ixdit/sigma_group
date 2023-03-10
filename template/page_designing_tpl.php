<?php
/**
 * Template Name: Шаблон Проектирование
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
	                <?php if(get_field('price_block_h1')) : ?>
                        <h1 class="page-title"><?php the_field( 'price_block_h1' ); ?></h1>
	                <?php else : ?>
                        <h1 class="page-title"><?php the_title(); ?></h1>
	                <?php endif; ?>
                    <div class="page-text">
	                    <?php the_field( 'price_desc' ); ?>
	                    <?php the_content(); ?>
                    </div>
                </div>

	            <?php if ( get_field( 'price_header_fon_img' ) ) : ?>
                    <section class="mb-70">
                        <a href="<?php the_field( 'price_header_fon_img' ); ?>" data-fancybox="">
                            <img src="<?php the_field( 'price_header_fon_img' ); ?>" alt="" class="img-responsive">
                        </a>
                    </section>
	            <?php endif ?>

                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b><?php the_field( 'price_section_title' ); ?></b></h2>
                    </div>

                    <div class="js-tariffs">
	                    <?php if ( have_rows( 'price_section_block1' ) ) : ?>
		                    <?php while ( have_rows( 'price_section_block1' ) ) : the_row(); ?>
                                <div class="tariff">
                                    <div class="tariff__head">
                                        <div class="tariff__title">Тариф</div>
                                        <div class="tariff__type"><?php the_sub_field( 'price_block1_tarif_name' ); ?></div>
                                    </div>
                                    <div class="tariff__content">
                                        <ul>
	                                        <?php if ( have_rows( 'propertys' ) ) : ?>
		                                        <?php while ( have_rows( 'propertys' ) ) : the_row(); ?>
                                                    <li>
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="13"
                                                                   viewBox="0 0 22 13" fill="none">
                                                            <path d="M1 1L11 11L21 1" stroke="#1E3859" stroke-width="2"/>
                                                        </svg></span>
	                                                    <?php the_sub_field( 'property' ); ?>
                                                    </li>
		                                        <?php endwhile; ?>
	                                        <?php endif; ?>
                                        </ul>
                                        <div>
                                            <div class="tariff__price"><?php the_sub_field( 'price_block1_value' ); ?> ₽/м2</div>
                                            <a href="" class="btn btn-blue">Заказать</a>
                                        </div>
                                    </div>
                                </div>
		                    <?php endwhile; ?>
	                    <?php endif; ?>

	                    <?php if ( have_rows( 'price_section_block2' ) ) : ?>
		                    <?php while ( have_rows( 'price_section_block2' ) ) : the_row(); ?>
                                <div class="tariff">
                                    <div class="tariff__head">
                                        <div class="tariff__title">Тариф</div>
                                        <div class="tariff__type"><?php the_sub_field( 'price_block_tarif_name' ); ?></div>
                                    </div>
                                    <div class="tariff__content">
                                        <ul>
						                    <?php if ( have_rows( 'propertys' ) ) : ?>
							                    <?php while ( have_rows( 'propertys' ) ) : the_row(); ?>
                                                    <li>
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="13"
                                                                   viewBox="0 0 22 13" fill="none">
                                                            <path d="M1 1L11 11L21 1" stroke="#1E3859" stroke-width="2"/>
                                                        </svg></span>
									                    <?php the_sub_field( 'property' ); ?>
                                                    </li>
							                    <?php endwhile; ?>
						                    <?php endif; ?>
                                        </ul>
                                        <div>
                                            <div class="tariff__price"><?php the_sub_field( 'price_block_value' ); ?> ₽/м2</div>
                                            <a href="" class="btn btn-blue">Заказать</a>
                                        </div>
                                    </div>
                                </div>
		                    <?php endwhile; ?>
	                    <?php endif; ?>
	                    <?php if ( have_rows( 'price_section_block3' ) ) : ?>
		                    <?php while ( have_rows( 'price_section_block3' ) ) : the_row(); ?>
                                <div class="tariff">
                                    <div class="tariff__head">
                                        <div class="tariff__title">Тариф</div>
                                        <div class="tariff__type"><?php the_sub_field( 'price_block_tarif_name' ); ?></div>
                                    </div>
                                    <div class="tariff__content">
                                        <ul>
						                    <?php if ( have_rows( 'propertys' ) ) : ?>
							                    <?php while ( have_rows( 'propertys' ) ) : the_row(); ?>
                                                    <li>
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="13"
                                                                   viewBox="0 0 22 13" fill="none">
                                                            <path d="M1 1L11 11L21 1" stroke="#1E3859" stroke-width="2"/>
                                                        </svg></span>
									                    <?php the_sub_field( 'property' ); ?>
                                                    </li>
							                    <?php endwhile; ?>
						                    <?php endif; ?>
                                        </ul>
                                        <div>
                                            <div class="tariff__price"><?php the_sub_field( 'price_block_value' ); ?> ₽/м2</div>
                                            <a href="" class="btn btn-blue">Заказать</a>
                                        </div>
                                    </div>
                                </div>
		                    <?php endwhile; ?>
	                    <?php endif; ?>

	                    <?php if ( have_rows( 'price_section_block4' ) ) : ?>
		                    <?php while ( have_rows( 'price_section_block4' ) ) : the_row(); ?>
                                <div class="tariff">
                                    <div class="tariff__head">
                                        <div class="tariff__title">Тариф</div>
                                        <div class="tariff__type"><?php the_sub_field( 'price_block_tarif_name' ); ?></div>
                                    </div>
                                    <div class="tariff__content">
                                        <ul>
						                    <?php if ( have_rows( 'propertys' ) ) : ?>
							                    <?php while ( have_rows( 'propertys' ) ) : the_row(); ?>
                                                    <li>
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="13"
                                                                   viewBox="0 0 22 13" fill="none">
                                                            <path d="M1 1L11 11L21 1" stroke="#1E3859" stroke-width="2"/>
                                                        </svg></span>
									                    <?php the_sub_field( 'property' ); ?>
                                                    </li>
							                    <?php endwhile; ?>
						                    <?php endif; ?>
                                        </ul>
                                        <div>
                                            <div class="tariff__price"><?php the_sub_field( 'price_block_value' ); ?> ₽/м2</div>
                                            <a href="" class="btn btn-blue">Заказать</a>
                                        </div>
                                    </div>
                                </div>
		                    <?php endwhile; ?>
	                    <?php endif; ?>

                    </div>

                </section>

                <?php if ( have_rows( 'chapter' ) ) : ?>
                    <section class="mb-70">
                        <div class="mb-25">
                            <h2 class="h3 color-blue"><b><?php the_field( 'chapter_block_title' ); ?></b></h2>
                        </div>
                            <?php while ( have_rows( 'chapter' ) ) : the_row(); ?>
                                <div class="question">
                                    <div class="question__head">
                                        <span><?php the_sub_field( 'chapter_title' ); ?></span>

                                        <svg width="25" height="12">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#arrow-down"></use>
                                        </svg>
                                    </div>
                                    <div class="question__content">
                                        <div class="js-one-slider">
                                            <?php $chapter_images_urls = get_sub_field( 'chapter_images' ); ?>
                                            <?php if ( $chapter_images_urls ) :  ?>
                                                <?php foreach ( $chapter_images_urls as $chapter_images_url ): ?>
                                                    <div class="item">
                                                        <a href="<?php echo esc_url( $chapter_images_url ); ?>" data-fancybox>
                                                            <img src="<?php echo esc_url( $chapter_images_url ); ?>" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    </section>
                <?php endif; ?>

	            <?php if ( have_rows( 'examples_of_works' ) ) : ?>
                    <section class="mb-70">
                        <div class="mb-25">
                            <h2 class="h3 color-blue"><b><?php the_field( 'example_block_title' ); ?></b></h2>
                        </div>

	                    <?php while ( have_rows( 'examples_of_works' ) ) : the_row(); ?>
                            <div class="question">
                                <div class="question__head">
                                    <span><?php the_sub_field( 'example_title' ); ?></span>

                                    <svg width="25" height="12">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#arrow-down"></use>
                                    </svg>
                                </div>
                                <div class="question__content">
                                    <div class="js-one-slider">

	                                    <?php $example_galery_urls = get_sub_field( 'example_galery' ); ?>
	                                    <?php if ( $example_galery_urls ) :  ?>
		                                    <?php foreach ( $example_galery_urls as $example_galery_url ): ?>
                                                <div class="item">
                                                    <a href="<?php echo esc_url( $example_galery_url ); ?>" data-fancybox>
                                                        <img src="<?php echo esc_url( $example_galery_url ); ?>" alt="" class="img-responsive">
                                                    </a>
                                                </div>
		                                    <?php endforeach; ?>
	                                    <?php endif; ?>

                                    </div>
                                </div>
                            </div>
	                    <?php endwhile; ?>

                    </section>
	            <?php endif; ?>

            </div>

	        <?php do_action('through_feedback_bottom_form' ); ?>

        </div>

    </main>

<?php
get_footer();

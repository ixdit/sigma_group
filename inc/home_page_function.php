<?php

/**
 * блоки акцентов внутри баннера на главной
 */
function get_the_accents() {

	$accents = get_field('home_page_accents');
	$size = 'full';

    ob_start();

	foreach ( $accents as $accent ) {
		?>
		<div>
			<div class="jumbotron__action">
				<div>
					<img src="<?php echo wp_get_attachment_image_url( $accent['accents_img'], $size ); ?>" alt="">
				</div>
				<?php echo $accent['accents_text']; ?>
			</div>
		</div>
		<?php
	}

    echo ob_get_clean();
}

/**
 * Блоки после поиска
 */
function get_the_blocks_after_search() {

    $block1 = get_field('block_after_search_1');
	$block2 = get_field('block_after_search_2');
	$block3 = get_field('block_after_search_3');

    $block1_img_url = ix_get_img( $block1['img'], 480, 280);
	$block2_img_url = ix_get_img( $block2['img'], 480, 280);
	$block3_img_url = ix_get_img( $block3['img'], 480, 280);

	ob_start();

    ?>
    <div class="col-xl-4">
        <div class="project">
            <a href="<?php echo $block1['project_button_link']; ?>" class="project-thumb">
                <img src="<?php echo $block1_img_url; ?>" alt="">
            </a>
            <div class="project-content">
                <div>
                    <a href="<?php echo $block1['project_button_link']; ?>" class="project-title"><?php echo $block1['title']; ?></a>
                    <div class="project-price">
                        <span>от</span> <?php echo $block1['price']; ?> <span>руб/м2</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="<?php echo $block1['project_button_link']; ?>" class="btn btn-green btn-block">Проекты домов</a>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo $block1['bundle_button_link']; ?>" class="btn btn-blue btn-block">Комплектация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="project">
            <a href="<?php echo $block2['project_button_link']; ?>" class="project-thumb">
                <img src="<?php echo $block2_img_url; ?>" alt="">
            </a>
            <div class="project-content">
                <div>
                    <a href="<?php echo $block2['project_button_link']; ?>" class="project-title"><?php echo $block2['title']; ?></a>
                    <div class="project-price">
                        <span>от</span> <?php echo $block2['price']; ?> <span>руб/м2</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="<?php echo $block2['project_button_link']; ?>" class="btn btn-green btn-block">Проекты домов</a>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo $block2['bundle_button_link']; ?>" class="btn btn-blue btn-block">Комплектация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="project">
            <a href="<?php echo $block3['project_button_link']; ?>" class="project-thumb">
                <img src="<?php echo $block3_img_url; ?>" alt="">
            </a>
            <div class="project-content">
                <div>
                    <a href="<?php echo $block3['project_button_link']; ?>" class="project-title"><?php echo $block3['title']; ?></a>
                    <div class="project-price">
                        <span>от</span> <?php echo $block3['price']; ?> <span>руб/м2</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="<?php echo $block3['project_button_link']; ?>" class="btn btn-green btn-block">Проекты домов</a>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo $block3['bundle_button_link']; ?>" class="btn btn-blue btn-block">Комплектация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

	echo ob_get_clean();

}

/**
 * популярные проекты на главной
 */
function get_the_popular_projects() {

	global $post;

	$popular_projects = get_field( 'popular_projects' );

    ob_start();

	if ( $popular_projects ) :
		foreach ( $popular_projects as $post_ids ) :

			//setup_postdata( $post );

			$min_price_arr = array();

			$min_price_arr[] = get_field('project_price_gazoblok', $post_ids);
			$min_price_arr[] = get_field('project_price_keramoblok', $post_ids);
			$min_price_arr[] = get_field('project_price_kirpich', $post_ids);

			$min_price = (float) min($min_price_arr);

            ?>
            <div class="col-lg-4 col-md-6 item">
                <div class="project-full">

                    <a href="<?php echo get_permalink( $post_ids ); ?>" class="project-full-thumb">
                        <img src="<?php echo kama_thumb_src("w=480 &h=250 &crop=center &post_id=$post_ids")?>" alt="">

                        <span class="project-full__save">
                            <svg width="19" height="15">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#saves"></use>
                            </svg>
                        </span>
                    </a>
                    <div class="project-full-content">
                        <a href="<?php echo get_permalink( $post_ids ); ?>" class="project-full-title"><?php echo get_the_title( $post_ids ); ?></a>
                        <div class="project-full-props">

                            <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-1.svg" alt="">
                                            Площадь
                                        </span>
                                <span><?php the_field( 'project_s_doma', $post_ids ); ?> м<sup>2</sup> </span>
                            </div>

                            <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-2.svg" alt="">
                                            Этажность
                                        </span>
                                <span><?php the_field( 'project_number_floors', $post_ids ); ?> эт.</span>
                            </div>

                            <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-3.svg" alt="">
                                            Количество спален
                                        </span>
                                <span><?php the_field( 'project_number_bedrooms', $post_ids ); ?> шт.</span>
                            </div>

                            <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-4.svg" alt="">
                                            Количество санузлов
                                        </span>
                                <span><?php the_field( 'project_number_bathrooms', $post_ids ); ?> шт.</span>
                            </div>

                        </div>
                        <div class="project-full-bottom">
                            <div class="project-full-price">
                                <span>от</span> <?php echo number_format_i18n($min_price) ; ?> <span>руб.</span>
                            </div>
                            <a href="<?php echo get_permalink( $post_ids ); ?>" class="btn btn-blue btn-md">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php

		endforeach;

	endif;

    echo ob_get_clean();

}
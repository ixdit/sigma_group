<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sg-2site
 */

$post_id = get_the_ID();

$min_price_arr = array();

$min_price_arr[] = get_field('project_price_gazoblok');
$min_price_arr[] = get_field('project_price_keramoblok');
$min_price_arr[] = get_field('project_price_kirpich');

$min_price = (float) min($min_price_arr);

?>

    <div class="col-lg-4 col-md-6 item">
        <div class="project-full">

            <a href="<?php echo get_permalink( $post_id ); ?>" class="project-full-thumb">
                <img src="<?php echo kama_thumb_src("w=480 &h=250 &crop=center &post_id=$post_id")?>" alt="">

                <span class="project-full__save">
                            <svg width="19" height="15">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/svg-sprite.svg#saves"></use>
                            </svg>
                        </span>
            </a>
            <div class="project-full-content">
                <a href="<?php echo get_permalink( $post_id ); ?>" class="project-full-title"><?php echo get_the_title( $post_id ); ?></a>
                <div class="project-full-props">

                    <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-1.svg" alt="">
                                            Площадь
                                        </span>
                        <span><?php the_field( 'project_s_doma', $post_id ); ?> м<sup>2</sup> </span>
                    </div>

                    <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-2.svg" alt="">
                                            Этажность
                                        </span>
                        <span><?php the_field( 'project_number_floors', $post_id ); ?> эт.</span>
                    </div>

                    <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-3.svg" alt="">
                                            Количество спален
                                        </span>
                        <span><?php the_field( 'project_number_bedrooms', $post_id ); ?> шт.</span>
                    </div>

                    <div class="project-full-prop">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-prop-4.svg" alt="">
                                            Количество санузлов
                                        </span>
                        <span><?php the_field( 'project_number_bathrooms', $post_id ); ?> шт.</span>
                    </div>

                </div>
                <div class="project-full-bottom">
                    <div class="project-full-price">
                        <span>от</span> <?php echo number_format_i18n($min_price) ; ?> <span>руб.</span>
                    </div>
                    <a href="<?php echo get_permalink( $post_id ); ?>" class="btn btn-blue btn-md">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

<?php

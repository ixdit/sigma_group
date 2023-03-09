<?php

function get_the_project_category_list() {

	get_header();
	if ( get_field( 'project_cat_list' ) ) {
		$project_cat_list = get_field( 'project_cat_list' );
//    pre($project_cat_list);
	}

	ob_start();

	foreach ( $project_cat_list as $item ) :

		$cat_img_url = ix_get_img_url_for_id( $item['project_cat_list_img'], 605, 320 );

		$term = get_term( $item['project_cat_list_term'] );

		if ( $item['project_cat_list_title'] ) {
			$cat_title = $item['project_cat_list_title'];
		} else {
			$cat_title = $term->name;
		}

		$cat_description     = $term->description;
		$cat_project_counter = $term->count;
		$cat_project_url     = get_term_link( $term->term_id )

		?>
        <div class="col-md-5">
            <a href="<?php echo $cat_project_url; ?>" class="portfolio_category_link">
                <div class="portfolio-category">
                    <div class="portfolio-category__top">
                        <img src="<?php echo $cat_img_url; ?>" alt="">
                        <div class="portfolio-category__title"><?php echo $cat_title; ?></div>
                        <div class="portfolio-category__count"><?php echo $cat_project_counter; ?></div>
                    </div>
                    <div class="portfolio-category__text">
						<?php echo $cat_description; ?>
                    </div>
                </div>
            </a>
        </div>
	<?php

	endforeach;

	echo ob_get_clean();
}

function get_the_project_info() {
	return;
}

/**
 * Галерея Планировки и фасады типовые проекты
 */
function get_the_project_gallery() {

	$project_gallery_ids = get_field( 'project_gallery' );
	$size                = 'full';

	ob_start();

	$i = 0;
	foreach ( $project_gallery_ids as $item ) {

		if ( $i == 0 || $i == 1 ) {
			?>
            <div class="col-md-6">
                <a href="<?php echo wp_get_attachment_image_url( $item, $size ); ?>" data-fancybox="">
                    <img src="<?php echo ix_get_img_url_for_id( $item, 730, 485 ) ?>" alt="" class="img-responsive">
                </a>
            </div>
			<?php
		} else {
			?>
            <div class="col-sm-3 col-6">
                <a href="<?php echo wp_get_attachment_image_url( $item, $size ); ?>" data-fancybox="">
                    <img src="<?php echo ix_get_img_url_for_id( $item, 355, 235 ) ?>" alt="" class="img-responsive">
                </a>
            </div>
			<?php
		}
		$i ++;
	}

	echo ob_get_clean();

}

/**
 * @param $kit_prefix
 * @param $mob_version
 * если $mob_version true => версия для моб устройств
 *
 * @return void
 */
function get_the_kit_item( $kit_prefix, $mob_version = false ) {

	$kit_name = $kit_prefix . '_kit';
	$kit_data = get_field( $kit_name, 'option' );
	$size     = 'full';
//	$kit_img_url = wp_get_attachment_image_url( $item, $size );

	ob_start();
	?>
    <div class="d-md-block d-none">
        <div class="mb-3">
            <div class="text-md"><b>Входит в стоимость:</b></div>
        </div>

        <ul class="single-lg__parts js-tab-controls" data-tabs="parts-<?php echo $kit_prefix; ?>">
			<?php
			//pre($kit_data);
			?>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_preparatory_work"
                   class="active">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/1.svg" alt="">
                    <span> Подготовительные</span>
                </a>
            </li>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_base"
                   class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/2.svg" alt="">
                    <span> Фундамент</span>
                </a>
            </li>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_walls"
                   class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/3.svg" alt="">
                    <span> Стены</span>
                </a>
            </li>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_ceiling"
                   class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/4.svg" alt="">
                    <span> Перекрытия</span>
                </a>
            </li>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_roof"
                   class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/5.svg" alt="">
                    <span> Кровля</span>
                </a>
            </li>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_insulation"
                   class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/6.svg" alt="">
                    <span> Утепление</span>
                </a>
            </li>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_windows"
                   class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/7.svg" alt="">
                    <span> Окна</span>
                </a>
            </li>
            <li>
                <a href="#part-<?php echo $kit_prefix; ?>_doors"
                   class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/parts/8.svg" alt="">
                    <span> Двери</span>
                </a>
            </li>
        </ul>

        <div id="parts-<?php echo $kit_prefix; ?>">

            <div class="tab-panel active" id="part-<?php echo $kit_prefix; ?>_preparatory_work">

						<?php
						$item_name      = 'preparatory_work';
						$kit_items_data = $kit_data[ $item_name ];
						//                        pre($kit_items_data);
						$i = 1;
						if ( $kit_items_data ) {
							?>
                            <div class="offer-service is-border">
                                <div class="offer-service__content">
									<?php
									$kit_items_data_count = count( $kit_items_data );
									foreach ( $kit_items_data as $kit_item ) {
//                            pre($kit_item);
										$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
										?>
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                                <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                                    <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
												<?php
												echo $kit_item[ $item_name . '_text' ]
												?>
                                            </div>
                                        </div>
										<?php
										if ( $i > 0 && $i != $kit_items_data_count ) {
											echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
										}
										$i ++;
									}
									?>
                                </div>
                            </div>
							<?php
						}
						?>
            </div>

            <div class="tab-panel " id="part-<?php echo $kit_prefix; ?>_base">
						<?php
						$item_name      = 'base';
						$kit_items_data = $kit_data[ $item_name ];
						//                        pre($kit_items_data);
						$i = 1;
						if ( $kit_items_data ) {
							?>
                            <div class="offer-service is-border">
                                <div class="offer-service__content">
									<?php
									$kit_items_data_count = count( $kit_items_data );
									foreach ( $kit_items_data as $kit_item ) {
//                            pre($kit_item);
										$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
										?>
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                                <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                                    <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
												<?php
												echo $kit_item[ $item_name . '_text' ]
												?>
                                            </div>
                                        </div>
										<?php
										if ( $i > 0 && $i != $kit_items_data_count ) {
											echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
										}
										$i ++;
									}
									?>
                                </div>
                            </div>
							<?php
						}
						?>
            </div>

            <div class="tab-panel " id="part-<?php echo $kit_prefix; ?>_walls">
						<?php
						$item_name      = 'walls';
						$kit_items_data = $kit_data[ $item_name ];
//						                        pre($kit_items_data);
						$i = 1;
						if ( $kit_items_data ) {
							?>
                            <div class="offer-service is-border">
                                <div class="offer-service__content">
									<?php
									$kit_items_data_count = count( $kit_items_data );
									foreach ( $kit_items_data as $kit_item ) {
//                            pre($kit_item);
										$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
										?>
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                                <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                                    <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
												<?php
												echo $kit_item[ $item_name . '_text' ]
												?>
                                            </div>
                                        </div>
										<?php
										if ( $i > 0 && $i != $kit_items_data_count ) {
											echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
										}
										$i ++;
									}
									?>
                                </div>
                            </div>
							<?php
						}
						?>
            </div>

            <div class="tab-panel " id="part-<?php echo $kit_prefix; ?>_ceiling">

				<?php
				$item_name      = 'ceiling';
				$kit_items_data = $kit_data[ $item_name ];
				//                        pre($kit_items_data);
				$i = 1;
				if ( $kit_items_data ) {
					?>
                    <div class="offer-service is-border">
                        <div class="offer-service__content">
							<?php
							$kit_items_data_count = count( $kit_items_data );
							foreach ( $kit_items_data as $kit_item ) {
								//                            pre($kit_item);
								$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
								?>
                                <div class="row gy-20">
                                    <div class="col-lg-6">
                                        <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                            <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
										<?php
										echo $kit_item[ $item_name . '_text' ]
										?>
                                    </div>
                                </div>
								<?php
								if ( $i > 0 && $i != $kit_items_data_count ) {
									echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
								}
								$i ++;
							}
							?>
                        </div>
                    </div>
					<?php
				}
				?>

            </div>

            <div class="tab-panel " id="part-<?php echo $kit_prefix; ?>_roof">

						<?php
						$item_name      = 'roof';
						$kit_items_data = $kit_data[ $item_name ];
						//                        pre($kit_items_data);
						$i = 1;
						if ( $kit_items_data ) {
							?>
                            <div class="offer-service is-border">
                                <div class="offer-service__content">
									<?php
									$kit_items_data_count = count( $kit_items_data );
									foreach ( $kit_items_data as $kit_item ) {
//                            pre($kit_item);
										$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
										?>
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                                <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                                    <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
												<?php
												echo $kit_item[ $item_name . '_text' ]
												?>
                                            </div>
                                        </div>
										<?php
										if ( $i > 0 && $i != $kit_items_data_count ) {
											echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
										}
										$i ++;
									}
									?>
                                </div>
                            </div>
							<?php
						}
						?>

            </div>

            <div class="tab-panel " id="part-<?php echo $kit_prefix; ?>_insulation">

						<?php
						$item_name      = 'insulation';
						$kit_items_data = $kit_data[ $item_name ];
						//                        pre($kit_items_data);
						$i = 1;
						if ( $kit_items_data ) {
							?>
                            <div class="offer-service is-border">
                                <div class="offer-service__content">
									<?php
									$kit_items_data_count = count( $kit_items_data );
									foreach ( $kit_items_data as $kit_item ) {
//                            pre($kit_item);
										$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
										?>
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                                <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                                    <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
												<?php
												echo $kit_item[ $item_name . '_text' ]
												?>
                                            </div>
                                        </div>
										<?php
										if ( $i > 0 && $i != $kit_items_data_count ) {
											echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
										}
										$i ++;
									}
									?>
                                </div>
                            </div>
							<?php
						}
						?>

            </div>

            <div class="tab-panel " id="part-<?php echo $kit_prefix; ?>_windows">

						<?php
						$item_name      = 'windows';
						$kit_items_data = $kit_data[ $item_name ];
						//                        pre($kit_items_data);
						$i = 1;
						if ( $kit_items_data ) {
							?>
                            <div class="offer-service is-border">
                                <div class="offer-service__content">
									<?php
									$kit_items_data_count = count( $kit_items_data );
									foreach ( $kit_items_data as $kit_item ) {
//                            pre($kit_item);
										$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
										?>
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                                <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                                    <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
												<?php
												echo $kit_item[ $item_name . '_text' ]
												?>
                                            </div>
                                        </div>
										<?php
										if ( $i > 0 && $i != $kit_items_data_count ) {
											echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
										}
										$i ++;
									}
									?>
                                </div>
                            </div>
							<?php
						}
						?>

            </div>

            <div class="tab-panel " id="part-<?php echo $kit_prefix; ?>_doors">

						<?php
						$item_name      = 'doors';
						$kit_items_data = $kit_data[ $item_name ];

						//                        pre($kit_items_data);
						$i = 1;
						if ( $kit_items_data ) {
							?>
                            <div class="offer-service is-border">
                                <div class="offer-service__content">
									<?php
									$kit_items_data_count = count( $kit_items_data );
									foreach ( $kit_items_data as $kit_item ) {
//                            pre($kit_item);
										$kit_item_img_url = wp_get_attachment_image_url( $kit_item[ $item_name . '_img' ], $size );
										?>
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                                <a href="<?php echo $kit_item_img_url ?>" data-fancybox="">
                                                    <img src="<?php echo ix_get_img_url_for_id( $kit_item[ $item_name . '_img' ], 690 ); ?>"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
												<?php
												echo $kit_item[ $item_name . '_text' ]
												?>
                                            </div>
                                        </div>
										<?php
										if ( $i > 0 && $i != $kit_items_data_count ) {
											echo '<div class="text-md text-center my-25"><b>ИЛИ</b></div>';
										}
										$i ++;
									}
									?>
                                </div>
                            </div>
							<?php
						}
						?>

            </div>

        </div>
    </div>

    <div class="d-md-none">
        <div class="questions">

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/1.svg" alt="">
                    <span>Подготовительные</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/2.svg" alt="">
                    <span>Фундамент</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/3.svg" alt="">
                    <span>Стены</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/4.svg" alt="">
                    <span>Перекрытия</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/5.svg" alt="">
                    <span>Кровля</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/6.svg" alt="">
                    <span>Утепление</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/7.svg" alt="">
                    <span>Окна</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="question is-parts">
                <div class="question__head">
                    <img src="images/icons/parts/8.svg" alt="">
                    <span>Двери</span>
                </div>
                <div class="question__content">
                    <div class="offer-service is-border">
                        <div class="offer-service__content">

                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="text-md text-center my-25"><b>ИЛИ</b>
                            </div>


                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <a href="images/uploads/offer-service.png"
                                       data-fancybox="">
                                        <img src="images/uploads/offer-service.png"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td>Монолитная утепленная фундаментная
                                                плита
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        Высота ( толщина) плиты 300
                                                        мм
                                                    </li>
                                                    <li>Выборка котлована</li>
                                                    <li>Песчаная подушка с послойным
                                                        трамбованием
                                                    </li>
                                                    <li>Подушка из щебня фракцией
                                                        20-40
                                                        мм с
                                                        трамбованием 200 мм
                                                    </li>
                                                    <li>Пеноплекс 50 мм</li>
                                                    <li>Гидроизоляция</li>
                                                    <li>Двойной арматурный каркас,
                                                        ячея
                                                        200*200 мм арматура диаметр
                                                        12
                                                        мм, А
                                                        III, защитный слой бетона
                                                        30-50
                                                        мм
                                                    </li>
                                                    <li>Бетон заводского
                                                        изготовления,
                                                        марки
                                                        М 300
                                                    </li>
                                                    <li>Закладные гильзы под
                                                        инженерные
                                                        сети: вода, электричество,
                                                        канализация
                                                    </li>
                                                    <li>Вибрирование бетона с
                                                        помощью
                                                        глубинного вибратора
                                                    </li>
                                                    <li>Снятие опалубки</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Гидроизоляция</td>
                                            <td>Двойная гидроизоляция фундамента —
                                                гидростеклоизол
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
	<?php
	echo ob_get_clean();

}

//function get_the_kit_item_content( $kit ) {
//
//    $kit_name = $kit . '_kit';
//	$kit_data = get_field( $kit_name, 'option' );
//	$size = 'full';
////    $kit_img_url = wp_get_attachment_image_url( $item, $size );
//
//    ?>
    <!---->
    <!--    --><?php
//
//
//
//}

function add_custom_option_page_price_correction() {
	add_submenu_page(
		'edit.php?post_type=projects',
		__( 'Корректировка цен для бань и домов из бруса' ),
		__( 'Корректировка цен' ),
		'manage_options',
		'price_correction',
		'price_correction_callback',
		10,
	);
}

add_action( 'admin_menu', 'add_custom_option_page_price_correction' );

function price_correction_callback() {
	// контент страницы
	echo '<div class="wrap">';
	echo '<h3>' . get_admin_page_title() . '</h3>';
	echo '</div>';
	?>
    <table class="ix_table_price_correction_bani">
        <tr>
            <td class="form_table_title">
                <h3>Корректировка цен Бани</h3>
            </td>
        </tr>
        <tr>
            <td class="form_table_title">
                <div class="form_item form_title">Русская чаша - Сруб</div>
                <div class="form_item form_title">Русская чаша - Под усадку</div>
                <div class="form_item form_title">Канадская чаша - Сруб</div>
                <div class="form_item form_title">Канадская чаша - Под усадку</div>
                <div class="form_item form_title"></div>
            </td>
        </tr>
        <tr>
            <td class="change_procent_wrap">
                <form class="form_table_procent">
                    <div class="form_item change_procent">
                        <input type="text" name="bani_russian_bowl_price_srub" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="bani_russian_bowl_price_pod_usadku" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="bani_canadian_bowl_price_srub" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="bani_canadian_bowl_price_pod_usadku" value="">
                    </div>

                    <div class="form_item change_procent change_procent_btn_group">
                        <input type="submit" name="change_procent_recalculate_btn"
                               class="change_procent_recalculate_btn" value="Пересчитать">
                        <input type="hidden" name="project_type_update" value="bani_price_correction">
                        <input type="hidden" name="action" value="price_correction"/>
						<?php wp_nonce_field( 'send_form', '_nonce_send_form' ) ?>
                    </div>
                </form>
            </td>
        </tr>
    </table>

    <table class="ix_table_price_correction_doma_iz_brevna">
        <tr>
            <td class="form_table_title">
                <h3>Корректировка цен Дома из бруса</h3>
            </td>
        </tr>
        <tr>
            <td class="form_table_title">
                <div class="form_item form_title">Русская чаша - Сруб</div>
                <div class="form_item form_title">Русская чаша - Под усадку</div>
                <div class="form_item form_title">Канадская чаша - Сруб</div>
                <div class="form_item form_title">Канадская чаша - Под усадку</div>
                <div class="form_item form_title"></div>
            </td>
        </tr>
        <tr>
            <td class="change_procent_wrap">
                <form class="form_table_procent">
                    <div class="form_item change_procent">
                        <input type="text" name="doma_russian_bowl_price_srub" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="doma_russian_bowl_price_pod_usadku" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="doma_canadian_bowl_price_srub" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="doma_canadian_bowl_price_pod_usadku" value="">
                    </div>

                    <div class="form_item change_procent change_procent_btn_group">
                        <input type="submit" name="change_procent_recalculate_btn"
                               class="change_procent_recalculate_btn" value="Пересчитать">
                        <input type="hidden" name="project_type_update" value="doma_price_correction">
                        <input type="hidden" name="action" value="price_correction"/>
						<?php wp_nonce_field( 'send_form', '_nonce_send_form' ) ?>
                    </div>
                </form>
            </td>
        </tr>
    </table>

    <table class="ix_table_price_correction_author_iz_brevna">
        <tr>
            <td class="form_table_title">
                <h3>Корректировка цен Авторских Домов из бруса</h3>
            </td>
        </tr>
        <tr>
            <td class="form_table_title">
                <div class="form_item form_title">Русская чаша - Сруб</div>
                <div class="form_item form_title">Русская чаша - Под усадку</div>
                <div class="form_item form_title">Канадская чаша - Сруб</div>
                <div class="form_item form_title">Канадская чаша - Под усадку</div>
                <div class="form_item form_title"></div>
            </td>
        </tr>
        <tr>
            <td class="change_procent_wrap">
                <form class="form_table_procent">
                    <div class="form_item change_procent">
                        <input type="text" name="doma_russian_bowl_price_srub" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="doma_russian_bowl_price_pod_usadku" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="doma_canadian_bowl_price_srub" value="">
                    </div>
                    <div class="form_item change_procent">
                        <input type="text" name="doma_canadian_bowl_price_pod_usadku" value="">
                    </div>

                    <div class="form_item change_procent change_procent_btn_group">
                        <input type="submit" name="change_procent_recalculate_btn"
                               class="change_procent_recalculate_btn" value="Пересчитать">
                        <input type="hidden" name="project_type_update" value="author_iz_brevna_price_correction">
                        <input type="hidden" name="action" value="price_correction"/>
						<?php wp_nonce_field( 'send_form', '_nonce_send_form' ) ?>
                    </div>
                </form>
            </td>
        </tr>
    </table>
	<?php
}

add_action( 'wp_ajax_price_correction', 'calculate_price_correction' );
function calculate_price_correction() {

	global $post;

	$price_collection = $_POST;

//    pre($price_collection);

	if ( $price_collection['project_type_update'] == 'bani_price_correction' ) {
		$term                                   = 'bani';
		$prefix                                 = 'bani_';
		$percent_russian_bowl_price_srub        = $price_collection['bani_russian_bowl_price_srub'];
		$percent_russian_bowl_price_pod_usadku  = $price_collection['bani_russian_bowl_price_pod_usadku'];
		$percent_canadian_bowl_price_srub       = $price_collection['bani_canadian_bowl_price_srub'];
		$percent_canadian_bowl_price_pod_usadku = $price_collection['bani_canadian_bowl_price_pod_usadku'];
	}
	if ( $price_collection['project_type_update'] == 'doma_price_correction' ) {
		$term                                   = 'doma-iz-brevna';
		$prefix                                 = 'doma_';
		$percent_russian_bowl_price_srub        = $price_collection['doma_russian_bowl_price_srub'];
		$percent_russian_bowl_price_pod_usadku  = $price_collection['doma_russian_bowl_price_pod_usadku'];
		$percent_canadian_bowl_price_srub       = $price_collection['doma_canadian_bowl_price_srub'];
		$percent_canadian_bowl_price_pod_usadku = $price_collection['doma_canadian_bowl_price_pod_usadku'];
	}
	if ( $price_collection['project_type_update'] == 'author_iz_brevna_price_correction' ) {
		$term                                   = 'authors_project';
		$prefix                                 = 'doma_';
		$percent_russian_bowl_price_srub        = $price_collection['doma_russian_bowl_price_srub'];
		$percent_russian_bowl_price_pod_usadku  = $price_collection['doma_russian_bowl_price_pod_usadku'];
		$percent_canadian_bowl_price_srub       = $price_collection['doma_canadian_bowl_price_srub'];
		$percent_canadian_bowl_price_pod_usadku = $price_collection['doma_canadian_bowl_price_pod_usadku'];
	}
	if ( $term && $percent_russian_bowl_price_srub || $percent_russian_bowl_price_pod_usadku || $percent_canadian_bowl_price_srub || $percent_canadian_bowl_price_pod_usadku ) {
		$posts = get_posts( [
			//            'meta_key'    => 'project_old_id',
			//            'meta_value'  => $project_old_id,
			'post_type'   => 'projects',
			'post_status' => 'any',
			'numberposts' => - 1,
			'tax_query'   => [
				[
					'taxonomy' => 'catalog',
					'field'    => 'slug',
					'terms'    => [ $term ],
				],
			],
		] );

		$updates = [];

		foreach ( $posts as $post ) {
			setup_postdata( $post );
			$post_id = $post->ID;


			$updates[] = "\n" . the_title() . PHP_EOL . "\n";

			if ( ! empty( $post_id ) ) {

				if ( $percent_russian_bowl_price_srub ) {

					$old_russian_bowl_price_srub = get_field( $prefix . 'russian_bowl_price_srub', $post_id );

					$res = calc_new_price( $old_russian_bowl_price_srub, $percent_russian_bowl_price_srub );
					update_field( $prefix . 'russian_bowl_price_srub', $res, $post_id );
				}

				if ( $percent_russian_bowl_price_pod_usadku ) {

					$old_russian_bowl_price_pod_usadku = get_field( $prefix . 'russian_bowl_price_pod_usadku', $post_id );

					$res = calc_new_price( $old_russian_bowl_price_pod_usadku, $percent_russian_bowl_price_pod_usadku );
					update_field( $prefix . 'russian_bowl_price_pod_usadku', $res, $post_id );
				}

				if ( $percent_canadian_bowl_price_srub ) {

					$old_canadian_bowl_price_srub = get_field( $prefix . 'canadian_bowl_price_srub', $post_id );

					$res = calc_new_price( $old_canadian_bowl_price_srub, $percent_canadian_bowl_price_srub );
					update_field( $prefix . 'canadian_bowl_price_srub', $res, $post_id );
				}

				if ( $percent_canadian_bowl_price_pod_usadku ) {

					$old_canadian_bowl_price_pod_usadku = get_field( $prefix . 'canadian_bowl_price_pod_usadku', $post_id );

					$res = calc_new_price( $old_canadian_bowl_price_pod_usadku, $percent_canadian_bowl_price_pod_usadku );
					update_field( $prefix . 'canadian_bowl_price_pod_usadku', $res, $post_id );
				}

			} else {
				echo 'err';
				wp_die();
			}

		}
		wp_reset_postdata();

	}

	return $updates;
	wp_die();
}

function calc_new_price( $price, $percent ) {
	$percent = (int) $percent;
	$price   = (int) $price;

	if ( $percent == abs( $percent ) ) {

		$new_price = $price + ( $price * ( abs( $percent ) / 100 ) );

	} else {

		$new_price = $price - ( $price * ( abs( $percent ) / 100 ) );
	}

	return ceil( $new_price );
//    return $value + ($price * $percent / 100);
}

function acf_load_project_type_field_choices( $field ) {

	$get_base_price_settings = get_field( 'base_price_settings', 'option' );
//    pre($get_base_price_settings);

	// reset choices
	$field['choices'] = [];

	foreach ( $get_base_price_settings as $base_price_tip ) {

		$value = $base_price_tip['base_price_tip'];
		$label = $base_price_tip['base_price_tip'];
//
		$field['choices'][ $value ] = $label;

	}

	return $field;
}

add_filter( 'acf/load_field/name=project_type', 'acf_load_project_type_field_choices' );

add_filter( 'get_the_archive_title', 'fixcode_archive_title' );
function fixcode_archive_title( $title ) {
	if ( is_tax() ) {
		$title = single_cat_title( '', false );
	}
//    if ( is_post_type_archive() ) {
//        $title = post_type_archive_title( '', false );
//    }
	return $title;
}

add_action( 'pre_get_posts', 'sorted_projects' );
function sorted_projects( $query ) {

	if ( ! is_admin() && $query->is_main_query() && $query->is_tax( 'catalog' ) ) {
		if ( $query->is_category( 'authors_project' ) ) {
			$query->set( 'meta_key', 'ploshhad_po_osyam' );
		} else {
			$query->set( 'meta_key', 'project_s_doma' );
		}
		$query->set( 'order', 'ASC' );
		$query->set( 'meta_key', 'project_s_doma' );
		$query->set( 'orderby', 'meta_value_num' );
	}
}

function min_and_max_price( $project_type_price = 'project_price_gazoblok' ) {
	global $wpdb;

//    pre($project_type_price);

	$values = $wpdb->get_col( "SELECT meta_value FROM $wpdb->postmeta WHERE meta_key='$project_type_price'" );
//    pre($values);

	foreach ( $values as $value ) {
		if ( $value < 1000 || $value == '' || $value == 0 ) {

		} else {

			$price_arr[] = $value;

		}

	}

	$min_max_price = [
		'min' => min( $price_arr ),
		'max' => max( $price_arr ),
	];

	return $min_max_price;
}



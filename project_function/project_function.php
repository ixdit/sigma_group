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
	$size = 'full';

    ob_start();

    $i = 0;
    foreach ( $project_gallery_ids as $item ) {

        if ( $i == 0 || $i == 1 ) {
            ?>
            <div class="col-md-6">
                <a href="<?php echo wp_get_attachment_image_url( $item, $size ); ?>" data-fancybox="">
                    <img src="<?php echo ix_get_img_url_for_id( $item, 730, 485)?>" alt="" class="img-responsive">
                </a>
            </div>
            <?php
        } else {
            ?>
            <div class="col-sm-3 col-6">
                <a href="<?php echo wp_get_attachment_image_url( $item, $size ); ?>" data-fancybox="">
                    <img src="<?php echo ix_get_img_url_for_id( $item, 355, 235 )?>" alt="" class="img-responsive">
                </a>
            </div>
            <?php
        }
        $i++;
    }

    echo ob_get_clean();

}

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



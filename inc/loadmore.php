<?php

add_action( 'wp_ajax_loadmore', 'ix_loadmore1' );
add_action( 'wp_ajax_nopriv_loadmore', 'ix_loadmore1' );

add_action( 'wp_ajax_ixloadmore', 'ix_loadmore' );
add_action( 'wp_ajax_nopriv_ixloadmore', 'ix_loadmore' );

function ix_loadmore() {

	ob_start();

	?>
	<div class="">OLOLO</div>
	<?php
	echo ob_get_clean();
	wp_die();
}

function ix_loadmore1() {

    ob_start();

    $paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
    $paged++;
    $cat = $_POST[ 'cat' ];

    $get_params = $_POST['get_params'];

//    $paged = ! empty( $get_params[ 'paged' ] ) ? $get_params[ 'paged' ] : 1;
//    pre($paged);
//    $paged++;
//    pre($paged);
//    $cat = $get_params[ 'cat' ];

    if ( $cat == 'authors_project') {
        $sort_field = 'ploshhad_po_osyam';
    } else {
        $sort_field = 'project_s_doma';
    }



    $args = array(
        'paged' => $paged,
        'post_status' => 'publish',
        'post_type' => 'projects',
        'order' => 'ASC',
        'meta_key' => $sort_field,
        'orderby' => 'meta_value_num',
        'tax_query' => array(
            array(
                'taxonomy' => 'catalog',
                'field' => 'slug',
                'terms' => $cat,
            )
        ),

    );
    if ($get_params['area_house']) {
        if ( $get_params['area_house'] != 'all'){
            $area_house_arr = str_replace('_', ',', $get_params['area_house']) ;
            $area_house = explode(',', $area_house_arr);

            $args['meta_query'][] = [
                'key'=>'project_s_doma',
                'value'   => $area_house,
                'compare' => 'BETWEEN',
                'type'    => 'NUMERIC',
            ];
        }
    }

    if ($get_params['floors']) {
        $floors = $get_params['floors'];
        if($floors == '1_5') {
            $floors = 1.5;
        }
        $args['meta_query'][] = [
            'key'=>'project_number_floors',
            'value'   => $floors,
            'compare' => '=',
            //                    'type'    => 'DECIMAL',
        ];

    }

    if ( $get_params['project_type']) {
        if ($get_params['project_type'] == 'bani') {
            $project_type_price = 'bani_russian_bowl_price_srub';
        }
        if ($get_params['project_type'] == 'doma-iz-brevna') {
            $project_type_price = 'doma_russian_bowl_price_srub';
        }
        if ($get_params['project_type'] == 'doma') {
            $project_type_price = 'project_price_gazoblok';
        }
    } else {
        $project_type_price = 'project_price_gazoblok';
    }




//        pre($_GET['price_max']);

    if ( $get_params['price_min'] && $get_params['price_min'] != '' ) {
        // pre($_GET['price_min']);
    }

    if ($get_params['price_min'] && $get_params['price_max'] ) {

        $price_arr[] = $get_params['price_min'];
        $price_arr[] = $get_params['price_max'];



        $args['meta_query'][] = [
            'key'=>$project_type_price,
            //                    'key'=>'project_price_gazoblok',
            'value'   => $price_arr,
            'compare' => 'BETWEEN',
            'type'    => 'DECIMAL',
        ];



    }

    //TODO дописать условия для других возможных параметров


    query_posts( $args );
    
    echo '<div class="row gutter-y-30" style="margin-top: 30px">';
    
    while( have_posts() ) : the_post();

        $project_price_gazoblok = get_field('project_price_gazoblok');
        $project_price_keramoblok = get_field('project_price_keramoblok');
        $project_price_kirpich = get_field('project_price_kirpich');

        $project_price = [
            'project_price_gazoblok' => $project_price_gazoblok,
            'project_price_keramoblok' => $project_price_keramoblok,
            'project_price_kirpich' => $project_price_kirpich,
        ];

	    get_template_part( 'template-parts/content', 'archive_project_doma' );

        //get_template_part( 'template-parts/content', 'archive_'.$cat, $project_price);

    endwhile;
    echo '</div>';
//    echo '$paged - '.$paged;
    $output = ob_get_contents();
    ob_end_clean();

    echo $output;
    wp_die();

}
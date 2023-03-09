<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sg-2site
 */

get_header();
?>

    <main class="site-main">

        <div class="page-item">
            <div class="container">
                <div class="page-breadcrumb">
	                <?php do_action( 'echo_kama_breadcrumbs' ) ?>
                </div>

                <div class="gy-20">
                    <div class="row gy-20 flex-wrap justify-content-center">

                        <?php get_the_project_category_list(); ?>

                    </div>
                </div>
            </div>
        </div>

    </main>

<?php
get_footer();

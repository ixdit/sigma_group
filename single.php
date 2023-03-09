<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ix
 */

get_header();
?>

    <div class="flex-grow-1">
        <div class="container">
            <?php do_action( 'echo_kama_breadcrumbs' ) ?>
            <div class="d-lg-flex">
                <main class="site-main">
                    <div class="panel">
                        <?php
                        //the_yandex_map('object_geo');
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', get_post_type() );


                        endwhile; // End of the loop.
                        ?>


                    </div>
                </main>
                <aside class="sidebar">
                    <?php
                    get_sidebar();
                    ?>
                </aside>
            </div>
        </div>
    </div>


<?php
get_footer();

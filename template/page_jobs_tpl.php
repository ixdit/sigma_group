<?php
/**
 * Template Name: Шаблон Вакансии
 * Template Post Type: page
 */
get_header();

$size = 'full';
$jobs_all_img = get_field( 'jobs_all_img' );
?>

    <main class="site-main">

        <div class="page-item">
            <div class="container">
                <div class="page-breadcrumb">
	                <?php do_action( 'echo_kama_breadcrumbs' ) ?>
                </div>

                <div class="page-head">
                    <?php if (get_field('jobs_custom_h1')) {
	                    echo '<h1 class="page-title">'.get_field( 'jobs_custom_h1' ).'</h1>';
                    } else {
                       echo '<h1 class="page-title">'.the_title().'</h1>';
                    }?>

                </div>

                <div class="about-section mb-70">
                    <div class="row">
                        <div class="col-lg-6 about-section__col">
                            <div class="about-section__left">
                                <div class="about-section__text">
                                    <?php the_content(); ?>
                                </div>
	                            <?php if ( have_rows( 'jobs_block_signature' ) ) : ?>
		                            <?php while ( have_rows( 'jobs_block_signature' ) ) : the_row(); ?>
			                            <?php $signature_img = get_sub_field( 'signature_img' ); ?>
                                        <div class="about-section__author">
                                            <div>
                                                <img src="<?php echo wp_get_attachment_image_url( $signature_img, $size ); ?>" alt="">
                                            </div>
                                            <div>
	                                            <?php the_sub_field( 'signature_text' ); ?>
                                            </div>
                                        </div>
		                            <?php endwhile; ?>
	                            <?php endif; ?>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo wp_get_attachment_image_url( $jobs_all_img, $size ); ?>" data-fancybox="">
                                <img src="<?php echo wp_get_attachment_image_url( $jobs_all_img, $size ); ?>" alt="" class="about-section__image">
                            </a>
                        </div>
                    </div>
                </div>

                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Почему “Сигма”?</b></h2>
                    </div>
                    <div class="row gy-20">
	                    <?php if ( have_rows( 'jobs_why_are_we' ) ) : ?>
		                    <?php while ( have_rows( 'jobs_why_are_we' ) ) : the_row(); ?>
                                <div class="col-xl-4 col-md-6">
                                    <div class="about-advantage static">
                                        <div>
                                            <div class="about-advantage__title"><?php the_sub_field( 'title' ); ?></div>
                                            <div class="about-advantage__text"><?php the_sub_field( 'text' ); ?></div>
                                        </div>
                                    </div>
                                </div>
		                    <?php endwhile; ?>
	                    <?php else : ?>
		                    <?php // No rows found ?>
	                    <?php endif; ?>
                    </div>
                </section>

                <section class="mb-70">
                    <div class="mb-25">
                        <h2 class="h3 color-blue"><b>Вакансии</b></h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="tab-controls js-tab-controls job-tabs" data-tabs="tabs">
                                <li><a href="#tab-1" class="active">Работа в офисе</a></li>
                                <li><a href="#tab-2" class="">Работа на объектах</a></li>
                            </ul>

                            <div id="tabs" class="tab-panels">

                                <div id="tab-1" class="tab-panel active">
	                                <?php if ( have_rows( 'Jobs_office' ) ) : ?>
		                                <?php while ( have_rows( 'Jobs_office' ) ) : the_row(); ?>
			                                <?php if ( have_rows( 'vacancy' ) ) : ?>
				                                <?php while ( have_rows( 'vacancy' ) ) : the_row(); ?>
                                                    <div class="job">
                                                        <div class="job__head">
	                                                        <?php the_sub_field( 'position' ); ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17"
                                                                 viewBox="0 0 29 17" fill="none">
                                                                <path d="M2 2L14.5 14L27 2" stroke="white" stroke-width="3"/>
                                                            </svg>
                                                        </div>
                                                        <div class="job__content">
                                                            <?php
                                                                if(get_sub_field('description')) {
                                                                   echo '<p>'.get_sub_field('description').'</p>';
                                                                }
                                                                if(get_sub_field('requirement')) {
                                                                    echo '<strong>Требования:</strong>';
                                                                    echo '<p>'.get_sub_field('requirement').'</p>';
                                                                }
                                                                if(get_sub_field('responsibilities')) {
	                                                                echo '<strong>Обязанности:</strong>';
                                                                    echo '<p>'.get_sub_field('responsibilities').'</p>';
                                                                }
                                                                if(get_sub_field('conditions')) {
	                                                                echo '<strong>Условия:</strong>';
                                                                    echo '<p>'.get_sub_field('conditions').'</p>';
                                                                }
                                                            ?>

                                                        </div>
                                                    </div>
				                                <?php endwhile; ?>
			                                <?php else : ?>
				                                <?php // No rows found ?>
			                                <?php endif; ?>
		                                <?php endwhile; ?>
	                                <?php endif; ?>

                                </div>

                                <div id="tab-2" class="tab-panel ">

	                                <?php if ( have_rows( 'Jobs_objects' ) ) : ?>
		                                <?php while ( have_rows( 'Jobs_objects' ) ) : the_row(); ?>
			                                <?php if ( have_rows( 'vacancy' ) ) : ?>
				                                <?php while ( have_rows( 'vacancy' ) ) : the_row(); ?>
                                                    <div class="job">
                                                        <div class="job__head">
							                                <?php the_sub_field( 'position' ); ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17"
                                                                 viewBox="0 0 29 17" fill="none">
                                                                <path d="M2 2L14.5 14L27 2" stroke="white" stroke-width="3"/>
                                                            </svg>
                                                        </div>
                                                        <div class="job__content">
							                                <?php
							                                if(get_sub_field('description')) {
								                                echo '<p>'.get_sub_field('description').'</p>';
							                                }
							                                if(get_sub_field('requirement')) {
								                                echo '<strong>Требования:</strong>';
								                                echo '<p>'.get_sub_field('requirement').'</p>';
							                                }
							                                if(get_sub_field('responsibilities')) {
								                                echo '<strong>Обязанности:</strong>';
								                                echo '<p>'.get_sub_field('responsibilities').'</p>';
							                                }
							                                if(get_sub_field('conditions')) {
								                                echo '<strong>Условия:</strong>';
								                                echo '<p>'.get_sub_field('conditions').'</p>';
							                                }
							                                ?>

                                                        </div>
                                                    </div>
				                                <?php endwhile; ?>
			                                <?php else : ?>
				                                <?php // No rows found ?>
			                                <?php endif; ?>
		                                <?php endwhile; ?>
	                                <?php endif; ?>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="job-panel">
                                <div class="job-panel__title">Для бригад и бригадиров</div>
                                <p>
                                    Если Вы разбираетесь и умеете качественно выполнять какие-либо работы в малоэтажном
                                    строительстве -
                                    приглашаем Вас в нашу компанию.
                                </p>
                                <p>
                                    Гарантируем своевременную оплату и постоянную
                                    работу.
                                </p>

                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-input" placeholder="Ваше Имя">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-input" placeholder="Телефон для связи">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-input" placeholder="Виды выполняемых работ">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-green btn-lg">Отправить заявку</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

	            <?php
	                $working_processes_ids = get_field( 'working_processes' );

                    if ( $working_processes_ids ) :
                        ?>
                        <section class="mb-70">
                            <div class="mb-25">
                                <h2 class="h3 color-blue"><b>Рабочие процессы</b></h2>
                            </div>

                            <div class="center-slider">
                                <div class="js-three-slider ">
                                <?php
                                foreach ( $working_processes_ids as $working_processes_id ):
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo wp_get_attachment_image_url( $working_processes_id, $size ); ?>" data-fancybox="working_processes">
                                            <img src="<?php echo ix_get_img_url_for_id( $working_processes_id, 420,280)?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <?php
                                endforeach;
                                ?>
                                </div>
                            </div>
                        </section>
                        <?php
                    endif;
	            ?>
            </div>

            <section class="section-feedback">
                <div class="container">
                    <h2 class="h2">Присоединяйся к нашей комане</h2>
                    <div class="text-md">Заполните анкету и наши менеджеры свяжутся с Вами в рабочее время</div>

                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-input" placeholder="Ваше имя">
                            </div>
                            <div class="col-md-6">
                                <label for="file" class="form-file">
                                    <input type="file" id="file" class="form-input" placeholder="Прикрепить резюме">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-input" placeholder="Телефон для связь">
                            </div>
                            <div class="col-md-6">
                                <select name="" id="" class="form-input">
                                    <option value="">Выберите вакансию</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-green btn-lg">Отправить резюме</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

    </main>

<?php
get_footer();

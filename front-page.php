<?php get_header(); ?>
<div class="page">
    <div class="block-top section">
        <div class="about">
            <div class="about__greet">Приветствую! <br> Меня зовут Иван</div>
            <div class="about__desc">
                <div class="about__whoami">Я - частный вебместер</div>
                <div class="about__whatido">Создаю сайты, занимаюсь их доработками и исправлениями.</div>
                <div class="about__worktime">График работы: 24/7</div>
            </div>
        </div>
        <div class="mypic">
            <img src="<?= get_template_directory_uri() ?>/assets/img/img-05.png" alt="">
        </div>
        <div class="btns">
            <div class="btns__order-site btn">
                <a href="#feddbackform">Заказать сайт</a>
            </div>
            <div class="btns__order-rework btn">
                <a href="#feddbackform">Заказать доработку сайта</a>
            </div>
        </div>
    </div>
    <div class="block-technology section">
        <div class="section__title">
            <h2>
                Технологии
            </h2>
        </div>
        <div class="technology">

            <?php
            $args = [
                'post_type' => 'technology',
                'order' => 'ASC',
                'post_per_page' => 10,
                'posts_per_archive_page' => 10,
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $level_of_technology_proficiency = get_field('level_of_technology_proficiency');
            ?>
                    <div class="technology-item">
                        <div class="technology-item__title">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="technology-item__title-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>

                            <?php the_title(); ?>
                        </div>
                        <div class="technology-item__progress">
                            <span data-level="<?php echo $level_of_technology_proficiency ?>" class="html wow animate__animated animate__fadeInLeft"></span>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } else {
                echo 'К сожалени, в ни одной технологии пока ещё нет.';
            }
            ?>
        </div>
    </div>
    <div class="block-portfolio section">
        <div class="section__title">
            <h2>
                <a href="./portfolio">
                    Портфолио
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>

            </h2>
        </div>
        <!-- <div class="portfolio-slider"> -->
        <div class="portfolio-gallery">
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 4
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="portfolio-gallery-item wow animate__animated animate__fadeInRight">
                        <div class="portfolio-gallery-item__title"><?= get_the_title() ?></div>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="portfolio-gallery-item__pic">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>

                        <div class="portfolio-gallery-item__desc">
                            <?php // echo get_the_content() 
                            ?>
                        </div>
                        <div class="portfolio-gallery-item__more">
                            <a href="<?= get_permalink(); ?>">
                                Подробнее
                            </a>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } else {
                echo 'К сожалени, в портфолио пока ничего нет.';
            }
            ?>

        </div>

    </div>
    <div class="block-reviews section">
        <div class="section__title">
            <h2>
                Отзывы
            </h2>
        </div>
        <div class="reviews-slider">
            <?php
            $args = array(
                'post_type' => 'reviews',
                // 'posts_per_page' => 10
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    $project_link = get_field('project_link');
            ?>
                    <div class="reviews-slider-item">
                        <div class="reviews-slider-item-inner">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="reviews-slider-item__pic">
                                    <?php the_post_thumbnail(); ?>
                                </div>

                            <?php endif; ?>
                            <div class="reviews-slider-item__desc">
                                <?= get_the_content() ?>
                            </div>
                            <div class="reviews-slider-item-btns">
                                <div class="reviews-slider-item-btns__item">
                                    <a href="<?php echo get_field('src_link') ?>" target="_blank">
                                        источник
                                    </a>
                                </div>
                                <div class="reviews-slider-item-btns__item">
                                    <a href="<?php echo $project_link->guid ?>">
                                        проект
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } else {
                echo 'К сожалению, отзывов пока нет.';
            }
            ?>
        </div>
        <div class="reviews-slider-btns">
            <div class="reviews-slider-btns__prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="reviews-slider-btns__next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="block-feddbackform section" id="feddbackform">
        <div class="section__title">
            <h2>
                Форма обратной связи
            </h2>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="49" title="Форма обратной связи"]') ?>
    </div>
</div>
<?php get_footer(); ?>
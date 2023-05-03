<?php get_header(); ?>
<div class="page">
    <div class="block-top section">
        <div class="about">
            <div class="about__greet">Приветствую! <br> Меня зовут Иван</div>
            <div class="about__desc">
                <div class="about__whoami">Я - частный вебместер</div>
                <div class="about__whatido">Создаю сайты, занимаюсь их доработками и исправлениями.</div>
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
                Уровни владения технологиями
            </h2>
        </div>
        <div class="technology">
            <div class="technology-item">
                <div class="technology-item__title">
                    HTML5
                </div>
                <div class="technology-item__progress">
                    <span class="html wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    CSS3
                </div>
                <div class="technology-item__progress">
                    <span class="css wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    SCSS
                </div>
                <div class="technology-item__progress">
                    <span class="scss wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    FLEX/GRID
                </div>
                <div class="technology-item__progress">
                    <span class="flex-grid wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    JavaScript
                </div>
                <div class="technology-item__progress ">
                    <span class="javascript wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    PHP
                </div>
                <div class="technology-item__progress ">
                    <span class="php wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    WordPress
                </div>
                <div class="technology-item__progress ">
                    <span class="wp wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    Elementor
                </div>
                <div class="technology-item__progress ">
                    <span class="elementor wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    ACF
                </div>
                <div class="technology-item__progress ">
                    <span class="acf wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
            <div class="technology-item">
                <div class="technology-item__title">
                    Figma
                </div>
                <div class="technology-item__progress ">
                    <span class="figma wow animate__animated animate__fadeInLeft"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="block-portfolio section">
        <div class="section__title">
            <h2>
                Портфолио
            </h2>
        </div>
        <!-- <div class="portfolio-slider"> -->
        <div class="portfolio-gallery">
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 10
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
                            <?= get_the_content() ?>
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
        <!-- <div class="portfolio-slider-btns">
            <div class="portfolio-slider-btns__prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="portfolio-slider-btns__next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div> -->

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
                'posts_per_page' => 10
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="reviews-slider-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="reviews-slider-item__pic">
                                <?php the_post_thumbnail(); ?>
                            </div>

                        <?php endif; ?>
                        <div class="reviews-slider-item__desc">
                            <?= get_the_content() ?>
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
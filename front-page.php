<?php get_header(); ?>

<!-- TOP -->
<div class="block-top">
    <div class="container">
        <section>
            <div class="block-top__inner">
                <div class="about">
                    <div class="about__greet">
                        <h1>
                            Частный веб-мастер <span class="about__greet_accent">Иван Плотников</span>
                            <span>Заказать сайт или доработку</span>
                        </h1>
                    </div>
                </div>
                <div class="mypic">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-05.png" alt="Частный веб-мастер Иван Плотников">
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
        </section>
    </div>
</div>

<!-- PORTFOLIO -->
<div class="block-portfolio">
    <div class="container">
        <section>
            <div class="block-portfolio__inner">
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
                                <div class="portfolio-gallery-item__title">
                                    <h3>
                                        <?php echo get_the_title() ?>
                                    </h3>
                                </div>
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
                                    <a href="<?php echo get_permalink(); ?>">
                                        <span class="btn">
                                            Подробнее
                                        </span>
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
        </section>
    </div>
</div>

<!-- TECHNOLOGY -->
<div class="block-technology">
    <div class="container">
        <section>
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
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
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
        </section>
    </div>
</div>

<!-- REVIEWS -->
<div class="block-reviews">
    <div class="container">
        <section>
            <div class="section__title">
                <h2>
                    Отзывы
                </h2>
            </div>
            <ul class="reviews-slider">
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
                        <li>
                            <blockquote>
                                <div class="reviews-slider-item">
                                    <div class="reviews-slider-item-inner">
                                        <cite>
                                            <?php the_field('owner_name') ?>
                                        </cite>
                                        <time datetime=""><?php the_field('publication_date'); ?></time>

                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="reviews-slider-item__pic">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="reviews-slider-item__desc">
                                            <p>
                                                <?php echo get_the_content() ?>
                                            </p>
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
                            </blockquote>
                        </li>
                <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo 'К сожалению, отзывов пока нет.';
                }
                ?>
            </ul>
            <div class="reviews-slider-btns">
                <button>
                    <div class="reviews-slider-btns__prev">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                </button>
                <button>
                    <div class="reviews-slider-btns__next">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </button>
            </div>
        </section>
    </div>
</div>

<!-- FEEDBACK FORM -->
<div class="block-feddbackform" id="feddbackform">
    <div class="container">
        <section>
            <div class="section__title">
                <h2>
                    Форма обратной связи
                </h2>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="49" title="Форма обратной связи"]') ?>
        </section>
    </div>
</div>



<?php get_footer(); ?>
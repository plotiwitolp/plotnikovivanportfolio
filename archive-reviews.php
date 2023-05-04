<?php get_header(); ?>
<div class="page">
    <div class="section">
        <div class="portfolio">
            <div class="portfolio__title">
                <h1>Отзывы</h1>
            </div>
            <div class="portfolio-list">
                <?php
                if (have_posts()) {
                ?>
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <div class="portfolio-list__item">
                            <a href="<?php the_permalink() ?>">
                                <div class="portfolio-list__item-inner">
                                    <h2><?= get_the_title() ?></h2>
                                    <div class="portfolio-list__item-body">
                                        <div><?= get_the_content() ?></div>
                                        <?php
                                        if (has_post_thumbnail()) { ?>
                                            <div class="post-thumbnail">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                        <?php  } ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                    wp_reset_postdata();
                    // 
                    the_posts_pagination();
                    // 
                } else {
                    echo 'К сожалению, в портфолио пока ничего нет.';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
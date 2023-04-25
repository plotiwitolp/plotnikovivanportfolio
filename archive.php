<?php get_header(); ?>
<div class="page">
    <div class="section">
        <div class="portfolio">
            <div class="portfolio__title">
                <h1>Портфолио</h1>
            </div>
            <div class="portfolio-list">
                <?php
                $category_id = get_cat_ID('Портфолио');
                $args = array(
                    'cat' => $category_id,
                    'post_type' => 'post',
                    'posts_per_page' => 10
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        echo '<div class="portfolio-list__item">';
                        echo '<h2>' . get_the_title() . '</h2>';
                        echo '<div>' . get_the_content() . '</div>';
                        echo '</div>';
                        if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                <?php endif;
                    }
                    wp_reset_postdata();
                } else {
                    echo 'К сожалени, в портфолио пока ничего нет.';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
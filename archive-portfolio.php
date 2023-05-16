<?php get_header(); ?>

<div class="archive">
    <div class="container">
        <section>
            <div class="archive__inner">
                <div class="archive__title">
                    <h1>Портфолио</h1>
                </div>
                <div class="archive-list">
                    <?php
                    if (have_posts()) {
                    ?>
                        <?php
                        while (have_posts()) {
                            the_post();
                        ?>
                            <div class="archive-list__item">
                                <a href="<?php the_permalink() ?>">
                                    <div class="archive-list__item-inner">
                                        <h2><?= get_the_title() ?></h2>
                                        <div class="archive-list__item-body">
                                            <div class="archive-list__item-body-text">
                                                <?php the_field('brief_description') ?>
                                            </div>
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
        </section>

    </div>
</div>
</div>

<?php get_footer(); ?>
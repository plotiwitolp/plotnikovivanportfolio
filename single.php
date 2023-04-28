<?php get_header(); ?>
<div class="page">
    <div class="section">
        <div class="single">
            <div class="single__title">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="single__body">
                <?php the_content(); ?>
            </div>
            <div class="single__img">
                <?php the_post_thumbnail() ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
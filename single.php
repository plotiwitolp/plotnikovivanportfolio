<?php get_header(); ?>
<div class="page">
    <div class="section">
        <div class="single">
            <div class="single__breadcrumbs">
                Главная / Заголовок рубрики / Название поста
            </div>
            <div class="single__title">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="single__body">
                <div class="single__top">
                    <div class="single__txt">
                        <?php the_content(); ?>
                    </div>
                    <div class="single__img">
                        <?php the_post_thumbnail() ?>
                    </div>
                </div>
                <div class="single__bottom">
                    <?php the_field('gallery'); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>
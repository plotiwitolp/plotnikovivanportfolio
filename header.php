<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header header_fixed">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } ?>
                </div>

                <div class="info">
                    <dl class="info__item">
                        <dt class="info__label">Статус:</dt>
                        <?php if (get_field('info__mode', 6)) { ?>
                            <dd class="info__mode info__mode_on">свободен</dd>
                        <?php } else { ?>
                            <dd class="info__mode info__mode_off">занят</dd>
                        <?php } ?>
                    </dl>
                    <?php if (!get_field('info__mode', 6)) { ?>
                        <dl class="info__item">
                            <dt class="info__label">Освобожусь через:</dt>
                            <dd class="info__mode"><?php the_field('will_be_free', 6) ?></dd>
                        </dl>
                    <?php } ?>
                    <dl class="info__item">
                        <dt class="info__label">График работы:</dt>
                        <dd class="info__mode">24/7</dd>
                    </dl>


                </div>

                <div class="header__nav-wrapper">
                    <nav class="header__nav">
                        <?php wp_nav_menu([
                            'theme_location'  => 'primary'
                        ]); ?>
                    </nav>
                    <div class="header__nav-mob">
                        <div class="header__nav-mob__open nav-mob_active"></div>
                        <div class="header__nav-mob__close"></div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <main>
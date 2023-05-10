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
        <div class="section">
            <div class="header__inner">
                <div class="header__logo">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } ?>
                </div>

                <nav class="header__nav">
                    <?php wp_nav_menu([
                        'theme_location'  => 'primary'
                    ]); ?>
                </nav>

                <!--  -->
                <div class="header__nav-mob">
                    <div class="header__nav-mob__open nav-mob_active"></div>
                    <div class="header__nav-mob__close"></div>
                </div>
                <!-- <div class="collapse">
                    <i class="fa fa-angle-up collapse_active" aria-hidden="true"></i>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div> -->
                <!--  -->

            </div>
        </div>
        <!-- остановился на 45 минуте -->
    </header>
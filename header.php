<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
</head>
<?php wp_head(); ?>

<body>
    <header>
        <div class="section">
            <?php wp_nav_menu([
                'theme_location'  => 'primary'
            ]); ?>
        </div>
    </header>
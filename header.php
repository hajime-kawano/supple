<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div class="wrap_original">

    <!--ヘッダー-->
    <header>
        <div class="header_top">
            <div class="site_logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ロゴ画像">
                </a>
            </div>
            <nav>
                <?php
                //グローバルメニューIDを取得
                $menu_name = 'global_nav';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                ?>
                <ul class="menu_list">
                    <?php foreach ($menu_items as $item) : ?>
                        <a class="menu_item" href="<?php echo esc_attr($item->url); ?>">
                            <li><?php echo esc_html($item->title); ?></li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </nav>

        </div>

        <?php
        // $img = get_eyecatch_with_default();
        ?>
    </header>

    <?php wp_footer(); ?>
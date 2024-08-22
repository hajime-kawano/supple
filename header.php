<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">


    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!--ヘッダー-->
    <header>
        <div class="header_top">
            <div class="site_logo">テスト
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
                        <a class="menu-item" href="<?php echo esc_attr($item->url); ?>">
                            <li><?php echo esc_html($item->title); ?></li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <?php
            //お問い合わせメニューIDを取得
            $menu_name = 'contact_nav';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
            <?php foreach ($menu_items as $item) : ?>
                <a href="<?php echo esc_attr($item->url); ?>">
                    <div class="contact_block">
                        <?php echo esc_html($item->title); ?>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>

        <?php
        // $img = get_eyecatch_with_default();
        ?>
    </header>
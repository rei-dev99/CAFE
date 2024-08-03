<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    
    <?php wp_head(); ?>
</head>
<body>
<div class="drawer-icon front-page-drawer">
    <div class="drawer-icon-bars">
        <div class="drawer-icon-bar1"></div>          
        <div class="drawer-icon-bar2"></div>
        <div class="drawer-icon-bar3"></div>
    </div>
</div>

<div class="drawer-content">
    <h1 class="drawer-logo"><a href="top.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sp/logo_light.svg" alt="オープンカフェロゴ画像"></a></h1>
        <?php
        wp_nav_menu(
            array(
                'depth' => 1,
                'theme_location' => 'drawer',
                'container' => 'div',
                'container_class' => 'drawer-content-items',
                'menu_class' => '',
                'menu_id' => '',
                'items_wrap' => '<ul>%3$s</ul>',
            )
        );
        ?>
    <ul class="drawer-sns">
        <li class="drawer-sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter-light.svg" alt="twitter"></a></li>
        <li class="drawer-sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram-light.svg" alt="instagram"></a></li>
        <li class="drawer-sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube-light.svg" alt="youtube"></a></li>
    </ul>
</div>

<div class="drawer-background"></div>
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
    <div class="wrapper">
        <header class="section-header">
            <div class="inner section-border">
                <?php if( get_post_type() === 'post' ) { //投稿記事ページの時表示
                        get_template_part('template-parts/news'); }
                        elseif(get_post_type() === 'menu') { //メニューページ投稿の表示
                            get_template_part('template-parts/menu'); 
                        }
                        elseif( get_post_type() === 'shop' ) { //投稿姉妹店舗投稿ページの表示
                            get_template_part('template-parts/shop'); 
                        }
                        elseif( get_post_type() === 'products' ) { //贈り物ページ投稿の表示
                            get_template_part('template-parts/products'); 
                        }

                        // ↓適切なヘッダー画像であることを確認
                        
                        elseif( is_post_type_archive('menu') ) { //アーカイブメニューページの時表示
                            get_template_part('template-parts/menu'); 
                        }
                        elseif( is_post_type_archive('products') ) { //アーカイブ贈り物ページの時表示
                            get_template_part('template-parts/products'); 
                        }
                        elseif( is_post_type_archive('shop') ) { //アーカイブ姉妹店舗ページの時表示
                            get_template_part('template-parts/shop'); 
                        }
                        elseif( is_tax('genre')) { //カスタムタクソノミーパスタ、サラダ、パンスイーツ、ドリンクの時表示
                            get_template_part('template-parts/menu');
                        }
                        elseif( is_category() ) { //カテゴリーページの時表示
                            get_template_part('template-parts/news'); 
                        }
                        elseif( is_tag() ) { //tagページの時表示
                            get_template_part('template-parts/news'); 
                        }
                        elseif( is_date() ) { //dateページの時表示
                            get_template_part('template-parts/news'); 
                        }
                        elseif( is_home() ) { //home.phpの時表示
                            get_template_part('template-parts/news'); 
                        }
                        elseif( is_page('concept') ) { //固定ページ当店のこだわりの時表示
                            get_template_part('template-parts/concept');
                        }
                        elseif( is_page(array('contact','contact-thanks'))) { //お問い合わせ、お問い合わせ完了ページ
                            get_template_part('template-parts/contact');
                        }
                    ?>
            </div>
    
            <div class="drawer-icon">
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
                    <li class="drawer-sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter-light.svg" alt="twitter画像"></a></li>
                    <li class="drawer-sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram-light.svg" alt="instagram画像"></a></li>
                    <li class="drawer-sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube-light.svg" alt="youtube画像"></a></li>
                </ul>
            </div>
            
            <div class="drawer-background"></div>
        </header>
<?php get_header(1); ?>

    <div class="wrapper">
        <header class="header">
                <div class="header-left">
                    <h1 class="header-logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_dark.svg" alt="Open Cafe - dish $ coffee - "></a>
                    </h1>
                    <?php 
                    wp_nav_menu(
                        array(
                            'depth' => 1,
                            'theme_location' => 'global',
                            'container' => 'nav',
                            'container_class' => 'header-nav',
                            'menu_class' => '',
                            'menu_id' => '',
                            'items_wrap' => '<ul>%3$s</ul>',

                        )
                    );
                    ?>
                    <nav class="header-sns">
                        <ul>
                            <li><a href="twitter-link"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter-dark.svg" alt="twitter"></a></li>
                            <li><a href="instagram-link"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram-dark.svg" alt="instagram"></a></li>
                            <li><a href="youtube-link"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube-dark.svg" alt="youtube"></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Slider main container -->
                <div class="swiper header-right">
                    <h1 class="header-logo-sp"><a href="top.html"><img src="<?php echo get_template_directory_uri(); ?>/img/sp/logo_light.svg" alt="ヘッダーロゴ"></a></h1>
                    <p class="header-picture-text">パスタとコーヒーが<br class="is-sp">とってもおいしい、<br class="is-sp">ほっと落ち着くのんびり空間。</p>

                    <?php get_template_part('template-parts/pickup_by_tag'); ?>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="header-picture"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="header-picture header-picture2"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="header-picture header-picture3"></div>
                    </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
        </header>
    
        <main>
    
            <section id="concept" class="concept">
                <div class="inner concept-inner">
                    <div class="concept-contents">
                        <div class="concept-picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_concept.png" alt="concept">
                        </div>
                        <div class="concept-content">
                            <h2 class="section-title concept-head">CONCEPT</h2>
                            <p class="section-subtitle concept-subhead">当店のこだわり</p>
                            <h3 class="concept-content-title">最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ</h3>
                            <p class="concept-content-message">
                                ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
                                ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br><br>
                                ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                            </p>
                            <div class="section-btn concept-btn"><a href="<?php echo home_url('concept'); ?>">詳しくはこちら</a></div>
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="set" class="set">
                <div class="set-inner inner">
                    <div class="set-main">
                        <div class="set-balloon"><img src="<?php echo get_template_directory_uri(); ?>/img/img_balloon-special-lunch-set.svg" alt="パスタ、サラダ、ドリンクのお得なセット"></div>
                        <h2 class="section-title set-head">SPECIAL LUNCH SET</h2>
                        <p class="section-subtitle">今月のスペシャルランチセット</p>
                        <div class="set-contents">
                            <h3 class="set-contents-title"><img src="<?php echo get_template_directory_uri(); ?>/img/img_ribbon-text.svg" alt="お好きなパスタをお選びください"></h3>
                            <div class="set-contents-header">
                                <div class="set-menu">
                                    <div class="set-menu-picture">
                                        <?php if(get_field('special_pasta_picture_A')): ?>
                                        <img src="<?php the_field('special_pasta_picture_A'); ?>" alt="スペシャルパスタイメージA">
                                        <?php endif; ?>
                                    </div>
                                    <div class="set-menu-content">
                                        <?php if(get_field('NO_A')): ?>
                                        <div class="set-menu-number"><?php the_field('NO_A'); ?></div>
                                        <?php endif; ?>
                                        <?php if(get_field('special_pasta_A')): ?>
                                        <p class="set-menu-text"><?php the_field('special_pasta_A'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="set-menu">
                                    <div class="set-menu-picture">
                                        <?php if(get_field('special_pasta_picture_B')): ?>
                                        <img src="<?php the_field('special_pasta_picture_B'); ?>" alt="スペシャルパスタイメージB">
                                        <?php endif; ?>
                                    </div>
                                    <div class="set-menu-content">
                                        <?php if(get_field('NO_B')): ?>
                                        <div class="set-menu-number"><?php the_field('NO_B'); ?></div>
                                        <?php endif; ?>
                                        <?php if(get_field('special_pasta_B')): ?>
                                        <p class="set-menu-text"><?php the_field('special_pasta_B'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="set-menu">
                                    <div class="set-menu-picture">
                                        <?php if(get_field('special_pasta_picture_C')): ?>
                                        <img src="<?php the_field('special_pasta_picture_C'); ?>" alt="スペシャルパスタイメージC">
                                        <?php endif; ?>
                                    </div>
                                    <div class="set-menu-content">
                                        <?php if(get_field('NO_C')): ?>
                                        <div class="set-menu-number"><?php the_field('NO_C'); ?></div>
                                        <?php endif; ?>
                                        <?php if(get_field('special_pasta_C')): ?>
                                        <p class="set-menu-text"><?php the_field('special_pasta_C'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="set-menu">
                                    <div class="set-menu-picture">
                                        <?php if(get_field('special_pasta_picture_D')): ?>
                                        <img src="<?php the_field('special_pasta_picture_D'); ?>" alt="スペシャルパスタイメージD">
                                        <?php endif; ?>
                                    </div>
                                    <div class="set-menu-content">
                                        <?php if(get_field('NO_D')): ?>
                                        <div class="set-menu-number"><?php the_field('NO_D'); ?></div>
                                        <?php endif; ?>
                                        <?php if(get_field('special_pasta_D')): ?>
                                        <p class="set-menu-text"><?php the_field('special_pasta_D'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="set-contents-footer">
                                <div class="set-setmenu"><img src="<?php echo get_template_directory_uri(); ?>/img/img_lunch-detail.png" alt="パスタ+サラダ+ドリンク"></div>
                                <div class="set-message">
                                    <div class="set-title">スペシャルランチセット<br><span>【選べる3品】</span></div>
                                    <div class="set-price">1,280 yen</div>
                                    <div class="set-hour">(11:00 AM〜14:00 PMまで)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>
    
            <section id="menu" class="menu">
                <div class="inner">
                    <h2 class="section-title menu-head">GRAND MENU</h2>
                    <p class="section-subtitle">グランドメニュー</p>
                    <div class="menu-contents">
                        <div class="menu-content">
                            <h3 class="menu-contents-title">パスタ</h3>
                            <div class="menu-items">
                                <?php query_posts(array(
                                    'post_type' => 'menu',
                                    'taxonomy' => 'genre',
                                    'term' => 'pasta',
                                    'posts_per_page' => 3,
                                    'order' => 'DESC',
                                    )); ?>
                                <?php if (have_posts()): ?>
                                        <?php while(have_posts()): ?>
                                            <?php the_post(); ?>
                                <div class="menu-item">
                                    <div class="menu-picture">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="news-picture">
                                    <?php endif; ?>
                                    </div>
                                    <h4 class="menu-text"><?php the_title(); ?></h4>
                                    <?php if(get_field('price')): ?>
                                    <p class="menu-price"><?php the_field('price'); ?> yen</p>
                                    <?php endif; ?>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>    
                                <?php wp_reset_query(); ?>   
                            </div>
                        </div>
                        <div class="menu-content">
                            <h3 class="menu-contents-title">サラダ</h3>
                            <div class="menu-items">
                            <?php query_posts(array(
                                'post_type' => 'menu',
                                'taxonomy' => 'genre',
                                'term' => 'salad',
                                'posts_per_page' => 3,
                                'order' => 'DESC',
                                )); ?>
                                <?php if (have_posts()): ?>
                                        <?php while(have_posts()): ?>
                                            <?php the_post(); ?>
                                <div class="menu-item">
                                    <div class="menu-picture">
                                        <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="news-picture">
                                        <?php endif; ?>
                                    </div>
                                    <h4 class="menu-text"><?php the_title(); ?></h4>
                                    <?php if(get_field('price')): ?>
                                    <p class="menu-price"><?php the_field('price'); ?> yen</p>
                                    <?php endif; ?>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>    
                                <?php wp_reset_query(); ?>
                            </div>
                        </div>
                        <div class="menu-content">
                            <h3 class="menu-contents-title">パン & スイーツ</h3>
                            <div class="menu-items">
                            <?php query_posts(array(
                                'post_type' => 'menu',
                                'taxonomy' => 'genre',
                                'term' => 'breadsweets',
                                'posts_per_page' => 6,
                                'order' => 'DESC',
                                )); ?>
                                <?php if (have_posts()): ?>
                                        <?php while(have_posts()): ?>
                                            <?php the_post(); ?>
                                <div class="menu-item">
                                    <div class="menu-picture">
                                        <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="news-picture">
                                        <?php endif; ?>
                                    </div>
                                    <h4 class="menu-text"><?php the_title(); ?></h4>
                                    <?php if(get_field('price')): ?>
                                    <p class="menu-price"><?php the_field('price'); ?> yen</p>
                                    <?php endif; ?>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>    
                                <?php wp_reset_query(); ?>
                            </div>
                        </div>

                        <div class="menu-content">
                            <h3 class="menu-contents-title">ドリンク</h3>
                            <div class="menu-items2">
                                <div class="menu-picture2"><img src="<?php echo get_template_directory_uri(); ?>/img/img_drink1.png" alt="ドリンク1"></div>
                                <div class="menu-items2-right">
                                <?php
                                $taxonomy = 'genre'; //タクソノミーgenreを$taxonomyに格納
                                $term = get_term_by('slug', 'drink',$taxonomy); //genreの中のdrinkスラッグについてタームの名前を表示
                                $term_id = $term -> term_id; //drink親タームの中の子タームのidを取得
                                $drinks = get_terms($taxonomy,array('parent' => $term_id , 'orderby' => 'description')); //まとめ
                                ?>
                                <?php foreach($drinks as $drink): // 子ターム名取得ループ?>
                                <div class="menu-item2">
                                    <h4 class="menu-list-title"><?php echo $drink->name; //子ターム名出力?></h4>
                                    <div class="menu-lists">
                                    <?php
                                    $args = array(
                                        'post_type' => 'menu',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'genre',
                                                'field'    => 'term_id', //ターム情報IDを利用する
                                                'terms' => $drink->term_id, //ここで$drinksのループから得られる各種$drinkのタームIDをパラメーターに入れている
                                            ),
                                        ),
                                    );
                                    
                                    $the_query = new WP_Query($args);
                                    if($the_query->have_posts()):
                                    while($the_query->have_posts()): $the_query->the_post();
                                    ?>
                                        <dl class="menu-list">
                                            <dt><?php the_title(); ?></dt>
                                            <?php if(get_field('price')): ?>
                                            <dd><?php the_field('price'); ?> yen</dd>
                                            <?php endif; ?>
                                        </dl>
                                    <?php
                                    endwhile;
                                    endif; wp_reset_postdata();
                                    ?>
                                    </div>
                                </div>
                                <?php endforeach; //子ターム名取得ループ終わり ?>    
                            </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="section-btn menu-btn"><a href="<?php echo home_url('menu'); ?>">その他のメニュー</a></div>
                </div>    
            </section>
    
            <section id="gallery" class="gallery gallery-head">
                <div class="inner gallery-inner">
                    <div class="gallery-contents">
                        <h2 class="section-title gallery-head2">GALLERY</h2>
                        <p class="section-subtitle">ギャラリー</p>
                        <div class="gallery-items">
                            <div class="gallery-item">
                            <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
                            </div>
                        </div>
                        <div class="section-btn gallery-btn"><a href="<?php echo home_url(); ?>">インスタグラムを見る</a></div>
                    </div>
                </div>
            </section>
    
            <section id="news" class="news">
                <div class="inner">
                    <h2 class="section-title news-head">NEWS</h2>
                    <p class="section-subtitle">お知らせ</p>
                    <div class="news-contents">
                        <?php $pickup_query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'tag' => 'pickup',
                                'posts_per_page' => 1,
                            )
                            );
                        ?>
                        <div class="news-left">
                        <?php if($pickup_query->have_posts()): ?>
                        <?php while($pickup_query->have_posts()): ?>
                            <?php $pickup_query->the_post(); ?>
                            <a class="news-left-link" href="<?php the_permalink(); ?>">
                                <div class="news-left-category"><?php my_the_post_category(); ?></div>
                                <div class="news-left-picture">
                                    <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                    <img src="<?php get_template_directory_uri(); ?>/img/img_news1.png" alt="news-picture">
                                    <?php endif; ?>
                                </div>
                                <h3 class="news-left-title">
                                <?php
                                if(mb_strlen($post->post_title)>60) {
                                $title= mb_substr($post->post_title,0,60);
                                    echo $title . '...';
                                } else {
                                    echo $post->post_title;
                                }
                                ?>
                                </h3>
                                <p class="news-left-text"><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '...'; ?></p>
                                <time class="news-left-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </a>
                            
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <div class="news-right">
                            <?php
                            $news_query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 4,
                                    'tag__not_in' => 9,
                                    'category__not_in' => 10,
                                )
                            );
                            ?>
                            <?php if ($news_query->have_posts()) :?>
                                <?php while($news_query->have_posts()) :?>
                                    <?php $news_query->the_post(); ?>
                                    <a class="news-item" href="<?php the_permalink(); ?>">
                                            <div class="news-right-category"><?php my_the_post_category(); ?></div>  
                                        <div class="news-right-picture">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="news-picture">
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="news-right-title">
                                        <?php
                                        if(mb_strlen($post->post_title)>40) {
                                        $title= mb_substr($post->post_title,0,40);
                                            echo $title . '...';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                        </h3>
                                        <time class="news-right-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    </a>
                                <?php endwhile; ?>    
                            <?php endif; ?>    
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="section-btn news-btn"><a href="<?php echo esc_url(home_url('/news/')); ?>">過去のお知らせ</a></div>
                </div>    
            </section>
    
            <?php get_template_part('template-parts/access'); ?>

        </main>
    
        <?php get_footer(); ?>
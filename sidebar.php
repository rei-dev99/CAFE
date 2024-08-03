<aside class="news-sidebars">
    <div class="news-sidebar-wrap">
        <h2 class="news-sidebar-title">最近の記事</h2>
        <div class="news-sidebar-items">

        <?php
        $news_query = new WP_Query(
            array(
                'posts_per_page' => 5,
            )
        );
        ?>
            <?php if ($news_query->have_posts()): ?>
            <?php while($news_query->have_posts()): ?>
                <?php $news_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="news-sidebar-item">
                    <div class="news-sidebar-picture">
                        <?php if (has_post_thumbnail()) :?>
                        <?php the_post_thumbnail() ; ?>
                        <?php else : ?>       
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="サムネイル画像">
                        <?php endif; ?>
                    </div>
                    <div class="news-sidebar-contents">
                        <h3 class="news-sidebar-text">
                        <?php the_title(); ?>
                        </h3>
                        <time class="news-sidebar-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                </a>
                <?php endwhile; ?>
            <?php endif; ?>  
            <?php wp_reset_postdata(); ?>     
        </div>
    </div>
    <div class="news-sidebar-categories">
        <div class="news-sidebar-wrap sidebar2">
            <h2 class="news-sidebar-title">カテゴリ</h2>
            <div class="news-category-list">
                    <?php
                        $categories = get_categories();
                        foreach($categories as $cat):
                        ?>
                    <div class="news-category-link">    
                            <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                    </div>
                    <?php endforeach; ?>    
            </div>
        </div>
    </div>
</aside>
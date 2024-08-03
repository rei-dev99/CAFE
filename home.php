        <?php get_header(); ?>

        <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
        </div>
        <?php endif; ?>
    
        <main>
    
            <div class="news-about inner">
                <article class="news-article">
                    <div class="news-article-items">
                        <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="news-article-item">
                                        <div class="news-article-category"><?php my_the_post_category(); ?></div> 
                                    <div class="news-article-picture">
                                        <?php if (has_post_thumbnail()) :?>
                                        <?php the_post_thumbnail() ; ?>
                                        <?php else : ?>       
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="サムネイル画像">
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="news-article-text">
                                    <?php
                                    if(mb_strlen($post->post_title)>40) {
                                    $title= mb_substr($post->post_title,0,40);
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                    </h3>
                                    <time class="news-article-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>        
                    </div>
                    
                    <?php get_template_part('template-parts/pagination'); ?>

                </article>
                
                <?php get_sidebar(); ?>

            </div>
    
            <?php get_template_part('template-parts/access'); ?>
        </main>
    
        <?php get_footer(); ?>
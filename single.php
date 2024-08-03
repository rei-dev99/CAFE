        <?php get_header(); ?>
    
        <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
        </div>
        <?php endif; ?>
    
        <main>
            <div class="news-page-about inner">
                <div class="news-page-picture">
                    <?php if (has_post_thumbnail()) :?>
                    <?php the_post_thumbnail() ; ?>
                    <?php else : ?>       
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="サムネイル画像">
                    <?php endif; ?>
                </div>
                <div class="news-page-main">
                    <h1><?php the_title(); ?></h1>
                    <div class="news-page-head">
                        <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        <?php $category = get_the_category(); ?>
                        <?php if ($category[0]): ?>
                            <p><?php echo $category[0]->cat_name; ?></p>
                        <?php endif; ?>  
                    </div>
                    <div class="news-page-body">
                        <?php the_content(); ?>
                    </div>
                        <div class="news-page-link">
                            <?php if (get_previous_post()):?>
                                <div class="news-page-link-left"><?php previous_post_link('%link', '前の記事へ'); ?></div>
                            <?php endif; ?>
                            <a class="news-page-link-center" href="<?php echo esc_url(home_url('/news/')); ?>">記事一覧</a>
                            <?php if (get_next_post()):?>
                                <div class="news-page-link-right"><?php next_post_link('%link', '次の記事へ'); ?></div>
                            <?php endif; ?>
                        </div>
                </div>
                <div class="news-page-sub">
                    <h2 class="news-page-about2-title">関連記事</h2>
                    <?php if(has_category()) {
                        $post_cats = get_the_category();
                        $cat_ids = array();
                        foreach($post_cats as $cat) {
                            $cat_ids[] = $cat->term_id;
                        }
                    }
                    
                    $myposts = get_posts(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'post__not_in' => array($post->ID),
                        'category__in' => $cat_ids,
                        'orderby' => 'rand'
                    ));

                    

                    if($myposts): ?>
                    <div class="news-page-items">
                        <?php foreach($myposts as $post): setup_postdata($post); ?>
                                    <a href="<?php get_the_permalink(); ?>" class="news-page-item">
                                            <div class="news-page-category"><?php my_the_post_category(); ?></div>
                                            <div class="news-page-category-img">
                                                <?php if (has_post_thumbnail()) :?>
                                                <?php the_post_thumbnail() ; ?>
                                                <?php else : ?>       
                                                <img src="<?php get_template_directory_uri(); ?>/img/img_news1.png" alt="サムネイル画像">
                                                <?php endif; ?>
                                            </div>
                                            <h3 class="news-page-category-text">
                                                <?php
                                                if (wp_is_mobile()) {
                                                    $title_mobile = mb_substr($post->post_title, 0, 41);
                                                    echo $title_mobile . '...';
                                                    
                                                }
                                                elseif (mb_strlen($post->post_title) > 27) {
                                                    $title = mb_substr($post->post_title, 0, 27);
                                                    echo $title . '...';
                                                }
                                                else {
                                                    echo $post->post_title;
                                                }
                                                ?>
                                            </h3>
                                            <time class="news-page-category-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    </a> 
                        <?php endforeach; ?>            
                    <?php endif; ?>    
                    <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            
            <?php get_template_part('template-parts/access'); ?>
        </main>
    
        <?php get_footer(); ?>
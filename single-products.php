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
                <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="ギフト・贈り物サムネイル画像">
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
                        <a class="news-page-link-center" href="<?php echo get_post_type_archive_link('products'); ?>">記事一覧</a>
                        <?php if (get_next_post()):?>
                            <div class="news-page-link-right"><?php next_post_link('%link', '次の記事へ'); ?></div>
                        <?php endif; ?>
                    </div>
            </div>
            <div class="news-page-sub">
                <h2 class="news-page-about2-title">関連記事</h2>
                <div class="news-page-items">
                    <?php
                    $term = get_the_terms($post->ID,'genre');   
                    $related_query = new WP_Query(
                        array(
                            'post_type' => 'products',
                            'taxonomy' => 'genre',
                            'term' => $term->slug,
                            'posts_per_page' => 6,
                            'post__not_in' => array($post->ID)
                        )
                    );
                    ?>
                    <?php if ( $related_query->have_posts() ) : ?>
                        <?php while ( $related_query->have_posts() ) : ?>
                            <?php $related_query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="news-page-item">
                                        <div class="news-page-category-img">
                                            <?php if (has_post_thumbnail()) :?>
                                            <?php the_post_thumbnail() ; ?>
                                            <?php else : ?>       
                                            <img src="<?php get_template_directory_uri(); ?>/img/img_news1.png" alt="ギフト・贈り物サムネイル画像">
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="news-page-category-text"><?php the_title(); ?></h3>
                                        <time class="news-page-category-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
        
        <?php get_template_part('template-parts/access'); ?>
    </main>

    <?php get_footer(); ?>
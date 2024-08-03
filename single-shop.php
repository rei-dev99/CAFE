<?php get_header(); ?>
    
    <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
    </div>
    <?php endif; ?>

    <main>
        <div class="news-page-about inner">
            <div class="news-page-main">
                <h1><?php the_title(); ?></h1>
                <div class="news-page-head">
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <div class="access-contents">
                        <div class="access-map shop-map">
                            <div class="iframe-wrap">
                            <?php if(get_field('location')): ?>
                            <?php the_field('location'); ?>
                            <?php endif; ?>
                            </div>
                        </div>
                        <div class="access-info shop-info">
                            <div class="access-left">
                                <dl class="access-row">
                                    <dt>住所</dt>
                                    <?php if(get_field('address1')): ?>
                                    <dd><?php the_field('address1'); ?><br>
                                    <?php endif; ?>
                                    <?php if(get_field('address2')): ?>
                                        <?php the_field('address2'); ?></dd>
                                    <?php endif; ?>
                                </dl>
                                <dl class="access-row">
                                    <dt>TEL</dt>
                                    <?php if(get_field('tel')): ?>
                                    <dd><?php the_field('tel'); ?></dd>
                                    <?php endif; ?>
                                </dl>
                                <dl class="access-row">
                                    <dt>Mail</dt>
                                    <?php if(get_field('mail')): ?>
                                    <dd><?php the_field('mail'); ?></dd>
                                    <?php endif; ?>
                                </dl>
                            </div>
                            <div class="access-right">
                                <dl class="access-row">
                                    <dt>営業時間</dt>
                                    <?php if(get_field('hours1')): ?>
                                    <dd><?php the_field('hours1'); ?><br>
                                    <?php endif; ?>
                                    <?php if(get_field('hours2')): ?>
                                    ※ラストオーダー <?php the_field('hours2'); ?></dd>
                                    <?php endif; ?>
                                </dl>
                                <dl class="access-row">
                                    <dt>定休日</dt>
                                    <?php if(get_field('holiday')): ?>
                                    <dd><?php the_field('holiday'); ?></dd>
                                    <?php endif; ?>
                                </dl>
                                <dl class="access-row">
                                    <dt>座席</dt>
                                    <?php if(get_field('table')): ?>
                                    <dd><?php the_field('table'); ?></dd>
                                    <?php endif; ?>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="news-page-link">
                        <?php if (get_previous_post()):?>
                            <div class="news-page-link-left"><?php previous_post_link('%link', '前の記事へ'); ?></div>
                        <?php endif; ?>
                        <a class="news-page-link-center" href="<?php echo get_post_type_archive_link('shop'); ?>">記事一覧</a>
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
                            'post_type' => 'shop',
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
                                <a href="<?php get_the_permalink(); ?>" class="news-page-item">
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
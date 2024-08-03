        <?php get_header(); ?>
    
        <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
        </div>
        <?php endif; ?>
    
        <main>
            <div class="shop-main">
            <?php if (have_posts()): ?>
            <?php while(have_posts()): ?>
            <?php the_post(); ?>
                <div class="shop-about inner">
                    <h2 class="stores">OPEN CAFE　<?php the_title(); ?></h2>
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
                </div>
            <?php endwhile; ?>
            <?php endif; ?>     
                
            </div>
    
            <?php get_template_part('template-parts/access'); ?>
        </main>
    
        <?php get_footer(); ?>
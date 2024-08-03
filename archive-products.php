        <?php get_header(); ?>
    
        <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
        </div>
        <?php endif; ?>
    
        <main>
            <div class="products-about inner">
                <div class="products-items">
                        <?php $new_products = new WP_Query(
                            array(
                                'post_type' => 'products',
                                'posts_per_page' => 1,
                                'taxonomy' => 'gift',
                                'orderby' => 'date',
                                'order' => 'DESC',
                            )
                            );
                        ?>
                        <?php if($new_products->have_posts()): ?>
                        <?php while($new_products->have_posts()): ?>
                            <?php $new_products->the_post(); ?>
                    <div class="products-item-bg">
                        <div class="products-item-picture-bg">
                            <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="ギフト・贈り物サムネイル画像">
                            <?php endif; ?>
                        </div>
                        <div class="products-item-name-bg"><?php the_title(); ?></div>
                        <?php if(get_field('price')): ?>
                        <p class="products-item-price-bg"><?php the_field('price'); ?> yen</p>
                        <?php endif; ?>
                        <div class="products-item-btn"><a href="#">ショップで確認する</a></div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <div class="products-item-list">
                    <?php $args = new WP_Query(
                            array(
                                'post_type' => 'products',
                                'posts_per_page' => 4,
                                'offset' => 1,
                                'taxonomy' => 'gift',
                            )
                            );
                        ?>
                        <?php if($args->have_posts()): ?>
                        <?php while($args->have_posts()): ?>
                            <?php $args->the_post(); ?>
                        <div class="products-item-s">
                            <div class="products-item-picture-s">
                                <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="ギフト・サムネイル1番目画像">
                                <?php endif; ?>
                            </div>
                            <div class="products-item-name-s"><?php the_title(); ?></div>
                            <?php if(get_field('price')): ?>
                            <p class="products-item-price-s"><?php the_field('price'); ?> yen</p>
                            <?php endif; ?>
                            <div class="products-item-btn"><a href="#">ショップで確認する</a></div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    
                </div>
                <div class="products-item-list2">
                <?php $args = new WP_Query(
                            array(
                                'post_type' => 'products',
                                'posts_per_page' => 4,
                                'offset' => 5,
                                'taxonomy' => 'gift',
                            )
                            );
                        ?>
                
                        <?php if($args->have_posts()): ?>
                        <?php while($args->have_posts()): ?>
                            <?php $args->the_post(); ?>
                    <div class="products-item2-s">
                        <div class="products-item-picture-s">
                            <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="ギフト・サムネイル2~5番目サムネイル画像">
                            <?php endif; ?>
                        </div>
                        <div class="products-item-name-s"><?php the_title(); ?></div>
                        <?php if(get_field('price')): ?>
                        <p class="products-item-price-s"><?php the_field('price'); ?> yen</p>
                        <?php endif; ?>
                        <div class="products-item-btn"><a href="#">ショップで確認する</a></div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    <?php wp_reset_postdata(); ?>  
                </div>
    
                <div class="products-wrap">
                    <div class="products-wrap-content">
                        <div class="products-wrap-message">
                            <div class="products-wrap-title">ラッピングは無料でお付けいたします。<br class="is-pc">お気軽にご相談ください。</div>
                            <p class="products-wrap-text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
                        </div>
                        <div class="products-wrap-picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_wrapping.png" alt="ギフト・贈り物ラッピング画像">
                        </div>
                    </div>
                </div>
            </div>
    
    
            <?php get_template_part('template-parts/access'); ?>
        </main>
    
        <?php get_footer(); ?>
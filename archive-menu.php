<?php get_header(); ?>
    
    <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
    </div>
    <?php endif; ?>

    <main>
        <div class="menu-about inner">
            <nav class="menu-about-nav">
                <ul class="menu-about-tab">
                    <?php $genre_terms = get_terms('genre', array('hide_empty'=>false,'parent' => 0,'orderby' => 'description')); ?>
                    <?php foreach($genre_terms as $genre_term): ?>
                    <li><a href="<?php echo get_term_link($genre_term, 'genre'); ?>"><span><?php echo $genre_term->name; ?></span></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="menu-about-items">
            <?php
            $args = array(
                'post_type' => 'menu',
                'taxonomy' => 'genre',
                'term' => 'pasta',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                array(
                    'taxonomy' => 'genre',
                    'field' => 'slug',
                    'terms' => 'special',
                    'operator' => 'NOT IN',
                ),

            ),
            );
            $menu_query = new WP_Query($args);
            ?>
                <?php if ($menu_query->have_posts()): ?>
                            <?php while($menu_query->have_posts()): ?>
                                <?php $menu_query->the_post(); ?>
                <div class="menu-about-item">
                    <div class="menu-about-picture">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="メニューサムネイル画像">
                        <?php endif; ?>
                    </div>
                    <div class="menu-about-text"><?php the_title(); ?></div>    
                    <?php if(get_field('price')): ?>                
                    <div class="menu-about-price"><?php the_field('price'); ?> yen</div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>    
                <?php wp_reset_query(); ?>

                <?php query_posts(array(
                    'post_type' => 'menu',
                    'taxonomy' => 'genre',
                    'term' => 'salad',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                )); ?>
                <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                <div class="menu-about-item">
                    <div class="menu-about-picture">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="サラダサムネイル画像">
                        <?php endif; ?>
                    </div>
                    <div class="menu-about-text"><?php the_title(); ?></div>
                    <?php if(get_field('price')): ?>
                    <div class="menu-about-price"><?php the_field('price'); ?> yen</div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>    
                <?php wp_reset_query(); ?> 

                <?php query_posts(array(
                    'post_type' => 'menu',
                    'taxonomy' => 'genre',
                    'term' => 'breadsweets',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                )); ?>
                <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                <div class="menu-about-item">
                    <div class="menu-about-picture">
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="パン＆スイーツサムネイル画像">
                        <?php endif; ?>
                    </div>
                    <div class="menu-about-text"><?php the_title(); ?></div>
                    <?php if(get_field('price')): ?>
                    <div class="menu-about-price"><?php the_field('price'); ?> yen</div>
                    <?php endif; ?>
                </div>
                    <?php endwhile; ?>
                <?php endif; ?>    
                <?php wp_reset_query(); ?>    

                <?php query_posts(array(
                    'post_type' => 'menu',
                    'taxonomy' => 'genre',
                    'term' => 'drink',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                )); ?>
                <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                <div class="menu-about-item">
                    <div class="menu-about-picture">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="ドリンクサムネイル画像">
                        <?php endif; ?>
                    </div>
                    <div class="menu-about-text"><?php the_title(); ?></div>    
                    <?php if(get_field('price')): ?>                
                    <div class="menu-about-price"><?php the_field('price'); ?> yen</div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>    
                <?php wp_reset_query(); ?>   

            </div>

        </div>

        <?php get_template_part('template-parts/access'); ?>
    </main>


    <?php get_footer(); ?>
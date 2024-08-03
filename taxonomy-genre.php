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
                    <?php
                    $cat = get_queried_object();
                    $cat_name = $cat->name;
                    ?>
                    <?php $genre_terms = get_terms('genre', array('hide_empty'=>false,'parent' => 0,'orderby' => 'description')); ?>
                    <?php foreach($genre_terms as $genre_term): ?>
                    <li><a class="<?php if($cat_name == esc_html($genre_term->name)){echo "is-active";} ?>" href="<?php echo get_term_link($genre_term, 'genre'); ?>"><span><?php echo $genre_term->name; ?></span></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="menu-about-items">
            
                <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                <div class="menu-about-item">
                    <div class="menu-about-picture">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="パスタサムネイル画像">
                        <?php endif; ?>
                    </div>
                    <div class="menu-about-text"><?php the_title(); ?></div>    
                    <?php if(get_field('price')): ?>                
                    <div class="menu-about-price"><?php the_field('price'); ?> yen</div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>    
            </div>

        </div>

        <?php get_template_part('template-parts/access'); ?>
    </main>


    <?php get_footer(); ?>
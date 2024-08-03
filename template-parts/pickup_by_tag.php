
    <?php $pickup_query = new WP_Query(
        array(
            'post_type' => 'post',
            'tag' => 'pickup',
            'posts_per_page' => 1,
        )
        );
    ?>
    <div class="header-category">

    <?php if($pickup_query->have_posts()): ?>
        <?php while($pickup_query->have_posts()): ?>
            <?php $pickup_query->the_post(); ?>

            <div class="header-category-content">
                <div class="header-category-category"><?php my_the_post_category(false); ?></div>
                <a href="<?php the_permalink(); ?>" class="header-category-link">
                    <div class="header-category-picture">
                        <?php if (has_post_thumbnail()) :?>
                        <?php the_post_thumbnail() ; ?>
                        <?php else : ?>       
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_news1.png" alt="ニュース">
                        <?php endif; ?>
                    </div>
                    <div class="header-category-news">
                        <time class="header-category-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        <p class="header-category-text">
                        <?php
                        if(mb_strlen($post->post_title)>40) {
                        $title= mb_substr($post->post_title,0,40);
                            echo $title . '...';
                        } else {
                            echo $post->post_title;
                        }
                        ?></p>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </div>
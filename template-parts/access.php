<section id="access" class="access section-access">
    <div class="inner">
        <div class="access-contents">
            <h2 class="section-title access-head">ACCESS</h2>
            <p class="section-subtitle">アクセス</p>

            <?php $access_main = array(232); //吉祥寺店を当店に設定 ?> 
            <?php
            $access_query = new WP_Query(
                array(
                    'post_type' => 'shop',
                    'posts_per_page' => 1,
                    'post__in' => $access_main,
                )
            );
            ?>

         <?php if ($access_query->have_posts()) : ?>
            <?php while($access_query->have_posts()) : ?>
            <?php $access_query->the_post(); ?>

            
            <div class="access-map">
                <div class="iframe-wrap">
                <?php if(get_field('location')): ?>
                <?php the_field('location'); ?>
                <?php endif; ?>
                </div>
            </div>
            
            <div class="access-info">
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
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
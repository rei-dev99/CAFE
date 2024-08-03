        <?php get_header(); ?>
    
        <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
        </div>
        <?php endif; ?>
    
        <main>
            <section class="contact">
                <div class="inner">
                    <h2 class="contact-head">お問い合わせフォーム</h2>
                    <p class="contact-text">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p>
                            <?php the_content(); ?>
                </div>
            </section>
    
            <?php get_template_part('template-parts/access'); ?>
        </main>
    
        <?php get_footer(); ?>
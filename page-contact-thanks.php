    <?php get_header(); ?>
    
    <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
    </div>
    <?php endif; ?>

    <main>
        <section class="contact">
            <div class="inner contact-thanks">
                        <?php the_content(); ?>
            </div>
        </section>

        <?php get_template_part('template-parts/access'); ?>
    </main>

    <?php get_footer(); ?>
        <?php get_header(); ?>
    
        <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
        <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
        </div>
        <?php endif; ?>
    
        <main>
            <div class="concept-about">
                <div class="inner">
                    <div class="concept-about-content">
                        <div class="concept-about-left">
                            <h2 class="concept-about-title">美味しいコーヒーと食事で、<br>最高のひとときを。</h2>
                            <p class="concept-about-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br> ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br> ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br> ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                        </div>
                        <div class="concept-about-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_concept1.png" alt="コンセプト1つ目画像">
                        </div>
                    </div>
                </div>
            </div>
            <div class="concept-about2">
                <div class="inner">
                    <div class="concept-about-content row-reverse">
                        <div class="concept-about-left">
                            <h2 class="concept-about-title">本場イタリアで培った<br>自慢のパスタ</h2>
                            <p class="concept-about-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                        </div>
                        <div class="concept-about-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_concept2.png" alt="コンセプト2つ目画像">
                        </div>
                    </div>
                </div>
            </div>
            <div class="concept-about3">
                <div class="inner">
                    <div class="concept-about-content">
                        <div class="concept-about-left">
                            <h2 class="concept-about-title">ほどよい甘さの<br>自家製こだわりクロワッサン</h2>
                            <p class="concept-about-text concept-text-last">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                        </div>
                        <div class="concept-about-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_concept3.png" alt="コンセプト3つ目画像">
                        </div>
                    </div>
                </div>
            </div>
    
    
            <?php get_template_part('template-parts/access'); ?>
        </main>
    
        <?php get_footer(); ?>
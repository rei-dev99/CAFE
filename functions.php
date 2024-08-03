<?php
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");

function my_script_init() {
    wp_enqueue_style("reset", get_template_directory_uri() ."/css/reset.css" , array(), filemtime(get_theme_file_path('css/reset.css')), "all");
    wp_enqueue_style("swiper-css", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" , array(), "8.4.5", false); 
    wp_enqueue_style("my", get_template_directory_uri() ."/css/style.css" , array("swiper-css"), filemtime(get_theme_file_path('css/style.css')), "all");  
    wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" , array(), "8.4.5", false); 
    wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

/**
 * メニュー作成
 */
function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー'
    )
    );
}
add_action('init', 'my_menu_init');


/**
 * グローバルメニュー、ドロワーメニューに日本語表記説明追加
 */
function prefix_nav_description( $item_output, $item, $depth, $args ) {
  if ( !empty( $item->description ) ) {
  $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<strong>' . $item->title . '</strong>' . '<span class="menu-item-description">' . $item->description . '</span>' , $item_output );
  }
  return $item_output;
 }
 add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );

/**
 * ドロワーメニューliのclass、id削除
 */
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array( 'current-menu-item' )) : '';
}

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

function my_the_post_category() { // カテゴリークラス付
  $category = get_the_category();
  if($category[0]) {
    echo $category[0]->cat_name;
  }
}

/**
 * お問い合わせ完了ページに遷移
 */
add_action('wp_footer', 'redirect_to_thanks_page');
function redirect_to_thanks_page() {
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '{$homeUrl}/contact-thanks/';
      }, false );
    </script>
  EOD;
}

/**
 * 投稿を古い順に並び替える
 */
function change_old($the_query) {
  $the_query->set('order', 'ASC');
  $the_query->set('orderby', 'modified');
}
add_action('pre_get_posts', 'change_old');

/**
 * カスタムタクソノミー並び替え
 */
function taxonomy_orderby_description( $orderby, $args ) {

  if ( $args['orderby'] == 'description' ) {
      $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );



?>

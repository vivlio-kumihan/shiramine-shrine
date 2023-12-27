<?php 
// ダッシュボードの投稿のサイドバーにアイキャッチ画像を付与。
add_theme_support('post-thumbnails');

// ダッシュボードのウィジェットの登録
function theme_slug_widgets_init() {
  register_sidebar(1, array(
    'name' => 'サイドバー', //ウィジェットの名前を入力
    'id' => 'sidebar', //ウィジェットに付けるid名を入力
  ));
};
add_action('widgets_init', 'theme_slug_widgets_init');

// JavaScriptを仕込む
function my_script()
{
  wp_enqueue_script(
    // 重複しないよう呼び込むスクリプトの名称をつける
    'myscript',
    // 呼び出す関数までのパスを読み込む
    get_template_directory_uri() . '/js/behavior.js',
    // このjsを読み込む前に取り込んでおきたいjsがあればこの配列にパスを代入しておく
    array(),
    // true=> versionを出力する
    false,
    // true=>footerでjsを読み込む
    // false=>headerでjsを読み込む
    // HTMLが読まれてからjs読み込むのが吉なので、
    true
  );
}
add_action('wp_enqueue_scripts', 'my_script');

// メニューのカスタマイズ
function menu_setup()
{
  register_nav_menus(array(
    'global-menu' => 'グローバル・メニュー'
  ));
}
add_action('after_setup_theme', 'menu_setup');

// archiveをアクティブにする。
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'information'; //任意のスラッグ名をinformationに設定する。
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 投稿をお知らせに変える。
function aktk_post_type_labels_post($labels)
{
  foreach ($labels as $key => $value) {
    $labels->$key = str_replace('投稿', 'お知らせ', $value);
  }

  return $labels;
}
add_filter('post_type_labels_post', 'aktk_post_type_labels_post');

// 投稿抜粋の末尾記号を変更する。
function new_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// // メンテナンスモード
// function maintenance_mode()
// {
//   if (!current_user_can('shiramine-shrine') || !is_user_logged_in()) {
//     wp_die('只今、サイトリニューアルにつきメンテナンス中です。ご迷惑をおかけしますがご了承いただきますようお願い申し上げます。');
//   }
// }
// add_action('get_header', 'maintenance_mode');

// //カレンダーショートコード
// add_shortcode('calendar-1', 'calendar_shortcode');
// if (!function_exists('calendar_shortcode')) :
//   function calendar_shortcode($atts, $content = null)
//   {
//     extract(shortcode_atts(array(
//       'month' => 1,
//     ), $atts));
//     ob_start();
//     global $monthnum, $year;
//     $monthnum = date('m', strtotime(date('Y-m-1') . '-' . $month . ' month'));
//     $year = date('Y', strtotime(date('Y-m-1') . '-' . $month . ' month'));
//     get_calendar();
//     return ob_get_clean();
//   }
// endif;

// function my_orderby_meta_key($query) {
//   if (!is_admin()) {
//     if ($query->is_main_query()) {
//       if ($query->is_post_type_archive('publications-catalog') || $query->is_tax('publications-catalog-author')) {
//         $query->set('meta_key', 'ruby'); // ふりがなのカスタムフィールド名
//         $query->set('orderby', 'meta_value');
//         $query->set('order', 'ASC');
//         $query->set('post_type', array('publications-catalog'));
//       }
//     }
//   }
// }
// add_action('pre_get_posts', 'my_orderby_meta_key');

// 分割したファイルの読み込み
// get_template_part( 'functions/common' );
// get_template_part( 'functions/display' );
// get_template_part( 'functions/custom-menu' );
// get_template_part( 'functions/search' );
// get_template_part( 'functions/sidebar' );
// get_template_part( 'functions/delete-code' );
// get_template_part( 'functions/ogp' );
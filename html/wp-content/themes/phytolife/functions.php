<?php

// ######### WordPress機能の設定 ##########################################

//WordPress機能のカスタマイズ
function phytolife_custom_wordpress_func() {

  //ログイン時の上部アドミンバーを非表示にする
  add_filter('show_admin_bar', '__return_false');

  // wp_head機能から除外
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');

  // 固定ページ編集で抜粋を有効に
  add_post_type_support('page', 'excerpt');
  //http://elearn.jp/wpman/function/add_post_type_support.html

  // アイキャッチ画像を有効に
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(120, 120, false);
  add_image_size('list_thumbnail', 120, 120, false);

  //記事中で使用するテンプレートディレクトリのショートコード
  function shortcode_template_directory_img(){
    return get_template_directory_uri()."/img";
  }
  add_shortcode('img', 'shortcode_template_directory_img');
  function shortcode_template_directory_image(){
    return get_template_directory_uri()."/image";
  }
  add_shortcode('image', 'shortcode_template_directory_image');


  //### ダッシュボード関連

  //不要ウィジットを隠す
  function hide_dashboard_widgets() {
    //remove_meta_box('dashboard_right_now', 'dashboard', 'normal');//現在の状況
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');//最近のコメント
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');//被リンク
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');//プラグイン
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');//クイック投稿→管理画面全てにおいて無効化
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');//最近の下書き
    remove_meta_box('dashboard_primary', 'dashboard', 'side');//WordPressブログ
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');//WordPressフォーラム
  }
  add_action('wp_dashboard_setup', 'hide_dashboard_widgets');


  // カスタム投稿タイプ作成
  function create_post_type() {
    register_post_type(
      'construction_case', //投稿タイプ名
      array(
        'label'=> '施工事例', //ラベル名
        'labels' => array(
          'menu_name' => '施工事例', //管理画面のメニュー名
          'all_items' => '施工事例一覧',
          'add_new_item' => '施工事例を追加'
        ),
        'description'=> 'ディスクリプション',
        'public' => true, //公開状態
        'query_var' => true, // スラッグでURLをリクエストできる
        'hierarchical' => false, //固定ページのように親ページを指定するならtrue
        'rewrite' => array('slug' => 'construction_case'), //スラッグ名
        'has_archive' => true, //パーマリンクがデフォルト以外、アーカイブページを表示する場合はtrue
        'menu_position' => 5,
        'supports' => array(
          'title',
          'editor',
          'custom-fields',
          'thumbnail',
          'page-attributes',
          'excerpt'
        )
      )
    );
    register_taxonomy(
      'construction_case_cat', //タクソノミ名
      'construction_case', //タクソノミを使う投稿タイプ名
      array(
        'rewrite' => array('slug' => 'construction_case_cat'), //投稿タイプのスラッグ
        'label' => '施工事例カテゴリー', //ラベル名
        'labels' => array(
          'menu_name' => 'カテゴリー' //管理画面のメニュー名
        ),
        'public' => true, //公開状態
        'hierarchical' => true, //カテゴリのように扱う場合はtrue
        'has_archive' => true,
        'query_var' => true,
        'show_admin_column' => true, //投稿タイプのテーブルにタクソノミーのカラムを生成
      )
    );
    register_taxonomy(
      'construction_case_tag', //タクソノミ名
      'construction_case', //タクソノミを使う投稿タイプ名
      array(
        'rewrite' => array('slug' => 'construction_case_tag'), //投稿タイプのスラッグ
        'label' => '施工事例タグ', //ラベル名
        'labels' => array(
          'menu_name' => 'タグ' //管理画面のメニュー名
        ),
        'public' => true, //公開状態
        'hierarchical' => true, //タグのように扱う場合はfalse
        'has_archive' => true,
        'query_var' => true,
        'show_admin_column' => true, //投稿タイプのテーブルにタクソノミーのカラムを生成
      )
    );
  }
  add_action('init', 'create_post_type');


  //連想配列を見やすく展開表示
  function pp($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }

}
phytolife_custom_wordpress_func();



// 施工事例カテゴリー取得
function getCCCategory() {
  $lists = get_categories(array(
  	'taxonomy' => 'construction_case_cat',
    'hide_empty' => 0,
    'orderby' => 'order',
  ));
  return $lists;
}

// 施工事例タグ取得
function getCCTag() {
  $lists = get_categories(array(
  	'taxonomy' => 'construction_case_tag',
    'hide_empty' => 0,
    'hierarchical' => 0,
    'parent' => 0,
    'orderby' => 'order',
  ));
  foreach($lists as &$list){
    $child_lists = get_categories(array(
    	'taxonomy' => 'construction_case_tag',
      'hide_empty' => 0,
      'hierarchical' => 0,
      'parent' => $list->cat_ID,
      'orderby' => 'order',
    ));
    $list->child_tags = $child_lists;
  }
  return $lists;
}

//トップページ用施工事例一覧取得


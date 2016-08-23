<?php

// ######### WordPress機能の設定 ##########################################

//フロントにおけるWordPress機能のカスタマイズ
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

register_taxonomy('cc_tag', 'post',
	array(
		'labels' => array(
			'name' => '施工事例タグ'
		),
		'hierarchical' => true
	)
);

  //連想配列を見やすく展開表示
  function pp($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }

}
phytolife_custom_wordpress_func();


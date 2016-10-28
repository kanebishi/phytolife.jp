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


  function form_cc_info(){
    global $post;
    wp_nonce_field(wp_create_nonce(__FILE__), 'cc_nonce');
?>
<script type="text/javascript"><!--mce:0--></script>
<div id="cc_info">
  <p>
    <label>施行年月</label><br>
    <input type="text" name="construction_date_year" style="width: 50px;" value="<?php echo get_post_meta($post->ID, 'construction_date_year', true); ?>"> 年 
    <input type="text" name="construction_date_month" style="width: 30px;" value="<?php echo get_post_meta($post->ID, 'construction_date_month', true); ?>"> 月　　
    例）2016年01月
  </p>
</div>
<?php
  }

  function add_cc_meta_boxes(){
    add_meta_box('cc_info', '基本情報', 'form_cc_info', 'construction_case', 'normal', 'high');
  }
  add_action('add_meta_boxes', 'add_cc_meta_boxes');

  function save_cc_meta_boxes($post_id){
    global $post;

    // for CSRF
    $nonce = isset($_POST['cc_nonce']) ? $_POST['cc_nonce'] : null;
    if(!wp_verify_nonce($nonce, wp_create_nonce(__FILE__))){
      return $post_id;
    }

    if($_POST['post_type'] == 'construction_case'){
      $meta_keys = array(
        'construction_date_year',
        'construction_date_month',
      );
      $id = $post->ID;
      foreach($meta_keys as $k){
        update_post_meta($id, $k, $_POST[$k]);
      }
    }
  }
  add_action('save_post', 'save_cc_meta_boxes');

  function change_posts_per_page($query) {
    //管理画面,メインクエリに干渉しないために必須
    if(is_admin() || ! $query->is_main_query()){
      return;
    }
    //施工事例アーカイブ一覧フック
    if($query->is_post_type_archive('construction_case')
      || $query->is_archive()){
      //$query->set('posts_per_page', '100');
      $query->set('meta_query', array(
        'relation' => 'AND',
        'meta_construction_date_year' => array(
          'key' => 'construction_date_year',
          'type' => 'NUMERIC',
        ),
        'meta_construction_date_month' => array(
          'key' => 'construction_date_month',
          'type' => 'NUMERIC',
        ),
      ));
      $query->set('orderby', array(
        'meta_construction_date_year' => 'DESC',
        'meta_construction_date_month' => 'DESC',
      ));
      return;
    }
  }
  add_action('pre_get_posts', 'change_posts_per_page');

/*
  add_action('admin_menu', 'add_construction_case_field');

  function add_construction_case_field() {
    // add_meta_box(表示されるボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
    add_meta_box('construction_case-construction_date','施行日', 'create_form_construction_case_construction_date', 'construction_case', 'normal');
  }

  function create_form_construction_case_construction_date(){
    global $post;
    echo '<input name="construction_date" style="width: 100%;" value="'.get_post_meta($post->ID, 'construction_date', true).'"/>';
  }

  add_action('save_post', 'save_construction_case_field');

  function save_construction_case_field($post_id){
    $my_fields = array('construction_date');

    foreach($my_fields as $my_field){
      if(isset($_POST[$my_field])){
        $value=$_POST[$my_field];
      }else{
        $value='';
      }
      if(strcmp($value, get_post_meta($post_id, $my_field, true)) != 0){
        update_post_meta($post_id, $my_field, $value);
      }elseif($value == ""){
        delete_post_meta($post_id, $my_field, get_post_meta($post_id, $my_field, true));
      }
    }
  }
*/

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

//http://notnil-creative.com/blog/archives/1288

//トップページ用施工事例一覧取得固定
function getTopFixCCs() {
  $the_query = new WP_Query(array(
    'post_type' => 'construction_case',
    'post__in' => array(147,46,44,35),
    'orderby' => 'rand',
  ));
  return $the_query;
}

//トップページ用施工事例一覧取得
function getTopCCs() {
  $the_query = new WP_Query(array(
    'post_type' => 'construction_case',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
  ));
  return $the_query;
}

//施工事例詳細ページ用関連記事取得
function getCCRelationCCs($post_id) {
  $categories = get_the_terms($post_id, 'construction_case_cat');
  $catIds = array();
  foreach($categories as $category){
    $catIds[] = $category->term_id;
  }
  $the_query = new WP_Query(array(
    'post_type' => 'construction_case',
    'posts_per_page' => 4,
    'tax_query' => array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'construction_case_cat',
        'field' => 'id',
        'terms' => $catIds,
        'include_children' => false,
        'operator' => 'IN'
      ),
    ),
    'post__not_in' => array($post_id),//自記事除く
    'orderby' => 'rand',
  ));
  return $the_query;
}

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
    register_post_type(
      'reading', //投稿タイプ名
      array(
        'label'=> '読み物', //ラベル名
        'labels' => array(
          'menu_name' => '読み物', //管理画面のメニュー名
          'all_items' => '読み物一覧',
          'add_new_item' => '読み物を追加'
        ),
        'description'=> 'ディスクリプション',
        'public' => true, //公開状態
        'query_var' => true, // スラッグでURLをリクエストできる
        'hierarchical' => false, //固定ページのように親ページを指定するならtrue
        'rewrite' => array('slug' => 'reading'), //スラッグ名
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
      'reading_cat', //タクソノミ名
      'reading', //タクソノミを使う投稿タイプ名
      array(
        'rewrite' => array('slug' => 'reading_cat'), //投稿タイプのスラッグ
        'label' => '読み物カテゴリー', //ラベル名
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

  // 施工事例カテゴリー追加項目
  function form_cc_cat_info($tag) {
      $t_id = $tag->term_id;
      $cat_meta = get_option("cc_meta_$t_id");
?>
<tr class="form-field term-seo_title-wrap">
  <th scope="row"><label for="seo_title">SEOタイトル</label></th>
  <td><input type="text" name="Cat_meta[seo_title]" id="seo_title" size="25" value="<?php if(isset ( $cat_meta['seo_title'])) echo esc_html($cat_meta['seo_title']) ?>" />
  <p class="description">一覧ページ用のSEOタイトルを指定します</p></td>
</tr>
<tr class="form-field term-seo_description-wrap">
  <th scope="row"><label for="seo_description">SEOディスクリプション</label></th>
  <td><textarea name="Cat_meta[seo_description]" id="seo_description" rows="3" cols="50" class="large-text"><?php if(isset ( $cat_meta['seo_description'])) echo esc_html($cat_meta['seo_description']) ?></textarea>
  <p class="description">一覧ページ用のSEOSEOディスクリプションを指定します</p></td>
</tr>
<?php
  }
  add_action('construction_case_cat_edit_form_fields', 'form_cc_cat_info');

  function save_cc_cat_info($term_id) {
    if(isset( $_POST['Cat_meta'])){
      $t_id = $term_id;
      $cat_meta = get_option("cc_meta_$t_id");
      $cat_keys = array_keys($_POST['Cat_meta']);
      foreach ($cat_keys as $key){
        if(isset($_POST['Cat_meta'][$key])){
          $cat_meta[$key] = $_POST['Cat_meta'][$key];
        }
      }
      update_option("cc_meta_$t_id", $cat_meta);
    }
  }
  add_action('edited_term', 'save_cc_cat_info');

  // 施工事例タグ追加項目
  function form_cc_tag_info($tag) {
      $t_id = $tag->term_id;
      $cat_meta = get_option("cc_meta_$t_id");
?>
<tr class="form-field term-seo_title-wrap">
  <th scope="row"><label for="seo_title">SEOタイトル</label></th>
  <td><input type="text" name="Tag_meta[seo_title]" id="seo_title" size="25" value="<?php if(isset ( $cat_meta['seo_title'])) echo esc_html($cat_meta['seo_title']) ?>" />
  <p class="description">一覧ページ用のSEOタイトルを指定します</p></td>
</tr>
<tr class="form-field term-seo_description-wrap">
  <th scope="row"><label for="seo_description">SEOディスクリプション</label></th>
  <td><textarea name="Tag_meta[seo_description]" id="seo_description" rows="3" cols="50" class="large-text"><?php if(isset ( $cat_meta['seo_description'])) echo esc_html($cat_meta['seo_description']) ?></textarea>
  <p class="description">一覧ページ用のSEOSEOディスクリプションを指定します</p></td>
</tr>
<?php
  }
  add_action('construction_case_tag_edit_form_fields', 'form_cc_tag_info');

  function save_cc_tag_info($term_id) {
    if(isset( $_POST['Tag_meta'])){
      $t_id = $term_id;
      $cat_meta = get_option("cc_meta_$t_id");
      $cat_keys = array_keys($_POST['Tag_meta']);
      foreach ($cat_keys as $key){
        if(isset($_POST['Tag_meta'][$key])){
          $cat_meta[$key] = $_POST['Tag_meta'][$key];
        }
      }
      update_option("cc_meta_$t_id", $cat_meta);
    }
  }
  add_action('edited_term', 'save_cc_tag_info');

  // 読み物カテゴリー追加項目
  function form_reading_cat_info($tag) {
      $t_id = $tag->term_id;
      $cat_meta = get_option("reading_meta_$t_id");
?>
<tr class="form-field term-seo_title-wrap">
  <th scope="row"><label for="seo_title">SEOタイトル</label></th>
  <td><input type="text" name="Cat_meta[seo_title]" id="seo_title" size="25" value="<?php if(isset ( $cat_meta['seo_title'])) echo esc_html($cat_meta['seo_title']) ?>" />
  <p class="description">一覧ページ用のSEOタイトルを指定します</p></td>
</tr>
<tr class="form-field term-seo_description-wrap">
  <th scope="row"><label for="seo_description">SEOディスクリプション</label></th>
  <td><textarea name="Cat_meta[seo_description]" id="seo_description" rows="3" cols="50" class="large-text"><?php if(isset ( $cat_meta['seo_description'])) echo esc_html($cat_meta['seo_description']) ?></textarea>
  <p class="description">一覧ページ用のSEOSEOディスクリプションを指定します</p></td>
</tr>
<?php
  }
  add_action('reading_cat_edit_form_fields', 'form_reading_cat_info');

  function save_reading_cat_info($term_id) {
    if(isset( $_POST['Cat_meta'])){
      $t_id = $term_id;
      $cat_meta = get_option("reading_meta_$t_id");
      $cat_keys = array_keys($_POST['Cat_meta']);
      foreach ($cat_keys as $key){
        if(isset($_POST['Cat_meta'][$key])){
          $cat_meta[$key] = $_POST['Cat_meta'][$key];
        }
      }
      update_option("reading_meta_$t_id", $cat_meta);
    }
  }
  add_action('edited_term', 'save_reading_cat_info');

  function change_posts_per_page($query) {
    //管理画面,メインクエリに干渉しないために必須
    if(is_admin() || ! $query->is_main_query()){
      return;
    }
    //施工事例アーカイブ一覧フック
    if($query->is_post_type_archive('construction_case')
      || $query->is_tax('construction_case_cat')
      || $query->is_tax('construction_case_tag')){
      $query->set('posts_per_page', '20');
      $query->set('post_status', 'publish');
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
    //読み物アーカイブ一覧フック
    if($query->is_post_type_archive('reading')
      || $query->is_tax('reading_cat')
      || $query->is_tax('reading_tag')){
      $query->set('posts_per_page', '20');
      $query->set('post_status', 'publish');
      //$query->set('orderby', 'rand');
      return;
    }
  }
  add_action('pre_get_posts', 'change_posts_per_page');

  // 施工事例アーカイブページSEO用タイトル
  function custome_archives_title($title){
    if(is_post_type_archive('construction_case')){
      $title = "施工事例一覧";
    }elseif(is_tax('construction_case_cat') || is_tax('construction_case_tag')){
      $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
      $t_ID = $term->term_id;
      $term_data = get_option("cc_meta_$t_ID");
      $title = isset($term_data['seo_title']) ? $term_data['seo_title'] : "";
    }elseif(is_post_type_archive('reading')){
      $title = "読み物一覧";
    }elseif(is_tax('reading_cat') || is_tax('reading_tag')){
      $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
      $t_ID = $term->term_id;
      $term_data = get_option("reading_meta_$t_ID");
      $title = isset($term_data['seo_title']) ? $term_data['seo_title'] : "";
    }
    return $title;
  }
  add_filter('aioseop_title', 'custome_archives_title');

  // 施工事例アーカイブページSEO用ディスクリプションを入力
  function custome_archives_description($description){
    if(is_post_type_archive('construction_case')){
      $description = "施工事例一覧";
    }elseif(is_tax('construction_case_cat') || is_tax('construction_case_tag')){
      $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
      $t_ID = $term->term_id;
      $term_data = get_option("cc_meta_$t_ID");
      $description = isset($term_data['seo_description']) ? $term_data['seo_description'] : "";
    }elseif(is_post_type_archive('reading')){
      $description = "読み物一覧";
    }elseif(is_tax('reading_cat') || is_tax('reading_tag')){
      $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
      $t_ID = $term->term_id;
      $term_data = get_option("reading_meta_$t_ID");
      $description = isset($term_data['seo_description']) ? $term_data['seo_description'] : "";
    }
    return $description;
  }
  add_filter('aioseop_description', 'custome_archives_description');

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
    'post__in' => array(69,85,35,44),
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

//トップページ用読み物一覧取得
function getTopRdgs() {
  $the_query = new WP_Query(array(
    'post_type' => 'reading',
    'tax_query' => array(
      array(
        'taxonomy' => 'reading_cat',
        'field' => 'slug',
        'terms' => array('columns'),
      )
    ),
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
  ));
  return $the_query;
}

//施工事例詳細ページ用関連記事取得
function getCCRelationCCs($post_id, $ctype) {
  $categories = get_the_terms($post_id, $ctype.'_cat');
  $catIds = array();
  foreach($categories as $category){
    $catIds[] = $category->term_id;
  }
  $the_query = new WP_Query(array(
    'post_type' => $ctype,
    'posts_per_page' => 4,
    'tax_query' => array(
      'relation' => 'AND',
      array(
        'taxonomy' => $ctype.'_cat',
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

//投稿系アーカイブページのページング
function bootstrap_pagination($echo = true){
  global $wp_query;
  $big = 999999999; // need an unlikely integer
  $pages = paginate_links(array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type' => 'array',
    'prev_next' => true,
    'prev_text' => '« 前へ',
    'next_text' => '次へ »',
  ));
  if( is_array( $pages ) ) {
    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
    $pagination = '<ul class="pagination">';
    foreach ( $pages as $page ) {
      $pagination .= '<li>'.$page.'</li>';
    }
    $pagination .= '</ul>';
    if ( $echo ) {
      echo $pagination;
    } else {
      return $pagination;
    }
  }
}

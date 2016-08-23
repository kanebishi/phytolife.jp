<?php
get_header();

if(have_posts()):
  while(have_posts()):the_post();
?>


<div class="pan"><!-- パンくず -->
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo home_url('/'); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="#">ああああああ</a></li>
      <li><a href="#">いいいいいい</a></li>
      <li class="active"><?php the_title(); ?></li>
    </ol>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8"><!-- left -->
      <div class="leftbox">
        <div class="title"><!-- （日時とタイトル） -->
          <p class="bg-deta"><?php the_time('Y/m/d'); ?></p>
          <h1 class="maintitle"><?php the_title(); ?></h1>
        </div>
        <div class="post-tag"><!-- tag表示 -->
          <span class="label label-default">ウッドフェンス</span>
          <span class="label label-default">ウッドデッキ</span>
          <span class="label label-warning">目隠し</span>
          <span class="label label-warning">バーベキュー</span>
        </div>
        <div class="post-main"><?php the_content(); ?><!-- 投稿本文 -->
          <h2><small><i class="fa fa-pencil-square-o" aria-hidden="true"></i>　特徴</small></h2>
          <img src="<?php echo get_template_directory_uri(); ?>/img/bq.jpg" width="100%" class="img-responsive">
          <h3><small>お客様のご要望（お悩み）</small></h3>
          <p>あああああああああああああああああああああ。ああああああああああああああああああああああああ。ああああああああああああああああああああああ。</p>
          <h3><small>家族構成：大人２人/子供２人　施工面積：００坪　工期：３ヶ月　費用：非公開</small></h3>
          <h2><small><i class="fa fa-camera" aria-hidden="true"></i>　ギャラリー</small></h2>
          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="コンセプト" class="img-thumbnail">
              <p>ああああああああああああああああああああああああああ。ああああああああああああああああああああああああああ。ああああああああああああああああああああああああああ。</p>
            </div>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="コンセプト" class="img-thumbnail">
              <p>いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            </div>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="コンセプト" class="img-thumbnail">
              <p>ああああああああああああああああああああああああああ。ああああああああああああああああああああああああああ。ああああああああああああああああああああああああああ。</p>
            </div>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="コンセプト" class="img-thumbnail">
              <p>いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            </div>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="コンセプト" class="img-thumbnail">
              <p>ああああああああああああああああああああああああああ。ああああああああああああああああああああああああああ。ああああああああああああああああああああああああああ。</p>
            </div>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="コンセプト" class="img-thumbnail">
              <p>いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。いいい。いいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            </div>
          </div>
          <h2><small><i class="fa fa-comment-o" aria-hidden="true"></i>　施工を終えたお客様の声</small></h2>
          <blockquote>
            あああああああああああああああああああああ。ああああああああああああああああああああああああ。ああああああああああああああああああああああ。
            あああああああああああああああああああああ。ああああああああああああああああああああああああ。ああああああああああああああああああああああ。
            あああああああああああああああああああああ。ああああああああああああああああああああああああ。ああああああああああああああああああああああ。
          </blockquote>
        <!--.post-main--></div>
      <!--.leftbox--></div>
    <!--.col-sm-8--></div>

<?php get_sidebar(); ?>
  <!--.row--></div>
<!--.container--></div>


<div class="container">
  <div class="row"><!-- 関連記事 -->
    <div class="col-xs-12">
      <h2 class="line"><i class="fa fa-check" aria-hidden="true"></i> 関連記事</h2>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
        <p class="thn-deta">2016/08/30</p>
        <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
        <p class="thn-deta">2016/08/30</p>
        <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
        <p class="thn-deta">2016/08/30</p>
        <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
        <p class="thn-deta">2016/08/30</p>
        <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
      </a>
    </div>
  <!--.row--></div>
<!--.container--></div>



<?php
  endwhile;
endif;

get_footer();
?>
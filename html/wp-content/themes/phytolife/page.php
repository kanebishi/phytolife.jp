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
      <li class="active">ブログタイトル</li>
    </ol>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8"><!-- left -->
      <div class="leftbox">
        <div class="title"><!-- （タイトル） -->
          <h1 class="maintitle"><?php the_title(); ?></h1>
        </div>
        <div class="post-tag"><!-- tag表示 -->
          <span class="label label-default">ウッドフェンス</span>
          <span class="label label-default">ウッドデッキ</span>
          <span class="label label-warning">目隠し</span>
          <span class="label label-warning">バーベキュー</span>
        </div>
        <div class="post-main"><!-- 投稿本文 -->
          <h2>h2 投稿ページ</h2>
          <h3>h3 投稿ページ</h3>
          <p>P あああああああああああああああああああああ。ああああああああああああああああああああああああ。ああああああああああああああああああああああ。</p>
        </div><!-- //投稿本文 -->
      <!--.leftbox--></div>
    <!--.col-sm-8--></div>

<?php get_sidebar(); ?>
  <!--.row--></div>
<!--.container--></div>



<?php
  endwhile;
endif;

get_footer();
?>
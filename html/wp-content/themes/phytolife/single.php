<?php
//投稿ページ
get_header();

if(have_posts()):
  while(have_posts()):the_post();
?>


<div class="pan"><!-- パンくず -->
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo home_url('/'); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="#">ダミーリンク</a></li>
      <li><a href="#">ダミーリンク</a></li>
      <li class="active"><?php the_title(); ?></li>
    </ol>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="leftbox">
        <div class="title">
          <p class="bg-deta"><?php the_time('Y/m/d'); ?></p>
          <h1 class="maintitle"><?php the_title(); ?></h1>
        </div>
<?php if($tags = get_the_terms($post->ID, 'construction_case_tag')): ?>
        <div class="post-tag">
  <?php foreach($tags as $tag): ?>
          <span class="label label-<?php echo $tag->description; ?>"><?php echo esc_html($tag->name); ?></span>
  <?php endforeach; ?>
        </div>
<?php endif; ?>
        <div class="post-main">
<?php the_content(); ?>
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
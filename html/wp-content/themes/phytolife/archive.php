<?php
//施工事例アーカイブページ
get_header();
$cat_title = single_cat_title("", false);
$archive_title = $cat_title ? $cat_title : "施工事例一覧";
?>


<div class="pan"><!-- パンくず -->
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo home_url('/'); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li class="active"><?php echo $archive_title; ?></li>
    </ol>
  </div>
</div>


<div class="container">
  <div class="row construction_case">
    <div class="col-sm-8">
      <div class="leftbox">
        <div class="title">
          <h1 class="maintitle"><?php echo $archive_title; ?></h1>
        </div>
        <div class="post-main">
<?php if(have_posts()): ?>
          <div class="row">
<?php while(have_posts()):the_post(); ?>
            <div class="col-xs-12 col-sm-6 col-md-3 matchHeight">
              <a href="<?php the_permalink(); ?>" class="thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lazy_dummy.gif" data-original="<?php echo get_template_directory_uri(); ?>/img/single/<?php echo $post->post_name; ?>/list.jpg" class="lazy" alt="">
                <p class="thn-deta"><?php echo post_custom('construction_date_year'); ?>年<?php echo post_custom('construction_date_month'); ?>月施工</p>
                <h3 class="thn-title"><?php the_title(); ?></h3>
              </a>
            </div>
<?php endwhile; ?>

          </div>
<?php else: ?>
          <p>現在記事がありません</p>
<?php endif; ?>
        </div>
      <!--.leftbox--></div>
    <!--.col-sm-8--></div>

<?php get_sidebar(); ?>
  <!--.row--></div>
<!--.container--></div>

<?php
get_footer();
?>
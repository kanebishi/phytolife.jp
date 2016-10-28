<?php
//投稿ページ
get_header();

if(is_singular('construction_case')){
  $is_construction_case = true;
}

if(have_posts()):
  while(have_posts()):the_post();
?>


<div class="pan"><!-- パンくず -->
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo home_url('/'); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li class="active"><?php the_title(); ?></li>
    </ol>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="leftbox">
        <div class="title">
<?php if($is_construction_case): ?>
          <p class="bg-deta"><i class="fa fa-tag" aria-hidden="true"></i> 施工：<?php echo post_custom('construction_date_year'); ?>年<?php echo post_custom('construction_date_month'); ?>月</p>
<?php endif; ?>
          <h1 class="maintitle"><?php the_title(); ?></h1>
        </div>
<?php /*if($tags = get_the_terms($post->ID, 'construction_case_tag')): ?>
        <div class="post-tag">
  <?php foreach($tags as $tag): ?>
          <span class="label label-<?php echo $tag->description; ?>"><?php echo esc_html($tag->name); ?></span>
  <?php endforeach; ?>
        </div>
<?php endif;*/ ?>
        <div class="post-main">
<?php the_content(); ?>
        <!--.post-main--></div>
        <div class="title">
          <p class="bg-deta"><i class="fa fa-pencil" aria-hidden="true"></i> 投稿日：<?php the_time('Y/m/d'); ?></p>
        </div>
      <!--.leftbox--></div>
    <!--.col-sm-8--></div>

<?php get_sidebar(); ?>
  <!--.row--></div>
<!--.container--></div>

<?php
$ctype = $is_construction_case ? 'construction_case' : 'reading';
$the_query = getCCRelationCCs($post->ID, $ctype);
if($the_query->have_posts()):
?>
<div class="container">
  <div class="row construction_case">
    <div class="col-xs-12">
      <h2 class="line"><i class="fa fa-check" aria-hidden="true"></i> 関連記事</h2>
    </div>
<?php
  $posts = $the_query->get_posts();
  foreach($posts as $post):$the_query->the_post();
?>
    <div class="col-xs-12 col-sm-6 col-md-3 matchHeight">
      <a href="<?php the_permalink(); ?>" class="thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lazy_dummy.gif" data-original="<?php echo get_template_directory_uri(); ?>/img/single/<?php echo $post->post_name; ?>/list.jpg" class="lazy" alt="">
        <p class="thn-deta"><?php the_time('Y/m/d'); ?></p>
        <p class="thn-title"><?php the_title(); ?></p>
      </a>
    </div>
<?php
  endforeach;
?>
  <!--.row--></div>
<!--.container--></div>
<?php
endif;
wp_reset_postdata();
?>


<?php
  endwhile;
endif;

get_footer();
?>
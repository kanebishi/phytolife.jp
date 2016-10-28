<?php
get_header();

global $taglists;

if(have_posts()):
  while(have_posts()):the_post();
?>

<div class="container">
 <img src="<?php echo get_template_directory_uri(); ?>/img/car1.jpg" class="img-responsive">
<!--.container--></div>

<div class="container">
  <!--　ウィジエット  -->
  <div class="top-con">
    <h1 class="line"><i class="fa fa-home" aria-hidden="true"></i>　フィトライフの暮らしの庭</h1>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <a href="http://phytolife.jp/model_garden/" class="thumbnail" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/model_garden.png" class="img-responsive" >
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <a href="http://phytolife.jp/how_much/" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/how_much.png" class="img-responsive" >
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <a href=" http://phytolife.jp/narrow_garden/" class="thumbnail" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/narrow_garden.png" class="img-responsive" >
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <a href="http://phytolife.jp/top_10/" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top_10.png" class="img-responsive" >
        </a>
      </div>
    </div>
  </div>
  <!--　//ウィジエット  -->
<!--.container--></div>


<div class="container">
  <!--　投稿ページ表示  -->
  <div class="top-post">
    <h2 class="line"><i class="fa fa-tag" aria-hidden="true"></i>　施工事例</h2>
    <div class="row construction_case">
<?php
$the_query = getTopFixCCs();
if($the_query->have_posts()):
  $posts = $the_query->get_posts();
  foreach($posts as $post):$the_query->the_post();
?>
      <div class="col-xs-12 col-sm-6 col-md-3 matchHeight">
        <a href="<?php the_permalink(); ?>" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lazy_dummy.gif" data-original="<?php echo get_template_directory_uri(); ?>/img/single/<?php echo $post->post_name; ?>/list.jpg" class="lazy" alt="">
          <p class="thn-deta"><?php echo post_custom('construction_date_year'); ?>年<?php echo post_custom('construction_date_month'); ?>月施工</p>
          <h3 class="thn-title"><?php the_title(); ?></h3>
        </a>
      </div>
<?php
  endforeach;
endif;
wp_reset_postdata();

$the_query = getTopCCs();
if($the_query->have_posts()):
  $posts = $the_query->get_posts();
  foreach($posts as $post):$the_query->the_post();
?>
      <div class="col-xs-12 col-sm-6 col-md-3 matchHeight">
        <a href="<?php the_permalink(); ?>" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lazy_dummy.gif" data-original="<?php echo get_template_directory_uri(); ?>/img/single/<?php echo $post->post_name; ?>/list.jpg" class="lazy" alt="">
          <p class="thn-deta"><?php echo post_custom('construction_date_year'); ?>年<?php echo post_custom('construction_date_month'); ?>月施工</p>
          <h3 class="thn-title"><?php the_title(); ?></h3>
        </a>
      </div>
<?php
  endforeach;
endif;
wp_reset_postdata();
?>
      <div class="col-xs-12">
        <div class="pull-right"><a class="btn btn-default btn-sm" href="/construction_case/" role="button">施工事例一覧</a></div>
      </div>
    </div>
  </div>
  <!--　//投稿ページ表示  -->
<!--.container--></div>


<div class="container">
  <!--　タグ表示  -->  
  <div class="tagnbox">
    <div class="row">
<?php foreach($taglists as $tag): ?>
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-tags" aria-hidden="true"></i>　<?php echo $tag->name; ?>
          </div>
          <div class="panel-body">
  <?php foreach($tag->child_tags as $child_tag): ?>
            <a href="<?php echo get_category_link($child_tag->term_id); ?>"><span class="label label-<?php echo $tag->description; ?>"><?php echo $child_tag->name; ?></span></a>
  <?php endforeach; ?>
          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
  <!--　タグ表示  -->
<!--.container--></div>



<?php
  endwhile;
endif;

get_footer();
?>
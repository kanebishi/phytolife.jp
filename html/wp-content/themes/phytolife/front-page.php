<?php
get_header();

global $taglists;

if(have_posts()):
  while(have_posts()):the_post();
?>

<div class="container">
  <!--　Carousel  -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo get_template_directory_uri(); ?>/img/car1.png" alt="First slide">
        <div class="carousel-caption">
          <p>特集コンテンツ１</p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/car2.png" alt="Second slide">
        <div class="carousel-caption">
          <p>特集コンテンツ2</p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/car1.png" alt="Third slide">
        <div class="carousel-caption">
          <p>特集コンテンツ3</p>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">前へ</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">次へ</span>
    </a>
  </div>
  <!--//　Carousel  -->
<!--.container--></div>



<div class="container">
  <!--　ウィジエット  -->
  <div class="top-con">
    <h1 class="line"><i class="fa fa-home" aria-hidden="true"></i>　フィトライフの暮らしの庭</h1>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ct.png" width="256" >
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ct.png" width="256" >
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ct.png" width="256" >
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ct.png" width="256" >
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
    <div class="row">
<?php
$the_query = new WP_Query(array(
  'post_type' => 'construction_case',
  'posts_per_page' => 8,
  'orderby' => 'date',
  'order' => 'DESC',
));
if($the_query->have_posts()):
  while($the_query->have_posts()):$the_query->the_post();
?>
      <div class="col-xs-6 col-md-3">
        <a href="<?php the_permalink(); ?>" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta"><?php the_time('Y/m/d'); ?></p>
          <h3 class="thn-title"><?php the_title(); ?></h3>
        </a>
      </div>
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
      <div class="col-xs-12">
        <div class="pull-right"><a class="btn btn-default btn-sm" href="/construction_case_cat/" role="button">施工事例一覧</a></div>
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
      <div class="col-xs-6 col-md-6">
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
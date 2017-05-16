<?php
get_header();

global $taglists;

if(have_posts()):
  while(have_posts()):the_post();
?>

<div class="container">

<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <img src="<?php echo get_template_directory_uri(); ?>/img/car1.jpg" class="img-responsive">
      <div class="carousel-caption">
          <a href="/model_garden/"><button type="button" class="btn btn-default">実際に見学ができるモデルガーデン</button></a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/car2.jpg" class="img-responsive">
      <div class="carousel-caption">
          <a href="/how_much/"><button type="button" class="btn btn-default">庭や外構の費用は？</button></a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/car3.jpg" class="img-responsive">
      <div class="carousel-caption">
          <a href="/narrow_garden/"><button type="button" class="btn btn-default">狭くても魅力的な小さい庭</button></a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/car4.jpg" class="img-responsive">
      <div class="carousel-caption">
          <a href="/reading/column_functionality_of_the_niwakoya/"><button type="button" class="btn btn-default">おしゃれで便利な庭小屋</button></a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/car5.jpg" class="img-responsive">
      <div class="carousel-caption">
          <a href="/reading/column_wooden_bicycle_shed/"><button type="button" class="btn btn-default">変幻自在な木製自転車小屋</button></a>
      </div>
    </div>
     <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       
</div>
<!--.container--></div>




<div class="container">
  <div class="top-post">
    <h2 class="line"><i class="fa fa-tag" aria-hidden="true"></i>　フィトライフの施工事例</h2>
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
  <div class="top-post">
    <h2 class="line"><i class="fa fa-pencil" aria-hidden="true"></i>　庭作りや外構に役立つ情報</h2>
    <div class="row construction_case">
<?php
$the_query = getTopRdgs();
if($the_query->have_posts()):
  $posts = $the_query->get_posts();
  foreach($posts as $post):$the_query->the_post();
?>
      <div class="col-xs-12 col-sm-6 col-md-3 matchHeight">
        <a href="<?php the_permalink(); ?>" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lazy_dummy.gif" data-original="<?php echo get_template_directory_uri(); ?>/img/single/<?php echo $post->post_name; ?>/list.jpg" class="lazy" alt="">
          <p class="thn-deta"><?php the_time('Y/m/d'); ?></p>
          <h3 class="thn-title"><?php the_title(); ?></h3>
        </a>
      </div>
<?php
  endforeach;
endif;
wp_reset_postdata();
?>
      <div class="col-xs-12">
        <div class="pull-right"><a class="btn btn-default btn-sm" href="/reading_cat/columns/" role="button">コラム一覧</a></div>
      </div>
    </div>
  </div>
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
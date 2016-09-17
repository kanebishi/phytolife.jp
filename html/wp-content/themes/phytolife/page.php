<?php
//固定ページ
get_header();

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
          <h1 class="maintitle"><?php the_title(); ?></h1>
        </div>
        <div class="post-main">
<?php the_content(); ?>
        </div>
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
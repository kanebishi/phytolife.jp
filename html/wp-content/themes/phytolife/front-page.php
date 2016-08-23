<?php
get_header();
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
      <div class="col-xs-6 col-md-3">
        <a href="post_s.html" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="post_s.html" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="post_s.html" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="post_s.html" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
          <p class="thn-deta">2016/08/30</p>
          <h3 class="thn-title">１２３４５６７８９１０</h3>
        </a>
      </div>
      <div class="col-xs-12">
        <div class="pull-right"><a class="btn btn-default btn-sm" href="fix_list.html" role="button">施工事例一覧</a></div>
      </div>
    </div>
  </div>
  <!--　//投稿ページ表示  -->
<!--.container--></div>


<div class="container">
  <!--　タグ表示  -->  
  <div class="tagnbox">
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-tags" aria-hidden="true"></i>　施工内容
          </div>
          <div class="panel-body">
            <span class="label label-default">ガーデニング</span>
            <span class="label label-default">ナチュラルガーデン</span>
            <span class="label label-default">ウッドフェンス</span>
            <span class="label label-default">ウッドデッキ</span>
            <span class="label label-default">パーゴラ</span>
            <span class="label label-default">ガーデニング</span>
            <span class="label label-default">ナチュラルガーデン</span>
            <span class="label label-default">ウッドフェンス</span>
            <span class="label label-default">ウッドデッキ</span>
            <span class="label label-default">パーゴラ</span>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-tags" aria-hidden="true"></i>　ご要望/お悩み
          </div>
          <div class="panel-body">
            <span class="label label-warning">目隠し</span>
            <span class="label label-warning">防犯</span>
            <span class="label label-warning">バーベキュー</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-tags" aria-hidden="true"></i>　予算
          </div>
          <div class="panel-body">
            <span class="label label-success">～３０万円</span>
            <span class="label label-success">～１００万円</span>
            <span class="label label-success">～１５０万円</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-tags" aria-hidden="true"></i>　面積
          </div>
          <div class="panel-body">
            <span class="label label-primary">～１０坪</span>
            <span class="label label-primary">～５０坪</span>
            <span class="label label-primary">～１００坪</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--　タグ表示  -->
<!--.container--></div>



<?php
get_footer();
?>
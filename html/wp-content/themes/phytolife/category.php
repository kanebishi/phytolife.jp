<?php
get_header();
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
          <h1 class="maintitle">カテゴリー別一覧表示</h1>
        </div>

        <div class="post-main"><!-- 記事一覧 *１ページに12件表示 -->
          <div class="row">
            <div class="col-xs-6 col-md-4">
              <a href="post_s.html" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="post_s.html" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="post_s.html" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="post_s.html" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-4">
              <a href="#" class="thumbnail">
                <img src="img/1.jpg" alt="">
                <p class="thn-deta">2016/08/30</p>
                <p class="thn-title">ひさかたのひかりのどけきはるのひにしずこころなく</p>
              </a>
            </div>
            <div class="col-xs-12"><!-- ページネーション -->
              <div class="pagi-nation">
                <nav>
                  <ul class="pagination">
                    <li><a href="#" aria-label="前のページへ"><span aria-hidden="true">«</span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="次のページへ"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div><!-- //ページネーション -->
          <!--.row--></div>
        <!--.post-main--></div>
      <!--.leftbox--></div>
    <!--.col-sm-8--></div>

<?php get_sidebar(); ?>
  <!--.row--></div>
<!--.container--></div>



<?php
get_footer();
?>
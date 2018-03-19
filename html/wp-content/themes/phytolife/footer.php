<div class="container">
<h2 class="line"><i class="fa fa-comments" aria-hidden="true"></i> お問合せ/ご相談</h2>
    <div class="row">
         <div class="col-sm-6">
               <div class="contactbox">
               <a style="text-decoration: none;" href="tel:072-761-2656">
               <p class="contactp"><i class="fa fa-phone" aria-hidden="true"></i> 072-761-2656</p>
               </a>
               </div>
          </div>
          <div class="col-sm-6">
              <div class="contactboxh">
                <a style="text-decoration: none;" href="/contact">
                  <p class="contactp"><i class="fa fa-envelope-o" aria-hidden="true"></i> フォーム</p>
                </a>
              </div>
          </div>
    </div>
</div><!--.container-->

<div class="btn-pagetop">
  <div class="container">
    <a href="#pageTop" class="center-block text-center"><i class="glyphicon glyphicon-chevron-up center-block"></i></a>
  </div>
</div>


<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <h2 class="lineb"><?php bloginfo('name'); ?></h2>
        <p><i class="fa fa-phone" aria-hidden="true"></i> 072-761-2656</p>
        <p><i class="fa fa-print" aria-hidden="true"></i> 072-703-6388</p>
        <p>〒563-0022<br>大阪府池田市旭ヶ丘3-1-27<br>営業時間 : 8:00～17:00</p>
      </div>
      <div class="col-xs-4">
        <h3 class="lineb">施工内容</h3>
        <ul class="list-inline">
          <li><a href="/construction_case_tag/niwakoya/">庭小屋</a></li>
          <li><a href="/construction_case_tag/bicycle_parking_space/">木製自転車置き場</a></li>
          <li><a href="/construction_case_tag/wood_deck/">ウッドデッキ</a></li>
          <li><a href="/construction_case_tag/wood_fence/">フェンス</a></li>
          <li><a href="/construction_case_tag/sync_water/">シンク・立水栓</a></li>
          <li><a href="/construction_case_tag/pergola/">パーゴラ・アーチ</a></li>
          <li><a href="/construction_case_tag/gardendoor/">オリジナルガーデンドア</a></li>
          <li><a href="/construction_case_tag/gatepost/">玄関周り（ファザード）</a></li>
          <li><a href="/construction_case_tag/bricks/">舗道（レンガ敷き・石張り）</a></li>
          <li><a href="/construction_case_tag/garden_table/">ガーデンファニチャー</a></li>
          <li><a href="/construction_case_tag/iron/">オリジナルアイアン</a></li>
          <li><a href="/construction_case_tag/parking_lot/">駐車場・カーポート</a></li>
          <li><a href="/construction_case_tag/gardening/">植栽</a></li>
          <li class="color-ne">樹木のお手入れや草花の管理</li>
        </ul>
      </div>
      <div class="col-xs-4">
        <h3 class="lineb">施工エリア</h3>
        <ul class="list-inline">
          <li>池田市</li>
          <li>川西市</li>
          <li>宝塚市</li>
          <li>伊丹市</li>
          <li>豊中市</li>
          <li>箕面市</li>
          <li>吹田市</li>
          <li>尼崎市</li>
          <li>茨木市</li>
          <li>高槻市</li>
          <li>芦屋市</li>
          <li>神戸市</li>
          <li>三田市</li>
          <li>猪名川町</li>
          <li>能勢町</li>
          <li>豊能町</li>
          <li>枚方市</li>
          <li>高槻市</li>
          <li>寝屋川市</li>
          <li>門真市</li>
          <li>島本町</li>
          <li>大山崎町</li>
          <li>久御山町</li>
          <li>八幡市</li>
          <li>交野市</li>
          <li>東大阪市</li>
          <li>八尾市</li>
          <li>大東市</li>
          <li>松原市</li>
          <li>羽曳野市</li>
          <li>藤井寺市</li>
          <li>堺市</li>
          <li>岸和田市</li>
          <li>泉大津市</li>
          <li>和泉市</li>
          <li>貝塚市</li>
          <li>泉佐野市</li>
          <li>泉南市</li>
          <li>京都市</li>
          <li>亀岡市</li>
          <li>大津市</li>
          <li>宇治市</li>
          <li>城陽市</li>
          <li>京田辺市</li>
          <li>精華町</li>
          <li>奈良市</li>
        </ul>
      </div>
      <div class="col-xs-12">
        <ul class="list-inline">
          <li><a href="/">| トップ |</a></li>
          <li><a href="/sitepolicy">| サイトポリシー |</a></li>
          <li><a href="/sitemap">| サイトマップ |</a></li>
          <li><a href="https://www.facebook.com/phytolife.jp/" target="_blank">| フェイスブック |</a></li>
        </ul>
      </div>
      <div class="col-xs-12">
        <p class="copy">Copyright &copy; <?php echo date('Y'); ?> Phytolife Co.,Ltd.</p>
      </div>
    </div>
  <!--.container--></div>
<!--.footer--></div>


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script>
jQuery(function($){
  $("div.construction_case div.matchHeight a").matchHeight();
  $("img.lazy").lazyload({
    'threshold': 30,
    'effect': 'fadeIn',
    'effect_speed': 1000
  });
});
</script>
<?php wp_footer(); ?>
</body>
</html>

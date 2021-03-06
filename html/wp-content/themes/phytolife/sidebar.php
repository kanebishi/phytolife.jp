<?php
global $taglists;
global $catlists;
?>
    <div class="col-sm-4">
      <div class="rightbox">
<?php foreach($taglists as $tag): ?>
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

<?php endforeach; ?>
        <div class="listbox">
          <ul class="list-group">
            <li class="list-group-item"><a href="/construction_case_cat/shinchiku/">新築</a></li>
            <li class="list-group-item"><a href="/construction_case_cat/reform/">リフォーム</a></li>
            <li class="list-group-item"><a href="/construction_case_cat/petit_reform/">プチリフォーム</a></li>
            <li class="list-group-item"><a href="/construction_case_cat/niwakoya/">庭小屋</a></li>
            <li class="list-group-item"><a href="/construction_case_tag/iron/">オリジナルアイアン</a></li>
            <li class="list-group-item"><a href="/construction_case_cat/modelgarden/">モデルガーデン</a></li>
            <li class="list-group-item"><a href="/construction_case_cat/shopgarden/">ショップガーデン</a></li>
            <li class="list-group-item"><a href="/construction_case/">全ての施工事例 </a></li>
<?php /*foreach($catlists as $cat): ?>
            <li class="list-group-item"><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
<?php endforeach;*/ ?>
          </ul>
        </div>
        <!-- バナー表示区域-->
        <div><a href="/model_garden" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/model_garden.png" class="img-responsive" ></a></div>
        <div><a href="/how_much/" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/how_much.png" class="img-responsive" ></a></div>
        <div><a href="/narrow_garden/" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/narrow_garden.png" class="img-responsive"></a></div>
        <div><a href="/reading/column_functionality_of_the_niwakoya/" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/niwakoya.png" class="img-responsive"></a></div>
          <script>
          (function() {
            var cx = '011380813806535636237:yd1nvmcj6zi';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
        <gcse:search></gcse:search>
        <!-- //バナー表示区域-->
      <!--.rightbox--></div>
    <!--.col-sm-4--></div>

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
<?php foreach($catlists as $cat): ?>
            <li class="list-group-item"><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
<?php endforeach; ?>
          </ul>
        </div>
        <!-- バナー表示区域-->
        <a href="#" class="thumbnail" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ct.png" width="256" ></a>
        <a href="#" class="thumbnail" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ct.png" width="256" ></a>
        <a href="#" class="thumbnail" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ct.png" width="256" ></a>
        <!-- //バナー表示区域-->
      <!--.rightbox--></div>
    <!--.col-sm-4--></div>

<?php
global $catlists;
global $taglists;
$catlists = getCCCategory();
$taglists = getCCTag();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body id="pageTop" <?php body_class(); ?>>
<div class="container">
  <!--　menu  -->
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
        <span class="sr-only">メニュー</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>"></a>
    </div>

    <div id="gnavi" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/sekonaiyo">施工内容</a></li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">施工事例<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/construction_case_cat/shinchiku/"><i class="fa fa-newspaper-o"></i> 新築</a></li>
            <li><a href="/construction_case_cat/reform/"><i class="fa fa-newspaper-o"></i> リフォーム</a></li>
            <li><a href="/construction_case_cat/petit_reform/"><i class="fa fa-newspaper-o"></i> プチリフォーム</a></li>
            <li><a href="/construction_case_cat/niwakoya/"><i class="fa fa-newspaper-o"></i> 庭小屋</a></li>
            <li><a href="/construction_case_tag/iron/"><i class="fa fa-newspaper-o"></i> オルジナルアイアン</a></li>  
            <li><a href="/construction_case_cat/modelgarden/"><i class="fa fa-newspaper-o"></i> モデルガーデン</a></li>
            <li><a href="/construction_case_cat/shopgarden/"><i class="fa fa-newspaper-o"></i> ショップガーデン</a></li>
            <li><a href="/construction_case/"><i class="fa fa-newspaper-o"></i> 全ての施工事例 </a></li>
<?php /*foreach($catlists as $cat): ?>
            <li><a href="<?php echo get_category_link($cat->term_id); ?>"><i class="fa fa-newspaper-o"></i> <?php echo $cat->name; ?></a></li>
<?php endforeach;*/ ?>
          </ul>
        </li>
        <li><a href="/faq">ご質問</a></li>
        <li><a href="/reading_cat/columns/">コラム</a></li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">会社案内 <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/company"><i class="fa fa-building-o"></i> 会社概要</a></li>
            <li><a href="/recruitment"><i class="fa fa-pencil-square-o"></i> リクルート</a></li>
            <li><a href="https://www.facebook.com/phytolife.jp/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> フェイスブック</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">お問合せ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/contact"><i class="fa fa-envelope"></i> フォーム</a></li>
            <li><a href="/telephon/"><i class="fa fa-phone"></i> お電話</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!--　//menu  -->
<!--.container--></div>

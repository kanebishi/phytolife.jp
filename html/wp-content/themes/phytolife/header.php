<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="<?php bloginfo('keywords'); ?>" />
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/touch-icon.png">
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
        <li>
          <a href="fix_d.html">固定ページ</a>
        </li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">投稿ページ<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="post_d.html">デフォルト</a></li>
            <li><a href="post_s.html">サンプル</a></li>
          </ul>
        </li>
        <li><a href="fix_list.html">投稿一覧</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">お問合せ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-envelope"></i> フォーム</a></li>
            <li><a href="#"><i class="fa fa-phone"></i> お電話</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!--　//menu  -->
<!--.container--></div>

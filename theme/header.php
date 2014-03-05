<?php
/**
 * SQLParty主题 header
 * 包括整个<head>和内容部分的上层导航。
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
define("UNKNOWN_POST","文章未找到");
define("SQLPARTY_ID",14);
define("SQLPARTY_TITLE","SQLParty");
define("CATEGORY_PRIFIX","category");
?>
<!DOCTYPE html>
<html lang="cn">
  <head>
    <script type="text/javascript">
        var _speedMark = new Date();
    </script>
    <meta charset="utf-8">

    <!-- Le styles -->
    <link href="/wp-content/themes/party/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wp-content/themes/party/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/wp-content/themes/party/css/datetimepicker.css" rel="stylesheet">
    <link href="/wp-content/themes/party/style.css" rel="stylesheet">
    <link href="/wp-content/themes/party/img/logo.png" rel="shortcut icon">
    
    <script src="/wp-content/themes/party/js/jquery-1.10.2.min.js"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/wp-content/themes/party/js/html5.js"></script>
    <![endif]-->
    <style type="text/css">
    #scrollUp {
      bottom: 20px;
      right: 20px;
      height: 38px;  /* Height of image */
      width: 38px; /* Width of image */
      background: url("/wp-content/themes/party/img/top.png") no-repeat;
    }
    </style>
    
    <?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
    ?>
  </head>

  <body>
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">SQLParty</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="divider-vertical"></li>
              <li <?php if(is_home()) echo 'class="active"'; ?>><a href="/">首页</a></li>
              <li class="dropdown <?php if(is_page()&& !is_page_template()) echo ' active' ; ?>">
                <a href="/sqlparty/" class="dropdown-toggle" data-toggle="dropdown">SQL汇 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <?php
                  $args = array(
                        'depth'        => 1,
                        'child_of'     => SQLPARTY_ID,
                        'title_li'     => ''
                    ); 
                    wp_list_pages($args);
                  ?>
                </ul>
              </li>
              <li class="divider-vertical"></li>
              <li <?php if( is_category( 'daily' ) ) echo 'class="active"'; ?>><a href="/<?php echo CATEGORY_PRIFIX;?>/daily/">题炼</a></li>
              <li class="divider-vertical"></li>
              <li <?php if( is_category( 'database' ) ) echo 'class="active"'; ?>><a href="/<?php echo CATEGORY_PRIFIX;?>/database/">数据库</a></li>
              <li <?php if( is_category( 'system' ) ) echo 'class="active"'; ?>><a href="/<?php echo CATEGORY_PRIFIX;?>/system/">系统</a></li>
              <li  <?php if( is_category( 'bigdata' )) echo 'class="active"'; ?>><a href="/<?php echo CATEGORY_PRIFIX;?>/bigdata/">大数据</a></li>
              <li class="divider-vertical"></li>
              <li <?php if( is_page_template( 'about.php' ) ) echo 'class="active"'; ?>><a href="/about/">关于</a></li>
            </ul>
            <form id="searchform" action="/" method="get" role="search" class="navbar-search pull-right">
                <input id="s" name="s" type="text" class="search-query" placeholder="搜索">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>demo天津城市建设学院精品课--数据结构</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<script language="javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
	  $('.menu-item-has-children').mousemove(function(){
	  $(this).find('.sub-menu').slideDown();	  });
	  $('.menu-item-has-children').mouseleave(function(){
	  $(this).find('.sub-menu').slideUp('fast');	  });
	 });
</script>
</head>

	<div id="wrap">
	<div id="header">
  	</div>
<div id="navwrap">
        <div class="nav" id="nav">
            <?php 
            wp_nav_menu(array(
				'theme_location' => 'header-menu',
				'sort_column' => 'menu_order',
 				'container_id'=>'main-menu',
				'menu_id'=>'navigation',
				'menu_class'=>'main-menu')
 			);
             ?>
        </div>
    </div>
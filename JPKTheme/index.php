<?php get_header(); ?>
    <div id="main">
      <div class="news">
          <div class="title"><h2><?php echo get_post(17)->post_title; ?></h2></div>
            <div class="content">
              <?php echo get_post_content_by_id(17) ?>
              
          </div>
        </div>
          <div class="news">
          <div class="title"><h2><?php echo get_post(20)->post_title; ?></h2></div>
            <div class="content">
             <?php echo get_post_content_by_id(20) ?>
          </div>
        </div>

<div class="link">
          <div class="title"><h2>友情链接</h2></div>
            <div class="linkcat">
               
               <?php wp_list_bookmarks('title_li='); ?>
          </div>
        </div>

    </div>
    </div>
	
<?php get_footer(); ?>
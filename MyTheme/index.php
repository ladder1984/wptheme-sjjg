<?php get_header(); ?>
    <div id="main">
      <div class="news">
          <div class="title"><h2>课程简介</h2></div>
            <div class="content">
              <?php echo get_post_content_by_id(17) ?>
              
          </div>
        </div>
          <div class="news">
          <div class="title"><h2>负责人简介</h2></div>
            <div class="content">
             <?php echo get_post_content_by_id(20) ?>
          </div>
        </div>

<div class="link">
          <div class="title"><h2>友情链接</h2></div>
            <div class="content">
              <span><a href="http://www.jpk.pku.edu.cn/pkujpk/course/sjjg/">北京大学数据结构与算法网站</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span><a href="http://ds.fzu.edu.cn/">福州大学算法与数据结构网站</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span><a href="http://jpkc.nwu.edu.cn/datastr/">西北大学数据结构网站</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span><a href="http://jsjwhk.tjuci.edu.cn/">大学计算机基础</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span><a href="http://yytjjp.tjuci.edu.cn/">应用统计学</a></span>
          </div>
        </div>

    </div>
    </div>
	
<?php get_footer(); ?>
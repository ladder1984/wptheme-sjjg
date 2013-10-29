<?php get_header(); ?>
<div id="main">
    <?php get_sidebar(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
   		<div class="content_r">
    		<div class="info">
        		<div class="title">
        			<h2>
        			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        		</h2></div>
            	<div class="content">
            		<?php the_content(); ?>
            	</div>
    		</div>
    	</div>
    <?php endwhile; ?>

</div>



<?php get_footer(); ?>




<?php get_header(); ?>
<div id="main">
	<?php while ( have_posts() ) : the_post(); ?>
   		<div class="content_r">
    		<div class="info">
            	<div class="content">
            		<?php the_content(); ?>
            	</div>
    		</div>
    	</div>
    <?php endwhile; ?>

</div>



<?php get_footer(); ?>
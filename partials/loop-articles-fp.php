<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
?>




	<section class="caption-press clearfix" itemprop="articleBody">
       <h5><?php the_post_thumbnail( array(35,35) );?><?php the_title(); ?></h5>
          
           View article at <a href="<?php the_field('link');?>" target="_blank"><span class="entry-title" itemprop="headline"><?php the_field('source'); ?></span></a>
	</section> <!-- end article section -->


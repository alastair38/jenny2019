<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
?>


	

	<section class="caption-press clearfix" itemprop="articleBody">
        <h6><?php the_content(); ?></h6>
	</section> <!-- end article section -->



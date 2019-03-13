<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
?>

<article id="post-<?php the_ID(); ?>" class="large-6 medium-12 columns end <?php echo $cat_name;?>" role="article">

	<header class="article-header">

		<h6>
		 <a href="<?php the_field('link');?>" target="_blank"><span class="entry-title" itemprop="headline"><?php the_title(); ?></span></a>
		</h6>
	

  
	</header> <!-- end article header -->

	<section class="entry-content clearfix" itemprop="articleBody">

       <?php the_post_thumbnail( array(35,35) );?><?php the_excerpt(); ?>
Originally published at <a href="<?php the_field('link');?>" target="_blank"><span class="entry-title" itemprop="headline"><?php the_field('source'); ?></a>
<span class="left"></span>
	</section> <!-- end article section -->



</article> <!-- end article -->

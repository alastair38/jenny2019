<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
?>

<article id="post-<?php the_ID(); ?>" class="large-12 columns videos <?php echo $cat_name;?>" role="article">

	<header class="article-header">
	
	 <h6><a href="<?php the_field('link');?>" target="_blank"><span class="entry-title" itemprop="headline"><?php the_title(); ?></span><span id="caticon"><i class="fi-video" title="Videos"></i></span></a></h6>

	
	
 
	</header> <!-- end article header -->

	<section class="entry-content clearfix" itemprop="articleBody">
    
    <div class="flex-video"><?php the_content(); ?></div>
		
	</section> <!-- end article section -->



</article> <!-- end article -->

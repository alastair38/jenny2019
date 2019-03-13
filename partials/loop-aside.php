<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
$post_type = get_post_type( get_the_ID() );
?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $cat_name;?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h5 class="entry-title single-title" itemprop="headline"></h5>
    </header> <!-- end article header -->

    <section class="entry-content clearfix" itemprop="articleBody">
		<?php the_content; ?>
		
	<?php	if ($post_type == 'resources')
  get_template_part( 'partials/loop', 'papers' );
elseif ($post_type == 'articles')
 echo "articles";
elseif ($post_type == 'videos')
  echo "videos";
  ?>
		


	</section> <!-- end article section -->

	


</article> <!-- end article -->

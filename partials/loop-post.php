<div id="main-article" class="large-12 medium-12 columns" role="main">
<header class="article-header">


		<h1 class="post-title" itemprop="headline"><?php the_title(); ?></h1>


    </header> <!-- end article header -->
<article id="<?php foreach((get_the_category()) as $category) { echo $category->category_nicename; } ?>" class="large-9 medium-9 columns" role="article" itemscope itemtype="http://schema.org/BlogPosting">



    <section class="entry-content clearfix" itemprop="articleBody">
   	<!-- <div class="post-thumbnail ">
		<?php the_post_thumbnail('full');
			if(get_post(get_post_thumbnail_id())->post_excerpt) {
				echo '<div class="post-thumbnail-caption">Photo copyright: ' . get_post(get_post_thumbnail_id())->post_excerpt . '</div>'; } ?>

</div> -->
		<?php the_content();?>



	</section> <!-- end article section -->

	<footer class="article-footer">


		</footer> <!-- end article footer -->


</article> <!-- end article -->


   <div class="large-3 medium-3 columns" role="aside">
   <div id="<?php foreach((get_the_category()) as $category) { echo $category->category_nicename; } ?>" class="share-wrapper">
<span id="date">
<?php the_time('d M, Y'); ?>
</span>

<span class="share-links">

    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&via=jennyjroe&text=<?php the_title(); ?>" title="Share on Twitter" target="_blank"><i class="fi-social-twitter"></i></a>

    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo wp_filter_nohtml_kses( $content );?>&source=www.jennyjroe.com" title="Share on Linkedin" target="_blank"><i class="fi-social-linkedin"></i></a>

	<a href="mailto:?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>" title="Email to a friend/colleague" target="_blank"><i class="fi-mail"></i></a>

    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Share on Facebook" target="_blank"><i class="fi-social-facebook"></i></a>

</span>


	</div>

<?php if( get_field('quotation') ) {;?>
<div class="quotation"><?php the_field('quotation');?></div>
<?php } ;?>
<?php


//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>5,
'caller_get_posts'=>1,
'post_type'=> 'resources'
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
echo "<div class='related-content'><h4>More Reading</h4>";
while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php get_template_part( 'partials/loop', 'aside' ); ?>

<?php
endwhile;
}
wp_reset_query();
}
echo "</div>"?>

</div>

</div> <!-- end #main -->

<p class="byline">
<i class="fi-calendar"> </i><?php the_time('d M, Y'); ?> <i class="fi-torso"> </i><?php the_author_posts_link(); ?>
<?php 
if ( in_category( 'videos' )) {
	echo '<span id="cat-icon"><i class="fi-video" title="Videos"></i></span>';
} elseif ( in_category('articles')) {
	echo '<span id="cat-icon"><i class="fi-page-edit" title="Articles"></i></span>';
} else {
	echo '<span id="cat-icon"><i class="fi-page-multiple" title="Papers"></i></span>';
}
?>
</p>

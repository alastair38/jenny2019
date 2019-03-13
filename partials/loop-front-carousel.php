<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
$title = get_the_title();
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
$excerpt = get_the_excerpt();
?>

<li class="slider-image item">
    <img src="<?php echo $thumb_url[0];?>"> 
       
       <div class="cat-excerpt <?php echo $cat_name;?>"><a href="<?php the_permalink()?>"><?php the_title( '<h6>', '</h6>' );?><?php echo wp_filter_nohtml_kses( $excerpt ) ?></a></div>
       
</li>
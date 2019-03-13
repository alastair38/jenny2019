<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
$title = get_the_title();
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true);
$excerpt = get_the_excerpt();
?>

<div class="blog-excerpt <?php echo $cat_name;?>">  
    <div class="large-9 medium-12 columns">
    <a href="<?php the_field('link');?>" target="_blank"><?php the_title( '<h6>', '</h6>' );?></a>
    

    <?php echo wp_filter_nohtml_kses( $excerpt ) ?>


<div class="blog-date">
    Published at <a href="<?php the_field('link');?>" target="_blank"><?php echo ', ' . the_field('source');?></a>
<?php the_time('jS F, Y'); ?> 
    
 </div>   
</div>
<div class="large-3 show-for-large-only columns">
<img src="<?php echo $thumb_url[0];?>"> 
</div>    


</div>
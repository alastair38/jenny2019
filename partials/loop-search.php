<article id="post-<?php the_ID(); ?>" class="search-content <?php foreach((get_the_category()) as $category) { echo $category->category_nicename; } ?>" role="article">

    <header class="article-header">

    <h6 class="search-title">
    
    <?php 
        $post_type = get_post_type( get_the_ID() );	
        if ($post_type == ( 'post')){
        echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
        }
        else
        {
        echo  '<a href="' . get_field('link') . '" title="This content will take you to an external site" target="_blank">' . get_the_title() . '</a>';
        }
    ?>
    
    </h6>
    
    </header> <!-- end article header -->
    
    <section class="entry-content">
    
    <?php
        if(get_the_excerpt()){
            echo the_excerpt();
        }
        else {
            echo the_content();
        }
    ?>	

    </section> <!-- end article section -->
   
</article> <!-- end article -->
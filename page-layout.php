<?php
/*
Template Name: Front Page Layout
*/
?>

<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="clearfix">

        <div class="large-12 medium-12 columns" role="main">
            
            <div class="large-5 medium-5 small-12 columns">

                <div class="latest">
                       
                    <div class="caption-title">
                       
                       <h5>Latest Blog</h5>
                    </div>
                        
                    <?php
                    // Get most recent post
                    $args = array( 'numberposts' => '1', 'post_type' => 'post');
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                    echo '<div class="caption">' . get_the_post_thumbnail($recent["ID"], 'large') . '<h6><span>' . $recent["post_title"] . '</span><p>' . $recent["post_excerpt"] .  '<a href="' . get_permalink($recent["ID"]) . '" title="Read Full Article"> Read Full Article</p></h6></a></div>' ;
                    }
                    ?> 
                    
                     <?php wp_reset_query();?>
                    
                    </div> <!-- end .latest -->
                    
                </div>

            <div class="rslides_container large-7 medium-7 columns">

                <ul id="slides1" class="rslides">
              
                    <?php
                     // Get recent posts for slider (excluding the latest one)
                    $args = array(
                    'offset'  => 1,
                    'posts_per_page' => 2
                    );

                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                    ?>

                    <?php get_template_part( 'partials/loop', 'front-carousel' ); ?>

                    <?php endwhile; else: ?>

                    <?php endif; ?>

                    <?php wp_reset_postdata();?>
                  
              </ul>
           
            </div>
            
            <div class="large-3 medium-6 columns">
                
                <div class="content-themes">
                
                    <div id="e-places">
                        
                        <?php
                        // Get the ID of a given category
                        $category_id = get_cat_ID( 'Enabling Places' );

                        // Get the URL of this category
                        $category_link = get_category_link( $category_id );
                        ?>

                        <!-- Print a link to this category -->

                        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
                        <h4>
                            <?php echo get_cat_name($category_id);?> 
                        </h4>
                        </a>      
                        
                    </div>
                
                </div>
                
            </div>
               
            <div class="large-3 medium-6 columns">
                
                <div class="content-themes">
                
                    <div id="b-health">
                        
                        <?php
                        // Get the ID of a given category
                        $category_id = get_cat_ID( 'Blue Health' );

                        // Get the URL of this category
                        $category_link = get_category_link( $category_id );
                        ?>

                        <!-- Print a link to this category -->

                        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
                        <h4>
                            <?php echo get_cat_name($category_id);?> 
                        </h4>
                        </a>      
                        
                    </div>
                
                </div>
            
            </div>
               
            <div class="ct large-3 medium-6 columns">
                
                <div class="content-themes">
                
                    <div id="g-health">
                        
                        <?php
                        // Get the ID of a given category
                        $category_id = get_cat_ID( 'Green Health' );

                        // Get the URL of this category
                        $category_link = get_category_link( $category_id );
                        ?>

                        <!-- Print a link to this category -->

                        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
                        <h4>
                            <?php echo get_cat_name($category_id);?> 
                        </h4>
                        </a>      
                        
                    </div>
                
                </div>
                
            </div>
            
            <div class="large-3 medium-6 columns">
                
                <div class="content-themes">
                
                    <div id="h-places">
                        
                        <?php
                        // Get the ID of a given category
                        $category_id = get_cat_ID( 'Hopeful Places' );

                        // Get the URL of this category
                        $category_link = get_category_link( $category_id );
                        ?>

                        <!-- Print a link to this category -->

                        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
                        <h4>
                            <?php echo get_cat_name($category_id);?> 
                        </h4>
                        </a>      
                        
                    </div>
                
                </div>
                
            </div>

            <div class="large-6 medium-6 columns">
                
                <div class="press">    
                    
                    <header class="article-header">
     
		                <div class="press-title" itemprop="headline"><h5>Videos</h5></div>
	
	                </header> <!-- end article header -->
                  
                    <?php
                    // Get most recent video
                    $args = array(
                        'post_type' => 'videos',
                        'posts_per_page' => 1
                    );

                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                    ?>

                    <?php get_template_part( 'partials/loop', 'videos-fp' ); ?>

                    <?php endwhile; else: ?>

                    <?php endif; ?>

                    <?php wp_reset_postdata();?>
                
                </div>
                
            </div>

            <div class="large-6 medium-6 columns">

               <div class="press">
                   
                   	<header class="article-header">
     
                        <div class="press-title" itemprop="headline"><h5>Press Articles</h5></div></a>

                    </header> <!-- end article header -->
               
                    <?php
                    // Get most recent articles
                    $args = array(
                        'post_type' => 'articles',
                        'posts_per_page' => 5
                    );

                    $query = new WP_Query( $args );


                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <?php get_template_part( 'partials/loop', 'articles-fp' ); ?>

                    <?php endwhile; else: ?>

                    <?php endif; ?>

                    <?php wp_reset_postdata();?>
               
               </div>
           
            </div>

            <divclass="show-for-medium-up">
            
                <div class="twitter"><?php get_sidebar(); ?></div>
            
            </div>
   				
        </div> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>

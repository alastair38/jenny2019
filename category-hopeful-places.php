<?php
/*
Template Name: Hopeful Places
*/
?>

<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="row clearfix">

    <div id="main" class="large-12 medium-12 columns" role="main">
     <div id="description">
          <h1><?php single_cat_title(); ?></h1>
       <?php echo category_description(); ?>
     </div> 
        <div class="large-8 medium-8 columns">
           <h4 class="papers-title">Articles</h4>
          <div class="slider-cat large-12 medium-12 columns">
  
               <div id="owl-demo" class="rslides_container">
              
              <ul id="slides5" class="rslides">
              
              
<?php
       
    $args = array(
    'post_type' => 'post',
    'category_name' => 'hopeful-places'
    );
    
$query = new WP_Query( $args );
    
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'front-carousel' ); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>
                  </ul>
<?php wp_reset_postdata();?>
                  
              </div>
            </div>

<div class="articles-videos large-12 medium-12 small-12 columns">

<?php
       
    $args = array(
        'post_type' => 'articles',
        'category_name' => 'hopeful-places'
    );
    
$query = new WP_Query( $args );
    
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'articles' ); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>
    
<?php wp_reset_postdata();?>

</div>

<div class="large-12 medium-12 small-12 columns">
<?php
       
    $args = array(
        'post_type' => 'videos',
        'category_name' => 'hopeful-places'
    );
    
$query = new WP_Query( $args );
    
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'videos' ); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>
    
<?php wp_reset_postdata();?>

</div>

</div>

<div class="large-4 medium-4 small-12 columns">
<h4 class="papers-title">Papers</h4>
<?php
       
    $args = array(
	'post_type' => 'resources',
    'category_name' => 'hopeful-places',
    'meta_key'		=> 'year_of_publication',
	'orderby'		=> array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
	'order'			=> 'DESC',
    'posts_per_page' => 3
    );
    
$query = new WP_Query( $args );
    
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'papers' ); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>
    
<?php wp_reset_postdata();?>

</div>



    				
    				</div> <!-- end #main -->



				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

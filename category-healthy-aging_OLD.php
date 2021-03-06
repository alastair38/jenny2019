<?php
/*
Template Name: Healthy Ageing
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

<?php

    $args = array(
    'post_type' => 'post',
    'category_name' => 'healthy-aging'
    );

$query = new WP_Query( $args );

    if ( $query->have_posts() ) :?>

    <div class="carousel-block">
      <h4 class="papers-title">Articles</h4>
      <div class="slider-cat large-12 medium-12 columns">
         <div id="owl-demo" class="rslides_container">
           <ul id="slides3" class="rslides">

    <?php while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'front-carousel' ); ?>

    <?php endwhile; else: ?>

          </ul>
        </div>
      </div>
    </div>

    <?php endif; ?>


<?php wp_reset_postdata();?>


<!-- div class="articles-videos large-12 medium-12 small-12 columns" -->

<?php

    $args = array(
        'post_type' => 'articles',
        'category_name' => 'healthy-aging'
    );

$query = new WP_Query( $args );

    if ( $query->have_posts() ) :?>

    <div class="large-12 medium-12 small-12 columns">
      <h4 class="papers-title">In the Press</h4>

    <?php while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'articles' ); ?>

    <?php endwhile; else: ?>
    </div>
    <?php endif; ?>

<?php wp_reset_postdata();?>

<!-- /div -->

<?php

    $args = array(
	'post_type' => 'resources',
    'category_name' => 'healthy-aging',
    'meta_key'		=> 'year_of_publication',
	'orderby'		=> array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
	'order'			=> 'DESC'
    );

$query = new WP_Query( $args );

    if ( $query->have_posts() ) :?>

    <div class="large-12 medium-12 small-12 columns">
      <h4 class="papers-title">Papers</h4>

    <?php while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'papers' ); ?>

    <?php endwhile; else: ?>

    </div>

    <?php endif; ?>

<?php wp_reset_postdata();?>


<?php

    $args = array(
        'post_type' => 'videos',
        'category_name' => 'healthy-aging'
    );

$query = new WP_Query( $args );

    if ( $query->have_posts() ) :?>

    <div class="large-12 medium-12 small-12 columns">

    <?php while ( $query->have_posts() ) : $query->the_post();
    ?>

    <?php get_template_part( 'partials/loop', 'videos' ); ?>

    <?php endwhile; else: ?>
    </div>
    <?php endif; ?>

<?php wp_reset_postdata();?>

    	</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>

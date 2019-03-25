<?php

$category_name = "hopeful-places";
?>

<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="row clearfix">

    <div id="main" class="large-12 medium-12 columns" role="main">

      <div id="description">
         <h1><?php single_cat_title(); ?></h1>
      <?php echo category_description(); ?>
      </div>

      <!-- Let's get the posts for this category -->

      <?php

global $post;
$args = array( 'posts_type' => 'post', 'category_name' => $category_name );

$myposts = get_posts( $args );
 if ($myposts) {?>

  <div class="carousel-block">
     <h4 class="papers-title">Articles</h4>
     <div class="slider-cat large-12 medium-12 columns">
       <div id="owl-demo" class="rslides_container">
         <ul id="slides3" class="rslides">
   <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
   	  <?php get_template_part( 'partials/loop', 'front-carousel' ); ?>
  <?php endforeach; ?>

</ul>
</div>
</div>
</div>

<?php }

wp_reset_postdata();?>

<?php

global $post;
$args = array( 'post_type' => 'articles', 'category_name' => $category_name );

$myarticles = get_posts( $args );

if ($myarticles){?>

  <div class="large-12 medium-12 small-12 columns">
    <h4 class="papers-title">In the Press</h4>

  <?php foreach ( $myarticles as $post ) : setup_postdata( $post ); ?>
  	<?php get_template_part( 'partials/loop', 'articles' ); ?>
  <?php endforeach; ?>
  </div>
<?php }

wp_reset_postdata();?>

<?php

global $post;

$args = array(
'post_type' => 'resources',
'category_name' => $category_name,
'meta_key'		=> 'year_of_publication',
'orderby'		=> array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
'order'			=> 'DESC'
);

$mypapers = get_posts( $args );

if ($mypapers){?>

  <div class="large-12 medium-12 small-12 columns">
    <h4 class="papers-title">Papers</h4>

  <?php foreach ( $mypapers as $post ) : setup_postdata( $post ); ?>
  	<?php get_template_part( 'partials/loop', 'papers' ); ?>
  <?php endforeach; ?>
  </div>
<?php }

wp_reset_postdata();?>

<?php

global $post;

$args = array(
'post_type' => 'videos',
'category_name' => $category_name
);

$myvideos = get_posts( $args );

if ($myvideos){?>

  <div class="large-12 medium-12 small-12 columns">
    <h4 class="papers-title">Videos</h4>

  <?php foreach ( $myvideos as $post ) : setup_postdata( $post ); ?>
  	<?php get_template_part( 'partials/loop', 'videos' ); ?>
  <?php endforeach; ?>
  </div>
<?php }

wp_reset_postdata();?>


    	</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>

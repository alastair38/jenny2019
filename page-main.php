<?php
/*
Template Name: Main Home Page
*/
?>

<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="row clearfix">

        <div class="large-12 medium-12 columns" role="main">

          <div class="rslides_container large-8 medium-12 columns">

              <ul id="slides1" class="rslides">

<?php

    $args = array(
	'posts_per_page' => 8
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

<div id="themes" class="large-4 small-12 columns">
    <div class="healthy-aging small-6 columns">
    <?php
            // Get the ID of a given category
            $category_id = get_cat_ID( 'Healthy Aging' );

            // Get the URL of this category
            $category_link = get_category_link( $category_id );
        ?>

        <!-- Print a link to this category -->

        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
        <div class="cat-details">
        <h4>
        <?php echo get_cat_name($category_id);?>
        </h4>

    </div></a>
    </div>
    <div class="green-health small-6 columns">

        <?php
            // Get the ID of a given category
            $category_id = get_cat_ID( 'Green Health' );

            // Get the URL of this category
            $category_link = get_category_link( $category_id );
        ?>

        <!-- Print a link to this category -->
        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
        <div class="cat-details">
        <h4>
        <?php echo get_cat_name($category_id);?>
        </h4>

    </div></a>
    </div>
    <div class="blue-health small-6 columns">
    <?php
            // Get the ID of a given category
            $category_id = get_cat_ID( 'Blue Health' );

            // Get the URL of this category
            $category_link = get_category_link( $category_id );
        ?>

        <!-- Print a link to this category -->
         <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
        <div class="cat-details">
        <h4>
        <?php echo get_cat_name($category_id);?>
        </h4>

    </div></a>
    </div>
    <div class="adolescent-health small-6 columns">
    <?php
            // Get the ID of a given category
            $category_id = get_cat_ID( 'Adolescent & Child Health' );

            // Get the URL of this category
            $category_link = get_category_link( $category_id );
        ?>

        <!-- Print a link to this category -->
        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>">
        <div class="cat-details">
        <h4>
        <?php echo get_cat_name($category_id);?>
        </h4>

    </div></a>
    </div>
</div>



   				<div class="show-for-medium-up">
<?php get_sidebar(); ?>
</div>

    				</div> <!-- end #main -->



				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

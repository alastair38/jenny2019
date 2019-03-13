<?php
/*
Template Name: Press Articles Page
*/
?>

<?php get_header(); ?>

<?php

$args = array();
$args['wp_query'] = array('post_type' => 'articles',
                          'posts_per_page' => 10,
	                      'orderby'		=> array( 'date' => 'DESC' ),
	                      'order'			=> 'DESC'
                          
                          );

$args['fields'][] = array('type' => 'taxonomy',
                          'label' => 'By Category',
                          'taxonomy' => 'category',
                          'format' => 'checkbox',
                          'values' => array('blue-health' => 'Blue Health', 'enabling-places' => 'Enabling Places', 'green-health' => 'Green Health', 'hopeful-places' => 'Hopeful Places')
                         );
$args['fields'][] = array('type' => 'search',
                          'placeholder' => 'Search titles for keywords',
                          'title' => 'Search',
                          'label' => 'By Title Keywords',
                          'value' => '');
$args['fields'][] = array('type' => 'submit',
                          'value' => 'Filter');
                          
                          
$my_search = new WP_Advanced_Search($args);
			
?>
			
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
                    <div id="search" class="large-3 medium-3 columns " role="aside">
                    <h4>Filter Results</h4>
                    <?php $my_search->the_form(); ?>
                    </div>    
					<div id="search-results" class="large-9 medium-9 columns first clearfix" role="main">
						
						<?php


$my_search = new WP_Advanced_Search($args);
$temp_query = $wp_query;
$wp_query = $my_search->query();?>
<h4 class="archive-title"><span><?php echo 'Press Articles' ;?></span></h4>
<?php	
if ( have_posts() ): 
    while ( have_posts() ): the_post(); ?>
    
<?php get_template_part( 'partials/loop', 'press' ); ?>					
 
<?php    endwhile;

$my_search->pagination(array('prev_text' => '«','next_text' => '»'));

endif;
wp_reset_query();
$wp_query = $temp_query;
?>

	
                    								

				    </div> <!-- end #main -->


    			</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
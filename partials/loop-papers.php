<?php 
$cats = get_the_category();
$cat_name = $cats[0]->slug;
?>

<article id="post-<?php the_ID(); ?>" class="large-12 papers columns" role="article">

	<header class="article-header">
	<div class="resource-date <?php echo $cat_name;?>">
	<?php  echo '<span id="caticon2">Published </span>';?>
	<?php echo get_field( 'year_of_publication'); ?>
	</div>
     

   
   

	</header> <!-- end article header -->

	<section class="entry-content clearfix" itemprop="articleBody">

	<?php if( get_field('link') )
    {
    echo "<p><a href='" . get_field('link') . "' target='_blank' title='This link will take you to an external site'><span class='entry-title' itemprop='headline'>" . get_the_title() . "</span></a>. <em>" . get_field( 'publisher' ) . " (" . get_field( 'year_of_publication') . ")</em>. ";
    }
    else
    {
    echo "<p><span class='entry-title' itemprop='headline'>" . get_the_title() . "</span>. <em>" . get_field( 'publisher' ) . " (" . get_field( 'year_of_publication') . ")</em>.";
    }
    if( get_field('volume') )
    {
    echo " " . "Volume " . get_field( 'volume' ) . ". ";
    }
    if( get_field('page_range') )
    {
    echo " pp. " . get_field( 'page_range' ) . ". ";
    }
    if( get_field('reference') )
    {
    echo get_field( 'reference' ) . ".</p>";
    }
    else {
    echo "</p>";    
    }
    ?>	
 <?php 

    if (is_category() ) {
        
    }
   else { echo "Published in: "; 
         the_category();
        }
?>
	</section> <!-- end article section -->



</article> <!-- end article -->

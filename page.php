<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row clearfix">

				    <div id="main" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        	
                        	<h1><?php the_title();?></h1>

					    	<?php get_template_part( 'partials/loop', 'page' ); ?>

					    <?php endwhile; else : ?>


					    <?php endif; ?>

    				</div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

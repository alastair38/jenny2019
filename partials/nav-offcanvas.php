<div class="large-12 columns show-for-large-only">
	<div class="fixed">

		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->

		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->
				
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>
			<section class="top-bar-section-main">
			<?php joints_footer_links(); ?>
            </section>
			<section class="top-bar-section">
				
			</section>
		</nav>
	</div>
</div>

<div class="large-12 columns hide-for-large-only">
	<div class="contain-to-grid fixed">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
                <a href="<?php echo home_url(); ?>" rel="nofollow"><h1 class="title"><?php echo get_avatar( 1, '25' ); ?><?php echo ' ' .  bloginfo('name'); ?></h1></a>
			</section>
			<section class="left-small">
				<a href="#" class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>
</div>


<aside class="left-off-canvas-menu hide-for-large-only">
	<ul class="off-canvas-list">
		<li><label>MENU</label></li>
			<?php joints_footer_links(); ?>
			<li><a href="mailto:<?php the_author_meta( 'user_email', 1 ); ?>" target="_blank"><i class="fi-mail" title="Email"></i> Email</a></li>
<li><a href="<?php the_author_meta( 'twitter_profile', 1 ); ?>" target="_blank"><i class="fi-social-twitter" title="Follow Me On Twitter"></i> Twitter</a></li> 
<li><a href="<?php the_author_meta( 'vimeo_profile', 1 ); ?>" target="_blank"><i class="fi-social-vimeo" title="Follow Me On Vimeo"></i> Vimeo</a></li>
	</ul>
</aside>


<a class="exit-off-canvas"></a>


<div class="large-12 columns show-for-large-only">
<h1 id="site-title"><a href="<?php echo home_url(); ?>" title="Return to home page" rel="nofollow"> <?php echo get_avatar( 1, '75' ); ?> <?php bloginfo('name'); ?></a></h1>
<span class="social-icons ">
<a href="mailto:<?php the_author_meta( 'user_email', 1 ); ?>" target="_blank"><i class="fi-mail" title="Email"></i></a>
<a href="<?php the_author_meta( 'twitter_profile', 1 ); ?>" target="_blank"><i class="fi-social-twitter" title="Follow Me On Twitter"></i></a> 
<a href="<?php the_author_meta( 'vimeo_profile', 1 ); ?>" target="_blank"><i class="fi-social-vimeo" title="Follow Me On Vimeo"></i></a>    

</div>

<div id="biog" class="large-12 columns ">
<?php the_author_meta( 'work_title', 1 ); ?> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>" rel="nofollow" title="About Jenny">&raquo;</a>
</div>

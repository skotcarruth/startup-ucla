<?php
/**
 * The template for displaying the sidebar.
 */
?>

<div id="sidebar" class="widget_area" >

	<div id="categories" class="widget">
		
		<div class="title_dash">
			<h2 class="widget_title"><span><?php _e( 'Categories' ); ?></span></h2>
		</div>
		
		<ul>
			<li><a href="<?php echo home_url('/news-and-events'); ?>">All News & Events</a></li>
			<?php wp_list_cats('exclude=7'); ?>
		</ul>
			
	</div>
		
	<div id="archives" class="widget">
		
		<div class="title_dash">
			<h2 class="widget_title"><span><?php _e( 'Archives' ); ?></span></h2>
		</div>
		
		<ul>
			<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		</ul>		
			
	</div>
	
	<div id="rss_divider"></div>
	
	<a href="<?php bloginfo('rss2_url'); ?>" id="rss">Subscribe Via RSS</a>
	

</div>	
	


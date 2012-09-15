<?php
/**
 * The template for displaying the internship sidebar.
 */
?>

<div id="sidebar" class="widget_area" >
		
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
	
<?php
/*
Template name: internships
*/
get_header(); ?>

<?php get_sidebar('internships'); ?>
	
	<div id="internships_container">	

		<?php query_posts( 'cat= 7' ); ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>			
	
					
			<div class="post_preview">
			
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }
					else { ?>
						<img class="preview_image" src="<?php bloginfo('template_directory'); ?>/images/post_default.png" />
				<?php } ?>
				
				<div class="preview_copy">
					
					<div class="preview_title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					
					<div class="post_meta">
						<p><?php the_date(); ?></p>
						<p class="category">Posted in <?php the_category(', '); ?></p>
					</div>
					
					<div class="preview_text"><?php the_excerpt(); ?></div>
					
					<a class="read_more" href="<?php the_permalink(); ?>" >Read More</a>
					
				</div>
				
			</div>
		
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
			
		<div class="navigation"><p><?php posts_nav_link('  /  ', 'Previous', 'next'); ?></p></div>

	</div><!-- #internships_container -->
		
	<div class="clearfix"></div>
	
	
<?php get_footer(); ?>	
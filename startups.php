<?php
/*
Template name: startups
*/
get_header(); ?>

	<div id="startup_container">
	
		<div id="tape_header">
			<h2 id="tape_left"><span>Class of 2012 Startups</span></h2>
		</div>
		
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="largeBody"><?php the_content(); ?></div>
			
		<?php endwhile; ?>
		
		<?php $args = array( 'post_type' => 'startups', 'tag'=>'2011' ); 
		
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
		<div class="startup">
			<div class="startup_thumbnail"><?php the_post_thumbnail(array( 200,200 ) ); ?></div>
		
			<div class="startup_copy">
				<div class="startup_name"><?php the_title(); ?></div>
				
				<div class="startup_founders"><?php the_meta('founders', 'value'); ?></div>
				
				<div class="startup_text"><?php the_content(); ?></div>
			</div>		
			
		</div>
			        
		<?php	endwhile; ?>

	
	</div><!-- #container -->
	
	
<?php get_footer(); ?>	
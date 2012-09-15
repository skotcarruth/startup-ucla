<?php
/*
Template name: accelerator
*/
get_header(); ?>

	<div id="accelerator_container">
	
		<h1 id="accelerator_title">Startup UCLA Summer Accelerator Program</h1>

		<div id="tape_header">
			<h2 id="tape_left"><span>About the Accelerator</span></h2>
		</div>
		
		<div id="about_accelerator">
		
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php the_content(); ?>
				
			<?php endwhile; ?>
			
			<div id="apply_button">
				<a id="apply_now" href="/application">Apply Now</a>	
			</div>
					
		</div>
		
		<div id="director">
		
			<div id="tape_header">
				<h2 id="tape_left"><span>Our director</span></h2>
			</div>
			
			<?php $args = array( 'post_type' => 'people', 'posts_per_page' => 10, 'tag'=>'director' ); 
				$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
			<div class="director">
				<div class="director_thumbnail"><?php the_post_thumbnail('director'); ?><div class="thumb_cover"></div></div>
			
				<div class="director_copy">
					<div class="director_name"><?php the_title(); ?></div>
					
					<div class="director_title"><?php the_meta('founders', 'value'); ?></div>
					
					<div class="director_text"><?php the_content(); ?></div>
				</div>		
				
			</div>
				        
			<?php	endwhile; ?>
			
		</div>	
		
		<div id="mentors">
		
			<div id="tape_header">
				<h2 id="tape_left"><span>The Mentors</span></h2>
			</div>

			<div class="people">			
				<?php $args = array( 'post_type' => 'people', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100, 'tag'=>'mentors' ); 
					$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<div id="person">
					
				        <div class="person_thumbnail"><?php the_post_thumbnail('people'); ?><div class="thumb_cover"></div></div>
						<div class="person_name"><?php the_title(); ?></div>
						<div class="entry-content"><?php the_content(); ?></div>
					        
					</div>
					        
				<?php	endwhile; ?>
			</div>
		</div>	

	</div><!-- #accelerator_container -->
	
	
<?php get_footer(); ?>	
<?php

/*
*
template name: sponsors
*/

get_header (); ?>

	<div id="sponsor_container">

		<div id="tape_header">
			<h2 id="tape_left"><span>Startup UCLA Sponsors</span></h2>
		</div>
		
		<div id="about_sponsors">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="largeBody"><?php the_content(); ?></div>
			<?php endwhile; ?>
			
			<div id="donate_button">
				<a id="donate" href="http://giving.ucla.edu/StartupUCLA">Donate</a>	
			</div>
					
		</div>
		
		<div id="the_sponsors">
		
			<div id="tape_header">
				<h2 id="tape_left"><span>The Sponsors</span></h2>
			</div>

			<div class="people">			
				<?php $args = array( 'post_type' => 'people', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100, 'tag'=>'sponsors' ); 
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

	</div><!-- #sponsor_container -->
	
		<div id="the_partners">
	
			<div id="tape_header">
				<h2 id="tape_left"><span>The Partners</span></h2>
			</div>
	
			<div class="people">			
				<?php $args = array( 'post_type' => 'people', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100, 'tag'=>'partners' ); 
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

	</div><!-- #partners_container -->
	
	
<?php get_footer(); ?>	
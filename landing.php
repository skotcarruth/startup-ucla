<?php
/**
 template name: landing
 */

get_header(); ?>

		<div id="container">
		
			<div id="home_intro" >
			
				<div id="largeBulb"></div>
				
				<div class="banner">
					<h1>
					
						startup ucla
						
						<!-- if we use funky type
						<span class="char1">S</span>
						<span class="char2">T</span>
						<span class="char3">A</span>
						<span class="char4">R</span>
						<span class="char5">T</span>
						<span class="char6">U</span>
						<span class="char7">P</span>
						<span class="char8"></span>
						<span class="char9">U</span>
						<span class="char10">C</span>
						<span class="char11">L</span>
						<span class="char12">A</span>
						-->
						
					</h1>
				</div>
				
				<h1 id="tagline">Connecting UCLA students with LA's digital startup scene</h1>
				
			</div><!-- #home_intro -->	
			
			<div id="welcome">
				
				<div id="tape_header">
					<h2 id="tape_left"><span>Welcome to Startup UCLA</span></h2>
				</div>
				
				<p class="largeBody">Startup UCLA seeks to develop a culture of startup thinking on campus; to connect students with alumni who are successful in the startup world and with the rapidly growing Southern California startup community; to give students opportunities to learn the basics of startup thinking; and to provide a community in which students can develop and launch their early-stage ideas.</p>

				
			</div><!-- #welcome -->
			
			<div id="recent_news">
			
				<div id="tape_header">
					<h2 id="tape_left"><span>Recent News</span></h2>
				</div>
				
				<?php query_posts( 'posts_per_page=2' );  ?>
				
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

			
			</div><!-- #Recent News -->
			
			<div id="what_we_offer">
			
				<div id="tape_header">
					<h2 id="tape_left"><span>What We Offer</span></h2>
				</div>
				
				<ul>
					<li id="offer1"><p>A space where students interested in startup thinking, share ideas & hang out.</p></li>
					
					<li id="offer2"><p>Events, including guest speakers from LA's vibrant digital startup scene.</p></li>
					
					<li id="offer3"><p>A summer accelerator program, where teams develop ideas into prototypes and business plans</p></li>
				</ul>				
			
			</div><!-- #what_we_offer -->
			
			<div id="advisory_board">
			
				<div id="tape_header">
					<h2 id="tape_left"><span>Advisory Board</span></h2>
				</div>
				
				<div class="people">
					<?php $args = array( 'post_type' => 'people', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100, 'tag'=>'advisory' ); 
					
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div id="person">
						
					        <div class="person_thumbnail"><?php the_post_thumbnail('people'); ?><div class="thumb_cover"></div></div>
							<div class="person_name"><?php the_title(); ?></div>
							<div class="entry-content"><?php the_content(); ?></div>
						        
						</div>
						        
					<?php	endwhile; ?>
				</div>

				
			</div><!-- #advisory_board -->
			
			<div id="steering_committee">
			
				<div id="tape_header">
					<h2 id="tape_left"><span>Steering Committee</span></h2>
				</div>
				
				<div class="people">				
					<?php $args = array( 'post_type' => 'people', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100,'tag'=>'steering' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div id="person">
						
					        <div class="person_thumbnail"><?php the_post_thumbnail('people'); ?><div class="thumb_cover"></div></div>
							<div class="person_name"><?php the_title(); ?></div>
							<div class="entry-content"><?php the_content(); ?></div>
						        
						</div>
						        
					<?php	endwhile; ?>
				</div>

			
			</div><!-- #steering_committee -->
			
			
			
		</div><!-- #container -->

<?php get_footer(); ?>

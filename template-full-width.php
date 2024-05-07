<?php
/*
Template Name: Ganze Breite
*/

get_header(); ?>
			
	<div class="content">
		
		<div class="grid-container">
	
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
		
		    	<main class="main small-12 medium-12 large-12 cell" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
						<?php the_content(); ?>
						
					<?php endwhile; endif; ?>							
	
				</main> <!-- end #main -->
		    	
			</div> <!-- end #inner-content -->
				
		</div>
	
	</div> <!-- end #content -->

<?php get_footer(); ?>

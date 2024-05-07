<?php
/*
Template Name: Glitzer Left
*/

get_header(); ?>		
	<style>
       #glitzer-left {
		background-image:url(Glitzer-Effekt%20%E2%80%93%20Homepage-Dateien/Glitzer-Effekt-Hintergrund_detail_2.png);			
		background-repeat:no-repeat;
		background-position-y: 350px;
	}
	</style>
	<div class="content">
		<div class="grid-container">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
				<div id="glitzer-left" class="medium-4 large-4 cell">
					<div class="grid-x" style="height:100%">
						<div class="cell medium-2 large-2"></div>
						<div class="cell medium-4 large-4">
							<h1 class="font-vert">Glitzer Effekt</h1>
						</div>
						<div class="cell medium-4 large-4">
							<h4 class="font-vert" style="margin-top:400px">Gelingende Beziehungen</h4>
						</div>
						<div class="cell medium-2 large-2"></div>
					</div>
				</div>
		    	<main class="main cell auto" role="main">	 
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>				
					<?php endwhile; endif; ?>							
				</main> <!-- end #main -->
			</div> <!-- end #inner-content -->	
		</div>
	</div> <!-- end #content -->
<?php get_footer(); ?>

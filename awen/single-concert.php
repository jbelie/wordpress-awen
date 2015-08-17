<?php get_header(); ?>


<div id="single-concert" class="concert-<?php echo $post->post_name;?>">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php

				if(have_posts()){
					while(have_posts()){
						the_post();
						$dateDuConcert = new DateTime($cfs->get('concert_date'));
						
						
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
						} 
						echo "<h1 class='title-slim title-after-breadcrumbs'>".get_the_title()."</h1>";
						echo "<div class='concert-details'>";
							echo "<span class='semibold'>Date : </span>Le ".$dateDuConcert->format('d M Y')." à ".$cfs->get('concert_heure')."<br/>";
							echo "<span class='semibold'>Lieu : </span>".$cfs->get('concert_salle')."<br/>";
							echo "<span class='semibold'>Adresse : </span>".$cfs->get('concert_ville')."<br/>";
							echo "<span class='semibold'>Description : </span>".$cfs->get('concert_description')."<br/>";
						echo "</div>";
						
						echo do_shortcode("[googlemaps width='100%' height='300']");
					}
				}
				
				?>
			</div><!--.col-md-8-->
			<div class="col-md-4 hidden-xs hidden-sm">
				<?php get_sidebar();?>
			</div><!--colmd-->
		</div><!--row-->
	</div><!--.container-->
</div><!--#page-->


<?php get_footer(); ?>

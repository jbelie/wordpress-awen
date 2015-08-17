<div id="a-la-une" class="concert-<?php echo $post->post_name;?>">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="title title-slim">Actualités</h2>
				<?php
					$i=1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						"post_type"			=>	"post",
						"posts_per_page"	=>	10,
						"paged"				=>	$paged,
						"orderby"			=>	"date",
						"order"				=>	"DESC"
					);
					$actualites = new WP_Query($args);
					if($actualites->have_posts()){
						while($actualites->have_posts()){
							$actualites->the_post();
							$classCSS = ($i++==1)?"first-child":"";
							// Presentation réduite pour les autres actus
							echo "<div class='actualite actualite-small ".$classCSS."'>";
								echo "<div class='row'>";
									if(get_the_post_thumbnail( get_the_ID(), "actu-small" )!=""){
										echo "<div class='actu-thumb col-sm-5'>";
											echo "<a href='".get_permalink()."' class='wow bounceInUp'>";
												echo "<div class='hidden-md hidden-lg'>".get_the_post_thumbnail( get_the_ID(), "actu-large" )."</div>";												echo "<div class='hidden-xs hidden-sm'>".get_the_post_thumbnail( get_the_ID(), "actu-small" )."</div>";
											echo "</a>";
										echo "</div>";
										$colActu="col-sm-7";
									}else{
										$colActu="col-sm-12";
									}
									echo "<div class='actu-content {$colActu}'>";
										echo "<h3 class='title title-bold'>";
											echo "<a href='".get_permalink()."'>";	
												echo get_the_title();
											echo "</a>";
										echo "</h3>";
										echo "<div class='actu-date'>Posté le ".get_the_date('d M Y')."</div>";
										echo "<div class='actu-excerpt'>".get_the_excerpt()."</div>";
										echo "<a href='".get_permalink()."' class='actu-read-more'>Lire la suite</a>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
						}
						echo wp_pagenavi();
					}
				?>
			</div><!--col-md-8-->
			<div class="col-md-4 hidden-sm hidden-xs">
				<?php get_sidebar();?>
			</div><!--colmd-->
		</div><!--row-->
	</div><!--.container-->
</div><!--#page-->
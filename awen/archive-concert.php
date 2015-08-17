<?php get_header(); ?>

<div id="page-concerts">
	<div class="container">
		<!--CONCERTS-->
		<div id="concerts">
			<div class="row">
				<div class="col-sm-12 page-content">
					<h2 class="title-slim">Concerts</h2>
					<div class="concerts-content">
						<?php
							
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								"post_type"			=>	"concert",
								"posts_per_page"	=>	10,
								"paged"				=>	$paged,
								"orderby"			=>	"date",
								"order"				=>	"ASC"
							);

							$concerts = new WP_Query($args);

							if($concerts->have_posts()){
								while($concerts->have_posts()){
									$concerts->the_post();
									$dateDuConcert = new DateTime($cfs->get('concert_date'));
									
									echo "<div class='concert wow fadeInUp'>";
										echo "<div class='concert-date'>";
											echo "<span class='concert-jour'>".$dateDuConcert->format('d')."</span>";
											echo "<span class='concert-mois'>".$dateDuConcert->format('M')."</span>";
										echo "</div>";
										echo "<div class='concert-details'>";
											echo "<h3>";
												echo "<a href='".get_permalink()."'>";
													echo get_the_title();
												echo "</a>";
											echo "</h3>";
											echo "<div class='row'>";
												echo "<div class='col-sm-8'>";
													echo "<div class='concert-lieu'>";
														echo $cfs->get('concert_salle')."<br/> ".$cfs->get('concert_ville');
													echo "</div>";
												echo "</div>";
													
												echo "<div class='col-sm-4'>";
													echo "<a href='".get_permalink()."' class='button button-black button-small en-savoir-plus'>";
														echo "En savoir plus";
													echo "</a>";
												echo "</div>";
											echo "</div>";//row
										echo "</div>";//concert-details
										echo "<div class='clearer'></div>";
									echo "</div>";
								}
								echo wp_pagenavi();
							}else{
								echo "<p class='aucun-concert'>Aucun concert prévu pour le moment</p>";
							}
						?>
					</div><!--concert-content-->
				</div><!--col-md-->
				<?php
				/*
				<div class="col-md-4">
					<?php get_sidebar("actualites");?>
				</div><!--colmd-->
				*/
				?>
			</div><!--row-->
		</div><!--concerts-->
		
	</div><!--container-->
</div><!--#concerts-->

<?php get_footer(); ?>
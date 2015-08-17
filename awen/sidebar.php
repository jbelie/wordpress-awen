<aside id="sidebar-main">
	<!--CONCERTS-->
	<div id="concerts">
		<h2 class="title title-highlight">
			<a href='<?php echo get_post_type_archive_link('concert');?>'>
				Concerts
			</a>
		</h2>
		<div class="concerts-content sidebar-content">
			<?php
				$args = array(
					"post_type"			=>	"concert",
					"posts_per_page"	=>	3,
					"orderby"			=>	"date",
					"order"				=>	"ASC"
				);

				$concerts = new WP_Query($args);

				if($concerts->have_posts()){
					while($concerts->have_posts()){
						$concerts->the_post();
						$dateDuConcert = new DateTime($cfs->get('concert_date'));
						
						echo "<div class='concert'>";
							echo "<div class='concert-date'>";
								echo "<span class='concert-jour'>".$dateDuConcert->format('d')."</span>";
								echo "<span class='concert-mois'>".$dateDuConcert->format('M')."</span>";
							echo "</div>";
							echo "<div class='concert-details'>";
								echo "<h4 class='title title-bold'>";
									echo "<a href='".get_permalink()."'>";
										echo get_the_title();
									echo "</a>";
								echo "</h4>";
								echo "<div class='concert-lieu'>";
									echo $cfs->get('concert_salle')."<br/> ".$cfs->get('concert_ville');
								echo "</div>";
							echo "</div>";
							echo "<div class='clearer'></div>";
						echo "</div>";
					}
				}else{
					echo "<p class='aucun-concert'>Aucun concert prévu pour le moment</p>";
				}
			?>
		</div>
	</div><!--concerts-->
	
	<!--FACEBOOK-->
	<div id="retrouvez-nous">
		<h2 class="title title-highlight">Retrouvez-nous</h2>
		<div class="fb-like-box" data-href="https://www.facebook.com/universAwen?fref=ts" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
	</div><!--retrouvz-nous-->
</aside><!--sidebar-main-->
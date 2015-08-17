<aside id="sidebar-actualite">
	<!--ACTUALITES-->
	<div id="actualites">
		<h2 class="title title-highlight">Actualites</h2>
		<div id="actualites" class="actualites-content sidebar-content">
			<?php
				$i = 0;
				$args = array(
					"post_type"			=>	"post",
					"posts_per_page"	=>	3,
					"orderby"			=>	"date",
					"order"				=>	"DESC"
				);

				$actualites = new WP_Query($args);

				if($actualites->have_posts()){
					while($actualites->have_posts()){
						$actualites->the_post();
						$classCSS = ($i++==0)?"first-child":"";
						
						echo "<article class='actualite ".$classCSS."'>";
							echo "<h4 class='title title-bold'>";
								echo "<a href='".get_permalink()."'>";
									echo get_the_title();
								echo "</a>";
							echo "</h4>";
							echo "<p class='actualite-detail'>";
								echo "Posté le ". get_the_time('l d F Y')." ";
							echo "</p>";
						echo "</article>";
					}
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
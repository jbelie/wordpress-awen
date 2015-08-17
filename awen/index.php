<?php get_header();?>

<!--FULLPAGE-->
<section id="fullpage-website">
	<div class="container">
		<h1 id="logo-aw">
			<span class='access'><?php echo get_bloginfo('name');?></span>
		</h1>
		
		<!--Ecouter-->
		<a href="#" id="ecouter">
			<span id="ecouter-button">
				<span class="access">Ecouter</span>
			</span>
			<span id="ecouter-texte">
			
			</span>
		</a>

		<!--Player-->
		<div id="player" class="access">
			<?php
				$post = get_post(PAGE_ECOUTER);
				setup_postdata($post);
				echo $post->post_content;
			?>	
		</div>
		
		<!--Read More-->
		<div id="fullpage-more" class="scroll-down"></div>
		<a href='#' class=" scroll-down scroll-arrow">
			<span class='access'>Voir la suite</span>
		</a>
		
	</div>
</section><!--#fullpage-website-->


<!--ACTUALITES-->
<section id="actualites">
	<div class="container">
		<div class="row">
			<div id="a-la-une" class="col-md-8">
				<h2 class="title title-slim">à la une</h2>
				<?php
					$i=1;
					$args = array(
						"post_type"			=>	"post",
						"posts_per_page"	=>	4
					);
					query_posts($args);
					if(have_posts()){
						while(have_posts()){
							the_post();
							
							if($i==1){
								// First news
								echo "<div class='actualite actualite-large first-child'>";
									echo "<div class='actu-thumb'>";
										echo "<a href='".get_permalink()."' class=''>";
											echo get_the_post_thumbnail( get_the_ID(), "actu-large" );
										echo "</a>";
									echo "</div>";
									echo "<div class='actu-content'>";
										echo "<h3 class='title title-bold-regular'>";
											echo "<a href='".get_permalink()."'>";
												echo get_the_title();
											echo "</a>";
										echo "</h3>";
										echo "<div class='actu-date'>Posté le ".get_the_date('d M Y')."</div>";
										echo "<div class='actu-excerpt'>".get_the_excerpt()."</div>";
										echo "<a href='".get_permalink()."' class='actu-read-more'>Lire la suite</a>";
									echo "</div>";
								echo "</div>";
							}else{
								// Others news - Other style
								echo "<div class='actualite actualite-small'>";
									echo "<div class='row'>";
										echo "<div class='actu-thumb col-md-4'>";
											echo "<a href='".get_permalink()."' class=''>";
												echo "<div class='hidden-md hidden-lg'>".get_the_post_thumbnail( get_the_ID(), "actu-large" )."</div>";
												echo "<div class='hidden-xs hidden-sm'>".get_the_post_thumbnail( get_the_ID(), "actu-small" )."</div>";
											echo "</a>";
										echo "</div>";
										echo "<div class='actu-content col-md-8'>";
											echo "<h3 class='title'>";
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
							$i++;
						}//fin while
					}//fin if
				?>
			</div><!--a-la-une-->
			<div id="sidebar" class="col-md-4 hidden-xs hidden-sm">
				<?php echo get_sidebar();?>
			</div>
		</div>
	</div>
</section><!--actualites-->

<?php get_footer();?>

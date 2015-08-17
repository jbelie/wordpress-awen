
<div id="page-groupe">
	<div id="groupe" class="container">
		<div class="row">
			<div class="col-sm-9">
				<h1 class="title title-slim"><?php echo get_the_title();?></h1>
				<div class="content">
					<?php echo apply_filters( 'the_content', get_the_content() );?>
				</div><!--content-->
			</div><!--col-md-10-->
			<div class="col-sm-3 hidden-xs">
				<aside>
					<?php
					$membres = $cfs->get('groupe_membres');
					if(sizeof($membres)>=0){
						$i = 0;
						foreach($membres as $membre){
							echo "<a href='#' data-membre='membre-{$i}' class='membre-thumbnail'>";
								echo "<img src='".image_src( $membre['groupe_miniature'], "square" )."' class='img-responsive' alt=\"".$membre['groupe_pseudo']."\"/>";
								echo "<h3 class='title-slim'>".$membre['groupe_pseudo']."</h3>";
							echo "</a>";
							$i++;
						}
					}
					?>
				</aside>
			</div><!--col-md-2-->
		</div><!--row-->
	</div><!--groupe-->
	
	<div id="membres">
		<div class="container">
			<h2 class="title title-slim">Membres</h2>
		</div>
		
		<?php
			if(sizeof($membres)>=0){
				$i = 0;
				
				foreach($membres as $membre){
					$appartionCSS = ($i%2==0)?"fadeInLeft":"fadeInRight";
					$photo= "<div class='col-md-5'>";
						$photo.= "<img src='".image_src( $membre['groupe_photo'], "full" )."' class='img-responsive wow {$appartionCSS}' alt=\"".$membre['groupe_pseudo']."\"/>";
					$photo.= "</div>";//col gauche
					
					$presentation= "<div class='col-md-7'>";
						$presentation.= "<div class='info-membre'>";
							$presentation.= "<span class='bold nom-membre'>".$membre['groupe_prenom']." ".$membre['groupe_nom']."</span><br/>";
							$presentation.= "<span class='type'>Pseudo : </span>".$membre['groupe_pseudo']."<br/>";
							$presentation.= "<span class='type'>Instrument : </span>".$membre['groupe_instrument']."<br/>";
							$presentation.= "".$membre['groupe_description']."";
							$presentation.= "<span class='type'>Influence : </span>".$membre['groupe_influence']."<br/>";
						$presentation.= "</div>";//info-membre
					$presentation.= "</div>";//col droite
							
					echo "<div id='membre-".$i++."' class='membre'>";
						echo "<div class='container'>";
							echo "<div class='row'>";
								if($i%2==0){ echo $presentation.$photo;}
								else{echo $photo.$presentation;}
							echo "</div>";//row
						echo "</div>";//container
					echo "</div>";//membre
				}
			}
		?>
	</div><!--membres-->
</div><!--end-page-groupe-->

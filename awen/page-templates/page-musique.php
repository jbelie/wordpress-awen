
<!--NAV-->
<nav id="musique-nav">
	<div class="container">
		Média : 
		<a class="button button-black button-audio" href="#album">
			Album
		</a>
		<a class="button button-black button-audio" href="#video">
			Vidéo
		</a>
	</div>
</nav>

<!--ALBUM-->
<section id="album">
	<div class="container">
		<h2 class="title-slim">Album</h2>
		<div class="row">
			<div class="col-md-6">
				<div id="audio-player">
					<?php echo $cfs->get('musique_soundcloud');?>
				</div><!--audio-player-->
			</div><!--col-->
			<div id="listes-chansons" class="col-md-6">
					<?php echo $cfs->get('musique_listes_chansons');?>
			</div><!--col-->
		</div>
	</div><!--container-->
</section><!--#album-->

<!--VIDEO-->
<section id="video">
	<div class="container">	
		<h2 class="title-slim">Vidéos</h2>
		<div id="player-video">
			<?php
			$videos = $cfs->get('musique_video_loop');
			if($videos){
				$idVideo = get_youtube_id($videos[0]['musique_url_video']);
				echo '<iframe width="100%" height="500" src="https://www.youtube.com/embed/'.$idVideo.'" data-original-url="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>';
			}
			?>
		</div><!--#player-video-->
		<div id="player-list">
			
			<?php
			
				foreach($videos as $video){
					$idVideo = get_youtube_id($video['musique_url_video']);

				?>
					<div class="video wow fadeIn">					
						<a href='#'  data-id-video="<?php echo $idVideo;?>">
							<div class="overlay">								<span class="glyphicon glyphicon-play"></span>								<div class="overlay-texte"><?php echo $video['nom_chanson'];?></div>							</div>							<img src="<?php echo image_src($video['musique_image_video'],"video-thumbnail"); ?>" alt=""/>
						</a>
					</div>
				<?php	
				}
			?>
			<div class="clearer"></div>
		</div><!--#player-list-->
	</div>
</section>
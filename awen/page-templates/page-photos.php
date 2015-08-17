<section id="photos">
	<div class="container">
		<h2 class="title-slim">Photos</h2>
		<ul id="lightGallery">
			<?php
				$photos = $cfs->get('photos');
				if(sizeof($photos)>0){
					foreach($photos as $photo){
						echo "<li class='item' data-src='".image_src($photo['photo'],"large")."'>";
							echo "<img src='".image_src($photo['photo'],"photo-thumbnail")."' class='img-responsive' alt=''/>";
						echo "</li>";
					}
				}
			?>
		</ul><!--#lightGallery-->
	</div><!--.container-->
</section><!--#photos-->
<?php get_header(); ?>

<div id="page404" class="container">
	<h2 class="title-slim">Page introuvable</h2>
	<p>Désolé, cette page n'existe pas.</p>
	<?php
		$post = get_post(PAGE_ECOUTER);
		setup_postdata($post);
		echo $post->post_content;
	?>	
</div>	
	
<?php get_footer(); ?>
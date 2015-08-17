<?php get_header(); ?>


<div id="single-actualite" class="actu-<?php echo $post->post_name;?>">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12">
				<?php
					if(have_posts()){
						while(have_posts()){
							the_post();
							
							if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							}
							echo "<h1 class='title title-slim title-after-breadcrumbs'>".get_the_title()."</h1>";
							echo "<div class='row'>";
								echo "<div class='col-md-7'><div class='actu-date'>Posté le ".get_the_date('d F Y')."</div></div>";
								echo "<div class='col-md-5'><div class='addthis_sharing_toolbox pull-right'></div></div>";
							echo "</div>";
							echo "<div class='actualite'>";
								echo "<div class='thumbnail-large'>".get_the_post_thumbnail( get_the_ID(), "actu-large" )."</div>";
								echo "<div class='content'>".apply_filters( 'the_content', get_the_content() )."</div>";
							echo "</div>";
						}
					}
				?>
				<a href="<?php echo get_bloginfo('url');?>/actualites" class="retour">
					&laquo; Retour
				</a>
			</div><!--col-md-8-->
			<div class="col-md-4  hidden-sm hidden-xs">
				<?php get_sidebar();?>
			</div><!--colmd-->
		</div><!--row-->
	</div><!--.container-->
</div><!--#page-->


<?php get_footer(); ?>

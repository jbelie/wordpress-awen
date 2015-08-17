<?php get_header(); ?>


<div id="page-<?php echo $post->post_name;?>-wrapper" class="page-wrapper">
	<?php
	if(have_posts()){
		while(have_posts()){
			the_post();


			if(file_exists(__DIR__."/page-templates/page-".$post->post_name.".php")){
				require_once(__DIR__."/page-templates/page-".$post->post_name.".php");
			}else{
				// echo "<h1>".get_the_title()."</h1>";
				// echo "<div class='page-content'>".get_the_content()."</div>";
			}
		}
	}
	
	?>
</div><!--#page-->


<?php get_footer(); ?>

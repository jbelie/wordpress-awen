<?php

/* 
 * WIDGET - ZONE DE WIDGETS
 */
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
        'name' => 'Footer_1_1',
		'before_widget' => '<div id="footer_1_1" class="widget_sidebar white">',
        'after_widget' => '</div>',
        'before_title' => "<h4 class='title title-dots violetLight dosis'>",
        'after_title' => '</h4>'
	));	
	register_sidebar(array(
        'name' => 'Footer_1_2',
		'before_widget' => '<div id="footer_1_2" class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => "<h4  class='title title-dots violetLight dosis'>",
        'after_title' => '</h4>'
	));	

	
	register_sidebar(array(
        'name' => 'Footer_2_1',
		'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
	));	
}
?>
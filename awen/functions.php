<?php
ini_set("display_errors",false);
/*
 * INCLUDE
 */
require_once("inc/custom-post-type.php");
require_once("inc/wp_bootstrap_navwalker.php");
require_once("inc/identifiants-pages.php");
require_once("inc/widget.php");


/* 
 * FONCTION DE DEBUG
 */
function debug($data){
	if(get_current_user_id()==1){
		var_dump("VISIBLE SEULEMENT PAR ADMINISTRATEUR");
		var_dump($data);
	}
}


/*
 * REMOVE ADMIN BAR
 */
if(get_current_user_id!=1)
	add_filter('show_admin_bar', '__return_false');



/*
 * IMAGE SIZE
 */
add_image_size("actu-large",750,300,true);
add_image_size("actu-small",300,250,true);
add_image_size("video-thumbnail",230,130,true);
add_image_size("photo-thumbnail",380,99999,false);
add_image_size("square",250,250,true);


/*
 * THUMBNAIL
 */
if (function_exists('add_theme_support')) {
 add_theme_support('post-thumbnails');
}

/*
 * EXCERPT
 */
function custom_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );  

function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*
 * YOUTUBE
 */
function get_youtube_id($url){
	$query_string = array();
	parse_str(parse_url($url, PHP_URL_QUERY), $query_string);
	$id = $query_string["v"];
	return $id;
}

/*
 * IMAGE
 */
 define("IMAGE",0);
function image_src($ID,$format="full"){
	$images_array = wp_get_attachment_image_src($ID ,$format);
	$img = $images_array[IMAGE];
	
	return $img;
}

/*
 * CSS
 */
function awen_styles() {
	wp_enqueue_style( 'source-sans', "//fonts.googleapis.com/css?family=Source+Sans+Pro&#038;ver=3.9.3" );
	wp_enqueue_style( 'open-sans', "//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" );
	wp_enqueue_style( 'animate', get_bloginfo('template_url')."/css/animate.min.css" );
	wp_enqueue_style( 'animate', get_bloginfo('template_url')."/css/animate.min.css" );
	wp_enqueue_style( 'light-gallery', get_bloginfo('template_url')."/css/lightGallery.css" );
	wp_enqueue_style( 'bootstrap', get_bloginfo('template_url')."/css/bootstrap.min.css" );
	wp_enqueue_style( 'bootstrap-theme', get_bloginfo('template_url')."/css/bootstrap-theme.min.css" );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'awen_styles' );


/**
 * JS
 */
function awen_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/js/vendor/bootstrap.min.js", array(), '1.0.0', true );
	wp_enqueue_script( 'images-loaded', get_template_directory_uri() . "/js/vendor/imagesloaded.pkgd.min.js", array(), '1.0.0', true );
	wp_enqueue_script( 'masonry', get_template_directory_uri() . "/js/vendor/masonry.pkgd.min.js", array(), '1.0.0', true );
	wp_enqueue_script( 'light-gallery', get_template_directory_uri() . "/js/vendor/lightGallery.min.js", array(), '1.0.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . "/js/vendor/wow.min.js", array(), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . "/js/main.js", array(), '1.0.0', true );
}



add_action( 'wp_enqueue_scripts', 'awen_scripts' );


/*
 * ADMIN LOGO
 */
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/admin-logo.png");
            padding-bottom: 0px;
			width:200px;
			height:123px;
			background-size:100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>

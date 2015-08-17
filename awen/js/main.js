function resizeFullScreen(){
	$('#fullpage-website').height($(window).height());
}


$(document).ready(function(){

	
	if($('html').hasClass('csstransforms'))
		new WOW().init();
	
	/** FULLSCREEN HOME **/
	//FullScreen
	resizeFullScreen();
	$(window).on('resize',function(){resizeFullScreen();});
	
	//Player
	if($('#ecouter').length){
		var original_src = $('#player iframe')[0].src;
		var autoplay_src = original_src+"?autoplay=true";
		
		$('#ecouter').click(function(e){
			e.preventDefault();
			autoplay_video();
		});
	}
	function autoplay_video(){
		$('#ecouter').toggleClass('access');
		$('#player').toggleClass('visible').toggleClass('access').addClass('animated fadeInDown');
		$("#player iframe")[0].src = autoplay_src;
	}
	function original_video(show_video){
		if($('#player').hasClass('visible')){
			$('#ecouter').toggleClass('access');
			$('#player').removeClass('visible').toggleClass('access').removeClass('animated fadeInDown');
		}
		$("#player iframe")[0].src = original_src;
	}
	
	//ScrollDown
	$('.scroll-down').click(function(e){
		e.preventDefault();
		var hauteur_page = $("#fullpage-website").height() - $('#navbar').height();
		original_video();
		$('html, body').animate({scrollTop : hauteur_page},1000);
	});
	/** END - FULLSCREEN HOME **/
	
	/** MENU **/
		function check_menu_scroll(){
			var hauteur_menu = $(window).height() - ($('#header').height()*2);

			if ($(document).scrollTop() > hauteur_menu) {
				if(!$('#header').hasClass('menu-active')){
					$('#header').removeClass('menu-inactive').addClass('menu-active');
					$('#header-bg').stop().animate({top:0},400,"swing",function(){
						$('#logo').stop().animate({opacity:1},100);
					});
					$('.nav').addClass('nav-right');
					// $('#menu-menu_header').addClass('right');
					original_video();
				}
			} else {
				if(!$('#header').hasClass('menu-inactive')){
					// $('#menu-menu_header').removeClass('right');
					$('#header').removeClass('menu-active').addClass('menu-inactive');
					$('#logo').stop().animate({opacity:0},200,function(){
						var topMenu = ($('body').hasClass('mobile'))?0:-100;
						$('#header-bg').stop().animate({top:topMenu},300);
					});
					$('.nav').removeClass('nav-right');
				}
			}
		}
		if($('.home').length){
			check_menu_scroll();
			$(window).scroll(function() {check_menu_scroll();});
		}
	/** END - MENU **/
	
	/** PHOTOS **/
	if($('#lightGallery').length){
		var container = document.querySelector('#lightGallery');
		var msnry = new Masonry( container, {
		  itemSelector: '.item'
		});
		imagesLoaded( container, function() {
			msnry.layout();
		});
		$("#lightGallery").lightGallery(); 
	}
	/** END - PHOTOS **/
	
	/** PAGE-GROUPE **/
	if($('#page-groupe').length){
		$('.membre-thumbnail').click(function(e){
			e.preventDefault();
			var to_scroll = $('#'+$(this).attr('data-membre')).offset().top-100;
			$('html, body').animate({scrollTop : to_scroll},1000)
		});
	}
	/** END - PAGE-GROUPE **/
	
	/** PAGE-MUSIQUE **/
	if($('#musique-nav').length){
		var menu_audio_is_fixed = false;
		var menu_audio_top = $("#musique-nav").offset().top - ($('#musique-nav').height()+19);

				
		if(window.location.hash) {
			if(window.location.hash){
				var scroll_to_px = $(window.location.hash).offset().top;
				scroll_to_px-=($('#header').height() + $('#musique-nav').height());
				$('html, body').animate({scrollTop : scroll_to_px},1000);
			}
		}
		
		function check_menu_audio_scroll(){
			var scroll_top = $(document).scrollTop();
			
			if(scroll_top>menu_audio_top && !menu_audio_is_fixed){
				$('#musique-nav').addClass('fixed');
				menu_audio_is_fixed = true;
			}
			if(scroll_top<menu_audio_top && menu_audio_is_fixed){
				$('#musique-nav').removeClass('fixed');
				menu_audio_is_fixed = false;
			}
		}
		check_menu_audio_scroll();
		$(window).scroll(function() {check_menu_audio_scroll();});
		
		$('#musique-nav .button').click(function(e){
			e.preventDefault();
			var scroll_to_px = $($(this).attr('href')).offset().top;
			scroll_to_px-=($('#header').height() + $('#musique-nav').height());
			$('html, body').animate({scrollTop : scroll_to_px},1000);
		});

		
		$('#player-list .video a').click(function(evt){
			evt.preventDefault();
			$('#player-video iframe').attr('src',$('#player-video iframe').attr('data-original-url')+$(this).attr('data-id-video')+"?autoplay=true");
		});
		
	}
	/** END - PAGE-MUSIQUE **/
});

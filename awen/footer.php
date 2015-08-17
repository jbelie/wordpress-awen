	</div><!-- #content -->

	<footer id="footer" class="site-footer">
		<div id="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 footer-column footer-column-first">
						<?php 
							if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer_1_1') )
						?>
					</div>
					<div class="col-sm-4 footer-column">
						<h5 class="title title-footer">Plan du site</h5>
						<?php 
							if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer_1_2') )
						?>
					</div>
					<div id="footer_1_3" class="col-sm-4 footer-column footer-column-last">
						<div id="contactez-nous">
							<a href='mailto:think-to-protect-mail@toto.fr' class='button button-black button-icon button-contact'>
								Nous contacter
							</a>
						</div><!--contactez-nous-->
						<div id="retrouvez-nous-footer">
							<h5 class="title title-footer">Retrouvez Awen sur : </h5>
							<a href='https://www.youtube.com/channel/UCBTDkBDM8Jc9z6KfDOSLYoA' target='_blank' id='youtube' class='social-network'>
								<span class='access'>Youtube</span>
							</a>
							<a href='https://www.facebook.com/universAwen?fref=ts' target='_blank' id='facebook' class='social-network'>
								<span class='access'>Facebook</span>
							</a>
							<a href='https://soundcloud.com/awen-5' target='_blank' id='soundcloud' class='social-network'>
								<span class='access'>Soundcloud</span>
							</a>
							<a href='<?php bloginfo('rss2_url'); ?>' target='_blank' id='rss' class='social-network'>
								<span class='access'>Flux RSS</span>
							</a>
						</div><!--retrouvez-nous-->
					</div>
				</div><!--row-->
			</div><!--container-->
		</div><!--footer-top-->
		<div id="footer-bottom">
			<div class="container">
				<?php 	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer_2_1') );?>
			</div><!--container-->
		</div><!--footer-bottom-->
	</footer><!-- .site-footer -->

</div><!-- #site -->



<!--JS-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_bloginfo('template_url');?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>



<!-- Google Analytics. -->
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53733b171938146b" async="async"></script>

<!--WP_Footer-->
<?php wp_footer(); ?>

</body>
</html>

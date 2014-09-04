		
		</div> <!-- end of .wrap container -->

		<div class="push"></div> 

			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
				
					<p class="m-1of2 t-1of3 d-1of3">
						<a href="http://jennmariemitchellart.tumblr.com/"><span class="social-icon" data-icon="&#xe192;"></span></a>
						<a href="https://twitter.com/jenit2winit"><span class="social-icon" data-icon="&#xe16f;"></span></a>
						<a href="https://www.facebook.com/jennmariemitchellart"><span class="social-icon" data-icon="&#xe16b;"></span></a>
					</p>
					<ul class="contact m-1of2 t-1of3 d-1of3">
						<li>M: 555.555.5555</li>
						<li>E: jen@mitchell.com</li>
					</ul>
					<p class="source-org copyright m-none t-1of3 d-1of3">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
			 	</div>
			</footer>
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
	</body>

</html> <!-- end of site. what a ride! -->

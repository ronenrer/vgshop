			
			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="container clearfix">
					<div class="row">
						<div class="col-xs-6 col-sm-4 contact-info">
							<?php dynamic_sidebar( 'footer1' ); ?>
						</div>
						<div class="col-xs-6 col-sm-4">
							<nav role="navigation">
								<?php 
								wp_nav_menu( array(
									'menu'              => 'footer-nav',
									'theme_location'    => 'footer-links',
									'depth'             => 2,
									'container'         => 'div',
									'container_id'   	=>	'navbar' ,
									'container_class'   => '',
									'menu_class'        => 'nav nav-justified',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
								);
							?>
							</nav>
						</div>
						</div>
						<div class="col-xs-6 col-sm-4">
							<?php dynamic_sidebar( 'footer3' ); ?>
						</div>
						<div class="col-xs-6 col-sm-4">
							<?php dynamic_sidebar( 'footer4' ); ?>
						</div>
					</div>				
				</div>
				<div class="bottom-footer clearfix">
					<div class="container">
						<p class="source-org copyright pull-right">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
						<p class="credits pull-left">עיצוב+קוד <a href="http://aeroplane.co.il">AEROPLANE</a></p>
					</div>
				</div>
			</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>

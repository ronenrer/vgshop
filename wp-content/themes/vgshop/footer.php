			
			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="container clearfix">
					<div class="row">
						<div class="col-xs-6 col-sm-4 contact-info">
							<h3>על הוופורייזר <span>בקצרה</span></h3>
							<p><?php echo get_field('about_short',option) ?></p>
							<a class="more" href="<?php echo get_field('about_link',option) ?>">קרא עוד &larr;</a>

						</div>
						<div class="col-xs-6 col-sm-2">
							<h3>עמודים <span>נבחרים</span></h3>
							<nav role="navigation">
								<?php bones_footer_links()?>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-3 contact-details">
							<h3>פרטי <span>יצירת קשר</span></h3>
							<?php 
								$site_email = get_field('site_email',option);
								$site_phone = get_field('site_phone',option);
								if (!empty($site_email))
									echo '<li><span class="glyphicon glyphicon-envelope"></span><a href="mailto:'.$site_email.'">'.$site_email.'</a></li>';
								if (!empty($site_phone))
									echo '<li><span class="glyphicon glyphicon-phone"></span><a href="tel:'.$site_phone.'">'.$site_phone.'</a></li>';
								?>
						</div>
						<div class="col-xs-6 col-sm-3">
							<h3>תשלום  <span>מאובטח</span></h3>
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

			
			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="container clearfix">
					<div class="row">
						<div class="col-xs-6 col-sm-4 widget contact-info">
							<h3 class="widgettitle">על הוופורייזר <span class="text-muted">בקצרה</span></h3>
							<p><?php echo get_field('about_short',option) ?></p>
							<a class="more" href="<?php echo get_field('about_link',option) ?>">קרא עוד &larr;</a>

						</div>
						<div class="col-xs-6 col-sm-2  widget">
							<h3 class="widgettitle">עמודים <span class="text-muted">נבחרים</span></h3>
							<nav role="navigation">
								<?php bones_footer_links()?>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-3 widget contact-details">
							<h3 class="widgettitle">פרטי <span class="text-muted">יצירת קשר</span></h3>
							<?php 
								$site_email = get_field('site_email',option);
								$site_phone = get_field('site_phone',option);
								if (!empty($site_email))
									echo '<p><a href="mailto:'.$site_email.'"><span class="glyphicon glyphicon-envelope"></span> '.$site_email.'</a></p>';
								if (!empty($site_phone))
									echo '<p><a href="tel:'.$site_phone.'"><span class="glyphicon glyphicon-phone"></span> '.$site_phone.'</a></p>';
								?>
						</div>
						<div class="col-xs-6 col-sm-3 widget">
							<h3 class="widgettitle">תשלום  <span class="text-muted">מאובטח</span></h3>
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

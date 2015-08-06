				<div id="sidebar-shop" class="sidebar col-sm-3 col-sm-push-9 clearfix" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebar-shop' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-shop' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
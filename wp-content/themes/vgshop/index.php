<?php get_header(); ?>

			<div class="content">
				<header class="article-header">
					<h1 class="page-title container">
						<?php if(get_option( 'page_for_posts' ) ) echo get_the_title( get_option( 'page_for_posts' ) ); ?> 
					</h1>
				</header>
				<div id="inner-content" class="container clearfix">
					<div id="main" class="col-sm-9 first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">				
							<h1 class="single-title"><?php the_title()?></h1>
							<p class="byline vcard"><?php
								printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));
							?></p>
							<section class="entry-content clearfix">
								<?php the_content(); ?>
							</section>

						</article>

						<?php endwhile; ?>

								<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
										<?php bones_page_navi(); ?>
								<?php } else { ?>
										<nav class="wp-prev-next">
												<ul class="clearfix">
													<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
													<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
												</ul>
										</nav>
								<?php } ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</div>

					<?php get_sidebar('blog'); ?>

				</div>

			</div>

<?php get_footer(); ?>

<?php get_header(); ?>

			<div class="content">
				
				<header class="article-header" <?php echo $header_style ?>>
					<h1 class="page-title container" itemprop="headline"><?php the_title(); ?></h1>
				</header>
				<div id="inner-content" class="container clearfix">
						
						<div id="main" class="col-sm-9" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
								<section class="entry-content clearfix" itemprop="articleBody">
										<?php the_content(); ?>
										
								</section>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>

<?php get_header(); ?>
	<?php $title =  get_the_title(); ?>
			<div class="content">
				
				<header class="article-header" <?php echo $header_style ?>>
					<h1 class="page-title container" itemprop="headline">חנות</h1>
				</header>
				<div id="inner-content" class="container clearfix">

						<div id="main" class="col-sm-9 col-sm-push-3 clearfix" role="main">

							<?php woocommerce_content(); ?>

						</div>

						<?php get_sidebar('shop'); ?>

				</div>

			</div>

<?php get_footer(); ?>

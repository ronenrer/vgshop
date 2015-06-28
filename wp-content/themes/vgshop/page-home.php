<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="content">
        <div id="inner-content" class="container clearfix">
            <div id="main" class="" role="main">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
          
                <section class="entry-content clearfix" itemprop="articleBody">
                   <div class="intro-text"> <?php the_content(); ?></div>                    
                </section>
                <?php echo do_Shortcode('[product_categories number="12" parent="0"]') ?>
                <!-- Three columns of text below the carousel -->
                <div class="row main-features">
                  <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h2>איך משתמשים</h2>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                   <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h2>איך משתמשים</h2>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                   <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h2>איך משתמשים</h2>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                   <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h2>איך משתמשים</h2>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->

              <!-- START THE FEATURETTES -->

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                  <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 col-md-pull-5">
                  <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
              </div>

            <!-- /END THE FEATURETTES -->

           </article>

           <?php endwhile;endif; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>

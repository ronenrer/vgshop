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
                   <div class="jumbotron text-center">
                      <h2>על VG קלאסיק</h2>
                      <div class="lead">
                         <?php the_content(); ?>
                      </div>
                </section>
                <h2 class="text-center">החנות שלנו</h2>
                <?php echo do_Shortcode('[product_categories number="4" parent="0"]') ?>
                <!-- Three columns of text below the carousel -->
                <hr class="featurette-divider">
                <div class="row main-features">
                  <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h3>רכישה</h3>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">קנו עכשיו &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                   <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h3>איך משתמשים</h3>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">למדריך המלא &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                   <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h3>שאלות נפוצות</h3>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">לכל השאלות &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                   <div class="col-md-3">
                    <div class="img-box">
                      <img class="img-circle" src="http://www.vgshop.co.il/wp-content/uploads/2012/10/circle_feature_2.jpg" alt="Generic placeholder image" width="189" height="189">
                      <h3>אודות היצרן האמריקאי</h3>
                    </div>
                    <p>מקטרת האידוי (Vaporizer) המקורית עכשיו בישראל. מה זה אידוי קנאביס רפואי ולמה אתם חייבים אחת.</p>
                    <p><a class="btn btn-default" href="#" role="button">המשך קריאה &raquo;</a></p>
                  </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->

              <!-- START THE FEATURETTES -->

              <hr class="featurette-divider">
              <div class="featurettes row">
                <div class="col-sm-6 featurette">
                  <div class="col-sm-3">
                    <img class="featurette-image img-responsive center-block" src="<?php echo get_stylesheet_directory_uri()?>/library/images/icon-delivery.png" alt="Generic placeholder image">
                  </div>
                  <div class="col-sm-9">
                    <h3 class="featurette-heading">דמי משלוח <span class="text-muted"> ומדיניות החזרה</span></h3>
                    <p class="lead">VGshop מספקת אחריות בישראל לכל החיים על מוצרי VaporGenie.</p>
                  </div>                  
                </div>
                <div class="col-sm-6 featurette">
                  <div class="col-sm-3">
                    <img class="featurette-image img-responsive center-block" src="<?php echo get_stylesheet_directory_uri()?>/library/images/icon-discrete.png" alt="Generic placeholder image">
                  </div>
                  <div class="col-sm-9">
                    <h3 class="featurette-heading">אריזה <span class="text-muted">דיסקרטית.</span></h3>
                    <p class="lead">המוצר יגיע אל ביתך ארוז בצורה דיסקרטית וללא רמז על זהות המוצר.</p>
                  </div>
                </div>
              </div>
            <!-- /END THE FEATURETTES -->

           </article>

           <?php endwhile;endif; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>

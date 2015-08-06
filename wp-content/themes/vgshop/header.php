<!doctype html>
<html <?php language_attributes(); ?>><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <!--[if !IE]><!-->
     <style type="text/css">@import url(https://fonts.googleapis.com/earlyaccess/notosanshebrew.css);</style>
     <style type="text/css">@import url(https://fonts.googleapis.com/earlyaccess/notosanshebrew.css);</style>
     <style type="text/css">@import url(https://fonts.googleapis.com/earlyaccess/alefhebrew.css);</style>
   <!--<![endif]-->  
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
<!--[if (IE)|(gte IE 9)]><!--><link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/ie-only.css" /><![endif]-->
	</head>

	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
      <?php 
        $logo = get_field('site_logo',option);
      ?>
		<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar  navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo home_url()?>"><img src="<?php echo $logo['url']?>"/></a>
            </div>
             <?php bones_main_nav();?>
          </div>
        </nav>
      </div>
    </div>
	<?php if (is_front_page()):?>
			<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="container">
            <div class="image-container col-sm-6">
               <img class="first-slide" src="<?php echo get_stylesheet_directory_uri()?>/library/images/slide1.png" alt="First slide">
            </div>
            <div class="carousel-caption col-sm-6">
             <h1>VG  Classic</h1>
              <p>צריכה בריאה, יותר חסכונית ונטולת ריח</p>
              <p>לשאוף את הטוב ביותר</p>
              <h3><span>290 ש״ח</span> בלבד!</h3>
              <ul>
                 <li><span class="glyphicon glyphicon-ok"></span> משלוח חינם, אריזה דיסקרטית</li>
                <li><span class="glyphicon glyphicon-ok"></span> המוצר מיוצר בארה"ב</li>
                <li><span class="glyphicon glyphicon-ok"></span> התשלום באמצעות שירות פייפאל מאובטח</li>
              </ul>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">לרכישה</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="image-container col-sm-6">
               <img class="second-slide" src="<?php echo get_stylesheet_directory_uri()?>/library/images/slide2.png" alt="First slide">
            </div>
            <div class="carousel-caption  col-sm-6">
              <h1>מקטרת אידוי אלומיניום</h1>
              <p>קטנה, עמידה ונכנסת לכל כיס</p>
              <h3><span>220 ש״ח</span> בלבד!</h3>
              <ul>
                 <li>משלוח חינם, אריזה דיסקרטית</li>
                <li>המוצר מיוצר בארה"ב</li>
                <li>התשלום באמצעות שירות פייפאל מאובטח</li>
              </ul>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">לרכישה</a></p>
            </div>
          </div>
        </div>
        <div class="item">
           <div class="container">
              <div class="col-sm-6">
               <div class="embed-responsive embed-responsive-16by9">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/-ofA0DpAZQY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="carousel-caption col-sm-6">
              <h1>ה- VG Classic</h1>
              <p>קלה ונוחה לשימוש, נכנסת לכיס<br/>
                ואפשר לקחת אותה לכל מקום...</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">קראו עוד</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	<?php endif;?>			
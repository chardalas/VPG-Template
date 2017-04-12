<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php Loader::element('header_required'); ?>
    <?php global $u;
      $mode = $u->isLoggedIn ? 'fixed' : 'static';
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="<?php print $view->getThemePath() ?>/css/bootstrap.css" rel='stylesheet' type='text/css'>
    <link href="<?php print $view->getThemePath() ?>/css/bootstrap-social.css" rel='stylesheet' type='text/css'>
    <link href="<?php print $view->getThemePath() ?>/css/font-awesome.css" rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="<?php print $view->getThemePath() ?>/css/vpg-stylesheet.css" rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="<?php print $c->getPageWrapperClass() ?>">
    <div class="navbar-wrapper">
      <nav class="navbar navbar-default navbar-<?php print $mode ?>-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-lg-2">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php print $this->url(''); ?>" style="height:auto;">
                <img class="logo" src="<?php print $view->getThemePath() ?>/images/logo.png" alt="Victor Pasmore Gallery" title="Victor Pasmore Gallery" />
                </a>
              </div>
            </div>
            <div class="col-sm-9 col-lg-10">
              <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
                <?php 
                  $a = new GlobalArea('Main Menu');
                  $a->display($c);
                ?>
                <div class="col-xs-12 col-md-9 col-lg-4">
                  <form action="<?php echo View::url(''); ?>" method="get" class="navbar-left" role="search">
                    <div class="input-group">
                      <input name="search_paths[]" type="hidden" value="">
                      <input name="query" type="text" value="" class="form-control" placeholder="Search..." id="srch-term">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.nav-collapse -->
      </nav>
    </div>
      
	  
 <div class="container">
			<div class="row">
				<div class="templatemo-contact" id="templatemo-contact">
					<?php
					$a = new Area('Contact');
					$a->enableGridContainer();
					// $a->setAreaGridMaximumColumns(1);
					$a->display($c);
					?>
				</div>
			</div>
		</div>
	  
	  	<div class="container">
			<div class="row">
				<div class="col-md-12">
				<p><br>
</p>
<p>ADMISSION TO THE VICTOR PASMORE GALLERY IS FREE
</p>
<p>Opening hours Monday - Friday, 11.00am - 3.00pm (except for public holidays)
</p>
<p>Interest: Art, Culture, Education, Galleries and Museums,
</p>
<p>How to find us
</p>
<p>The Central Bank of Malta Annexe, St James Counterguard, Valletta, VLT 1060 (The Gallery is just off Girolamo Cassar Avenue and 5 minutes away from the Valletta bus terminus and Triton Fountain)
</p>
<p>Accessibility
</p>
<p>Wheel-chair friendly + WC
</p>
<p>Contact Details
</p>
<p>Email: <a href="mailto:info@victorpasmoregallery.org">info@victorpasmoregallery.org</a>
</p>
<p>Tel: (+356) 2550 3360
</p>
<p>Facebook: Victor Pasmore Gallery (<a href="https://www.facebook.com/victorpasmoregallery/">https://www.facebook.com/victorpasmoregallery/</a>)
</p>
<p>Instagram: Victor Pasmore Gallery (<a href="https://www.instagram.com/vpgallery/">https://www.instagram.com/vpgallery/</a>)
</p>
<p>Tours
</p>
<p>Free daily gallery talk at 1.00pm. Lasts around 30 minutes.
</p>
<p>Group visits of between 10 to 20 persons per group will be providd with a free tour of 30-45 minutes by the gallery curator. Tours are available in English and Maltese and must be booked in advance (link to contact form). Larger groups will be split into 20 persons or less. CONTACT US to book a group visit on your prefereed date and time. Group tours may also be organised before or after hours, but are subject to availability and security conditions.
</p>
<p>School visits
</p>
<p>Specialised and child-friendly tours are offered beween 9.00am-12.00pm, for groups which do no exceed 25 persons. These tours are of a 60 minute duration and include an observation and drawing exercise in the garden just outside the gallery. CONTACT US or further information and reservation.
</p>
<p>Events
</p>
<p>The Victor Pasmore Gallery organises seasonal children and family workshops, and hosts monthly free public talks as part of the TUESDAY TALKS series. See the full list of past and upcoming events and activities in the CALENDAR tab. &lt;br&gt; All events of the Victor Pasmore Gallery are endorsed by the Valletta 2018 Foundation.
</p>
<p>SHARE YOUR VISIT:
</p>
<p><a class="specialeffects" href="https://www.tripadvisor.com/Attraction_Review-g190328-d8785062-Reviews-Victor_Pasmore_Gallery-Valletta_Island_of_Malta.html">Share your TripAdvisor ratings and reviews</a>
</p>
				</div>
            </div>
        </div>
        
<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-sponsors text-center">
              <ul class="list-inline">
                <li>
                  <a href="#">
                  <img style="max-width:90px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/fpm-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:130px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/cbm-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:130px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/vpf-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:50px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/fp-logo.png" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-links text-center">
              <ul class="list-inline list-links">
                <li>
                  <a href="#">
                  Latest News
                  </a>
                </li>
                <li>
                  <a href="#">
                  Contact Us
                  </a>
                </li>
                <li>
                  <a href="#">
                  Terms and Conditions
                  </a>
                </li>
              </ul>
              <ul class="list-inline list-social">
                <li>
                  <a class="btn btn-social-icon btn-facebook">
                  <span class="fa fa-facebook"></span>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/vpgallery/" target="_blank" class="btn btn-social-icon btn-instagram">
                  <span class="fa fa-instagram"></span>
                  </a>
                </li>
                <li>
                  <a class="btn btn-social-icon btn-youtube">
                  <span class="fa fa-youtube"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php print $view->getThemePath() ?>/js/bootstrap.min.js"  type="text/javascript"></script>
    <!-- <script src="<?php print $view->getThemePath() ?>/js/jquery.min.js" type="text/javascript"></script> -->
    <?php  Loader::element('footer_required'); ?>
  </body>
</html>
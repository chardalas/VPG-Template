<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php Loader::element('header_required'); ?>
    <title>Urbanic Free Website Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- Urbanic Template http://www.templatemo.com/tm-395-urbanic -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
    <!-- Google Web Font Embed -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="<?php print $view->getThemePath() ?>/css/bootstrap.css" rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="<?php print $view->getThemePath() ?>/js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
    <link href="<?php print $view->getStyleSheet('templatemo_style.less') ?>"  rel='stylesheet' type='text/css'>
    <link href="<?php print $view->getStyleSheet('vpg-stylesheet.less') ?>"  rel='stylesheet' type='text/css'>
    <link href="<?php print $view->getStyleSheet('vpg-stylesheet.css') ?>"  rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="<?php print $c->getPageWrapperClass() ?>">
      <div class="templatemo-top-menu">
        <div class="container">
          <!-- Static navbar -->
          <div class="navbar navbar-default" role="navigation">
            <div class="container">
              <div class="row">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a href="<?php print $this->url(''); ?>" class="navbar-brand">
                  <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/logo.png" alt="Victor Pasmore Gallery" title="Victor Pasmore Gallery" />
                  </a>
                </div>
                <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                  <?php
                    /**
                     * VPG-2 The "Main Menu" area.
                     */
                    $a = new GlobalArea('Main Menu');
                    $a->display($c);
                    // $a->enableGridContainer();
                    // print '<pre>';
                    // var_dump($this);
                    // print '</pre>';
                    // echo $this->url('sitemap');
                    // echo $this->url('artist');
                    // $a->enableGridContainer();
                    // print $a->getTotalBlocksInArea($c);
                    // print $a->getTotalBlocksInArea($c);
                    // $a = new Area('Menu region');
                    // $a->display();
                    
                    // $a = new Area('Menu region');
                    // $a->setBlockWrapperStart('<ul>');
                    // $a->setBlockWrapperEnd('</ul>');
                    // $a->display($c);
                    ?>
                  <!-- VPG-5 The Search block. -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" style="padding-left:0px">
                    <form action="<?php echo View::url(''); ?>" method="get" class="navbar-form navbar-right" role="search">
                      <div class="input-group">
                        <input name="search_paths[]" type="hidden" value="">
                        <input name="query" type="text" value="" class="form-control" placeholder="Search" id="srch-term">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
          </div>
          <!--/.navbar -->
        </div>
        <!-- /container -->
      </div>
      <div>
        <!-- Carousel -->
        <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#templatemo-carousel" data-slide-to="1"></li>
            <li data-target="#templatemo-carousel" data-slide-to="2"></li>
            <li data-target="#templatemo-carousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/home/lineal-symmetry in-five-movements.png" />
              <div class="container">
                <div class="carousel-caption">
                  <!-- <h1>WELCOME TO URBANIC</h1> -->
                  <!-- <p>CHOOSE THE ONE SUITABLE FOR YOU</p> -->
                  <!-- <p>
                    <a class="btn btn-lg btn-green" href="#" role="button" style="margin: 20px;">View Demo</a> 
                    <a class="btn btn-lg btn-orange" href="#" role="button">Free Download</a>
                    </p> -->
                </div>
              </div>
            </div>
            <div class="item">
              <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/home/victor-pasmore.png" />
              <div class="container">
                <div class="carousel-caption">
                  <div class="col-sm-6 col-md-6">
                    <!-- <h1>FLUID</h1> -->
                    <!-- <p>Suspendisse pellentesque, odio vel ultricies interdum, mauris nulla ullamcorper magna, non aliquet odio velit aliquam augue.</p> -->
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <!-- <h1>ENERGY</h1> -->
                    <!-- <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam mattis fringilla urna.</p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/home/the-fall-of-icarus.png" />
              <div class="container">
                <div class="carousel-caption">
                  <!-- <h1>RESPONSIVE LAYOUT</h1> -->
                  <!-- <p>This website theme is free to download and use for everyone. This layout is based on Bootstrap framework.</p> -->
                  <!-- <p><a class="btn btn-lg btn-orange" href="#" role="button">Read More</a></p> -->
                </div>
              </div>
            </div>
            <div class="item">
              <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/home/the-eye-and-the-symbol.png" />
              <div class="container">
                <div class="carousel-caption">
                  <!-- <h1>RESPONSIVE LAYOUT</h1> -->
                  <!-- <p>This website theme is free to download and use for everyone. This layout is based on Bootstrap framework.</p> -->
                  <!-- <p><a class="btn btn-lg btn-orange" href="#" role="button">Read More</a></p> -->
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        <!-- /#templatemo-carousel -->
      </div>
      <div class="templatemo-footer" >
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-inline">
                <li>
                  <a href="#">
                  <img style="max-width:70px;" class="img-responsive" src="<?php print $view->getThemePath() ?>/images/footer/fpm-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:70px" class="img-responsive" src="<?php print $view->getThemePath() ?>/images/footer/cbm-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:70px" class="img-responsive" src="<?php print $view->getThemePath() ?>/images/footer/vpf-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:40px" class="img-responsive" src="<?php print $view->getThemePath() ?>/images/footer/fp-logo.png" />
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-inline">
                <li>
                  <a href="#">
                    <p>Latest News</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <p>Contact Us</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <p>Terms and Conditions</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php print $view->getThemePath() ?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php print $view->getThemePath() ?>/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="<?php print $view->getThemePath() ?>/js/stickUp.min.js"  type="text/javascript"></script>
    <script src="<?php print $view->getThemePath() ?>/js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
    <script src="<?php print $view->getThemePath() ?>/js/templatemo_script.js"  type="text/javascript"></script>
    <!-- templatemo 395 urbanic -->
    </div>
    <?php Loader::element('footer_required') ?>
  </body>
</html>
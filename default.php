<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!DOCTYPE html>
<html lang="en">
  <!--Header starts-->
  <?php
    Loader::element('header_required');
    $this->addHeaderItem('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    $this->addHeaderItem('<meta name="viewport" content="width=device-width, initial-scale=1">');
    // Bootstrap
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/bootstrap.css" rel="stylesheet" type="text/css">');
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/bootstrap-social.css" rel="stylesheet" type="text/css">');
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/font-awesome.css" rel="stylesheet" type="text/css">');
    // Custom styles/js for this template.
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/vpg-stylesheet.css" rel="stylesheet" type="text/css">');
    ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!--Header ends-->
  <body>
    <!--open getPageWrapperClass-->
    <div class="<?php print $c->getPageWrapperClass() ?>">
      <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
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
      <!-- Carousel
        ================================================== -->
      <div id="vpgcarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#vpgcarousel" data-slide-to="0" class=""></li>
          <li data-target="#vpgcarousel" data-slide-to="1" class=""></li>
          <li data-target="#vpgcarousel" data-slide-to="2" class=""></li>
          <li data-target="#vpgcarousel" data-slide-to="3" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item">
            <img class="slide-1" src="<?php print $view->getThemePath() ?>/images/home/690-lineal-symmetry-in-five-movements.png" />
          </div>
          <div class="item">
            <img class="slide-2" src="<?php print $view->getThemePath() ?>/images/home/690-victor-pasmore.png" />
          </div>
          <div class="item">
            <img class="slide-3" src="<?php print $view->getThemePath() ?>/images/home/690-the-fall-of-icarus.png" />
          </div>
          <div class="item active">
            <img class="slide-4" src="<?php print $view->getThemePath() ?>/images/home/690-the-eye-and-the-symbol.png" />
          </div>
        </div>
        <a class="left carousel-control" href="#vpgcarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#vpgcarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        <!-- /.carousel -->
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
      <script src="<?php print $view->getThemePath() ?>/js/jquery.min.js" type="text/javascript"></script>
      <script src="<?php print $view->getThemePath() ?>/js/vpgallery.js" type="text/javascript"></script>
      <!--close getPageWrapperClass-->
    </div>
    <?php  Loader::element('footer_required'); ?>
  </body>
</html>
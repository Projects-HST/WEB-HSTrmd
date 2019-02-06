<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>RMD</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/et-line-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/full-slider.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/text-effect.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/menu-hamburger.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" />



</head>

<body>
    <section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top no-padding-bottom wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row no-padding" style="margin-bottom:40px;margin-top:20px;">
                <div class="col-md-2">
                    <a href="<?php echo base_url(); ?>home">  <img src="<?php echo base_url(); ?>assets/rmd.png" class="img-responsive rmd_logo"></a>



                    <nav class="navbar navbar-inverse">
                            <div class="navbar-header">
                              <a class="navbar-brand" href="#">Menu Bar</a>
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                            <div class="navbar-collapse collapse">
                              <div class="">
                                  <h3 class="" style="color:#646466;margin-top:20px;text-align:left;">Architecture</h3>
                                  <ul class="portfolio-filter nav nav-tabs">
                                      <li class=""><a href="#" id="all">All </a></li>
                                      <li class=""><a href="#" id="comm">Commercial </a></li>
                                      <li class=""><a href="#" id="condominiums">Condominiums</a></li>
                                      <li class=""><a href="#" id="hospitality">Hospitality</a></li>
                                      <li class=""><a href="#" id="industrial">Industrial</a></li>
                                      <li class=""><a href="#" id="institution">Institutional</a></li>
                                      <li class=""><a href="#" id="residence">Residences</a></li>

                                  </ul>
                              </div>

                    </div>
                  </nav>











                    <!-- <div class="">
                        <h3 class="" style="color:#646466;margin-top:20px;text-align:left;">Architecture</h3>
                        <ul class="portfolio-filter nav nav-tabs">
                            <li class=""><a href="#" id="all">All </a></li>
                            <li class=""><a href="#" id="comm">Commercial </a></li>
                            <li class=""><a href="#" id="condominiums">Condominiums</a></li>
                            <li class=""><a href="#" id="hospitality">Hospitality</a></li>
                            <li class=""><a href="#" id="industrial">Industrial</a></li>
                            <li class=""><a href="#" id="institution">Institutional</a></li>
                            <li class=""><a href="#" id="residence">Residences</a></li>

                        </ul>
                    </div> -->






                </div>
                <div class="col-md-10">

                        <div class="row">
                        <?php foreach($res as $rows){ ?>


                            <div class="col-md-4 col-lg-4 col-sm-6 <?php echo lcfirst($rows->sub_category_name);?> project_thumb">
                                <div class="content">
                                    <a href="<?php echo base_url(); ?>project_details/<?php echo $rows->id; ?>" >
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows->cover_photo; ?>">

                                        <div class="middle">
                                            <div class="text"><?php echo $rows->project_name; ?> <br><?php echo $rows->city; ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php     } ?>


                        </div>



                </div>

            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid  footer-bottom">
            <div class="container">
                <div class="row footer_row">
                    <div class="col-md-8 col-sm-8 col-xs-12  text-left footer_menu">
                      <a href="<?php echo base_url(); ?>architecture">Architecture</a>
                      <a href="<?php echo base_url(); ?>interior">Interiors</a>
                      <a href="<?php echo base_url(); ?>about">About</a>
                      <a href="<?php echo base_url(); ?>contact">Contact</a>
                    </div>
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12 copyright text-left letter-spacing-1 text-center xs-margin-bottom-one">
                                    Crafted By <a href="https://happysanztech.com" >Happy Sanz Tech</a>
                                    </div> -->
                    <div class="col-md-4 col-sm-4 col-xs-12 footer-logo  text-right xs-text-center">
                        <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:;" class="scrollToTop" style="display: block;"><i class="fa fa-angle-up"></i></a>
    </footer>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-hover-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/skrollr.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/smooth-scroll.js"></script>
    <!-- jquery appear -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
    <!-- animation -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/page-scroll.js"></script>
    <!-- easy piechart-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.js"></script>
    <!-- parallax -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>
    <!--portfolio with shorting tab -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>
    <!-- owl slider  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popup-gallery.js"></script>
    <!-- text effect  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/text-effect.js"></script>
    <!-- revolution slider  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.revolution.js"></script>
    <!-- counter  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/counter.js"></script>
    <!-- countTo -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
    <!-- fit videos  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>
    <!-- imagesloaded  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- hamburger menu-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/classie.js"></script>
    <!-- <script type="text/javascript" src="js/hamburger-menu.js"></script> -->
    <!-- setting -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script>
        // $('#archshow').hide();
        // $("#architecture").click(function () {
        //   $('#archshow').show();
        // });
        $("#all").click(function () {
            $('.commerical').show();
            $('.residences').show();
            $('.hospitality').show();
            $('.condominiums').show();
            $('.institution').show();
            $('.industrial').show();
        });

        $("#comm").click(function () {
          $('.commerical').show();
          $('.residences').hide();
          $('.hospitality').hide();
          $('.condominiums').hide();
          $('.institution').hide();
          $('.industrial').hide();
        });
        $("#condominiums").click(function () {
          $('.commerical').hide();
          $('.residences').hide();
          $('.hospitality').hide();
          $('.condominiums').show();
          $('.institution').hide();
          $('.industrial').hide();
        });

        $("#residence").click(function () {
          $('.commerical').hide();
          $('.residences').show();
          $('.hospitality').hide();
          $('.condominiums').hide();
          $('.institution').hide();
          $('.industrial').hide();
        });
        $("#hospitality").click(function () {
          $('.commerical').hide();
          $('.residences').hide();
          $('.hospitality').show();
          $('.condominiums').hide();
          $('.institution').hide();
          $('.industrial').hide();
        });
        $("#institution").click(function () {
          $('.commerical').hide();
          $('.residences').hide();
          $('.hospitality').hide();
          $('.condominiums').hide();
          $('.institution').show();
          $('.industrial').hide();
        });
        $("#industrial").click(function () {
          $('.commerical').hide();
          $('.residences').hide();
          $('.hospitality').hide();
          $('.condominiums').hide();
          $('.institution').hide();
          $('.industrial').show();
        });


    </script>

</body>

</html>

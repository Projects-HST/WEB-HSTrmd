<!doctype html>
<html class="no-js" lang="en">
<head>
        <title>RMD</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- animation -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800" rel="stylesheet">
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
        <!-- et line icon -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/full-slider.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/text-effect.css" />
        <!-- hamburger menu  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/menu-hamburger.css" />
        <!-- common -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile.css" />
        <!-- responsive -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" />


    </head>
    <style>
    .nav-white.sticky-nav .navbar-nav li a { color: #000}
    .grid li{
      width:33% !important;
    }
    .gallery-img{
        border: 3px solid #fff;
    }
    section{
    padding: 45px 0px;
    }
    .nav-tabs > li > a{
      margin-left: 0px;

    }
    .nav-tabs{
      text-align: left;
      margin-top: 25px;

    }
    .nav-tabs > li > a{
      font-size: 10px;
        font-weight: 500;
        color: #646466;
    }
    .nav-tabs > li > a:hover{
      border-color: #f89520;
    }
    .nav-tabs{
      display: grid;
    }
    #masonry {
column-count: 2;
column-gap: 1em;
}

@media(min-width: 30em) {
#masonry {
column-count: 3;
column-gap: 1em;
}
}

@media(min-width: 40em) {
#masonry {
column-count: 4;
column-gap: 1em;
}
}

@media(min-width: 60em) {
#masonry {
column-count: 3;
column-gap: 10px;
}
}

@media(min-width: 75em) {
#masonry {
/* column-count: 4;
column-gap: 1em; */
}
}

.item {
background-color: none;
display: inline-block;
margin: 0 0 1em 0;
width: 100%;
cursor: pointer;
}

.item img {
max-width: 100%;
height: auto;
width: 100%;
margin-bottom: -4px;

/*idk why but this fix stuff*/
}

.item.active {
animation-name: active-in;
animation-duration: 0.7s;
animation-fill-mode: forwards;
animation-direction: alternate;
}

.item.active:before {
content: "+";
transform: rotate(45deg);
font-size: 48px;
color: white;
position: absolute;
top: 20px;
right: 20px;
background-color:rgba(0,0,0,0.85);
border-radius: 50%;
width:48px;
height:48px;
text-align:center;
line-height:48px;
z-index:12;
}

.item.active img {
animation-name: active-in-img;
animation-duration: 0.7s;
animation-fill-mode: forwards;
animation-direction: alternate;
}


@keyframes active-in {
0% {
opacity:1;
background-color:white;
}

50% {
opacity:0;
background-color:rgba(0,0,0,0.90);
}

100% {
opacity: 1;
position:fixed;
top:0;
left:0;
right:0;
bottom:0;
background-color:rgba(0,0,0,0.90);
}
}

@keyframes active-in-img {
0% {
opacity:1;
transform:translate(0%, 0%);
top: 0;
left: 0;
max-width: 100%;
}
49% {
opacity:0;
transform: translate(0%, -50%);
}
50% {
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -100%);
}
100% {
display: block;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
max-width: 90%;
width: auto;
max-height: 95vh;
opacity:1;
}
}
.item img:hover{
background-color: red;
}
.profile_details{
  /* margin-top: 35px; */
  padding-left: 25px;
  padding-right: 25px;
}
.profile_img{
  text-align: center;
  border: 2px solid #dcdcdc;
  /* padding: 85px; */
  padding: 85px 50px 86px 50px;
  font-size: 12px;
  margin-top: 40px;
}
h3 .fa{
  color: #f8981d;
}
.about_section{
  padding-left: 30px;
  padding-right: 30px;
}
@media only screen and (min-device-width : 375px) and (max-device-width : 667px) {
.about_section{
  margin-bottom: 100px;
}
   }
    </style>
    <body>


        <section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top no-padding-bottom wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <div class="container">
                        <div class="row no-padding" style="margin-bottom:40px;margin-top:20px;">
                          <div class="col-md-2">
                              <a href="<?php echo base_url(); ?>home">
                                <img src="<?php echo base_url(); ?>assets/rmd.png" class="img-responsive rmd_logo" style="margin-left:5px;"></a>
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

                                            <ul class="portfolio-filter nav nav-tabs" style="margin-left:5px;">
                                              <li class=""><a href="#" id="comm">About </a></li>
                                              <li class=""><a href="#studio" id="res">Studio</a></li>
                                              <li class=""><a href="#team" id="residence">Team</a></li>
                                            </ul>
                                        </div>

                              </div>
                            </nav>

                        </div>
                            <div class="col-md-10 about_section" >
                              <div class="row">

                                <h3 class="" style="margin-bottom:10px; margin-top:0px;font-size: 16px; text-align:justify;   line-height: 20px;"><span class=" font-weight-500" style="color:#f9a036;line-height: 20px;">Mhetras Design, established in the year 2002, is an architecture and interior design firms with a diverse portfolio of projects.</span></h3>
                                <p class="text-med" style="text-align:justify;line-height: 20px;">Our principals Rajit and Sheetal Mhetras have over 20 years of experience designing a variety of projects ranging from small apartments, restaurants, large residential complexes, cineplexes, community centres, boutique & experiential hotels and bespoke individual homes in addition to corporate interiors not just in India but overseas as well. At the heart of every successful project that we have executed over the years is an inane understanding of client's needs thereby helping us deliver flawless designs that meet and exceed their expectations. The environmental factors wherein a project is situated plays an important part in our design process which includes the selection of appropriate building technologies and materials to work in harmony with the local environmental conditions. We believe in long term customer satisfaction which stems from the holistic design process that we follow combined with focus on sustainability of the buildings and end use of the project. This client centric design philosophy which is the core of our firm has had most of our clients coming back for multiple projects. Wherever the client desires, we incorporate all the primary principles of Vaasthu into our designs.
</p>

                                </div>
                                <div class="row" id="studio">
                                    <h2 class="gray-text text-left" style="padding-left:0px;">Studio</h2>
                                <p>
                                  <div id="masonry">
                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_1.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_2.jpg" alt="" />
                                    </div>


                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_3.jpg" alt="" />
                                    </div>

                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_12.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_4.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_5.jpg" alt="" style="height:196px;"/>
                                    </div>
                                    <!-- <div class="item">
                                      <img src="studio/studio_7.jpg" alt="" />
                                    </div> -->
                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_8.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_9.jpg" alt="" />
                                    </div>
                                  <div class="item">
                                      <img src="<?php echo base_url(); ?>assets/studio/studio_11.jpg" alt="" style="height:163px;" />
                                    </div>

                                  </div>

                                </p>
                              </div>

                              <div class="row" id="team">
                                  <h2 class="gray-text text-left" style="padding-left:0px;">Team</h2>
                                    <br>
                                <div class="row">
                                      <div class="row"  style="margin-left:0px;">
                                        <div class="col-md-3">
                                          <img src="<?php echo base_url(); ?>assets/rajit.jpg">
                                        </div>
                                        <div class="col-md-9 profile_details">
                                              <h2 style="font-size:20px;">Rajit Mhetras</h2>
                                              <!--<span class="person-post">Designation</span>-->
                                               <p class="text-med" style="margin-top:10px;text-align:justify;line-height: 20px;">Rajit studied Bachelor of Architecture from BMS College of Engineering, Bangalore in 1995. He is the Principal Designer at Mhetras design and he joined the firm in 2008 after garnering a multitude of work experience. Spacial planning and attention to detail are his strengths and it shows notably in all his projects. </p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left:0px;">
                                      <br>
                                      <div class="col-md-3">
                                        <img src="<?php echo base_url(); ?>assets/sheetal.jpg">
                                      </div>
                                      <div class="col-md-9 profile_details">
                                            <h2 style="font-size:20px;">Sheetal Mhetras</h2>
                                            <!--<span class="person-post">Designation</span>-->
                                             <p class="text-med" style="margin-top:10px;text-align:justify;line-height: 20px;">Sheetal completed her Diploma in Interior Design in 1994. She started her practice at Mhetras Design in 2002 after a brief stint with an architect in Chennai. She handles all interior design related projects across multiple categories with a great sense of panache.  </p>
                                      </div>
                                  </div>

                                  <div class="row" style="margin-left:0px;">
                                    <br>
                                    <div class="col-md-3">
                                      <img src="<?php echo base_url(); ?>assets/prem.jpg">
                                        <!-- <h3 class="profile_img">
                                          <i class="fa fa-circle" aria-hidden="true"></i>
                                          <i class="fa fa-circle" aria-hidden="true"></i>
                                          <i class="fa fa-circle" aria-hidden="true"></i>
                                        </h3> -->
                                    </div>
                                    <div class="col-md-9 profile_details">
                                          <h2 style="font-size:20px;">Prem</h2>
                                          <!--<span class="person-post">Designation</span>-->
                                           <p class="text-med" style="margin-top:10px;text-align:justify;line-height: 20px;">Prem studied Bachelor of Architecture from Hindustan University in 2008. Since then, he is associated with the firm and handles technical aspects of all projects with design detailing as his core strength.</p>
                                    </div>
                                  </div>


                                  <div class="row" style="margin-left:0px;">

                                      <div class="col-md-3">
                                        <br>
                                          <img src="<?php echo base_url(); ?>assets/umais.jpg">
                                      </div>
                                    <div class="col-md-9 profile_details" style="margin-top:40px;">
                                          <h2 style="font-size:20px;">Umais</h2>
                                          <!--<span class="person-post">Designation</span>-->
                                           <p class="text-med" style="margin-top:10px;text-align:justify;line-height: 20px;">Umais studied Bachelor of Architecture from Measi Academy of Architecture in 2009. Since then, he is associated with the firm and handles design and execution of projects. </p>
                                    </div>
                                  </div>


                                    </div>



                                </div>
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
                                    Crafted By <a href="https://happysanztech.com" target="_blank">Happy Sanz Tech</a>
                                    </div> -->
                                    <div class="col-md-4 col-sm-4 col-xs-12 footer-logo  text-right xs-text-center">
                                      <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                      <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
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


</script>

    </body>
</html>

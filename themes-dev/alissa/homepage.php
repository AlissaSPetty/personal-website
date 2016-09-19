<? php
//Template Name: Homepage
?>
<head>
  <title>Alissa Taylor | Atlanta, GA</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/custom.min.css' ?>" />
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <script type="text/javascript" href="<?php echo get_stylesheet_directory_uri().'/js/script.js' ?>"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/css/foundation.css" ?>"/>
</head>
  <script src="<?php echo get_stylesheet_directory_uri()."/js/vendor/jquery.js" ?>"></script>
  <script src="<?php echo get_stylesheet_directory_uri()."/js/vendor/what-input.js"?>"></script>
  <script src="<?php echo get_stylesheet_directory_uri()."/js/foundation.min.js"?>"></script>
  <script>
    $(document).foundation();
  </script>

<div class="homepage">
  <div class="nav-container row fullWidth">
    <div class="logo small-4 columns">
      <p>Alissa Taylor</p>
    </div>
    <ul class="nav">
      <li class="small-2 columns"><a href="#">About</a></li>
      <li class="small-2 columns"><a href="#">Skills</a></li>
      <li class="small-2 columns"><a href="#">My Work</a></li>
      <li class="small-2 columns"><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="header row fullWidth" style="background:url(<?php echo get_stylesheet_directory_uri().'/images/header-bg.jpg' ?>); background-size: cover; height: 60vh; width: auto">
    <h1>Web Developer</h1>
    <div class="underline"></div>
    <p class="small-12 columns">Hi my name is Alissa Taylor, I am a 26 year old Web Developer based in Atlanta, GA. I am looking for a full-time position within an amazing new company. </p>
    <div class="social-media">
      <a href=""><i class="ion-social-linkedin linkedin"></i></a>
      <a href=""><i class="ion-social-github github"></i></a>
      <a href=""><i class="ion-social-facebook facebook"></i></a>
    </div>
  </div>
  <div class="projects-container row fullWidth">
    <h1 class="projects">Projects I have kicked ass on</h1>
    <div class="p1 small-12 medium-4 columns">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Tribes_Universe.png" alt="Tribes Universe" />
      <p>Title</p>
      <p>Date</p>
      <p>HoverState</p>
    </div>
    <div class="p2 small-12 medium-4 columns">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Midseason_Update.png" alt="Tribes Universe" />
      <p>Title</p>
      <p>Date</p>
      <p>HoverState</p>
    </div>
    <div class="p3 small-12 medium-4 columns">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Sol_Reveal.png" alt="Tribes Universe" />
      <p>Title</p>
      <p>Date</p>
      <p>HoverState</p>
    </div>
    <div class="p4 small-12 medium-4 columns">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Xing-Tian_Reveal.png" alt="Tribes Universe" />
      <p>Title</p>
      <p>Date</p>
      <p>HoverState</p>
    </div>
    <div class="p5 small-12 medium-4 columns">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Season_3.png" alt="Tribes Universe" />
      <p>Title</p>
      <p>Date</p>
      <p>HoverState</p>
    </div>
    <div class="p6 small-12 medium-4 columns">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Paladins.png" alt="Tribes Universe" />
      <p>Title</p>
      <p>Date</p>
      <p>HoverState</p>
    </div>
  </div>
</div>

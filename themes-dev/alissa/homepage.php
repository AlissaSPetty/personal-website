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
    <ul class="nav small-12 columns">
      <li class="small-2 columns"><a href="#">About</a></li>
      <li class="small-2 columns"><a href="#">Skills</a></li>
      <li class="small-2 columns"><a href="#">My Work</a></li>
      <li class="small-2 columns"><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="header row fullWidth" style="background:url(<?php echo get_stylesheet_directory_uri().'/images/header-bg.jpg' ?>); background-size: cover; width: auto">
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
      <a href="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Tribes_Universe.png" alt="Tribes Universe" />
        <div class="about">
          <p class="title">Tribes Universe</p>
          <p class="date">Date</p>
          <p class="hover">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat vulputate arcu. Curabitur non ullamcorper nisl, et condimentum ligula. </p>
        </div>
      </a>
    </div>
    <div class="p2 small-12 medium-4 columns">
      <a href="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Midseason_Update.png" alt="SMITE Midseason Update" />
        <div class="about">
          <p class="title">SMITE Midseason Update</p>
          <p class="date">Date</p>
          <p class="hover">. Donec id ultricies massa, sit amet euismod nunc. Nunc fermentum facilisis pretium. In facilisis elementum pretium.</p>
        </div>
      </a>
    </div>
    <div class="p3 small-12 medium-4 columns">
      <a href="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Sol_Reveal.png" alt="Sol God Reveal" />
        <div class="about">
          <p class="title">Sol God Reveal</p>
          <p class="date">Date</p>
          <p class="hover">Nam commodo sapien id massa ultricies convallis. Donec non magna ex. Nunc in mauris ut lacus ullamcorper placerat ut et eros.</p>
        </div>
      </a>
    </div>
    <div class="p4 small-12 medium-4 columns">
      <a href="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Xing-Tian_Reveal.png" alt="Xing Tian God Reveal" />
        <div class="about">
          <p class="title">Xing Tian God Reveal</p>
          <p class="date">Date</p>
          <p class="hover">Vivamus eget malesuada ligula, eu scelerisque libero. Donec efficitur, nunc non sodales facilisis, orci magna tempor ex, eu aliquet metus ipsum vitae leo.</p>
        </div>
      </a>
    </div>
    <div class="p5 small-12 medium-4 columns">
      <a href="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Season_3.png" alt="SMITE Season 3 Update" />
        <div class="about">
          <p class="title">SMITE Season 3 Update</p>
          <p class="date">Date</p>
          <p class="hover">Aliquam convallis metus enim, nec egestas mi commodo sit amet. Cras vitae eros eu nunc dapibus hendrerit.</p>
        </div>
      </a>
    </div>
    <div class="p6 small-12 medium-4 columns">
      <a href="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Paladins.png" alt="Paladins" />
        <div class="about">
          <p class="title">Paladins</p>
          <p class="date">Date</p>
          <p class="hover">Quisque tincidunt facilisis libero vitae aliquet. Nunc aliquet leo vitae scelerisque varius. Quisque venenatis suscipit odio, at consequat nunc condimentum et.</p>
        </div>
      </a>
    </div>
  </div>
</div>

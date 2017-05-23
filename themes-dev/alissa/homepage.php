<? php //Template Name: Alissa Homepage 2 ?>
<head>
  <title>Alissa Taylor | Atlanta, GA</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/custom.min.css' ?>" />
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <script type="text/javascript" href="<?php echo get_stylesheet_directory_uri().'/js/script.js' ?>"></script>
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
      <li class="small-2 columns"><a href="#about">About</a></li>
      <li class="small-2 columns"><a href="#skills">Skills</a></li>
      <li class="small-2 columns"><a href="#work">My Work</a></li>
      <li class="small-2 columns"><a href="#contact">Contact</a></li>
    </ul>
  </div>
  <div class="divider"></div>
  <a id="about"></a>
  <div class="header row fullWidth" style="background:url(<?php echo get_stylesheet_directory_uri().'/images/header-bg.jpg' ?>); background-size: cover; width: auto">
    <h1>Web Developer</h1>
    <div class="underline"></div>
    <p class="small-12 columns">Hi my name is Alissa Taylor, I am a 26 year old Web Developer based in Atlanta, GA. I am actively taking new clients for freelance projects. </p>
    <div class="social-media">
      <a href="https://www.linkedin.com/in/alissataylor"><i class="ion-social-linkedin linkedin"></i></a>
      <a href="https://github.com/alissa-taylor"><i class="ion-social-github github"></i></a>
      <a href="https://www.facebook.com/alissa.taylor.23"><i class="ion-social-facebook facebook"></i></a>
    </div>
  </div>
  <div class="divider"></div>
  <a id="skills"></a>
  <div class="skills">
    <h1>My Skills</h1>
      <div id="SkillBox">
      <div class="SkillBar">
        <div id="Skill-HTML">
          <span class="Skill-Area ">HTML</span>
          <span class="PercentText ">100%</span>
        </div>
      </div>
      <div class="SkillBar">
        <div id="Skill-CSS">
          <span class="Skill-Area ">CSS/CSS3</span>
          <span class="PercentText ">90%</span>
        </div>
      </div>
      <div class="SkillBar">
        <div id="Skill-jQuery">
          <span class="Skill-Area ">jQuery</span>
          <span class="PercentText ">60%</span>
        </div>
      </div>
      <div class="SkillBar">
        <div id="Skill-JS">
          <span class="Skill-Area ">Javascript</span>
          <span class="PercentText ">50%</span>
        </div>
      </div>
      <div class="SkillBar">
        <div id="Skill-Wordpress">
          <span class="Skill-Area ">Wordpress </span>
          <span class="PercentText ">85%</span>
        </div>
      </div>
        <div class="SkillBar">
        <div id="Skill-JSON">
          <span class="Skill-Area ">JSON</span>
          <span class="PercentText ">30%</span>
        </div>
      </div>
        <div class="SkillBar">
        <div id="Skill-React">
          <span class="Skill-Area ">React </span>
          <span class="PercentText ">25%</span>
        </div>
      </div>
        <div class="SkillBar">
        <div id="Skill-PHP">
          <span class="Skill-Area ">PHP </span>
          <span class="PercentText ">60%</span>
        </div>
      </div>
        <div class="SkillBar">
        <div id="Skill-SQL">
          <span class="Skill-Area ">SQL </span>
          <span class="PercentText ">30%</span>
        </div>
      </div>
    </div>
    </center>
  </div>
  <div class="divider"></div>
  <a id="work"></a>
  <div class="projects-container row fullWidth">
    <h1 class="projects">Projects</h1>
    <div class="p1 small-6 medium-3 columns">
      <a href="http://www.smiterivals.com">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/www_smiterivals_com.jpg" alt="SMITE Rivals" />
        <div class="about">
          <p class="title">SMITE Rivals</p>
          <p class="date">January 2017</p>
        </div>
      </a>
    </div>
    <div class="p2 small-6 medium-3 columns">
      <a href="http://www.smitegame.com/celtic/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Path_of_the_Phantom_Queen___SMITE.jpg" alt="SMITE Celtic Event" />
        <div class="about">
          <p class="title">SMITE Celtic Event</p>
          <p class="date">December 2016</p>
        </div>
      </a>
    </div>
    <div class="p3 small-6 medium-3 columns">
      <a href="http://www.smitegame.com/fafnirs-winter-wonderland/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fafnir’s_Winter_Wonderland___SMITE.jpg" alt="Fafnir's Winter Wonderland" />
        <div class="about">
          <p class="title">Fafnir's Winter Wonderland</p>
          <p class="date">December 2016</p>
        </div>
      </a>
    </div>
    <div class="p4 small-6 medium-3 columns">
      <a href="http://www.hirezexpo.com/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Hi-Rez_Expo___2017.jpg" alt="2017 Hi-Rez Expo" />
        <div class="about">
          <p class="title">Hi-Rez Expo</p>
          <p class="date">November 2016</p>
        </div>
      </a>
    </div>
  </div>
  <div class="projects-container row fullWidth">
    <div class="p5 small-6 medium-3 columns">
      <a href="https://www.smitegame.com/midseason-2016/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Midseason_Update___SMITE.jpg" alt="SMITE Season 3 Update" />
        <div class="about">
          <p class="title">SMITE Season 3 Update</p>
          <p class="date">June 2016</p>
        </div>
      </a>
    </div>
    <div class="p6 small-6 medium-3 columns">
      <a href="http://www.paladins.com">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Paladins.jpg" alt="Paladins" />
        <div class="about">
          <p class="title">Paladins</p>
          <p class="date">January 2016</p>
        </div>
      </a>
    </div>
    <div class="p7 small-6 medium-3 columns">
      <a href="http://www.smitegame.com/promo/god-reveal/sol/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/SMITE_-_Sol__Goddess_of_the_Sun_🔊.jpg" alt="Sol God Reveal" />
        <div class="about">
          <p class="title">Sol God Reveal</p>
          <p class="date">August 2015</p>
        </div>
      </a>
    </div>
    <div class="p8 small-6 medium-3 columns">
      <a href="http://www.tribesuniverse.com/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Tribes_Universe.jpg" alt="Tribes Universe" />
        <div class="about">
          <p class="title">Tribes Universe</p>
          <p class="date">June 2015</p>
        </div>
      </a>
    </div>
  </div>
  <div class="divider"></div>
  <a id="contact"></a>
  <h1>Say Hello!</h1>
  <h5>I would love to hear from you! Fill out the form below for more information about freelance projects, or just to say hello!</h5>
  <div class="contact">
    <div class="form">
      <?php echo do_shortcode('[contact-form-7 id="60" title="Contact form"]') ?>
    </div>
  </div>
  <div class="footer">
    <p>Alissa Taylor &#169; 2017</p>
  </div>
</div>

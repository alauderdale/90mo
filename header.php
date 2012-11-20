<!DOCTYPE html>
<html>
<head>
<!--     stylesheets -->
  <link href="<?php bloginfo('template_url'); ?>/stylesheets/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php bloginfo('template_url'); ?>/stylesheets/default.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" rel="stylesheet" type="text/css" media="screen" />

<!-- jquery -->

  <script src="http://code.jquery.com/jquery-latest.js"></script>

<!--   slider -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/jquery.nivo.slider.js"></script>

<!--   custom scripts -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/scripts.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
    <div class="login">
      <div class="wrapped">
        
      </div>
    </div>
    <div class="topbar wrapped">
        <div class="info right">
            <p class="left">Get free updates on professional development for yoga teachers.</p>
            <a href="#" class="right" id="open">
                open
            </a>
            <div class="info-tri right">
            </div>
        </div> <!-- end info -->
    </div> <!-- end topbar -->
    <div class="clearfix"></div>
    <header class="wrapped">
        <div class="logo">
            <a href="<?php echo get_option('home'); ?>">
            </a>
        </div>
        <nav class="main-nav right">
            <p class="uppercase">The definitive online resource for yoga professionals inspiring change in the world</p>

            <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
        </nav>
        <div class="clearfix"></div>
    </header>
    <div class="wrapped container">
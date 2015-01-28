<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>

        <?php // Google Chrome Frame for IE ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        
        
            <!-- Bootstrap Meta -->     
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="VicNRG">
        <meta name="author" content="Paradox Ty Richards">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        
        

        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        
        
        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

        <?php // drop Google Analytics Here ?>
        <?php // end analytics ?>

        <!-- Bootstrap Core -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrap.min.css" type="text/css" media="all">
        
        <!-- Custom Paradox Styles -->      
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style-custom.css" type="text/css" media="all">     

    </head>

  <body <?php body_class(); ?>>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="top-nav navbar navbar-default navbar-fixed-top col-xs" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <div class="header-logo-sm pull-left">
                    <a href="/"><img class="logo-sm" src="<?php echo get_template_directory_uri(); ?>/library/images/logo-white.svg" alt="VicNRG"></a>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Project name</a> -->
                <!--<img src="..." class="img-responsive" alt="Responsive image">-->            
            </div>
          
          <div class="dropdown-nav pull-right no-padding">    
              <?php
                    
                $header_nav = array(
                    'theme_location'  => '',
                    'menu'            => 'Header Menu',
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => '',
                    'menu_class'      => 'nav navbar-nav',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );
                
                wp_nav_menu( $header_nav );         
                
              ?> 
          </div>
          
<!--          <div class="header-phone-div col-md-2 no-padding pull-right hidden-xs">
          <ul id="header-phone-ul" class="nav navbar-nav" style="width: 100%; text-align: center; ">          
              <li class="header-phone">
                 <a>817.562.4888</a>
              </li> 
          </ul>
          </div> -->
          
          <!-- original bootstrap example menu -->         
          
          <!--
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>--> <!--/.nav-collapse -->
          
        </div>
      </div>
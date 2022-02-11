<!doctype html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Website Description -->
    <meta name="description" content="Blue Chip: Corporate Multi Purpose Business Template" />
    <meta name="author" content="Blue Chip" />

    <!--  Favicons / Title Bar Icon  -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/favicon.png" />

    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/favicon.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/favicon.png" />

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/favicon.png" />

    <title>Blue Chip | Blog Right Sidebar</title>


    <?php wp_head(); ?>

  </head>

  <body class="<?php body_class(); ?>">
    <!-- :::::::::: Header Section Start :::::::: -->

    <header>
      <div class="container">
        <div class="row"> 
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                  <?php
                          
                    wp_nav_menu(
                      array(
                        'menu' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class' => 'navbar-nav ml-auto',
                        // 'link_before' => '<span class="screen-reader-text">',
                        // 'link_after' => '</span>',
                      )
                    );
                          
                  ?>

                <!-- <div class="collapse navbar-collapse"   id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                  </ul>
                </div> -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    
    <!-- ::::::::::: Header Section End ::::::::: -->
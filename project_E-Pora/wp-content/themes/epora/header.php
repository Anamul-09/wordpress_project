<!doctype html>
<html class="no-js" <?php language_attributes()?>>

<head>
   <meta charset="<?php bloginfo('charset')?>">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php bloginfo('title')?></title>
   <meta name="<?php bloginfo('description')?>" content="<?php bloginfo('description')?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/assets/img/favicon.png"> -->

   <!-- CSS here -->
   <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/meanmenu.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/animate.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/slick.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/backtotop.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/nice-select.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/ui-icon.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/elegentfonts.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/spacing.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css"> -->
   <?php wp_head()?>
</head>

<body <?php body_class()?>>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <!-- loading content here -->
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->

   <!-- header area start -->
   <header class="header__transparent">
      <div class="header__area pl-220 pr-220 pt-30">
         <div class="main-header" id="header-sticky">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-6">
                     <div class="logo-area d-flex align-items-center">
                        <div class="logo">
                           <a href="index.html">
                              <img src="<?php echo get_template_directory_uri()?>/assets/img/logo/logo.png" alt="logo">
                           </a>
                        </div>
                        <div class="header-cat-menu ml-40 d-none d-md-block">
                           <nav>
                          

                              <ul>
                                 <li><a href="course-grid.html"> Categorie <span><i class="arrow_carrot-down"></i></span></a>
                                 <?php 
                            
                            wp_nav_menu( array(
                                'menu_class'		=> "sub-menu",
                                'container'		=> false,	
                                'theme_location'	=> "Catagory" 
                            ) );                            
                            ?>
                                    <!-- <ul class="sub-menu">
                                       <li><a href="course-grid.html">Bangla Medium</a></li>
                                       <li><a href="course-grid.html">English Medium</a></li>
                                       <li><a href="course-grid.html">Video Edition</a></li>
                                       <li><a href="course-grid.html">Logo Design</a></li>
                                       <li><a href="course-grid.html">Francy Medium</a></li>
                                    </ul> -->
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-7 col-md-6 col-6 d-flex align-items-center justify-content-end">
                     <div class="main-menu d-flex justify-content-end mr-15">
                        <nav id="mobile-menu">
                            <?php 
                            
                            wp_nav_menu( array(
                                
                                'menu_class'		=> "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                                'container'		=> false,	
                                'depth'				=> "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                                'walker'			=> new bootstrap_5_wp_nav_menu_walker(), // (object) Instance of a custom walker class.
                                'theme_location'	=> "primary" // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                                
                            ) );                            
                            ?>
                           
                        </nav>
                     </div>
                     <div class="header-right d-md-flex align-items-center">
                        <div class="header__search d-none d-lg-block">
                           <form action="#">
                              <div class="header__search-input">
                                 <button class="header__search-btn">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                 </button>
                                 <input type="text" placeholder="Search Courses">
                              </div>
                           </form>
                        </div>
                        <div class="header-meta">
                           <ul>
                              <li><a href="sign-in.html" class="d-none d-md-block"><i class="fi fi-rr-user"></i></a></li>
                              <li><a href="cart.html" class="d-none d-md-block"><i class="	 fi fi-rr-shopping-bag"></i></a></li>
                              <li><a href="#" class="tp-menu-toggle d-xl-none"><i class="icon_ul"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->
   <div class="tp-sidebar-menu">
      <button class="sidebar-close"><i class="icon_close"></i></button>
      <div class="side-logo mb-30">
         <a href="index.html"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo/logo-black.png" alt="logo"></a>
      </div>
      <div class="mobile-menu"></div>
      <div class="sidebar-info">
         <h4 class="mb-15">Contact Info</h4>
         <ul class="side_circle">
            <li>27 Division St, New York</li>
            <li><a href="tel:123456789">+1 800 123 456 78</a></li>
            <li><a href="mailto:epora@example.com">epora@example.com</a></li>
         </ul>
         <div class="side-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
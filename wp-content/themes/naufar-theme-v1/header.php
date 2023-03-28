<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
</html>
<head>
<link rel="icon" href="favicon.ico">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Naufar</title>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/english-extra.css" rel="stylesheet" type="text/css" />
	


	<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
	
	 
<!-- Side Menu Start -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/sidemenu.css" rel="stylesheet" type="text/css" />	
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidemenu.js"></script>
<!-- Side Menu End -->
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/function.js"></script>
	
<?php wp_head(); ?>
</head>
<body>
<div class="topsec">
  <div class="container-fluid-nopadding">
    <div class="row align-items-center">
      <div class="col-xl-4 col-lg-2 col-md-4 col-sm-12 col-12">
        <div class="toptext"><?php pll_the_languages( array( 'hide_current' => 1,'show_names' => 1 ) ); ?>
</div>
      </div>
      <div class="col-xl-8 col-lg-10 col-md-8 col-sm-12 col-12">
        <div class="toprightsec">
          <p class="d-none d-lg-inline-block">Ready to get help? We are here for you.<br><span style="font-family:Gotham-Rounded-Light;">All conversations are confidential</span></p>
          <a href="tel:44946000" class="topbtn">CALL</a> <a href="mailto:Info@naufar.com" class="topbtn">EMAIL</a> </div>
      </div>
    </div>
  </div>
</div>

	
<div class="navigation">
  <div class="container-fluid-nopadding">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="navcontent">
          <div class="topnav d-none d-md-block">
			  
           
			
				
				<div class="search">
				  <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<input type="text" name="s" id="search" class="topsearch" placeholder="SEARCH" value="<?php the_search_query(); ?>" />
					<input type="submit" class="searchbtn" value="" />
				</form>
				</div>
          </div>
          <div class="row">
			  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 logoeng">
		  	
				   </div>
			  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 menuprimaryeng">
            <?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			  </div>
			  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>	
	
	
	
<header id="header" class="site-header mobile   " role="banner">


<nav id="menu" class="nav-primary" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <div class="mobile-nav">
        <div class="mobile-head">
            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a class="mobile-logo" href="/"><img src="/wp-content/themes/naufar-theme-v1/css/assets/img/naufar-logo-20211005.png"></a>
			 <span class="lang-switch"><?php pll_the_languages( array( 'hide_current' => 1,'show_names' => 1 ) ); ?></span>
        </div>
    </div>
    <div class="header-logo">
        <a class="site-logo" href="/"></a>
    </div>
   <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1', 'menu_class' => 'nav-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
  
    <div id="DIV_1">
       
        
        <p id="P_27">
            
			<a href="https://www.facebook.com/NaufarQatar/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social1.png" width="34" height="35" alt=""></a> <a href="https://www.instagram.com/naufarqatar/?hl=en" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social2.png" width="34" height="35" alt=""></a> <a href="https://www.twitter.com/naufarQatar" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social3.png" width="34" height="35" alt=""></a> <a href="https://www.youtube.com/channel/UCuIW67jrpA1pjrmevFbuN9w" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social4.png" width="34" height="35" alt=""></a>  <a href="https://www.linkedin.com/company/naufar-wellness-and-recovery/" target="_blank"><img src="/wp-content/uploads/2022/05/social5.png" width="34" height="35" alt=""></a>
        </p>
        <div id="DIV_31">
            <ul id="UL_32">
            <!--    <li id="LI_33">
                    <a href="/jobs" id="A_34">Careers</a>
                </li>
                <li id="LI_35">
                    <a href="/contact" id="A_36">Contact Us</a>
                </li>
               -->
            </ul>
        </div>
    </div>

</nav>
</header>	
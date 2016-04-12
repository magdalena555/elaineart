<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- header -->
<header>
    <div class="body-wrapper">
        <!-- header-wrapper -->
        <div class="header-wrapper">
       
            <!-- menu container -->
            <div id="menu-container">

                <!-- logo -->
                
                <div class="logo">
                    
                    <!-- options acf !!!!!!-->
                    <?php $image = get_field('logo', 'option'); ?>
                    <?php $page_id = 6; ?>
                    <a href="<?php echo get_permalink( $page_id ); ?>"> 
                        <img src="<?php echo $image ['sizes']['logo'] ?>"> 
                    </a>

                </div>

                <!-- left nav -->
                <nav class="desktop-nav ">
                    <?php wp_nav_menu( array(
                      'container' => false,
                      'theme_location' => 'main'
                    )); ?>
                </nav>
                <nav class="mobile ">
                    <?php wp_nav_menu( array(
                      'container' => false,
                      'theme_location' => 'mobile'
                    )); ?>
                </nav>
               
            
                
                <!-- hamburger menu -->
                <a href="#" class="mobileNavIcon"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        
        
    </div> <!-- header-wrapper    -->
</header><!--/.header-->

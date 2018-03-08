<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php echo wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <?php wp_head(); ?>
    </head>
    
<body <?php body_class(); ?>>

<header class="container-fluid">
    <div class="col-md-4 text-center ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        
        <a href="<?php echo home_url(); ?>"><h2 class="text-center"><?php bloginfo('name'); ?></h2></a>
        <p class="description"><?php bloginfo('description'); ?></p> 
        </div>
    </div>

    <div class="col-md-8" id="headerNavbar">
    <div class="collapse navbar-collapse" id="myNavbar">
     
      <?php wp_nav_menu( array( 
          'theme_location' => 'header-menu',
          'menu_class' => 'nav navbar-nav navbar-right'
          )); 
      ?>
   
    </div>
    </div>

</header>
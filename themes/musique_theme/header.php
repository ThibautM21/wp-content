<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head> 

<body>
    
  <nav class="navbar navbar-dark navbar-expand-md bg-dark" role="navigation">
    <a class="navbar-brand" href="<?php echo get_option('home'); ?>/"><i class="fa fa-headphones fa-2x"></i> AlloMusic</a>
        
    <!-- Boutton en responsive  -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarText">
      <span class="navbar-toggler-icon"></span>
    </button>
        
    <!-- LES LIENS -->
          
      <?php
          wp_nav_menu(array(
            'theme_location'    => 'header_menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-center',
            'container_id'      => 'header-menu',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ));
            
        ?>
  
  </nav>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <title>
        <?php wp_title() ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark fixed-top" role="navigation">
      <div class="navbar-brand"><i class="fa fa-headphones fa-2x"></i> AlloMusic</div>

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

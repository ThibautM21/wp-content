<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark sticky-top">
      <div class="container-fluid">
        <div class="navbar-brand"><i class="fa fa-headphones fa-2x"></i> AlloMusic</div>
        
        <!-- Boutton en responsive  -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarText">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- LES LIENS -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">Actualités</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Tendances</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Avis</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Vidéos</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Evénements</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

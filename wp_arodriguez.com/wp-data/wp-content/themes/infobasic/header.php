<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Mi pagina web</title>
</head>
<body <?php body_class(); ?>>
    
<div class="cabecera">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toogler"
  type="button"   
  data-toggle="collapse"
    data-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toogler-icon"></span>
  </button>
  <?php 

wp_nav_menu( array(
    'theme_location'    => 'infobasic_main_menu',
    'depth'             => 3,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'navbarNav',
    'menu_class'        => 'navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),

    
) );  


 ?>

  
  </nav>


</div>

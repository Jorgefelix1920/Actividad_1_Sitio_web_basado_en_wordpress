<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--  CSS -->
    <!--  bloginfo('template_url') no es un metodo recomendado, solo se usa en este caso para resolver sl pronblema, es mejor utilizar objetos -->

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

  <style>
  .contenedor{
    background: url("<?php bloginfo('template_url')?>/img/wp-img.png");
    background-size: cover;
    background-position: center;
    height: 400px;
 
}
  
  </style>


  <title>Tema WP</title>
</head>

<body>

  <div class="container-fluid vg-inverse fixed-top">

    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark vg-inverse">
      <a class="navbar-brand" href=""><img src="<?php bloginfo('template_url')?>/img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Bootstrap
      </a>
      
      <?php 
      // array que contiene el navbar
      wp_nav_menu(array(
        'theme_location'  =>  'superior',
        'container'       =>  'div',
        'container_class' =>  'collapse navbar-collapse',
        'container_id'    =>  'navbarSupportedContent',
        'items_wrap'      =>  '<ul class="navbar-nav ml-auto">%3$s</ul>',
        'menu_class'      =>  'nav-item'
      ) );
      ?>

    </nav>
  </div> <!-- end navbar -->

  <div class="container-fluid contenedor d-flex flex-column justify-content-center  align-items-center">
    <div class="text-center">
      <h1 class="display-4">Lorem ipsum dolor sit amet </h1>
    </div>

  </div>

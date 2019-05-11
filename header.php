<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta <?php bloginfo('charset');?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/style.css">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
  
  <?php wp_head();?>
</head>
<body>
  <div class="container">
    <div class="row my-5 align-items-center">
      <div class="col-sm-12 col-md-8">
        <h1>Meu primeiro tema</h1>
        <p class="lead">Fiz com Wordpress</p>
      </div>
      <div class="col-sm-12 col-md-4">
        <form>
          <div class="input-group">
            <input type="text" name="" class="form-control" placeholder="O que procura?">
            <div class="input-group-append">
              <button class="btn btn-my-color-5" type="button">Buscar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-2" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <?php
          wp_nav_menu( array(
            'theme_location'    => 'principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
        </div>
      </nav>
      </div>
    </div>
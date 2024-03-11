<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preload" as="image" href="https://sol.teste1-ndd.com/wp-content/themes/sol/assets/img/origin/sol-400-white.png">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><span>Saúde Oral em Lisboa</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= site_url('#welcome'); ?>" class="scrollto">
          <img src="<?= get_theme_file_uri('assets/img/origin/sol-400-white.png'); ?>" alt="Logotipo SOL" class="img-fluid">
        </a>
      </div>

      <nav id="navbar" class="navbar">

        <ul>
          <li><a class="nav-link scrollto" href="<?= site_url('#conditions'); ?>">Como funciona</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('#features'); ?>">Serviços</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('#gallery'); ?>">Galeria</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('#team'); ?>">Equipa</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('#faq'); ?>">FAQ</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('#contact'); ?>">Contactos</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('/institucional'); ?>">Institucional</a></li>
          <li>
            <!-- ======= CTA ======= -->
            <a 
              id="sticky-button" 
              href="#" 
              class="btn-border-progress btn-get-started scrollto goto" 

              data-bs-toggle="modal"
              data-bs-target="#marcacao"
              onclick="resetForms()"
            >Marcar Consulta
            </a>
            <!-- ======= /CTA ======= -->
          </li>
        </ul>
      </nav><!-- .navbar -->
      <i class="bi bi-list mobile-nav-toggle"></i>

  </div>

  </header><!-- End Header -->
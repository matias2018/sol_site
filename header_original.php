<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><span>Saúde Oral em Lisboa</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/origin/sol-400-white.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">

        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#welcome">Bem vindo</a></li>
          <li><a class="nav-link scrollto" href="#conditions">Como funciona</a></li>
          <li><a class="nav-link scrollto" href="#features">Serviços</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipa</a></li>
          <li class="dropdown"><a href="#"><span>Kids Fun</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://www.funbrain.com/">Jogos Fun brain</a></li>
              <li><a href="https://pbskids.org/">PBS Kids</a></li>
              <li><a href="https://www.nickjr.tv/">Animações</a></li>
              <li class="dropdown"><a href="#"><span>Jogos temáticos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= CTA ======= -->
  <a 
    id="sticky-button" 
    href="#" 
    class="btn-border-progress btn-get-started scrollto goto" 

    data-bs-toggle="modal"
    data-bs-target="#marcacao"
    onclick="resetForms()"
  >Marcar Consulta
    <svg>
      <rect></rect>
    </svg>
  </a>


  <style>
    #sticky-button {
  z-index: 2;
  width: 180px;
  height: 50px;
  line-height: 70px;
  font-size: 15px;
  text-align: center;
  background: #fff;
  color: var(--title-color) !important;
  opacity: 1;
  transition: background 0.3s;
  margin-left: 40px;
}

#sticky-button svg,
#sticky-button svg rect {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  fill: transparent;
  z-index: -2;
}
#sticky-button svg rect {
  stroke: #fff;
  stroke-width: 4;
  stroke-dasharray: 500, 500;
  stroke-dashoffset: 0;
  transition: .7s;
}

#sticky-button:hover {
  background: var(--title-color);
  color: #fff !important;
}

#sticky-button:hover svg rect {
  stroke-dashoffset: 100;
  stroke-dasharray: 100, 130;
}

a#sticky-button:hover::before {
  visibility: hidden;
}

#header.header-scrolled #sticky-button {
  color: initial;
}
  </style>
  <!-- ======= /CTA ======= -->
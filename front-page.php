<?php get_header(); ?>
<!-- ======= A11Y Button ======= -->
<a
  id="openSettings" 
  href="#" 
  class="a11y"
  data-bs-toggle="modal"
  data-bs-target="#settings"
  >
  <span class="sr-only">Acessibilidade</span>
</a><!-- End A11Y Button -->

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center zIndex-2">
        <div data-aos="zoom-out">
          <h1>Saúde Oral em Lisboa <span>SOL</span></h1>
          <h2>Os sorrisos não se medem aos palmos</h2>

        </div>
      </div>
      <div class="col-lg-4 order-1 order-lg-2 hero-img zIndex-2" data-aos="zoom-out" data-aos-delay="300">
        <img src="<?php echo get_theme_file_uri('/assets/img/origin/homepage-foto-1.webp'); ?>" class="img-fluid animated" alt="Criança a sorrir">
      </div>
    </div>
  </div>
  
  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="welcome" class="about">
    <div class="container-fluid">

      <div class="row">
        <div 
          class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
          style="position: relative;"
          data-aos="fade-right"
          >
          <a 
            aria-expanded="false" 
            href="#" 
            class="venobox play-btn mb-4 wp-video-popup" 
            data-vbtype="video" 
            data-autoplay="true"
            style="position: relative; left: 0; top: -100px; margin: auto; z-index: 1;"
          >
           <span class="sr-only">play video</span>
          </a>
        </div>

        <div class="col-xl-4 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3>Bem vindo ao SOL - Serviço Odontopediátrico de Lisboa - Saúde Oral em Lisboa</h3>
          <p>
            O SOL é um serviço de medicina dentária pediátrico, constituído por uma equipa com elevada formação e experiência. Inaugurado em agosto de 2019, este centro clínico da Santa Casa da Misericórdia de Lisboa vem reforçar o seu papel de complementaridade com o Serviço Nacional de Saúde e tem como objetivo ajudar a melhorar os níveis de saúde oral dos mais novos.
          </p>

        </div>
        <?php echo apply_shortcodes( '[wp-video-popup video="https://youtu.be/Si78VTcyOko"]' ); ?>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Conditions ======= -->
  <section id="conditions" class="conditions">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Funcionamento</h2>
        <h3>Como funciona</h3>
      </div>

      <div class="row" data-aos="fade-left">
        <div class="container imgrows">

          <div class="row content">
            <div class="col-md-4 mr-5" data-aos="fade-right">
              <img src="<?php echo get_theme_file_uri('/assets/img/illustrations/intro3.svg'); ?>" class="img-fluid" alt="Como funciona o nosso serviço?">
            </div>
            <div class="col-md-8 pt-5 goto-right-on-desktop" data-aos="fade-up">
              <h3>
                A quem se destina
              </h3>

              <p>
              Os serviços do SOL podem ser utilizados por qualquer utente com idade compreendida entre os 0 e 17 anos, que resida ou frequente um estabelecimento de ensino no concelho de Lisboa, independentemente da sua condição social e/ou económica.
              </p>
            </div>
          </div>

          <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
              <img src="<?= get_theme_file_uri('/assets/img/illustrations/files.svg'); ?>" class="img-fluid" alt="A quem se destina?">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
              <h3>Documentação necessária</h3>
              <p class="forcing-width-64">
                Para efeitos de validação da inscrição, os residentes em Lisboa devem apresentar o cartão de cidadão, de forma a comprovar a morada de residência e a idade.
              </p>
              <p class="forcing-width-64">
                Os estudantes em estabelecimentos de ensino no concelho de Lisboa devem, além do cartão de cidadão, apresentar também  uma declaração de matrícula escolar.
              </p>
            </div>
          </div>

          <div class="row content">
            <div class="col-md-4" data-aos="fade-right">
              <img src="<?= get_theme_file_uri('/assets/img/illustrations/money.svg'); ?>" class="img-fluid" alt="Documentação necessária">
            </div>
            <div class="col-md-8 pt-5 goto-right-on-desktop" data-aos="fade-up">
              <h3>Custos</h3>
              <p>
                A utilização dos serviços e tratamentos está isenta de qualquer pagamento, exceto nos tratamentos e intervenções em ortodontia. No entanto, os beneficiários de abono de família estão totalmente isentos do pagamento em qualquer ato, tratamento ou intervenção.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End conditions Section -->

  <!-- ======= Testimonials ======= -->
  <section id="testimonials" class="testimonials section">
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= get_theme_file_uri('/assets/img/origin/fold-0_5-b.webp'); ?>" class="testimonial-img" alt="Andre Oliveira">
              <h3>Andre Oliveira</h3>
              <h4>3</h4>
              <p class="testimonial">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= get_theme_file_uri('/assets/img/origin/fold-13_18-b.webp'); ?>" class="testimonial-img" alt="Bruna Laranjeira">
              <h3>Bruna Laranjeira</h3>
              <h4>13</h4>
              <p class="testimonial">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= get_theme_file_uri('/assets/img/origin/fold-13_18-b.webp'); ?>" class="testimonial-img" alt="Carlota Pessegueiro">
              <h3>Carlota Pessegueiro</h3>
              <h4>16</h4>
              <p class="testimonial">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials -->

  <!-- ======= Doings Section ======= -->
  <section id="fazemos" class="conditions">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Ação</h2>
        <h3>O que fazemos</h3>
      </div>

      <div class="row" data-aos="fade-left">
        <div class="container imgrows">

          <div class="row content">
            <div class="col-md-4 mr-5" data-aos="fade-right">
              <img src="<?php echo get_theme_file_uri('/assets/img/illustrations/Doctor-amico.svg'); ?>" class="img-fluid" alt="Como funciona o nosso serviço?">
            </div>
            <div class="col-md-8 pt-5 goto-right-on-desktop" data-aos="fade-up">
              <h3>
                Informamos
              </h3>

              <p>
                Aconselhamos e apoiamos pais/cuidadores/educadores na aquisição de comportamentos preventivos de doença, consciencializando para a educação em saúde as famílias e crianças que chegam até nós. Ensinamos estratégias e ferramentas de hábitos de saúde oral adequados e essenciais à qualidade de vida das crianças
              </p>
            </div>
          </div>

          <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
              <img src="<?= get_theme_file_uri('/assets/img/illustrations/family-amico.svg'); ?>" class="img-fluid" alt="A quem se destina?">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
              <h3>Disponibilizamos</h3>
              <p class="forcing-width-64">
                Acompanhamento precoce à criança e sua família, promovendo uma assistência primária durante o primeiro ano de vida. Diagnosticamos e tratamos precocemente doenças orais, focando-nos na manutenção da saúde e prevenção ao longo do crescimento e desenvolvimento da criança
              </p>
            </div>
          </div>

          <div class="row content">
            <div class="col-md-4" data-aos="fade-right">
              <img src="<?= get_theme_file_uri('/assets/img/illustrations/medical-research.svg'); ?>" class="img-fluid" alt="Documentação necessária">
            </div>
            <div class="col-md-8 pt-5 goto-right-on-desktop" data-aos="fade-up">
              <h3>Crescemos</h3>
              <p>
                A estudar e a trabalhar métodos de aprendizagem desenvolvemos o nosso conhecimento clínico. A formação contínua, a investigação e a pesquisa bibliográfica permitem-nos crescer com o objetivo de melhorar a cada dia a qualidade do nosso serviço
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End doings Section -->

  <!-- ======= Serviços Section ======= -->
  <section id="features" class="features section">
    <div class="container section">

      <div class="section-title" data-aos="fade-up">
        <h2>Serviços</h2>
        <h3>QUE SERVIÇOS DISPONIBILIZAMOS</h3>
      </div>

      <div class="row" data-aos="fade-left">

        <?php
        $category_name = 'NAS';

        $homepageServices = new WP_Query(array(
          'posts_per_page' => 10,
          'post_type' => 'service',
          'category_name' => 'NAS',
        ));
        // print_r($homepageServices);
        while ($homepageServices->have_posts()) {
          $homepageServices->the_post(); ?>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-4">
            <a href="<?= the_permalink(); ?>">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <span>
                  <img src="<? the_post_thumbnail_url(); ?>" class="img-responsive wp-image-264" width="40" alt="<?= the_title(); ?>">
                </span>
                <h3>
                  <?php the_title(); ?>
                </h3>
              </div>
            </a>
          </div>

        <?php } ?>

      </div>

    </div>
  </section><!-- End Serviços Section -->

  <!-- ======= Tecnologias Section ======= -->
  <section id="tech" class="features section">
    <div class="container section">

      <div class="section-title" data-aos="fade-up">
        <h2 class="right">Tecnologias</h2>
        <h3 class="right">À sua disposição</h3>
        <p class="right">Contamos com uma diversidade de equipamentos e tecnologias diferenciadas que permitem um atendimento e prestação de cuidados de excelência.</p>
      </div>

      <div class="row" data-aos="fade-left">

        <?php
        $category_name = 'NAS';

        $homepageServices = new WP_Query(array(
          'posts_per_page' => 10,
          'post_type' => 'service',
          'category_name' => 'TECH',
        ));
        // print_r($homepageServices);
        while ($homepageServices->have_posts()) {
          $homepageServices->the_post(); ?>

          <div class="col-md-6 mt-4 mt-md-4">
            <a href="<?= the_permalink(); ?>">
              <h3>
                <?php the_title(); ?>
              </h3>
            </a>
          </div>

        <?php } ?>

      </div>

    </div>
  </section><!-- End Tecnologias Section -->

  <!-- ======= Gallery ======= -->
  <section id="gallery" class="gallery section">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Galeria</h2>
        <h3>O Nosso Espaço</h3>
      </div>

      <!-- gtesting -->
      <div class="row g-0" data-aos="fade-left">

        <?php
        $gallery = new WP_Query(array(
          'posts_per_page' => 16,
          'post_type' => 'gallery',
          'orderby' => 'title',
          'order' => 'ASC',
        ));
        // print_r($gallery);
        while ($gallery->have_posts()) {
          $gallery->the_post(); ?>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="<? the_post_thumbnail_url(); ?>" class="gallery-lightbox">
                <img src="<? the_post_thumbnail_url(); ?>" class="img-responsive img-fluid wp-image-264" alt="<?= the_title(); ?>">
                <!-- <picture>
                  <source srcset="/imgs/imagen.avif" type="image/avif">
                  <source srcset="/imgs/imagen.webp" type="image/webp">
                  <img src="/imgs/imagen.jpg" alt="Description">
                </picture> -->
              </a>
            </div>
          </div>

        <?php } ?>

      </div>
      <!-- gtesting -->

    </div>
  </section><!-- End Gallery -->



  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2><a href="<?= get_post_type_archive_link('doctor') ?>">Equipa</a></h2>
        <h3>Os nossos profissionais</h3>
      </div>

      <!-- ======= About the Team ======= -->
      <div class="row" data-aos="fade-left">
        <p>
        Conheça a equipa que contribui ativamente para a melhoria da saúde oral da população, através do desenvolvimento de conhecimento científico. <br>
        Saiba mais sobre a investigação desenvolvida no SOL, na <a href="https://www.researchgate.net/lab/Servico-Odontopediatrico-de-Lisboa-Saude-Oral-em-Lisboa-Andre-Brandao-de-Almeida" target="_blank">plataforma Researchgate.<i class="bi bi-box-arrow-up-right" style="margin-left: 10px;"></i></a>
          
        </p>
      </div>

      <!-- ======= Loop Doctors ======= -->
      <div class="row py-3" data-aos="fade-left">
        <h4>Conheça a equipa</h4>

        <?php
        $homepageDoctors = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'doctor',
          'order' => 'ASC'
        ));
        while ($homepageDoctors->have_posts()) {
          $homepageDoctors->the_post(); ?>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?= the_post_thumbnail_url(); ?>" class="img-fluid img-responsive wp-image-264" alt=""></div>
              <div class="member-info">
                <!-- <a href="<?php the_permalink(); ?>"> -->
                <h4><?php the_title(); ?></h4>
                
                <div>
                  <?php
                  $related_programs = get_field('related_programs');
                  if ($related_programs) :
                    // print_r($related_programs)
                    foreach ($related_programs as $program) { ?>
                      <span>
                        <?php echo get_the_title($program); ?>
                      </span>
                    <?php }
                    ?>
                  <?php endif; ?>
                </div>
                <div class="social fp-social">
                  <?php
                  $linkedin_url = get_field('linkedin');
                  if ($linkedin_url) : ?>
                    <a 
                      class="with-tooltip"
                      target="_blank" href="<?= $linkedin_url; ?>"
                    >
                      <span class="sr-only">abrir linkedin</span>
                      <i class="bi bi-linkedin"></i>
                      <span class="with-tooltip--text">Abrir Linkedin</span>
                    </a>
                  <?php endif; ?>
                  <?php
                  $researchgate_url = get_field('researchgate');
                  if ($researchgate_url) : ?>
                    <a 
                      class="with-tooltip"
                      target="_blank" href="<?= $researchgate_url; ?>"
                    >
                        <!-- <i class="bi bi-bank2"></i> -->
                        <span class="sr-only">abrir researchgate</span>
                        <img width="30" height="30" src="<?php echo get_theme_file_uri('/assets/img/logos/researchgate.svg'); ?>" class="img-logo no-motion" alt="researchgate logo">
                        <span class="with-tooltip--text">Abrir Researchgate</span>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>
      </div>
      <!-- ======= / Loop Doctors ======= -->
    </div>
  </section><!-- End Team Section -->

  <section id="faq" class="faq section-bg">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>F.A.Q.</h2>
        <h3>Perguntas Frequentes</h3>
      </div>
      <div class="faq-list">
        <ul>
          <?php
          $faqs = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'faq',
            'order' => 'ASC'
          ));
          $faqCounter = 0;
          while ($faqs->have_posts()) {
            $faqCounter++;
            $faqs->the_post(); ?>
            <li data-aos="fade-up" aria-expanded="false">
              <i class="bx bx-help-circle icon-help"></i> 
              <a data-bs-toggle="collapse" class="collapse collapsed" data-bs-target="#faq-list-<?= $faqCounter; ?>">
                <?php the_title(); ?> 
                  <i class="bx bx-chevron-down icon-show"></i>
                  <i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-<?= $faqCounter; ?>" class="collapse" data-bs-parent=".faq-list">
                <div class="the_faq">
                  <?php the_content(); ?>
                </div>
              </div>
            </li>
          <?php }
          ?>

        </ul>
      </div>

    </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contactos</h2>
        <h3>Informações e Contactos</h3>
        <h4 class="mt-5">Horários</h4>
        <p>
          Dias úteis: 8:00 às 20:00. Sábados: 8:00 às 13:00
        </p>
      </div>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">

            <div class="address">
              <a class="only_desktop" href="http://maps.apple.com/maps?q=38.7381544501084,-9.133893630764298,19.84z/data=!4m5!3m4!1s0xd1933bcc894229b:0x71b995c2eca07f49!8m2!3d38.7382344!4d-9.1339702">
                <span class="sr-only">abrir mapa</span>
                <i class="bi bi-geo-alt only_desktop"></i>
              </a>
              <a class="only_mobile" href="geo:38.7381544501084,-9.133893630764298;u=35" target="_blank">
                <span class="sr-only">abrir mapa</span>
                <i class="bi bi-geo-alt only_mobile"></i>
              </a>
              <h4>Morada:</h4>
              <p class="with-tooltip">
                <a class="only_desktop" href="http://maps.apple.com/maps?q=38.7381544501084,-9.133893630764298,19.84z/data=!4m5!3m4!1s0xd1933bcc894229b:0x71b995c2eca07f49!8m2!3d38.7382344!4d-9.1339702">
                  Avenida Almirante Reis nº 219 A,<br>
                  1000-249 Lisboa
                </a>
                <a class="only_mobile" href="geo:38.7381544501084,-9.133893630764298;u=35" target="_blank">
                  Avenida Almirante Reis nº 219 A,<br>
                  1000-249 Lisboa
                </a>
                <span class="with-tooltip--text">Ver na app</span>
              </p>
            </div>

            <div class="email">
              <a href="mailto:sol@scml.pt">
                <span class="sr-only">abrir email</span>
                <i class="bi bi-envelope"></i>
              </a>
              <h4>Email:</h4>
              <p class="with-tooltip">
                <a href="mailto:sol@scml.pt">sol@scml.pt</a>
                <span class="with-tooltip--text">abrir email</span>
              </p>
            </div>

            <div class="phone">
              <a href="tel:+351213263070">
                <span class="sr-only">ligar para a clínica</span>
                <i class="bi bi-phone"></i>
              </a>
              <h4>Telefone:</h4>
              <p class="with-tooltip">
                <a href="tel:+351213263070">+351 213 263 070</a>
                <span class="with-tooltip--text">fazer chamada</span>
              </p>
            </div>

          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Qual o seu nome?</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="email">Qual o seu email para contacto?</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="subject">Qual o assunto desta mensagem?</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
            </div>
            <div class="form-group mt-3">
              <label for="message">Qual a sua mensagem?</label>
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Menssagem" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">A carregar</div>
              <div class="error-message"></div>
              <div class="sent-message">A sua mensagem foi enviada. Obrigado!</div>
            </div>
            <div class="text-center text-lg-start">
             <button type="submit" class="btn-border-progress btn-get-started scrollto goto send-message">Enviar Mensagem</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <section id="getHere" class="transportes">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Como chegar</h2>
        <h3>Transportes e estacionamento</h3>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3112.1137836122916!2d-9.1361221!3d38.7381511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1933bcc8b6455b%3A0xb7cb6754cfab278f!2sAv.%20Alm.%20Reis%20219A%2C%201000-049%20Lisboa!5e0!3m2!1sen!2spt!4v1666686938142!5m2!1sen!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <p>
            <a 
              href="https://www.metrolisboa.pt/viajar/alameda-linha-verde/" 
              target="_blank"
              alt="Link para site externo (abre numa nova janela)"
            >Metro - Estação Alameda (linhas Verde e Vermelha)
            <i class="bi bi-box-arrow-up-right"></i>
            </a>
          </p>

          <p>
            <a 
              href="https://www.carris.pt/viaje/planear-viagem/" 
              target="_blank"
              alt="Link para site externo (abre numa nova janela)"
            >Carris - Planeie a sua viagem
            <i class="bi bi-box-arrow-up-right"></i>
            </a>
          </p>

          <p>
            <a 
              href="https://www.gira-bicicletasdelisboa.pt/descobre-as-estacoes/" 
              target="_blank"
              alt="Link para site externo (abre numa nova janela)"
            >Estação GIRA 421 – Bicicletas de Lisboa
            <i class="bi bi-box-arrow-up-right"></i>
            </a>
          </p>

          <p>
            <a 
              href="https://www.empark.com/pt/pt/aparcamento/lisboa/alameda/" 
              target="_blank"
              alt="Link para site externo (abre numa nova janela)"
            >Parque de estacionamento subterrâneo 24h
            <i class="bi bi-box-arrow-up-right"></i>
            </a>
          </p>
          <hr>

          <div class="address">
              <a 
                class="only_desktop" 
                href="http://maps.apple.com/maps?q=38.7381544501084,-9.133893630764298,19.84z/data=!4m5!3m4!1s0xd1933bcc894229b:0x71b995c2eca07f49!8m2!3d38.7382344!4d-9.1339702"
                target="_blank"
                alt="Link para site externo (abre numa nova janela)"
                >
                <span class="sr-only">abrir mapa</span>
                <i class="bi bi-geo-alt only_desktop"></i>
              </a>
              <a 
                class="only_mobile" 
                href="geo:38.7381544501084,-9.133893630764298;u=35" 
                target="_blank"
                alt="Link para site externo (abre numa nova janela)"
                >
                <span class="sr-only">abrir mapa</span>
                <i class="bi bi-geo-alt only_mobile"></i>
              </a>
              <h4>Morada:</h4>
              <p class="with-tooltip">
                <a 
                  class="only_desktop" 
                  href="http://maps.apple.com/maps?q=38.7381544501084,-9.133893630764298,19.84z/data=!4m5!3m4!1s0xd1933bcc894229b:0x71b995c2eca07f49!8m2!3d38.7382344!4d-9.1339702"
                  target="_blank"
                  alt="Link para site externo (abre numa nova janela)"
                >
                  Avenida Almirante Reis nº 219 A,<br>
                  1000-249 Lisboa
                  <i class="bi bi-box-arrow-up-right"></i>
                </a>
                <a 
                  class="only_mobile" 
                  href="geo:38.7381544501084,-9.133893630764298;u=35" 
                  target="_blank"
                  alt="Link para site externo (abre numa nova janela)"
                >
                  Avenida Almirante Reis nº 219 A,<br>
                  1000-249 Lisboa
                  <i class="bi bi-box-arrow-up-right"></i>
                </a>
                <span class="with-tooltip--text">Ver na app</span>
              </p>
            </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ======= Modal Appointment ======= -->
  <div class="modal fade" id="marcacao" tabindex="-1" role="dialog" aria-labelledby="marcacaoTitle" aria-hidden="true" data-bs-backdrop="static">
    <div id="modalDialog" class="modal-dialog" role="document">
      <div id="modalContent" class="modal-content">
        <div id="modalHeader" class="modal-header">
          <h5 class="modal-title" id="marcacaoTitle">Pedido de Marcação de Consulta</h5>
          <a type="button" id="btn-close" class="" data-bs-dismiss="modal" aria-label="Close">Fechar</a>
        </div>
        <div id="modalBody" class="modal-body">
          <p class="form-init-q">
            <strong>IMPORTANTE:</strong><br>
            Esta inscrição é válida apenas para todos os utentes com idade compreendida entre os 0 e 17 anos, inclusive.
            <img style="display: block; margin: 0 auto; width: 50%;" src="<?= get_theme_file_uri('/assets/img/illustrations/schedule.svg'); ?>" class="img-fluid" alt="Calendario">
            Já se encontra inscrito no SOL?
          </p>
          <div class="form-choices">
            <div class="btn-container" style="margin: 0 0 0 auto;">
              <button onclick="showRetorno()" type="button" class="form-choice form-choice-y btn">Sim</button>
              <button onclick="showInscricao()" type="button" class="form-choice form-choice-n btn">Não</button>
            </div>
          </div>

          <div id="formInscricao" class="form-to-display display-hidden">
            <?php echo apply_shortcodes( '[contact-form-7 id="211" title="inscricao"]' ); ?>
          </div>
          <div id="formRetorno" class="form-to-display display-hidden">
            <?php echo apply_shortcodes( '[contact-form-7 id="212" title="retorno"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End of Modal -->

  <!-- ======= Modal Settings ======= -->
  <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="settingsTitle" aria-hidden="true" data-bs-backdrop="static">
      <div id="settingsDialog" class="modal-dialog" role="document">
        <div id="settingsContent" class="modal-content">
          <div id="settingsHeader" class="modal-header">
            <i class="bi bi-gear keepStyle"></i>
            <h5 class="modal-title" id="settingsTitle">Preferências</h5>
            <a type="button" id="btn-cls" class="setUserPreferences" data-bs-dismiss="modal" aria-label="Close">Fechar</a>
          </div>
          <div id="modalBody" class="modal-body">
            <br>
            
            <div class="form-choices">
            <ul class="dropdown-list settings-menu">
                <li class="dropdown-list-item settings-menu-item">

                  <div class="form-check form-switch">
                      <input class="form-check-input useDevicePreferences" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Usar preferências do Dispositivo</label>
                  </div>
                </li>
                <li class="dropdown-list-item settings-menu-item">
                  <div class="form-check form-switch">
                    <input 
                      class="form-check-input useHighContrast" 
                      type="checkbox" 
                      role="switch" 
                      id="flexSwitchCheckChecked"
                    >
                    <label 
                      onclick="myFunction_get()"
                      class="form-check-label" 
                      for="flexSwitchCheckChecked"
                    >Alto Contraste
                    </label>
                  </div>
                </li>

                <li class="dropdown-list-item settings-menu-item">
                  <div class="form-check form-switch">
                    <input 
                      class="form-check-input useAnimation"
                      type="checkbox" 
                      role="switch" 
                      id="AnimationToggle"
                      checked
                    >
                    <label
                      onclick="aosOff_get()" 
                      class="form-check-label"
                      for="AnimationToggle"
                    >Animações
                    </label>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
  </div>
  <!-- End of Modal Settings -->
</main><!-- End #main -->

<?php get_footer(); ?>
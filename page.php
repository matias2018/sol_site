<?php get_header();
$theParent = wp_get_post_parent_id(get_the_ID());
while (have_posts()) : the_post(); ?>

  <div class="page-banner" style="height: 100px;">

    <?php
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray) { ?>
      <div class="page-banner__content container">
        <h1 class="page-banner__title"><a href="<?php echo get_permalink($theParent); ?>"><?= get_the_title($theParent); ?></a></h1>
        <ul class="small-h-nav">
          <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order',
          ));
          ?>
        </ul>
      </div>
    <?php } ?>

  </div>

  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
    if ($theParent) { ?>
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php the_title(); ?></h2>
            <ol>
              <li><a href="<?= get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></li>
              <li><?php the_title(); ?></li>
            </ol>
          </div>
        </div>
      </section>
    <?php } ?>
    <!-- End Breadcrumbs Section -->

    <!-- ======= About Section ======= -->
    <section id="welcome" class="about">

      <?php
      $page = get_page_by_path('institucional');
      if ($page) : ?>

        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center zIndex-2">
              <div data-aos="zoom-out">
                <h1>SOL - Serviço Odontopediátrico de Lisboa<br><small>Saúde Oral em Lisboa</small></h1>
                <h2>Institucional e Investigação</h2>

              </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img zIndex-2" data-aos="zoom-out" data-aos-delay="300">
              <img src="<?php echo get_theme_file_uri('/assets/img/origin/homepage-foto-1.webp'); ?>" class="img-fluid animated" alt="Criança a sorrir">
            </div>
          </div>
        </div>

        <div class="container mb-100">
          <div class="row content">
            <div class="col-md-8 pt-5 order-2 order-md-1 goto-right-on-desktop" data-aos="fade-up">
              <div class="section-title" data-aos="fade-up">
                <h2>Valores</h2>
              </div>
              <p>
                Exercemos a nossa atividade com base em valores, atitudes e práticas humanistas, num quadro de permanente e atuante disponibilidade, de dignificação humana e profissional.
              </p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row content">

            <div class="col-md-8 pt-5 goto-right-on-desktop" data-aos="fade-up">
              <div class="section-title" data-aos="fade-up">
                <h2>Investigação</h2>
              </div>
              <p>
                O nosso compromisso com a educação, formação contínua, investigação e pesquisa bibliográfica permite-nos estar na vanguarda da implementação de novas práticas de saúde, nomeadamente no que se refere a tratamentos pioneiros, procedimentos mais modernos e técnicas de última geração.
                <br>
                Avançamos de mãos dadas com a evidência científica mais atual. Nesse sentido procuramos capacitar os nossos profissionais com formação atualizada e permanente, e dar a oportunidade de investigação e apresentação de casos clínicos e publicações científicas em revistas da especialidade e em congressos de sociedades científicas nacionais e internacionais.
                <br>
                <a href="https://www.researchgate.net/institution/Santa_Casa_da_Misericordia_de_Lisboa" target="_blank">Saiba mais sobre a investigação desenvolvida no SOL, na plataforma Researchgate.</a>
                <i class="bi bi-box-arrow-up-right"></i>
              </p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row content">
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
              <div class="section-title" data-aos="fade-up">
                <h2>Notícias</h2>
              </div>
            </div>
          </div>
          <div class="section-title" data-aos="fade-up">
            <?php get_template_part('news_template'); ?>
          </div>
        </div>


      <?php else : ?>
        <div class="container">
          <div class="row aos-init aos-animate">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Literacia</h2>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
  </main>
  <!-- End #main -->
<?php endwhile;
get_footer(); ?>
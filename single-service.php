<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h1><?php the_title(); ?></h1>
          <div class="text-center text-lg-start">
            <a href="/#features" class="btn-get-started scrollto">Voltar ao início</a>
          </div>
        </div>
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

  <div class="row" data-aos="fade-left">
        <div class="container feature-padding">

          <div class="row content container">

            <div class="col-md-4 mr-5" data-aos="fade-right">
              <img src="<?php echo get_theme_file_uri('/assets/img/origin/homepage-foto-1.png'); ?>" class="img-fluid" alt="<?= the_content(); ?>">
            </div>
            <div class="col-md-8 pt-5 goto-right-on-desktop" data-aos="fade-up">
              <div class="feature-flex">
              <div class="icon-box">
                <span class="like-h5">
                  <b class="green"><?php the_title(); ?></b>
                </span>
              </div>
                <div class="feature-flex_body">
                  <?= the_content(); ?>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
<?php endwhile; ?>

<?php get_footer(); ?>
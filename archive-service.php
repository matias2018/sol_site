<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/assets/img/illustrations/doctor_2-01.svg'); ?>)"></div>
  <div class="page-banner__content container">
    <h1 class="page-banner__title">Os nossos serviços</h1>
    <div class="page-banner__intro">
      <p>Aprende mais sobre:</p>
    </div>
  </div>
</div>

<!-- ======= About Section ======= -->
<section id="welcome" class="about">
  <div class="container-fluid">

    <div class="row">

      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
        <?php
        while (have_posts()) {
          the_post(); ?>
          <div class="gg" data-aos="zoom-in" data-aos-delay="50">
            <h3>
              <a href="<?= the_permalink(); ?>"><?php the_title(); ?>
                <span><img src="<? the_post_thumbnail_url(); ?>" class="img-responsive wp-image-264" width="40" height="100%"></span>
              </a>
            </h3>
          </div>

          <?php the_excerpt(); ?>
          <a href="<? the_permalink(); ?>" class="btn-read-more">Ler mais</a>
          <hr>
        <?php } ?>
      </div>
    </div>
    <div class="d-flex  justify-content-end py-5 px-lg-5" data-aos="fade-left">
      <p><?php echo paginate_links(); ?></p>
    </div>

  </div>
</section><!-- End About Section -->
<?php get_footer(); ?>
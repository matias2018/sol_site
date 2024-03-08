<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/assets/img/illustrations/doctor_2-01.svg'); ?>)"></div>
  <div class="page-banner__content container">
    <h1 class="page-banner__title">A nossa equipa</h1>
    <div class="page-banner__intro">
      <p>This is archive doctor</p>
    </div>
  </div>
</div>

<!-- ======= About Section ======= -->
<section id="welcome" class="about">
  <div class="container-fluid">

    <div class="row">
      <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      </div>

      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
        <?php
        while (have_posts()) {
          the_post(); ?>
          <h3><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="meta-box">
            <small class="post_date">Publicado a <?php the_time('d.m.Y'); ?> sob a categoria <?php echo get_the_category_list(' | '); ?></small>
            <p><span><?php the_category(' | '); ?></span></p>
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
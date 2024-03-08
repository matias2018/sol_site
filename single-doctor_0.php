<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <div id="hero" class="page-banner pd-100">
    <!-- <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/assets/img/illustrations/doctor_2-01.svg'); ?>)"></div> -->
  </div>

  <article <?php post_class(); ?>>
    <!-- ======= Breadcrumbs Section ======= -->
    <div class="container">
      <a href="<?php echo get_post_type_archive_link('doctor'); ?>">Voltar para Doctors</a>
    </div>
    <!-- End Breadcrumbs Section -->

    <div class="container">
      <div class="row aos-init aos-animate p-5">
        <h3><a href="#"><?php the_title(); ?></a></h3>
        <div class="container flex">
          <div class="personal">
            <img src="<?php echo the_post_thumbnail_url(); ?>" class="wp-image">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <h1><?php the_field('doctor_name'); ?></h1>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
  </article>
  <div class="services_list">
    <?php
    $related_programs = get_field('related_programs');
    if ($related_programs) :
      // print_r($related_programs)
      foreach ($related_programs as $program) { ?>
        <li>
          <a href="<?= get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a>
        </li>
      <?php }
      ?>
    <?php endif; ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
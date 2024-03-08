<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
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

  <section class="doctor-persona">
    <div class="container">

      <div class="container persona-header">
        <div class="persona-image-container">
          <img src="<?php echo the_post_thumbnail_url(); ?>" class="wp-image persona-image">
        </div>
        <div data-aos="zoom-out">
          <h1 id="personaTitle"><?php the_title(); ?></h1>
        </div>
        <div class="personal">
          <div class="social">
            <?php
            $linkedin_url = get_field('linkedin');
            if ($linkedin_url) : ?>
              <a target="_blank" href="<?= $linkedin_url; ?>"><i class="bi bi-linkedin"></i></a>
            <?php endif; ?>
            <?php
            $researchgate_url = get_field('researchgate');
            if ($researchgate_url) : ?>
              <a target="_blank" href="<?= $researchgate_url; ?>"><i class="bi bi-bank"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>

    <article <?php post_class(); ?>>
      <!-- ======= Breadcrumbs Section ======= -->
      <!-- <div class="container">
      <a href="<?php get_post_type_archive_link('doctor'); ?>">Voltar para Doctors</a>
    </div> -->
      <!-- End Breadcrumbs Section -->

      <div class="container">

        <div class="row aos-init aos-animate p-5">
          <div class="container">
            <div class="services_list">
              <?php
              $related_programs = get_field('related_programs');
              if ($related_programs) :
                // print_r($related_programs)
                foreach ($related_programs as $program) { ?>
                  <div class="especialidades">
                    <h5><a class="especialidade" href="<?= get_the_permalink($program); ?>">
                        <?php echo get_the_title($program); ?>
                      </a></h5>
                  </div>
                <?php }
                ?>
              <?php endif; ?>
            </div>
            <hr />
            <?php the_content(); ?>
          </div>
        </div>
    </article>
  </section>
<?php endwhile; ?>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/assets/img/illustrations/doctor_2-01.svg'); ?>)"></div>
  </div>
  <article <?php post_class(); ?>>
    <div class="container">
      <div class="row aos-init aos-animate p-5">
        <h3><a href="#"><?php the_title(); ?></a></h3>
        <?php the_content(); ?>
        <h3>don not forget to delete this on single.php line 12</h3>
      </div>
    </div>
  </article>
<?php endwhile; ?>

<?php get_footer(); ?>
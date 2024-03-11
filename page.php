<?php get_header();
$theParent = wp_get_post_parent_id(get_the_ID());
while (have_posts()) : the_post(); ?>

  <div class="page-banner">
    <!--div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/assets/img/illustrations/doctor_2-01.svg'); ?>)"></div-->
    <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/assets/img/origin/clinica/equipamentos-placa.png'); ?>)"></div>
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
      $page = get_page_by_path( 'institucional' );
     if ($page) : ?>
      <div class="container">
        <div class="row aos-init aos-animate">
          <h2>Notícias</h2>
          <?php get_template_part( 'news_template' ); ?>
        </div>
      </div>
    <?php else : ?>
      <div class="container">
        <div class="row aos-init aos-animate">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endif; ?>


    </section><!-- End About Section -->
    <?php get_footer(); ?>
  </main>
  <!-- End #main -->
<?php endwhile;
get_footer(); ?>
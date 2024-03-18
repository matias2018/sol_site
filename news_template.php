<div class="row" data-aos="fade-left">

  <?php
  function custom_excerpt($limit = 25) {
    $excerpt = explode(' ', strip_tags(get_the_content()), $limit);
    if (count($excerpt) >= $limit) {
      array_pop($excerpt);
      $excerpt = implode(' ', $excerpt) . '...';
    } else {
      $excerpt = implode(' ', $excerpt);
    }
    return $excerpt;
  }

  $category_name = 'noticias';

  $noticias = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'post',
    'order' => 'ASC',
    'category_name' => $category_name
  ));
  // print_r($noticias);
  while ($noticias->have_posts()) {
    $noticias->the_post(); ?>

    <div class="col-lg-3 col-md-4 mt-4 mt-md-4">
      <a href="<?= the_permalink(); ?>">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
          <span>
            <img src="<? the_post_thumbnail_url(); ?>" class="img-responsive wp-image-264" width="100%" height="200px" alt="<?= the_title(); ?>">
          </span>
          <h3>
            <?php the_title(); ?>
          </h3>
        </div>
      </a>
      <p><?php echo custom_excerpt(25); ?></p>
    </div>

  <?php } ?>

</div>
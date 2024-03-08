<?php


function sol_files()
{
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
  wp_enqueue_style('sol_main_style', get_theme_file_uri('/assets/css/style.css'));
  wp_enqueue_style('nav_main_style', get_theme_file_uri('/assets/css/nav.css'));
  wp_enqueue_style('aos', get_theme_file_uri('/assets/vendor/aos/aos.css'));
  wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'));
  wp_enqueue_style('bootstrap_icons', get_theme_file_uri('/assets/vendor/bootstrap-icons/bootstrap-icons.css'));
  wp_enqueue_style('boxicons', get_theme_file_uri('/assets/vendor/boxicons/css/boxicons.min.css'));
  wp_enqueue_style('glightbox', get_theme_file_uri('/assets/vendor/glightbox/css/glightbox.min.css'));
  wp_enqueue_style('remixicon', get_theme_file_uri('/assets/vendor/remixicon/remixicon.css'));
  wp_enqueue_style('swiper-bundle', get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.css'));

  wp_enqueue_script('pureCounter', get_theme_file_uri('/assets/vendor/purecounter/purecounter_vanilla.js'));
  wp_enqueue_script('aosJs', get_theme_file_uri('/assets/vendor/aos/aos.js'));
  /*   wp_enqueue_script('navJs', get_theme_file_uri('/assets/vendor/nav/nav.js')); */
  wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'));
  wp_enqueue_script('glightbox', get_theme_file_uri('/assets/vendor/glightbox/js/glightbox.min.js'));
  wp_enqueue_script('swiper-bundle', get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.js'));
  wp_enqueue_script('validate', get_theme_file_uri('/assets/vendor/php-email-form/validate.js'));
  /* wp_enqueue_script('iconify', get_theme_file_uri('//code.iconify.design/2/2.2.1/iconify.min.js')); */
  wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.js'), array('bootstrap'), '1.0', true);
  wp_enqueue_script('forms', get_theme_file_uri('/assets/js/forms.js'), '1.0', true);
  wp_enqueue_script('contrast', get_theme_file_uri('/assets/js/contrast.js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sol_files');

function sol_features()
{
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
  register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');

  add_post_type_support('service', 'post-thumbnails');
}
add_action('after_setup_theme', 'sol_features');

function sol_adjust_queries($query)
{
  if (!is_admin() and is_post_type_archive('service') and is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }
}

add_action('pre_get_posts', 'sol_adjust_queries');

function sol_services_excerpt_length($length)
{
  return 15;
}
add_filter('excerpt_length', 'sol_services_excerpt_length', 999);

/* -------------------------------------------------------------------------- */
/* ----------------  Make featured images available from url ---------------- */
/* -------------------------------------------------------------------------- */
/* 
SOURCE:
https://wordpress.stackexchange.com/questions/158491/is-it-possible-set-a-featured-image-with-external-image-url 
*/

/* Personalize Back End */

/** Add custom login Page*/
/** Add custom logo*/
function ndd_login_logo()
{
?>
  <style type="text/css">
    body {
      background: #000000;
      min-width: 100vw;
    }

    body.login {
      background: #313543 !important;
      min-width: 100vw;
    }

    body.login div#login form#loginform label {
      color: #ffffff;
      font-family: 'Montserrat', sans-serif;
    }

    body.login div#login form#loginform {
      background: #313543 !important;
      border: none;
      padding: 20px;
    }

    body.login div#login form#loginform #user_login {
      font-family: 'Montserrat', sans-serif;
    }

    body.login div#login p#nav a,
    body.login div#login p#backtoblog a {
      color: #ffffff;
      font-family: 'Montserrat', sans-serif;
    }

    #login h1 a,
    .login h1 a {
      background-image: url('/wp-content/themes/sol/assets/img/logo-santa-casa.png');
      background-repeat: no-repeat;
      padding-bottom: 10px;
    }
  </style>
<?php
}

add_action('login_enqueue_scripts', 'ndd_login_logo');



$args = array(
  'default-color' => '0000ff',
);

add_theme_support('custom-background', $args);

/* Add custom logo */
function config_custom_logo()
{

  $defaults = array(
    'height' => 70,
    'width' => 70,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array(),
    'unlink-homepage-logo' => false,
  );
  /*   var_dump($defaults); */
  add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'config_custom_logo');

/** Add custom logo inside admin Page*/
function wpb_custom_logo()
{
  echo '
    <style type="text/css">


    #adminmenu .wp-admin-bar-customize {
      color: #fff !important;
    }

    #wpadminbar {
      background-color: #1D96A2;
    }
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
    background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/css/favicon-144.jpg) !important;
    background-position: 0 0;
    background-size: cover;
    background-repeat: no-repeat;
    color:rgba(0, 0, 0, 0);
    }
    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
    background-position: 0 0;
    }
    </style>
    ';
}

//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');
/** End Add custom logo inside admin Page*/

/** Add custom footer admin Page*/
function remove_footer_admin()
{

  echo 'Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Desenvolvido pela DICM [NDD]: <a href="https://www.scml.pt" target="_blank">SCML</a></p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
/** End Add custom footer admin Page*/

/** Add custom help contacts admin Page*/
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets()
{
  global $wp_meta_boxes;
  wp_add_dashboard_widget('custom_help_widget', 'Suporte', 'custom_dashboard_help');
}

function custom_dashboard_help()
{
  echo '<p>Bem vindo ao tema base do <strong>Núcleo de Desenvolvimento Digital</strong> da <b>Santa Casa da Misericórdia de Lisboa</b>! <br>Precisa de ajuda? Contacte os nossos developers por <a href="mailto:pedro.n.matias@scml.pt">e-mail</a>. <br>Para ajuda urgente contacte: <a href="tel:213263033">213 263 033 | Ext: 11033</a></p>';
  echo '<style type="text/css">#custom_help_widget{background:#005391; color: #fff;} #custom_help_widget h2, #custom_help_widget a, #custom_help_widget button {background:#005391; color: #fff;}</style>';
}
/** End Add custom help contacts Page*/

/** REMOVE EVENTS AND WORDPRESS STUFF */
add_action('custom_dashboard_help', 'custom_dashboard_help');

function custom_help_widget()
{
  remove_meta_box('dashboard_primary', 'dashboard', 'side');
  remove_meta_box('dashboard_secondary', 'dashboard', 'side');
}
/** End REMOVE EVENTS AND WORDPRESS STUFF */

add_action( 'wp_footer', 'mycustom_wp_footer' );
  
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
  clearForms();
}, false );
</script>
<?php
}

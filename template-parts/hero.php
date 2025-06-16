<?php
  // Image de fond depuis ACF ou image par défaut
  $bg = get_field('image_hero');
  $default_bg = get_template_directory_uri() . '/assets/images/hero.png';
  $bg_url = $bg ? $bg : $default_bg;

  // Logo
  $logo = get_field('logo_hero');
  $default_logo = get_template_directory_uri() . '/assets/images/logo.png';

  // Titre
  $titre = get_field('titre_hero');
  $default_titre = "Bibendum semper elementum tellus neque viverra. Egestas at.";
?>

<header class="hero grid-container" style="background-image: url('<?php echo esc_url($bg_url) ; ?>');">
  <div class="container xxl-col-22-start-14 xl-col-24-start-13 lg-col-32-start-9 md-col-28-start-3 sm-col-18-start-4">
    <div class="hero__logo">
      <img src="<?php echo esc_url($logo ? $logo : $default_logo); ?>" alt="Logo">
    </div>
    <h1 class="hero__title hero-animation">
      <?php echo esc_html($titre ? $titre : $default_titre); ?>
    </h1>
  </div>

  <div class="hero__overlay"></div>
</header>

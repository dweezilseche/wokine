<section class="products-highlight grid-container">
  <div class="container xxl-col-48-start-1 xl-col-48-start-1 lg-col-48-start-1 md-col-32-1 sm-col-48-start-1 ">
    <div class="products-highlight__header">
    <?php $titre_section_carousel = get_field('titre_section_carousel') ?>

    <h2 class="products-highlight__title split-scroll"><?php echo esc_html($titre_section_carousel ?: 'Nos dernières nouveautés'); ?></h2>
    <a href="#" class="products-highlight__cta btn-scroll">Tous nos produits</a>
  </div>

  <div class="products-carousel">

  <div class="carousel-wrapper">
    <?php for ($i = 1; $i <= 6; $i++) : 
  $image = get_field("produit_{$i}_image");
  $titre = get_field("produit_{$i}_titre");
  $desc = get_field("produit_{$i}_description");
?>
  <div class="product-card product-scroll">
    <div class="img-product">
      <span class="badge">nouveauté</span>
      <img src="<?= $image ? esc_url($image['url']) : get_template_directory_uri() . "/assets/images/shoes-{$i}.png"; ?>" alt="<?= esc_attr($image['alt'] ?? "Produit {$i}"); ?>">
    </div>
    <div class="product-description">
      <h3 class="product-card__title split-scroll split-hover"><?= $titre ?: "Vehicula dapibus"; ?></h3>
      <p class="product-card__desc split-scroll split-hover"><?= $desc ?: "Tristique cras interdum volutpat faucibus viverra cursus id. Orci blandit nunc nibh arcu non sit volutpat. Vitae id ut dui tellus."; ?></p>
    </div>
  </div>
<?php endfor; ?>
  </div>
  </div>

  <div class="carousel-buttons">
  <a class="carousel-nav prev" aria-label="Précédent">
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.00012 14.303L3.69682 8.99968L9.00012 3.69638" stroke-width="1.87502" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>

  <a class="carousel-nav next" aria-label="Suivant">
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 3.69653L14.3033 8.99983L9 14.3031" stroke-width="1.87502" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>

</section>

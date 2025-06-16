<section class="services grid-container">
  <div class="container xxl-col-40-start-5 xl-col-40-start-5 lg-col-44-start-3 md-col-30-start-2 sm-col-22-start-2  ">

    <?php
      $titre_intro = get_field('titre_intro');
      $texte_intro = get_field('texte_intro');
      $bouton_label = get_field('bouton_label');
      $bouton_lien = get_field('bouton_lien');
    ?>

    <h2 class="split-scroll">
      <?php echo esc_html($titre_intro ?: 'L’expertise au service de vos lorem ipsum'); ?>
    </h2>

    <div class="services-intro">
      <p class="split-scroll">
        <?php echo esc_html($texte_intro ?: "Volutpat sed hendrerit tellus lorem. Mollis urna arcu tincidunt tellus arcu nisi. Eleifend est tristique sollicitudin arcu purus nisl nunc rutrum diam. Nisl pellentesque augue suspendisse ultrices eu orci eu neque senectus. Elementum pretium nulla varius elit velit nisi dui nulla. Ut sit tellus gravida morbi."); ?>
      </p>

      <?php if ($bouton_label && $bouton_lien): ?>
        <a class="btn btn-scroll" href="<?php echo esc_url($bouton_lien); ?>">
          <?php echo esc_html($bouton_label); ?>
        </a>
      <?php else: ?>
        <a class="btn btn-scroll" href="#" class="products-highlight__cta">Contactez-nous</a>
      <?php endif; ?>
    </div>

  </div>
</section>

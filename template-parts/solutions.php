<section class="solutions grid-container">
  <!-- Formes SVG -->
  <div class="svg-bg">
    <!-- forme 1 -->
    <svg class="shape shape-1" width="901" height="877" viewBox="0 0 901 877" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.51" filter="url(#filter0_f_1_84)">
      <path d="M186.59 282.092C-54.8676 346.369 -345.721 602.49 -379.723 667C-437.479 803.472 -352.917 909.77 -202.565 687.316C-14.6247 409.248 172.617 443.483 593.91 324.012C930.944 228.435 837.277 114.18 748.314 69H555.483C533.126 113.249 428.048 217.815 186.59 282.092Z" fill="url(#paint0_linear_1_84)"/>
      </g>
      <defs>
      <filter id="filter0_f_1_84" x="-466.469" y="0.531143" width="1366.63" height="883.695" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
      <feGaussianBlur stdDeviation="34.2344" result="effect1_foregroundBlur_1_84"/>
      </filter>
      <linearGradient id="paint0_linear_1_84" x1="832.55" y1="41.1821" x2="124.079" y2="1053.95" gradientUnits="userSpaceOnUse">
      <stop stop-color="#F2FDFF"/>
      <stop offset="0.78125" stop-color="#5FBBF3"/>
      <stop offset="1" stop-color="#535CFF" stop-opacity="0"/>
      </linearGradient>
      </defs>
    </svg>


    <!-- forme 2 -->
    <svg class="shape shape-2" width="684" height="859" viewBox="0 0 684 859" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g style="mix-blend-mode:multiply" opacity="0.51" filter="url(#filter0_f_1_85)">
      <path d="M653.59 576.665C412.132 512.388 121.279 256.267 87.2773 191.757C29.5213 55.2852 114.083 -51.0125 264.435 171.441C452.375 449.509 639.617 415.274 1060.91 534.746C1397.94 630.322 1304.28 744.577 1215.31 789.757H1022.48C1000.13 745.509 895.048 640.942 653.59 576.665Z" fill="url(#paint0_linear_1_85)"/>
      </g>
      <defs>
      <filter id="filter0_f_1_85" x="0.531143" y="-25.469" width="1366.63" height="883.695" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
      <feGaussianBlur stdDeviation="34.2344" result="effect1_foregroundBlur_1_85"/>
      </filter>
      <linearGradient id="paint0_linear_1_85" x1="1299.55" y1="817.575" x2="591.079" y2="-195.189" gradientUnits="userSpaceOnUse">
      <stop stop-color="#F2FDFF"/>
      <stop offset="0.78125" stop-color="#5FBBF3"/>
      <stop offset="1" stop-color="#535CFF" stop-opacity="0"/>
      </linearGradient>
      </defs>
    </svg>


     <!-- forme 3 -->
    <svg class="shape shape-3" width="674" height="531" viewBox="0 0 674 531" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.82" filter="url(#filter0_f_1_82)">
      <path d="M495.834 420.347C584.413 382.391 606.081 291.712 544.23 217.81C482.38 143.909 360.432 114.769 271.853 152.725L219.387 175.207C130.808 213.163 109.14 303.841 170.99 377.743C232.841 451.644 354.789 480.784 443.368 442.828L495.834 420.347Z" fill="url(#paint0_radial_1_82)"/>
      </g>
      <defs>
      <filter id="filter0_f_1_82" x="0.620361" y="0.953125" width="713.98" height="593.647" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
      <feGaussianBlur stdDeviation="67.5618" result="effect1_foregroundBlur_1_82"/>
      </filter>
      <radialGradient id="paint0_radial_1_82" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(333.302 326.395) rotate(-154.057) scale(209.025 177.217)">
      <stop stop-color="#00E2E2"/>
      <stop offset="1" stop-color="#2C32FE" stop-opacity="0.31"/>
      </radialGradient>
      </defs>
    </svg>


  </div>

  <div class="container xxl-col-32-start-9 xl-col-32-start-9 lg-col-40-start-5 md-col-30-start-2 sm-col-22-start-2 ">
    <?php
        $title_section = get_field('title_section');
      ?>
    <h3 class="split-scroll"><?php echo esc_html($title_section ?: 'Des solutions techniques complètes pour tous vos projets'); ?></h3>

    <div class="editorial-cards__grid">

      <!-- Carte 1 -->

      <?php
        $title_first_bloc = get_field('title_first_bloc');
        $text_first_bloc = get_field('text_first_bloc');
        $text_btn_first_bloc = get_field('text_btn_first_bloc');
      ?>

      <article class="card card--large article-scroll">
        <div class="card__content">
          <div class="infos-card">
            <h4 class="card__title split-article"><?php echo esc_html($title_first_bloc ?: 'Aenean aliquam'); ?></h4>
          <p class="card__text split-article">
            <?php echo esc_html($text_first_bloc ?: 'Imperdiet faucibus egestas ipsum et mattis. Duis non et justo vestibulum vitae. Tortor tincidunt felis neque congue. In et tempus dignissim ullamcorper eget pellentesque vestibulum pellentesque. Viverra eget elit id eget. Ut cursus sed et massa morbi feugiat. Ac faucibus ante congue nisi a amet elit est. Fermentum.'); ?>
          </p>
          </div>
          
          <a href="#" class="btn">
            <span><?php echo esc_html($text_btn_first_bloc ?: 'Voir plus'); ?></span>
            <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.5 7.70509H7.5641M7.5641 7.70509L1 1.14099M7.5641 7.70509L1.41026 13.8589" stroke-width="2.0687"/>
            </svg>
          </a>

        </div>
      </article>


      <!-- Carte 2 -->

      <?php
        $img_bg_second_bloc = get_field('img_bg_second_bloc');
        $default_img_bg_second_bloc = get_template_directory_uri() . '/assets/images/img-card.webp';

        $title_second_bloc = get_field('title_second_bloc');
        $text_btn_second_bloc = get_field('text_btn_second_bloc');
      ?>

      <article class="card card--image article-scroll" style="background-image: url('<?php echo esc_url($img_bg_second_bloc ? $img_bg_second_bloc : $default_img_bg_second_bloc); ?>');">
        <div class="card__content">
          <h4 class="card__title split-article">
            <?php echo esc_html($title_second_bloc ?: 'Sed sollicitudin malesuada gravida'); ?>
          </h4>
          <a href="#" class="btn">
            <span><?php echo esc_html($text_btn_second_bloc ?: 'Voir plus'); ?></span>
            <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.5 7.70509H7.5641M7.5641 7.70509L1 1.14099M7.5641 7.70509L1.41026 13.8589" stroke-width="2.0687"/>
            </svg>
          </a>
        </div>
      </article>


      <!-- Carte 3 -->

      <?php
        $title_third_bloc = get_field('title_third_bloc');
        $text_btn_third_bloc = get_field('text_btn_third_bloc');
      ?>

      <article class="card card--pink article-scroll">
        <div class="card__content">
          <h4 class="card__title split-article"><?php echo esc_html($title_second_bloc ?: 'A hendrerit tincidunt elementum a'); ?></h4>
          <a href="#" class="btn">
            <span><?php echo esc_html($text_btn_third_bloc ?: 'Voir plus'); ?></span>
            <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.5 7.70509H7.5641M7.5641 7.70509L1 1.14099M7.5641 7.70509L1.41026 13.8589" stroke-width="2.0687"/>
            </svg>
          </a>
        </div>
      </article>

    </div>
  </div>
</section>
<?php get_header(); ?>
<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h2>', '</h2>');
            the_content();
        endwhile;
    else :
        echo '<p>Aucun contenu trouvé</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>
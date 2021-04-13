<?php
/** Template Name: Candy Explanation Template*/ 
get_header();
?>

<main>
    <?php 
        while (have_posts()) : 
            the_post();
            get_template_part('template-parts/content/content-page');
        endwhile;
    ?>
</main>
<?php get_footer(); ?>
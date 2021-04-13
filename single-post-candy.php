<?php
/**
 * Template Name: Candy Explanation Template
 * Template Post Type: candies 
 */
get_header();
?>
<main class="candyExplanation">
    <section>
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <h1><?php the_title(); ?></h1>
        <div class="candyContent">
            <div>
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('small'); ?>" alt="candy image" style="height: auto; width: 200px;">
                <?php endif; ?>
            </div>
            <div> 
                <p><?php the_content(); ?></p>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
</main>

<?php
  get_footer();
?>
<?php
/**
 * Template Name: Candy Explanation Page Template v2
 * @version 1.0
 * Description: custom page template
 */
get_header();
?>
<main>
    <div class="recentPost">
    <section class="masthead" style="background-image: url(<?php the_field('masthead_image'); ?>)">
        <div>
            <h1><?php the_field('masthead'); ?></h1>
        </div>
    </section>
    <section class="row-1">
        <article>
            <div style="display: inline-block">
                <h2 style="text-align: center;"><?php the_field("candy_title"); ?></h2>
                <br>
                <img src="<?php the_field("candy_img"); ?>" alt="Candy image" style="height: auto; width: 60%; margin-left: 20%;">
                <br>
                <br>
                <p><?php the_field("candy_text"); ?></p>
            </div>
        </article>
        
    </section>

    <section class="some-posts">
      <!-- in this section we will just display our posts by category -->
      <?php
        $args1 = array(
          'post_type' => 'candies',
          'category_name' => 'candies',
          'post_status' => 'publish'
        );
        $arr_posts1 = new WP_Query($args1);
        if ( $arr_posts1->have_posts() ) :
          while ( $arr_posts1->have_posts() ) :
          $arr_posts1->the_post();
        ?>
        <article>
            <?php
              if ( has_post_thumbnail() ) :
                the_post_thumbnail();
              endif;
            ?>
            <header>
                <h4><?php the_title(); ?></h4>
            </header>
            <div>
                <?php the_excerpt(); ?>
                <?php the_category(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
        <?php
        endwhile;
        endif;
        ?>
    </section>
    <section class="candy-explanation-section">
        <article>
            <?php
                $args2 = array(
                    'post_type' => 'candies',
                    'posts_per_page' => 12,
                );
                $the_query = new WP_Query($args2);
                if ($the_query -> have_posts()) : 
                    while($the_query-> have_posts()) : $the_query -> the_post(); 
            ?>
            <div class="recentCandy">
            <div>
                <?php if (has_post_thumbnail()) :?>
                    <img src="<?php the_post_thumbnail_url('largest'); ?>" alt="candy image" style="height: auto; width: 200px;">
                <?php endif; ?>
            </div>
            <div>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_excerpt(); ?>
                <?php the_category(); ?>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </div>
            </div>
            <?php endwhile; wp_reset_postdata(); else: endif;?>
        </article>
    </section>
    </div>
  </main>
<?php
  get_footer();
?>


<?php get_header(); ?>
  <div id="front-page" class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <section class="front-page-content">
          <?php the_content(); ?>
        </section> <!-- .front-page-content -->
      <?php endwhile; ?>

    <?php endif; ?>
  </div> <!-- .front-page-content .container -->
<?php get_footer(); ?>

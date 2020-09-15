<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php the_excerpt(); ?>
<?php endwhile; ?>
<?php else: ?>
  <p><?php _e("Waa ka xumahay qoraalka ma helin.", "aqoonkaal") ?>
<?php endif; ?>

<?php get_footer(); ?>

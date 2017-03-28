<?php
  /**
  * Section =>  Press
  */ 

?>

<header>
  <h2>Press</h2>
</header>
<?php 
  $count = 0;
  $press = new WP_Query( 
    array(
      'post_type' => 'press',
      'posts_per_page' => -1,
      'order' => 'ASC'
    )
  );
  while ( $press->have_posts() ) : $press->the_post();
?>
<article class="clipping" id="cl-<?php echo $count; ?>">
  <div class="date"><?php echo get_field('date'); ?></div>
  <div class="line"></div>
  <h2><?php the_title(); ?></h2>
  <div class="line"></div>
  <p><?php echo get_field('pull_quote'); ?>... <a href="<?php echo get_field('pub_link'); ?>">READ MORE</a></p>
</article>
<?php $count++;endwhile; wp_reset_query(); ?>
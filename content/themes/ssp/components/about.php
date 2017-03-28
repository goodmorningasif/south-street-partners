<?php
  /**
  * Section =>  About
  */ 
?>

<header>
	<h2>About</h2>
	<p>South Street Partners has deployed over 400 million of capital into diverse asset classes and is Headquartered in Charlotte, NC and Charleston, Sc.</p>
</header>

<!-- == Section: Directory == -->
<section id="directory">
  <h3>Meet The Team</h3>
  <?php 
    $count = 0;
    $team = new WP_Query( 
      array( 
        'post_type' => 'team', 
        'posts_per_page' => -1, 
        'order' => 'ASC'
        )
      );
    while ( $team->have_posts() ) : $team->the_post();
  ?>
  <div class="list" id="li-<?php echo $count; ?>">
    <h2><?php the_title(); ?></h2>
    <p><?php echo get_field('team_title'); ?></p>
  </div>
  <?php $count++;endwhile; wp_reset_query(); ?>
</section>

<!-- == Section: Biography == -->
<section id="biography">
	<div class="arrow" id="left">
	  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
	</div>
	<div id="writeups">
  <?php 
    $count = 0;
    $team = new WP_Query( 
      array( 
        'post_type' => 'team', 
        'posts_per_page' => -1, 
        'order' => 'ASC'
        )
      );
    while ( $team->have_posts() ) : $team->the_post();
  ?>
    <div id="wr-<?php echo $count; ?>" class="writeup">
  	  <p><?php the_content(); ?></p>
    </div>

  <?php $count++;endwhile; wp_reset_query(); ?>

	</div>
	<div class="arrow" id="right">
		<?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
	</div>

</section>

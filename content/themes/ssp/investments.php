<?php
/** 
 * Template Name: Investments
 */

	get_header(); 
  
  if ( !empty( $_GET['prop'] ) ) {
	  $prop = $_GET['prop'];
  } else {
  	$prop = 0;
  }
  function queryPosts($num=0) {
  	return new WP_Query( 
			array (
		    'post_type' => 'properties',
		    'posts_per_page' => 1,
		    'offset' => $num,
		    'order' => 'ASC',
		    'offset'
			)
		);
  }
  $investment = queryPosts($prop); 
	while ( $investment->have_posts() ) : $investment->the_post();
	  $main = get_field('main_image');
	  $thumb1 = get_field('thumb_1');
	  $thumb2 = get_field('thumb_2');
?>

<!-- ==== Section: Preview ==== -->
<section id="preview" 
  style="background-image: url(<?php echo $main['url']; ?>)">
</section>

<!-- ==== Section: Property ==== -->
<section id="property">

	<!-- == Section: Thumbs == -->
	<section id="thumbs">
	  <div class="thumb" id="th-0"
	    style="background-image: url(<?php echo $thumb1['url']; ?>)"></div>
	  <div class="thumb" id="th-1"
		  style="background-image: url(<?php echo $thumb2['url']; ?>)"></div>
	</section>

	<!-- == Section: Details == -->
	<section id="details">
	  <article>
			<h1><?php the_title(); ?></h1>
			<h2><?php get_field('desc'); ?></h2>
			<?php if ( have_rows('details') ) : while ( have_rows('details') ) : the_row(); ?>
			<div class="bullets">
			  <p class="point"><?php echo get_sub_field('points'); ?></p>
			  <?php if ( have_rows('sub_details') ) : while ( have_rows('sub_details') ) : the_row(); ?>
				  <p class="subpoint"><?php echo get_sub_field('sub_points'); ?></p>
				<?php endwhile;endif; ?>
			</div>
      <?php endwhile;endif; ?>
	  </article>

		<!-- == Section: Controls == -->
		<section id="controls">
		  <div class="visit">
			  <a target="_blank" href="<?php echo get_field('prop_link') ?>">Visit</a>
		  </div>
		  <div class="back">
			  <a id="back-prop" href="?prop=<?php echo ($prop - 1); ?>" ><?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
			  <span id="back">Back</a></san>
			</div>
			<div class="next">
			  <a id="next-prop" href="?prop=<?php echo ($prop + 1); ?>"><span id="next">Next <span class="toggle">Investment</span></span>
			  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
			</a></div>
		</section>
	</section>
</section>
<?php endwhile; ?>
<?php

/**
*  Console Logs
* 
* echo "<script>console.log('".$GLOBALS['maps'].", outputs map');</script>";
*/  


?>
<?php get_footer();
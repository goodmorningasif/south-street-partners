<?php
/** 
 * Template Name: Investments
 */

	get_header(); 
  
  if ( !empty( $_GET['prop'] ) ) 
	  $prop = $_GET['prop'];
  else
  	$prop = 0;
  
  // Variables
  $countProps = wp_count_posts( $post_type = 'properties' );
  $totalProps = $countProps->publish;
  $next = ( $prop + 1 >= $totalProps ? 0 : $prop + 1);
  $back = ( $prop - 1 < 0 ? $totalProps - 1 : $prop - 1 );
  
  // Query + loop
  if ( !empty( $_GET['id'] ) ) {
    $id = $_GET['id'];
	  function queryPosts($id=7) {
	  	return new WP_Query( 
				array (
			    'post_type' => 'properties',
			    'p' => $id,
				)
			);
	  }

	  $investment = queryPosts($id); 

  } else {
	  function queryPosts($num=0) {
	  	return new WP_Query( 
				array (
			    'post_type' => 'properties',
			    'posts_per_page' => 1,
			    'offset' => $num,
			    'order' => 'ASC'
				)
			);
	  }

	  $investment = queryPosts($prop); 
  	
  }


	while ( $investment->have_posts() ) : $investment->the_post();
			  $main = get_field('main_image');
?>

<!-- ==== Section: Preview ==== -->
<section id="preview" 
  style="background-image: url(<?php echo $main['url']; ?>)">
</section>

<?php
    $count = 0;
    $total = count( get_field('the_repeater') );
	  if ( have_rows('the_repeater') ):
	  	while ( have_rows('the_repeater' ) ) : the_row(); 
			  $thumb1 = get_sub_field('thumb_1');
			  $thumb2 = get_sub_field('thumb_2');
?>

<!-- ==== Section: Property ==== -->
				<?php if($count < $total - 1) : ?>
<section class="property">
        <?php else : ?>
<section class="property" id="last">
        <?php endif; ?>
	<!-- == Section: Thumbs == -->
	<section class="thumbs">
	  <div class="thumb" id="th-0"
	    style="background-image: url(<?php echo $thumb1['url']; ?>)"></div>
	  <div class="thumb" id="th-1"
		  style="background-image: url(<?php echo $thumb2['url']; ?>)"></div>
	</section>

	<!-- == Section: Details == -->
	<section class="details">
	  <article>
			<h1><?php echo get_sub_field('prop_title'); ?></h1>
			<h2><?php echo get_sub_field('desc'); ?></h2>
			<?php if ( have_rows('details') ) : while ( have_rows('details') ) : the_row(); ?>
			<div class="bullets">
			  <p class="point">
			    <?php echo get_sub_field('points'); ?>
		    </p>
			  <?php if ( have_rows('sub_details') ) : while ( have_rows('sub_details') ) : the_row(); ?>
				  <p class="subpoint">
				    <?php echo get_sub_field('sub_points'); ?>
			    </p>
				<?php endwhile;endif; ?>
			</div>
	    <?php ;endwhile;endif; ?>
	  </article>

		<!-- == Section: Controls == -->
		<section class="controls">
		  <div class="visit">
			  <a target="_blank" href="<?php echo get_field('prop_link') ?>">Visit</a>
		  </div>
				<?php if($count === 0 ) : ?>
		  <div class="back">
			  <a id="back-prop" href="?prop=<?php echo $back; ?>" >
			    <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
			    <span id="back">Back</span>
			  </a>
			</div>
			<div class="next">
			  <a id="next-prop" href="?prop=<?php echo $next; ?>">
			    <span id="next">Next <span class="toggle">Investment</span></span>
			    <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
			  </a>
			</div>
				<?php endif; ?>
		</section>
	</section>
</section>
<?php $count++;endwhile;endif;endwhile; ?>
<?php get_footer();
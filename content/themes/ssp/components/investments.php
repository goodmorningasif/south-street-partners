<?php
  /**
  * Section =>  Investments
  */
 
?>

<header>
	<h2>Investments</h2>
	<p>Collectively, the South Street team has over forty years combined experience and has been involved in over $1.5 billion of real estate transactions with over $750 million in equity invested including $500 million of equity invested in the development, acquisition and management of fifteen luxury residential club developments.</p>
</header>

<!-- == Section: Ongoing == -->
<section id="ongoing">
  <h3>Active</h3> 
	<?php 
	  $count=0;
	  if( have_rows('ongoing', '2') ) :
	  	while ( have_rows('ongoing', '2') ) : the_row();
	    $preview = get_sub_field('on-preview');
	    $post_obj = get_sub_field('on-link');
	    $id = $post_obj->ID;
	?>
	
	<article class="investment" id="on-<?php echo $count; ?>"
	  style="background-image: url('<?php echo $preview['url']; ?>')">
	  <a href="<?php echo $GLOBALS['root']; ?>/investments/?id=<?php echo $id; ?>">
	    <div class="content">
				<h1><?php echo get_sub_field('on-title'); ?></h1>
				<p><?php echo get_sub_field('on-tagline'); ?></p>
			</div>
		</a>
	</article>
<?php $count++;endwhile;endif; ?>
</section>

<!-- == Section: Realized == -->
<section id="realized">
	<h3>Realized</h3>
	<?php 
	  $count=0;
	  if( have_rows('realized', '2') ) :
	  	while ( have_rows('realized', '2') ) : the_row();
	    $preview = get_sub_field('re-preview');
	    $post_obj = get_sub_field('re-link');
	    $id = $post_obj->ID;
	?>
	<article class="investment" id="re-<?php echo $count; ?>"
	  style="background-image: url('<?php echo $preview['url']; ?>')">
	  <a href="<?php echo $GLOBALS['root']; ?>/investments/?id=<?php echo $id; ?>">
		  <div class="content">
				<h1><?php echo get_sub_field('re-title'); ?></h1>
				<p><?php echo get_sub_field('re-tagline'); ?></p>
			</div>
		</a>
	</article>
<?php $count++;endwhile;endif; ?>
</section>
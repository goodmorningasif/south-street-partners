<?php
/** 
 * Template Name: Investments
 */

	get_header(); ?>


<?php

/**
*  Console Logs
* 
* echo "<script>console.log('".$GLOBALS['maps'].", outputs map');</script>";
*/  


?>

<!-- ==== Section: Preview ==== -->
<section id="preview">
</section>

<!-- ==== Section: Thumbs ==== -->
<section id="thumbs">
  <div class="top"></div>
  <div class="bottom"></div>
</section>

<!-- ==== Section: Details ==== -->
<section id="details">
  <article>
		<h1>Kaiwah Island</h1>
		<h2>World Renowned Island Community In South Carolina</h2>
		<div class="bullets">
		  <p class="point">Kiawah Island Club</p>
		  <p class="subpoint">1,700 Members</p>
		  <p class="subpoint">6 Facilities</p>
		  <a href="">Visit</a>
		</div>
  </article>
</section>

<!-- ==== Section: Controls ==== -->
<section id="controls">
	<div id="back">
	  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
	  Back
	</div>
	<div id="next">
	  Next Investment
	  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
	</div>
</section>

<?php get_footer();
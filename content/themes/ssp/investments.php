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

<!-- ==== Section: Property ==== -->
<section id="property">
  <?php get_template_part('components/property'); ?>
</section>



<?php get_footer();
<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link https://github.com/sdco-partners/south-street-partners
 *
 * @package SSP
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

	get_header(); ?>


<!-- ==== Section: Main ==== -->
<section id="main">
  <?php get_template_part('components/main'); ?>
</section>

<!-- ==== Section: About ==== -->
<section id="about">
  <?php get_template_part('components/about'); ?>
</section>

<!-- ==== Section: Investments -->
<section id="investments">
  <?php get_template_part('components/investments') ?>
</section>

<!-- ==== Section: Press ==== -->
<section id="press">
  <?php get_template_part('components/press'); ?>
</section>

<!-- ==== Section: Contact ==== -->
<section id="contact">
  <?php get_template_part('components/contact'); ?>
</section>


<?php

/**
*  Console Logs
* 
* echo "<script>console.log('".$GLOBALS['maps'].", outputs map');</script>";
*/  


?>

<?php get_footer();
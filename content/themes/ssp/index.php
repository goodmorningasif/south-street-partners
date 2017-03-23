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
	<article>
	  <div class="date">02.18.17</div>
	  <h2>The Post and Courier</h2>
	  <p>An small blurb from the article can go here and here. An small blurb from the article can go here and here... <a href="#">READ MORE</a></p>
	</article>
</section>

<!-- ==== Section: Contact ==== -->
<section id="contact">
	<form>
		<input id="f-fullname" type="text" placeholder="Name" name="name" required>
		<input id="f-email" type="email" placeholder="Email" name="email" required>
		<textarea id="f-notes" type="message" name="message" placeholder="Notes" rows="10" cols="30"></textarea>
		<input id="f-submit" type="submit" value="submit">
	</form>
</section>

<!-- ==== Section: Footer ==== -->
<section id="footer">
  <div class="info">
		<div class="col-1">
		  <h1>Charlotte></h1>
			<address>
	      2820 Selwyn Avenue, Suite 500<br>
	      Charlotte, NC 28209<br>
	      704-334-3212
			</address>
		</div>
		<div class="col-2">
		  <h1></h1>
		  <address>
	      345 Freshfields Drive, Suite 210<br>
	      Johns Island, SC 29455<br>
	      843-768-9111	  	
		  </address>
		</div>
	</div>
	<div class="contact">
	  <div class="email">
	    <a href="mailto:info@southstreetpartners.com" alt="mail"><?php echo file_get_contents($GLOBALS['url']."/assets/email.svg"); ?></a>
	  </div>
	  <div class="terms">
	    <p>Private Policy</p>
	    <p>Terms of use</p>
	  </div>
	</div>
</section>



<?php

/**
*  Console Logs
* 
* echo "<script>console.log('".$GLOBALS['maps'].", outputs map');</script>";
*/  


?>

<?php get_footer();
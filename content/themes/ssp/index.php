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
  <p>South Street Partners is a boutique private real estate investment, management, and development firm focused on acquiring, managing, and strategically exiting opportunistic and value added real estate investments.</p>
	<div id="slider">
	  <div class="slide" id="0">
	  </div>
	</div>
</section>

<!-- ==== Section: About ==== -->
<section id="about">
	<p>South Street Partners has deployed over 400 million of capital into diverse asset classes and is Headquartered in Charlotte, NC and Charleston, Sc.</p>

	<!-- == Section: Directory == -->
	<section id="directory">
	  <div class="list">
	    <h2 id="0">Patrick Melton</h2>
	    <p id="0">Managing Partner</p>
	  </div>	
	</section>

	<!-- == Section: Biography == -->
	<section id="biography">
		<div class="arrow" id="left">
		  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
		</div>
		<div id="writeups">
		  <p>Patrick is responsible for all aspects of South Street Partners, including acquisitions, sales, development and operations. Previously, Patrick was a Partner at Discovery Land Company, a developer of high-end private golf communities. Patrick’s focus was acquisitions, finance, project management, and operations oversight across the entire portfolio of communities. Prior to joining Discovery, Patrick served in a number of roles at Terrabrook, a real estate development, investment, and management subsidiary of Westbrook Partners. During this time, Terrabrook was the largest owner and developer of master planned communities in the country. Prior to Terrabrook, Patrick began his real estate career in Washington, DC as a consultant with Ernst &amp; Young’s Kenneth Leventhal Real Estate Group and KPMG's Real Estate, Mortgage and Hospitality Group.</p>
		</div>
		<div class="arrow" id="left">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
		</div>
	</section>
</section>

<!-- ==== Section: Investments -->
<section id="investments">
	<p>Collectively, the South Street team has over forty years combined experience and has been involved in over $1.5 billion of real estate transactions with over $750 million in equity invested including $500 million of equity invested in the development, acquisition and management of fifteen luxury residential club developments.</p>
  
  <!-- == Section: Ongoing == -->
	<section id="ongoing">
		<article id="0">
		  <div class="content">
				<h1>Kiawah Island</h1>
				<p>World Renowned Island Community In South Carolina</p>
			</div>
		</article>
	</section>

  <!-- == Section: Realized == -->
	<section id="realized">
		<article id="0">
		  <div class="content">
				<h1>Kiawah Island</h1>
				<p>World Renowned Island Community In South Carolina</p>
			</div>
		</article>
	</section>
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
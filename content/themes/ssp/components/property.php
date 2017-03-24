<?php
  /**
  * Section =>  Property
  */ 

?>

<!-- == Section: Thumbs == -->
<section id="thumbs">
  <div class="thumb" id="th-0"></div>
  <div class="thumb" id="th-1"></div>
</section>

<!-- == Section: Details == -->
<section id="details">
  <article>
		<h1>Kaiwah Island</h1>
		<h2>World Renowned Island Community In South Carolina</h2>
		<div class="bullets">
		  <p class="point">Kiawah Island Club</p>
		  <p class="subpoint">1,700 Members</p>
		  <p class="subpoint">6 Facilities</p>
		</div>
		<div class="bullets">
		  <p class="point">Kiawah Island Club</p>
		  <p class="subpoint">1,700 Members</p>
		  <p class="subpoint">6 Facilities</p>
		</div>
  </article>

	<!-- == Section: Controls == -->
	<section id="controls">
	  <div class="visit">
		  <a href="">Visit</a>
	  </div>
		<div class="back">
		  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
		  <span id="back">Back</san>
		</div>
		<div class="next">
		  <span id="next">Next <span class="toggle">Investment</span></span>
		  <?php echo file_get_contents($GLOBALS['url'].'/assets/arrow.svg'); ?>
		</div>
	</section>

</section>

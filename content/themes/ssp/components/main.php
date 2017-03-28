<?php
  /**
  * Section =>  Main
  */ 

?>

<div id="tagline">
	<p>South Street Partners is a boutique private real estate investment, management, and development firm focused on acquiring, managing, and strategically exiting opportunistic and value added real estate investments.</p>
</div>
<div id="slider">
  <?php 
    $count = 0;
    $images = get_field('mn_fader');
    if ( $images ) : 
    	foreach ( $images as $image ) :
  ?>
  <div class="slide" id="sl-<?php echo $count; ?>"
    style="background-image: url(<?php echo $image['url']; ?>)"></div>
  <?php $count++;endforeach;endif; ?>
</div>
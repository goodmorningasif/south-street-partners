/**
*
* A is for Airplane
*
*/

$j = jQuery.noConflict();

$j(document).ready(function(){
   
  // initialize Fader
	faderAbout.fadeFxn();

  // trigger Hover on properties
	$j( '.investment' ).on('hover', function(){
		$j(this).find('.content').css('opacity','1');
	})

	$j( '.investment' ).on('mouseout', function(){
    $j(this).find('.content').css('opacity', '0');
	})
  
  // Initialize Investments 
  var loc = window.location;
  if ( loc.pathname.indexOf('investments') !== -1 ) {
  	var prop;
    getUrlParams('prop') ? prop = getUrlParams('prop') : prop = 0;
    console.log('gets params', prop)
	  queryProp(prop);
  }

});
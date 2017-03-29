/**
*
* A is for Airplane
*
*/

$j = jQuery.noConflict();

$j(document).ready(function(){
   
  // initialize Fader
	faderAbout.fadeFxn();
  
  // Initialize Investments 
  // var loc = window.location;
  // if ( loc.pathname.indexOf('investments') !== -1 ) {
  //   var prop;
  //   getUrlParams('prop') ? prop = getUrlParams('prop') : prop = 0;
  //   console.log('gets params', prop)
  //   queryProp(prop);
  // }
  
  // Scroll down feature
  $j('#nav-about').on('click', function(e) {
    e.preventDefault();
    scroll('about');
  });

  $j('#nav-investments').on('click', function(e) {
    e.preventDefault();
    scroll('investments');
  });

  $j('#nav-contact').on('click', function(e) {
    e.preventDefault();
    scroll('contact');
  });

  $j('#nav-press').on('click', function(e) {
    e.preventDefault();
    scroll('press');
  });


});
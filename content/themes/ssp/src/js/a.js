/**
*
* A is for Airplane
*
*/

$j = jQuery.noConflict();

$j(document).ready(function(){

  // initialize Fader
  faderAbout.fadeFxn();

  // if investments, start scroll monitoring
  var currentPath = window.location.pathname;
  if (currentPath.indexOf('investments') !== -1){

    var navBar = $j('.back').offset();

    $j(window).scroll(function(){

      var scrollPosition = $j(window).scrollTop();

      // Add sticky if scrollPosition under navBar div
      if ( scrollPosition >= navBar.top){
        $j('.back').attr('id', 'sticky');
        $j('.next').attr('id', 'sticky');
      } else if ( scrollPosition < navBar.top )  {
        $j('#sticky').removeAttr('id');
      }
    });
  }
  
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
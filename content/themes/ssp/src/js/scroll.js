/**
*
* ScrollJS
*
* Scrolling engine for in-page navigation
*/


var scroll = function(element) {
	var element = $j( '#' + element ).offset();
  $j( 'html, body' ).animate({
    "scrollTop": element.top
  }, 'slow', 'swing');
}


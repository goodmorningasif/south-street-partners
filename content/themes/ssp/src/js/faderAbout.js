/**
*
* FaderAbout
*
* Functionality for About image slider
*/

var faderAbout = Object.create(Fader);

faderAbout.parent = "#writeups";
faderAbout.child="#wr";
faderAbout.children=".writeup";
faderAbout.$ = jQuery.noConflict();
faderAbout.duration = 1000;

// faderAbout.start(500, function(){
// 	console.log('fader started', faderAbout.counter);
// });

// next & prev
$j('#left').on('click', function(){
  faderAbout.prev();
});

$j('.arrow#right').on('click', function(){
  faderAbout.next();
  
});

// hightlight listings
$j('.list').on('click', function(e){
  e.preventDefault();
  var current = $j(this).attr('id').split('-');
  faderAbout.counter = current[1];
  $j( '.list' ).children().removeAttr('style');
  $j(this).children().css('color', '#619F42');
  faderAbout.fadeFxn();
});


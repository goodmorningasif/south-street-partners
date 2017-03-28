/**
*
* FaderMain
*
* Functionality for main image slider
*/

var faderMain = Object.create(Fader);

faderMain.parent = "#slider";
faderMain.child="#sl";
faderMain.children=".slide";
faderMain.$ = jQuery.noConflict();
faderMain.duration = 1000;
faderMain.pauseTime = 8000;

faderMain.start(500, function(){
});

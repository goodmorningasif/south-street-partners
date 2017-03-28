/**
*
* Fader Prototype
*
* @param {parent}      :   Parent div wrapper that contains all wrapper
* @param {children}    :   Base name for child divs that contain each image
* @param {duration}    :   Interval between each slide animation
* @param {pauseTime}   :   Pause between runs of sliderFnc
*
*/

var Fader = {
  parent: '',
  child: '',
  children: '',
  duration: 2000,
  pauseTime: 10000, 
  counter: 0
}

// Main fader engine
Fader.fadeFxn = function(){
  var totalImages = this.$( this.parent ).children().length;

  if ( totalImages === 0  ) {
    return;
  } else if ( this.counter < totalImages && this.counter >= 0 ) {
    this.$( this.children ).css('opacity', '0');
    this.$( this.child + '-' + this.counter ).css('opacity', '1');
  } else if ( this.counter >= totalImages ) {
    this.counter = 0;
    this.fadeFxn();
  } else if ( this.counter < 0 ) {
    this.counter = totalImages;
    this.fadeFxn();
  } 
} 

// Autoplay 
Fader.autoPlay = function(callback){
  // Call Slide function
  this.counter++;
  this.fadeFxn();
  
  if ( callback ) {
    callback();
  }
  // Recursively call Autoplay
  setTimeout(this.autoPlay.bind(this, callback), this.pauseTime);
}

// Triggers Fader
Fader.start = function(delay, callback){
  if ( this.$( this.parent ).length ) {
    setTimeout(this.autoPlay.bind(this, callback), delay);
  }
}


// Next button
Fader.next = function(callback){
  this.counter++;
  this.fadeFxn();
}

Fader.prev = function(callback){
  this.counter--;
  this.fadeFxn();
}
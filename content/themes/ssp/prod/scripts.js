$j=jQuery.noConflict(),$j(document).ready(function(){if(faderAbout.fadeFxn(),window.location.pathname.indexOf("investments")!==-1){var t=$j(".back").offset();$j(window).scroll(function(){var e=$j(window).scrollTop();e>=t.top?($j(".back").attr("id","sticky"),$j(".next").attr("id","sticky")):e<t.top&&$j("#sticky").removeAttr("id")})}$j("#nav-about").on("click",function(t){t.preventDefault(),scroll("about")}),$j("#nav-investments").on("click",function(t){t.preventDefault(),scroll("investments")}),$j("#nav-contact").on("click",function(t){t.preventDefault(),scroll("contact")}),$j("#nav-press").on("click",function(t){t.preventDefault(),scroll("press")})});var Fader={parent:"",child:"",children:"",duration:2e3,pauseTime:1e4,counter:0};Fader.fadeFxn=function(){var t=this.$(this.parent).children().length;0!==t&&(this.counter<t&&this.counter>=0?(this.$(this.children).css("opacity","0"),this.$(this.child+"-"+this.counter).css("opacity","1")):this.counter>=t?(this.counter=0,this.fadeFxn()):this.counter<0&&(this.counter=t,this.fadeFxn()))},Fader.autoPlay=function(t){this.counter++,this.fadeFxn(),t&&t(),setTimeout(this.autoPlay.bind(this,t),this.pauseTime)},Fader.start=function(t,e){this.$(this.parent).length&&setTimeout(this.autoPlay.bind(this,e),t)},Fader.next=function(t){this.counter++,this.fadeFxn()},Fader.prev=function(t){this.counter--,this.fadeFxn()};var faderAbout=Object.create(Fader);faderAbout.parent="#writeups",faderAbout.child="#wr",faderAbout.children=".writeup",faderAbout.$=jQuery.noConflict(),faderAbout.duration=1e3,$j("#left").on("click",function(){faderAbout.prev()}),$j(".arrow#right").on("click",function(){faderAbout.next()}),$j(".list").on("click",function(t){t.preventDefault();var e=$j(this).attr("id").split("-");faderAbout.counter=e[1],$j(".list").children().removeAttr("style"),$j(this).children().css("color","#619F42"),faderAbout.fadeFxn()});var faderMain=Object.create(Fader);faderMain.parent="#slider",faderMain.child="#sl",faderMain.children=".slide",faderMain.$=jQuery.noConflict(),faderMain.duration=1e3,faderMain.pauseTime=8e3,faderMain.start(500,function(){});var getUrlParams=function(t){t=t.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var e=new RegExp("[\\?&]"+t+"=([^&#]*)"),n=e.exec(location.search);return null===n?"":decodeURIComponent(n[1].replace(/\+/g," "))},queryProp=function(t){console.log("queryProp running",t);var e={prop:t};$j.ajax({type:"POST",url:"../content/themes/ssp/investments_ajax.php",data:e,dataType:"json",encode:!0}).done(function(t){console.log("successfully submitted Property request",t)}).fail(function(t){console.log("error with Property submission",t)})},scroll=function(t){var t=$j("#"+t).offset();$j("html, body").animate({scrollTop:t.top},"slow","swing")};
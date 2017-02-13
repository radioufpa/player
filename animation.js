$(document).ready(function() {
  var br1 = $('.bar1, .bar9, .bar17');
  var br2 = $('.bar2, .bar10, .bar19');
  var br3 = $('.bar3, .bar11');
  var br4 = $('.bar4, .bar12, .bar18');
  var br5 = $('.bar5, .bar13');
  var br6 = $('.bar6, .bar14, .bar20');
  var br7 = $('.bar7, .bar15');
  var br8 = $('.bar8, .bar16');
  var stxt = $('.stream-txt p');
  
  // animation for bar 1
  function br1Anim(){
    $(br1).animate({
      height: "20%"
    }, 400).animate({
      height: "40%"
    }, 700).animate({
      height: "25%"
    }, 400).animate({
      height: "60%"
    }, 400).animate({
      height: "40%"
    }, 600).animate({
      height: "75%"
    }, 400).animate({
      height: "40%"
    }, 200).animate({
      height: "60%"
    }, 400, function() {
      br1Anim();
    });
  }
  
  // animation for bar 2
  function br2Anim() {
    $(br2).animate({
      height: "60%"
    }, 300).animate({
      height: "50%"
    }, 800).animate({
      height: "30%"
    }, 150).animate({
      height: "50%"
    }, 150).animate({
      height: "25%"
    }, 150).animate({
      height: "35%"
    }, 150).animate({
      height: "20%"
    }, 150, function() {
      br2Anim()
    });
  }
  
  // animation for bar 3
  function br3Anim() {
    $(br3).animate({
      height: "10%"
    }, 200).animate({
      height: "70%"
    }, 400).animate({
      height: "25%"
    }, 200).animate({
      height: "35%"
    }, 500).animate({
      height: "25%"
    }, 250, function() {
      br3Anim();
    });
  }
  
  // animation for bar 4
  function br4Anim() {
    $(br4).animate({
      height: "30%"
    }, 175).animate({
      height: "45%"
    }, 175).animate({
      height: "10%"
    }, 200).animate({
      height: "30%"
    }, 200).animate({
      height: "20%"
    }, 200).animate({
      height: "50%"
    }, 225).animate({
      height: "35%"
    }, 200).animate({
      height: "45%"
    }, 200, function() {
      br4Anim();
    });
  }

    // animation for the 5 bar
  function br5Anim(){
    $(br5).animate({
      height: "10%"
    }, 200).animate({
      height: "30%"
    }, 700).animate({
      height: "15%"
    }, 200).animate({
      height: "50%"
    }, 200).animate({
      height: "30%"
    }, 200).animate({
      height: "45%"
    }, 200).animate({
      height: "30%"
    }, 200).animate({
      height: "50%"
    }, 200, function() {
      br5Anim();
    });
  }

    // animation for bar 6
  function br6Anim() {
    $(br6).animate({
      height: "10%"
    }, 300).animate({
      height: "50%"
    }, 800).animate({
      height: "30%"
    }, 400).animate({
      height: "50%"
    }, 600).animate({
      height: "25%"
    }, 300).animate({
      height: "35%"
    }, 400).animate({
      height: "20%"
    }, 200, function() {
      br6Anim()
    });
  }

    // animation for bar 7
  function br7Anim() {
    $(br7).animate({
      height: "10%"
    }, 200).animate({
      height: "50%"
    }, 400).animate({
      height: "25%"
    }, 200).animate({
      height: "35%"
    }, 200).animate({
      height: "25%"
    }, 200, function() {
      br7Anim();
    });
  }
  
  // animation for bar 8
  function br8Anim() {
    $(br8).animate({
      height: "10%"
    }, 600).animate({
      height: "45%"
    }, 175).animate({
      height: "10%"
    }, 200).animate({
      height: "30%"
    }, 200).animate({
      height: "20%"
    }, 200).animate({
      height: "50%"
    }, 225).animate({
      height: "35%"
    }, 200).animate({
      height: "45%"
    }, 200, function() {
      br8Anim();
    });
  }

  // Text color animation
  function txtAnim() {
    $(stxt).animate({
      color: "#fff"
    }, 1500).animate({
      color: "#d50000"
    }, 1500, function() {
      txtAnim();
    });
  }
   
  br1Anim();
  br2Anim();
  br3Anim();
  br4Anim();
  br5Anim();
  br6Anim();
  br7Anim();
  br8Anim();
  txtAnim();
  
});
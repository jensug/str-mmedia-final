
var path = window.location.pathname;

if(path == "/work/" ||	path == "/contact/"){



  $(window).on("load", function(){

    $(".padding").addClass("opentransition");
  
  });
  
  //title
  
  $(".title").click(function(){
    $(".padding").addClass("closetransition");
    setTimeout(function(){window.location = "/"}, 500);
  });
  
  
  //links
  
  $("#home").click(function(){
    $(".padding").addClass("closetransition");
    setTimeout(function(){window.location = "/"}, 500);
  });
  
  $("#work").click(function(){
    $(".padding").addClass("closetransition");
    setTimeout(function(){window.location = "work"}, 500);
  });
  
  $("#contact").click(function(){
    $(".padding").addClass("closetransition");
    setTimeout(function(){window.location = "contact"}, 500);
  });
  $(".more_button").click(function(){
    $(".padding").addClass("closetransition");
    setTimeout(function(){window.location = "work"}, 500);
  });
  
  

}else{



$(window).on("load", function(){

  $(".padding").addClass("opentransition");
  $(".front_page_wrapper").addClass("opentransition");

});

  //title

$(".title").click(function(){
  $(".padding").addClass("closetransition");
  $(".front_page_wrapper").addClass("closetransition");
  setTimeout(function(){window.location = "/"}, 500);
});


//links

$("#home").click(function(){
  $(".padding").addClass("closetransition");
  $(".front_page_wrapper").addClass("closetransition");
  setTimeout(function(){window.location = "/"}, 500);
});

$("#work").click(function(){
  $(".padding").addClass("closetransition");
  $(".front_page_wrapper").addClass("closetransition");
  setTimeout(function(){window.location = "work"}, 500);
});

$("#contact").click(function(){
  $(".padding").addClass("closetransition");
  $(".front_page_wrapper").addClass("closetransition");
  setTimeout(function(){window.location = "contact"}, 500);
});
$(".more_button").click(function(){
  $(".padding").addClass("closetransition");
  $(".front_page_wrapper").addClass("closetransition");
  setTimeout(function(){window.location = "work"}, 500);
});


    //index video player
    var topp_video_thumb = document.querySelector('.topp_video_thumb');
    var topp_video_video = document.querySelector('.topp_video_video');


    topp_video_video.omclick = function(){
      window.scrollTo({
        top: 250,
        behavior: 'smooth'
      });
    }

    var video_gallery_video = document.getElementsByClassName("video_gallery_video");

    for (var k=0; k<video_gallery_video.length; k++){
      video_gallery_video[k].onclick = function(){

        window.scrollTo({
          top: 250,
          behavior: 'smooth'
        });
      }
    }

}

// Detect request animation frame
var scroll = window.requestAnimationFrame ||
             // IE Fallback
             function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 

function loop() {

  elementsToShow.forEach(function (element) {
    if (isElementInViewport(element)) {
      element.classList.add('is-visible');
    } else {

      //unloads 
      //element.classList.remove('is-visible');
    }
  });

  scroll(loop);
}

// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
  // special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}



var header = document.querySelector(".myHeader");
var sticky = header.offsetTop;

function stickyFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
$(document).ready(function () {
  $('#slider-items').slick({
     infinite: true,
     dots: true,
     slidesToShow: 1,
     slidesToScroll: 1,
     vertical: true,
     arrows: false,
     verticalSwiping: true,
     aitForAnimate: true,
     autoplay: true,
     responsive: [
{
  breakpoint: 767,
  settings: {
    dots: false,
  }
}
]
  });
  $("#toggle-btn").click(function(){
     $(".side-menu").addClass("active");
     $(".side-menu").addClass("active");
     

  });
  $(".cross").click(function(){        
     $(".side-menu").removeClass("active"); 
  });
});

$(function() {
  $('.popup-youtube').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
  });
});

window.onscroll = function() {stickyFunction()};


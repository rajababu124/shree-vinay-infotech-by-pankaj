document.addEventListener("DOMContentLoaded", function(){
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
          element.addEventListener('click', function (e) {
            e.stopPropagation();
          });
        })
    }); 
  // DOMContentLoaded  end


$('.blog-slider .slider').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    dots:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
          },
        500:{
            items:2
          },
        767:{
            items:3
          },
        1000:{
            items:3
        }
    }
})


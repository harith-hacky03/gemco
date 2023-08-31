$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});$(document).ready(function() {
    $('.client').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 300,
        draggable: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,       dots: false,
        arrows: true,
        responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
                breakpoint: 575,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
            }
        ]
    });
});
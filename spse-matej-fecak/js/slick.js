$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: $('.prev-arrow') ,
        nextArrow: $('.next-arrow') , 
        dots: true,
        appendDots: $('.custom-dots')
    });

    $('.gallery-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000, 
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false
    });
});
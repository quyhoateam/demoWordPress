var owl = $("#owl-carousel");
owl.owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
$(".next-fl").click(function(){
    owl.trigger('next.owl.carousel');
})
$(".prev-fl").click(function(){
    owl.trigger('prev.owl.carousel', [300]);
})

var owl2 = $("#owl-carousel2");
owl2.owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
$(".next-lf").click(function(){
    owl2.trigger('next.owl.carousel');
})
$(".prev-lf").click(function(){
    owl2.trigger('prev.owl.carousel', [300]);
})
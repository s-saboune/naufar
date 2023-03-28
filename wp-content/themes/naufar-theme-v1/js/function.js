$(document).ready(function() {
    $(".top-carousel").owlCarousel({
        autoplay: !1,
        nav: !0,
        loop: !0,
		rtl:true,
        margin:0,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            }
        }
    })
});

$(document).ready(function() {
    $(".banner-slider").owlCarousel({
         autoplay: true,
        nav: !0,
        loop: true,
        margin:0,
		rtl:true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    })
});
$(document).ready(function() {
						   
	 $(".chaticon").click(function(){
    $(".chatboxinner").toggle();
  });					   

});
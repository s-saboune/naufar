$( document ).ready(function() {
    $(".nav-menu").parent().addClass("nav-menu-container");
    $('ul.nav-menu > li').addClass('parent-nav-child');
    $('.parent-nav-child.current-menu-item').addClass('active');
    $('.parent-nav-child .current-menu-item').parents('.parent-nav-child').addClass('active');;
    $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() >= 1024) {
            $(".site-header").mouseenter( function () {
                $(".site-header").addClass("active")
            } ).mouseleave( function () {
                $(".site-header,.sub-menu").removeClass("active");
                $('.caret-btn').removeClass("open");
            } );
        } else {
            $(".mobile-toggle").click( function () {
                $(".site-header").toggleClass("active");
            } );
        }
    }).resize();
    if ($('.menu-item').hasClass("menu-item-has-children")) {
        $('.menu-item-has-children').append( "<button class='caret-btn'></button>" );
    }
    $('.menu-item').hover(function(e){
        $(this).children('.sub-menu').toggleClass("active");
        $(this).children('.caret-btn').toggleClass("open");
    });



});


var body = $('html,body');
var stickyBody=$('body');
var fixedHolder = $('.fixed-holder');
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
var stickyMenu = function () {
                    var fixedHolder = $('.fixed-holder');
                    var menuOffsetLeft, menu;

                    var windowWidth = $(window).width();
                    menu = $('.navigation-site');
                    var leftSide = $('.left-side');
                    var menuHolder = $('.navigation-holder');

                    var origOffsetY = menuHolder.offsetTop;

                    if ($(window).scrollTop() >= origOffsetY && windowWidth > 1225)
                        body.addClass('sticky');
                    else if (windowWidth < 1225)
                        fixedHolder.addClass('sticky-holder');

                    function onScroll(e) {
                        if ($(window).scrollTop() >= origOffsetY && windowWidth > 1225) {
                            body.addClass('sticky');
                        } else {
                            body.removeClass('sticky');
                            menuHolder.css('left','');
                        }

                    }
                    $(window).bind('mousewheel DOMMouseScroll', onScroll).bind('scroll', onScroll);


    };
var contentResize = function() {
    var windowWidth = $(window).width();
    var menuHolder = $('.navigation-holder');

    var origOffsetY = menuHolder.offsetTop;

    if (windowWidth < 1225) {
        body.removeClass('sticky');
        fixedHolder.addClass('sticky-holder');
    } else {
        fixedHolder.removeClass('sticky-holder');
    }
    if ($(window).scrollTop() >= origOffsetY && $(window).width() > 1225)
        body.addClass('sticky');
    else if (windowWidth < 1225)
        body.addClass('sticky-holder');
};

$(document).ready(function(){
    stickyMenu();
    contentResize();

});
$(window).resize(function() {
    stickyMenu();
    contentResize();
    console.log(1);
});

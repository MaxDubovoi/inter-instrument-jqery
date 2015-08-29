var body = $('html, body');
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
            if(!isMobile.any()) {


                    menu = document.querySelector('.navigation-site');
                    var leftSide = document.querySelector('.left-side');
                    var menuHolder = document.querySelector('.navigation-holder');

                    var origOffsetY = menuHolder.offsetTop;

                    if ($(window).scrollTop() >= origOffsetY && window.innerWidth > 1225)
                        body.addClass('sticky');
                    else if (window.innerWidth < 1225)
                        fixedHolder.addClass('sticky-holder');

                    function onScroll(e) {
                        if ($(window).scrollTop() >= origOffsetY && window.innerWidth > 1225) {
                            body.addClass('sticky');
                        } else {
                            body.removeClass('sticky');
                            menuHolder.style.left = '';
                        }

                    }
                    $(window).bind('mousewheel DOMMouseScroll', onScroll).bind('scroll', onScroll);
            }
    };
var contentResize = function() {
    var menuHolder = document.querySelector('.navigation-holder');

    var origOffsetY = menuHolder.offsetTop;

    if ($(window).width() < 1225) {
        body.removeClass('sticky');
        fixedHolder.addClass('sticky-holder');
    } else {
        fixedHolder.removeClass('sticky-holder');
    }
    if ($(window).scrollTop() >= origOffsetY && window.innerWidth > 1225)
        body.addClass('sticky');
    else if (window.innerWidth < 1225)
        fixedHolder.addClass('sticky-holder');
};

$(document).ready(function(){
    stickyMenu();
    contentResize();

});
$(document).load(function(){

});
$(window).resize(function() {
    stickyMenu();
    contentResize();
    console.log(1);
});

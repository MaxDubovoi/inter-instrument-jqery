var stickyMenu = function ($timeout) {
    return {
        link     : function (scope, element, attrs) {
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

            var menuOffsetLeft, menu;
            if(!isMobile.any()) {
                $timeout(function(){
                    menu = document.querySelector('.navigation-site');
                    var leftSide = document.querySelector('.left-side');
                    var menuHolder = document.querySelector('.navigation-holder');
                    var fixedHolder = document.querySelector('.fixed-holder');
                    var body = document.getElementsByTagName('body')[0];

                    var origOffsetY = menuHolder.offsetTop;

                    if (window.scrollY >= origOffsetY && window.innerWidth > 1225)
                        body.classList.add('sticky');
                    else if (window.innerWidth < 1225)
                        fixedHolder.classList.add('sticky-holder');

                    function onScroll(e) {
                        if (window.scrollY >= origOffsetY && window.innerWidth > 1225) {
                            body.classList.add('sticky');
                        } else {
                            body.classList.remove('sticky');
                            menuHolder.style.left = '';
                        }

                    }

                    document.addEventListener('scroll', onScroll);

                    window.onresize = function () {
                        if (window.innerWidth < 1225) {
                            body.classList.remove('sticky');
                            fixedHolder.classList.add('sticky-holder');
                        } else {
                            fixedHolder.classList.remove('sticky-holder');
                        }
                    }
                }, 100);
            }

        }
    }
};
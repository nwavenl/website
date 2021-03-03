//hamburger menu - aub niet zomaar aan komen :)
(function () {
    $('.menu-wrapper').on('click', function() {
        $('.hamburger-menu').toggleClass('animate');
        $('.mobile-nav').toggleClass('active');
        $('body').toggleClass('scroll');
        $('#mobile-nav').addClass('opened')
    })
})();


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('nav.main').addClass('scroll');
    } else {
        $('nav.main').removeClass('scroll');
    }
}

////cookies


//accept cookies
(function () {
    $('#cookieAccept').on('click', function() {
        document.cookie  = "cookieAccept=1;"
        $('.cookies-popup').addClass('hide')
    });
})();

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
};

var cookieCurrentStatus = getCookie("cookieAccept");

//remove cookie accept if cookies are acceptet

(function () {
    if (cookieCurrentStatus === "1") {
        $('.cookies-popup').addClass('hide')
    }
})();

//cookie popup - offerte


//end cookies


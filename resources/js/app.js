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
        document.cookieStatus = "cookieAccept=1; expires=Thu, 18 Dec 2022 12:00:00 UTC;"
        $('.cookies-popup').addClass('hide')
    });
})();

var cookieCurrentStatus = document.cookieStatus;

//remove cookie accept if cookies are acceptet

(function () {
    if (cookieCurrentStatus === "cookieAccept=1; expires=Thu, 18 Dec 2022 12:00:00 UTC;") {
        console.log('werk')
    } else {
        console.log('werkt niet')
        console.log(cookieCurrentStatus)
    }
})();

//cookie popup - offerte


//end cookies


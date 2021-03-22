import './cookies'


// hamburger menu - aub niet zomaar aan komen :)
(function () {
    $('.menu-wrapper').on('click', function () {
        $('.hamburger-menu').toggleClass('animate');
        $('.mobile-nav').toggleClass('active');
        $('body').toggleClass('scroll');
        $('#mobile-nav').addClass('opened')
    })
})();

// nav onscroll function
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('nav.main').addClass('scroll');
    } else {
        $('nav.main').removeClass('scroll');
    }
}





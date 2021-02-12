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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FLC3YLEV84"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FLC3YLEV84');
</script>

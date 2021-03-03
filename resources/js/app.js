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

////cookies function

//make cookie save timer (14 days)
var cookieTimer = new Date();

// add a day
cookieTimer.setDate(cookieTimer.getDate() + 14);

//accept cookies
(function () {
    $('#cookieAccept').on('click', function() {
        document.cookie  = "cookieAccept=1;"
        $('.cookies-popup').addClass('hide')
    });
})();
//function to call cookie type
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

//remove cookie popup if cookies are accepted

(function () {
    if (cookieCurrentStatus === "1") {
        $('.cookies-popup').addClass('hide')
    }
})();

//cookie popup - offerte
//makes cookie if all cookies (cookieAccept) is accepted
$(document).ready(function(){
    $("#close-popup").click(function() {
        $('.popup').fadeOut("slow");
        $('body').removeClass("scroll");
        if (cookieCurrentStatus === "1") {
            document.cookie = "popupClosed=1; expires=" + cookieTimer + ";"; //moet nog getest worden
        }
    });
});

var cookieStatusOfferte = getCookie("popupClosed");

(function () {
    if (cookieStatusOfferte == "1") {
        $('body').removeClass("scroll");
        $('.popup').addClass("hide")
    }
})();

////end cookies functions

